<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    
    protected $fillable = ['name', 'slug', 'description', 'price', 'image'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
