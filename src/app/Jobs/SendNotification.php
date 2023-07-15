<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    private $fcmToken;

    private $isNotice;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $fcmToken, $isNotice)
    {
        $this->data = $data;
        $this->fcmToken = $fcmToken;
        $this->isNotice = $isNotice;
    }

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle()
    {
        $body = [
            "registration_ids" => $this->fcmToken,
            "data" => [
                "data" => $this->data
            ]
        ];

        if ($this->isNotice) {
            $body["notification"] = [
                "title" => 'laravel_based',
                "body" => "message",
                // "body" => $this->data->message,
                "sound" => "default",
            ];
        }

        $result = false;

        try {
            $client = new Client();
            $response = $client->request(
                'POST',
                config('firebase.url'),
                [
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Authorization' => 'key=' . config('firebase.server_key'),
                    ],
                    'json' => $body,
                    'timeout' => 300,
                ],
            );
            $result = $response->getStatusCode() == Response::HTTP_OK;
            \Log::info($response->getStatusCode());
        } catch (\Throwable $th) {
            \Log::debug($th);
        }
        return $result;
    }
}
