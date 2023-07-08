<?php

namespace App\Http\Controllers\Api;

use App\Enums\ResponseCode;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends ApiController
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
            'password' => 'required|min:6|max:16'
        ]);

        if ($validator->fails())
            return $this->failure('Validation error', ResponseCode::ERROR_VALIDATION, $validator->messages());
        try {
            $credentials = $request->only(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return $this->failure('Unauthorized', ResponseCode::UNAUTHORIZE);
            }
            $user = Auth::user();
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return $this->success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return $this->error($error, 'Error in Login', ResponseCode::ERROR_SERVER);
        }
    }
}