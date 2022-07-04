<?php

namespace Bogordesain\Enum\Test;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Bogordesain\Enum\Test\PostStatusEnum $status
 */
class Post extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'status'];

    protected $casts = [
        'status' => PostStatusEnum::class,
    ];
}
