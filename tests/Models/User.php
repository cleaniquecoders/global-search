<?php

namespace CleaniqueCoders\GlobalSearch\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Laravel\Scout\Searchable;

class User extends Model
{
    use Searchable, HasFactory;

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
