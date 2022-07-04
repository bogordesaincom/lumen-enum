<?php

namespace MadWeb\Enum\Test;

use MadWeb\Enum\Enum;

/**
 * @method static PostStatusEnum PUBLISHED()
 * @method static PostStatusEnum PENDING()
 * @method static PostStatusEnum DRAFT()
 */
final class PostStatusEnum extends Enum
{
    const __default = self::PENDING;

    const PUBLISHED = 'published';
    const PENDING = 'pending';
    const DRAFT = 'draft';
}
