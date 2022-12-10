<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self user()
 * @method static self profile()
 */
class SearchType extends Enum
{
    public static function values(): array
    {
        return [
            'user' => \App\Models\User::class,
        ];
    }

    protected static function labels(): array
    {
        return [
            'user' => __('User'),
        ];
    }
}
