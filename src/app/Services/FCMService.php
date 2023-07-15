<?php

namespace App\Services;

use App\Jobs\SendNotification;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Laravel\Sanctum\PersonalAccessToken;


class FCMService
{
    use DispatchesJobs;

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function sendNotification($data, $userId, $isNotice = true)
    {
        try {
            $user = $this->userRepository->findById($userId);
            if (!isset($user))
                return;
            $fcmTokens = $user->tokens()->whereNotNull('device_token')->get();
            $activeFcmTokens = collect();
            $fcmTokens->each(function (PersonalAccessToken $item) use($activeFcmTokens) {
                if ($item->created_at->addMinutes(
                    config('sanctum.expiration')
                )->gte(now()))
                $activeFcmTokens->push($item->device_token);
            });
            $fcmToken = $activeFcmTokens->unique()->all();
            if (empty($fcmToken)) return;
            $this->dispatch(new SendNotification($data, $fcmToken, $isNotice));
        } catch (\Throwable $th) {
            $error = 'Send notification error: ' . $th->getMessage();
            \Log::error($error);
        }
    }
}
