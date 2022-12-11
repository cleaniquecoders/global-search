<?php

namespace CleaniqueCoders\GlobalSearch\Tests\Enums;

use CleaniqueCoders\GlobalSearch\Tests\Models\User;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self user()
 */
class SearchType extends Enum
{
    public static function values(): array
    {
        return [
            'user' => User::class,
        ];
    }

    protected static function labels(): array
    {
        return [
            'user' => __('User'),
        ];
    }
}
