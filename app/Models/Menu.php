<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // public function carts()
    // {
    //     return $this->hasMany(Cart::class, 'menu_id');
    // }
}