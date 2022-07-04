<?php

namespace App\Enums;

use MadWeb\Enum\Enum;

/**
 * @method static MyEnumNoArguments FOO()
 * @method static MyEnumNoArguments BAR()
 * @method static MyEnumNoArguments BAZ()
 */
final class MyEnumNoArguments extends Enum
{
    const __default = self::FOO;

    const FOO = 0;
    const BAR = 1;
    const BAZ = 2;
}
