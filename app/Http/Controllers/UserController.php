<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateImage;
use App\Http\Requests\UpdateUser;
use App\Http\Resources\UserResource;
use App\Models\Image;
use App\Models\User;
use App\StatusCode;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Avatar;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIn;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
	{
        if(!request('hp')) {
            if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $user = Auth::user();
                $data['token'] = $user->createToken('nApp')->accessToken;
                return response()->success(['token' => $data]);
            } else {
                return response()->error(['error' => 'Unauthorized'], StatusCode::UNAUTHORIZED);
            }
        } elseif (!request('email')) {
            if(Auth::attempt(['hp' => request('hp'), 'password' => request('password')])) {
                $user = Auth::user();
                $data['token'] = $user->createToken('nApp')->accessToken;
                return response()->success(['token' => $data]);
            } else {
                return response()->error(['error' => 'Unauthorized'], StatusCode::UNAUTHORIZED);
            }
        }
	}
	
	public function register(Request $request)
	{
        if($request['email']) {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]);
        
            if($validator->fails()) {
                return response()->error(['error' => $validator->errors()]);
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            
            $user->assignRole('pembeli');
            
            //? Register Cart
            $user->cart()->create(['user_id' => $user->id]);
            
            //? Fire an Email Verification to email
            event(new Registered($user));

            //? Create Avatar Image
            $avatar = Avatar::create($user->username)->getImageObject()->encode('png');
            Storage::put('public/images/avatars/' . $user->id . '/avatar.png', (string) $avatar);
            $user->image()->create(['path' => "avatars/$user->id/avatar.png", 'thumbnail' => true]);
            if($user) {
                return response()->success('Verifikasi akun email yang telah kami kirim ke mailbox anda');
            }
            return response()->error("An Error Occured");

        } else {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'hp' => 'required',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]);

            if($validator->fails()) {
                return response()->error(['error' => $validator->errors()]);
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            
            $user->assignRole('pembeli');

            //? Register Cart
            $user->cart()->create(['user_id' => $user->id]);
            
            //? Create Avatar Image
            $avatar = Avatar::create($user->username)->getImageObject()->encode('png');
            Storage::put('public/images/avatars/' . $user->id . '/avatar.png', (string) $avatar);
            $user->image()->create(['path' => "avatars/$user->id/avatar.png", 'thumbnail' => true]);
            if($user) {
                return response()->success('Successfully added the account');
            }
            return response()->error("An error occured");
        }
    }

    public function logout()
    {
        try {
            Auth::user()->token()->revoke();
        } catch(\Throwable $th) {
            return response()->error('Failed to logout', StatusCode::INTERNAL_SERVER_ERROR);
        }
        return response()->successWithMessage("Success to Logout");
    }

    public function userDetail()
    {
        return response()->successWithKey(new UserResource(Auth::user()), 'user');
    }

    public function update(UpdateUser $request)
    {
        try {
            $user = User::findOrFail($request->user()->id);
        } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            return response()->error('User is not found', StatusCode::NOT_FOUND);
        }
        
        $user->fill($request->validated());
        $user->update();
        return response()->successWithKey(new UserResource($user), 'user');
    }
    
    public function updateAvatar(UpdateImage $request)
    {
        try {
            $user = User::findOrFail($request->user()->id);
        } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            return response()->error('User is not found', StatusCode::NOT_FOUND);
        }
        
        if($request->hasFile('image')) {
            $old_path = $user->image->path;
            Storage::disk('local')->delete("public/images/$old_path");

            $input = $request->validated();
            $compressed_name = preg_replace('/\s+/', '_', $user->username);
            $final_name = time() . "_" . strtolower($compressed_name) . ".webp";
            $folder = 'avatars';
            $path = $folder . "/" . $user->id . "/" . $final_name;
            $image = ImageIn::make($request->file('image'))->encode('webp', 75)->resize(64, 64, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $user->image()->update(['path' => $path]);
            Storage::put("public/images/$path", $image);
        }

        return response()->successWithKey(new UserResource($user), 'user');
    }
}
