<?php

namespace App\Http\Controllers;

use App\Enums\ResponseCode;
use App\Traits\RespondHelper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    use RespondHelper;

    public function error($error, $message, $status)
    {
        Log::error($error);
        $statusCode = empty($status) ? ResponseCode::ERROR_SERVER : $status;
        $messageCode = empty($message) ? __('validation.sever_error') : $message;
        if (App::isLocal())
            return $this->failure($messageCode, $statusCode, $error);
        return $this->failure($messageCode, $statusCode);
    }
}