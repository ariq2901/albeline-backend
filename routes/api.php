<?php

use App\Http\Controllers\ForgotPasswordAPIController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ResetPasswordAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload-image', [ImageController::class, 'uploadDemo']);

Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/product/{slug}/id/{id}', 'App\Http\Controllers\ProductController@show');
Route::post('/search/products', 'App\Http\Controllers\SearchController@search');
Route::get('/category', 'App\Http\Controllers\CategoryController@index');
Route::get('/category/{id}', 'App\Http\Controllers\ProductController@byCategory');

// Custom Rate Limiter by Throttle Middleware -> referensi: stackoverflow
Route::middleware('throttle:1000, 1')->group(function() {
    Route::get('/image/{id}', 'App\Http\Controllers\ImageController@show');
    Route::get('/banners/{banner}', 'App\Http\Controllers\ImageController@banner');
});


Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::get('email/verify/{id}', 'App\Http\Controllers\VerificationApiController@verify')->name('verificationapi.verify');
Route::post('email/resend', 'App\Http\Controllers\VerificationApiController@resend')->name('verificationapi.resend');

Route::get('/password/reset/{token}', [ResetPasswordAPIController::class, 'showResetForm'])->name('password.reset'); //TODO sementara, akan dihapus
Route::post('/password/reset', [ResetPasswordAPIController::class, 'reset']);
Route::post('/password/email', [ForgotPasswordAPIController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/store/{id}', 'App\Http\Controllers\StoreController@show');

//^ Raja Ongkir
Route::group(['middleware' => 'cors'], function() {
    Route::get('/cities', 'App\Http\Controllers\RajaOngkirController@getKota');
    Route::get('/provinces', 'App\Http\Controllers\RajaOngkirController@getProvinces');
    Route::post('/cost', 'App\Http\Controllers\RajaOngkirController@getCost');
});

//^ Auth
Route::group(['middleware' => 'auth:api', 'CheckVerified'], function() {
    Route::get('/user-detail', 'App\Http\Controllers\UserController@userDetail');
    Route::get('/logout', 'App\Http\Controllers\UserController@logout');
    Route::post('/user-update', 'App\Http\Controllers\UserController@update');
    Route::post('/update-avatar', 'App\Http\Controllers\UserController@updateAvatar');
});

//^ Store
Route::group(['middleware' => 'auth:api', 'CheckVerified'], function() {
    Route::post('/open-store', 'App\Http\Controllers\StoreController@openStore');
    Route::put('/update-store/{id}', 'App\Http\Controllers\StoreController@update');
    Route::delete('/delete-store/{id}', 'App\Http\Controllers\StoreController@delete');
    Route::get('/store-reviews', 'App\Http\Controllers\StoreController@getRating');
    Route::get('/check-store', 'App\Http\Controllers\StoreController@checkStore');
    Route::get('/store-products', 'App\Http\Controllers\StoreController@getProducts');
    Route::get('/seller/store/{id}', 'App\Http\Controllers\StoreController@getSellerStore');

    Route::get('/orders/{status}', 'App\Http\Controllers\StoreController@trackOrder');
    Route::get('/handle-order/{id}/status/{nextstatus}', 'App\Http\Controllers\StoreController@handleOrder');
});

//^ Product
Route::group(['middleware' => 'auth:api', 'CheckVerified'], function() {
    Route::post('/create-product', 'App\Http\Controllers\ProductController@storeProduct')->name('create-product');
    Route::post('/store-image/{id}', 'App\Http\Controllers\ProductController@storeImage');
    Route::post('/update-product/{id}', 'App\Http\Controllers\ProductController@update');
    Route::delete('/delete-product/{id}', 'App\Http\Controllers\ProductController@destroy');
});

//^Category
Route::group(['middleware' => ['auth:api', 'role:admin']], function() {
    Route::post('/create-category', 'App\Http\Controllers\CategoryController@store');
    Route::post('/update-category/{id}', 'App\Http\Controllers\CategoryController@update');
    Route::delete('/delete-category/{id}', 'App\Http\Controllers\CategoryController@destroy');
});

//^ Buyer
Route::group(['middleware' => 'auth:api', 'CheckVerified'], function() {
    Route::get('/get-cart', 'App\Http\Controllers\BuyerController@getCart');
    Route::post('/update-cart', 'App\Http\Controllers\BuyerController@addCart');
    Route::post('/remove-cart', 'App\Http\Controllers\BuyerController@removeCart');

    Route::post('/order', 'App\Http\Controllers\BuyerController@makeOrder');

    Route::get('/track/{status}', 'App\Http\Controllers\BuyerController@trackPackage');
    Route::get('/arrived-order/{id}', 'App\Http\Controllers\BuyerController@handleArrivedOrder');
    Route::post('/add-review', 'App\Http\Controllers\BuyerController@addReview');

    Route::get('/get-wishlist', 'App\Http\Controllers\BuyerController@getWishlist');
    Route::get('/add-wishlist/{id}', 'App\Http\Controllers\BuyerController@addWishlist');
});