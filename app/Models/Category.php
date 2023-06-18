<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $guarded = [];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at'
    ];

    public function product() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
