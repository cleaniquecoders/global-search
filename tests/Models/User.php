<?php

namespace CleaniqueCoders\GlobalSearch\Tests\Models;

use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Model;

class User extends Model
{
    use Searchable;

    protected $guarded = ['id'];

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
