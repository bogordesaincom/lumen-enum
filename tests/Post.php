<?php

namespace MadWeb\Enum\Test;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \MadWeb\Enum\Test\PostStatusEnum $status
 */
class Post extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'status'];

    protected $casts = [
        'status' => PostStatusEnum::class,
    ];
}
