<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'variants';

    protected $guarded = [];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at'
    ];

    public function size() {
        return $this->belongsTo(Size::class, 'size_id', 'id');
    }

    public function color() {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}
