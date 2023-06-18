<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'colors';

    protected $guarded = [];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at'
    ];
}
