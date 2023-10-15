<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Client extends Model
{
    use HasFactory;

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function book(): HasManyThrough
    {
        return $this->hasManyThrough(
            Book::class,
            Order::class,
            secondKey: "id",
            secondLocalKey: "book_id"
        );
    }
}
