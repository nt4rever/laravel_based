<?php

namespace App\Traits;

use App\Enums\ResponseCode;

trait RespondHelper
{
    protected function success($data = [], $status = ResponseCode::SUCCESS)
    {
        return response([
            'success' => true,
            'data' => $data
        ], $status);
    }

    protected function failure($message, $status = ResponseCode::ERROR_SERVER, $detailMessage = null)
    {
        $responseData = [
            'success' => false,
            'message' => $message,
        ];
        if ($detailMessage)
            $responseData['detailMessage'] = $detailMessage;
        return response($responseData, $status);
    }
}