<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Enums\Status;
use App\Enums\ResponseCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;

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
            // \Log::info($user);
            if ($user->status == Status::INACTIVE)
                throw new \Exception();
            $expiresAt = now()->addMinutes(1440);

            $tokenResult = $user->createToken('authToken', [$user->type], $expiresAt)->plainTextToken;
            return $this->success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'expires_at' => $expiresAt
            ]);
        } catch (\Exception $error) {
            return $this->error($error, 'Error in Login', ResponseCode::ERROR_SERVER);
        }
    }

    public function logout(Request $request)
    {
        try {
            // revoke current accessToken in this request incoming
            // $request->user()->currentAccessToken()->delete();
            // revoke all accessToke in Database
            Auth::user()->tokens()->delete();
            return $this->success(null, ResponseCode::SUCCESS_DATA);
        } catch (\Throwable $th) {
            return $this->error($th, $th->getMessage(), $th->getCode());
        }
    }
}