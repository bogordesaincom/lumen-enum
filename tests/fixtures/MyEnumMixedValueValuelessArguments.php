<?php

namespace App\Enums;

use MadWeb\Enum\Enum;

/**
 * @method static MyEnumMixedValueValuelessArguments WITH1()
 * @method static MyEnumMixedValueValuelessArguments WITHOUT1()
 * @method static MyEnumMixedValueValuelessArguments WITH2()
 * @method static MyEnumMixedValueValuelessArguments WITHOUT2()
 * @method static MyEnumMixedValueValuelessArguments WITHOUT3()
 * @method static MyEnumMixedValueValuelessArguments WITH3()
 */
final class MyEnumMixedValueValuelessArguments extends Enum
{
    const __default = self::WITH1;

    const WITH1 = 'with1';
    const WITHOUT1 = 0;
    const WITH2 = 'with2';
    const WITHOUT2 = 1;
    const WITHOUT3 = 2;
    const WITH3 = 'with3';
}
