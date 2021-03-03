<?php

namespace App\Http\Controllers;

use App\StatusCode;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordAPIController extends Controller
{
    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->error($validator->getMessageBag(), StatusCode::UNPROCESSABLE_ENTITY);
        }

        $response = $this->broker()->sendResetLink($this->credentials($request));

        return $response == Password::RESET_LINK_SENT
        ? $this->sendResetLinkResponse($request, $response)
        : $this->sendResetLinkFailedResponse($request, $response);
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response()->success(trans($response), StatusCode::OK);
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response()->error(trans($response), StatusCode::UNPROCESSABLE_ENTITY);
    }
}
