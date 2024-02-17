<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $guarded = [];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at'
    ];

    public function variant()
    {
        return $this->hasMany(Variant::class, 'product_id', 'id');
    }

    public function categiries()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
