<?php

namespace App\Enums;

use Bogordesain\Enum\Enum;

/**
 * @method static MyEnumValuedArguments SMALL()
 * @method static MyEnumValuedArguments MEDIUM()
 * @method static MyEnumValuedArguments LARGE()
 */
final class MyEnumValuedArguments extends Enum
{
    const __default = self::SMALL;

    const SMALL = 's';
    const MEDIUM = 'm';
    const LARGE = 'l';
}
