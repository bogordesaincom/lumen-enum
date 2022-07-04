<?php

namespace App\Enums;

use MadWeb\Enum\Enum;

/**
 * @method static MyEnumValuelessArguments SMALL()
 * @method static MyEnumValuelessArguments MEDIUM()
 * @method static MyEnumValuelessArguments LARGE()
 */
final class MyEnumValuelessArguments extends Enum
{
    const __default = self::SMALL;

    const SMALL = 0;
    const MEDIUM = 1;
    const LARGE = 2;
}
