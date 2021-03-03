<?php

namespace App\Http\Controllers;

use App\StatusCode;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\This;

class ResetPasswordAPIController extends Controller
{
    use ResetsPasswords;

    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8'],
        ]);

        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($request, $response)
                    : $this->sendResetFailedResponse($request, $response);
    }

    protected function resetPassword($user, $password)
    {
        $this->setUserPassword($user, $password);
        $user->save();

        event(new PasswordReset($user));
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return response()->success(trans($response));
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response()->error(trans($response), StatusCode::UNPROCESSABLE_ENTITY);
    }
}
