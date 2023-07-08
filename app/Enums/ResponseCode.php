<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ResponseCode extends Enum
{
    public const SUCCESS = 200;

    public const BAD_REQUEST = 400;

    public const UNAUTHORIZE = 401;

    public const FORBIDDEN = 403;

    public const NOT_FOUND = 404;

    public const ERROR_SERVER = 500;

    public const ERROR_VALIDATION = 422;

    public const FAILED_DATA = 200;

    public const SUCCESS_DATA = 204;
}
