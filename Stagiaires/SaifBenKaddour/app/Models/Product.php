<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    protected $fillable = [
        'nom',
        'prix',
        'id_category'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }
}