<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    public const ADMIN = 0;
    public const MANAGER = 1;
    public const STAFF = 2;
}
