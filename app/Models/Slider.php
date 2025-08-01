<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{   
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'is_active',
        'thumbnail',
    ];
    protected $dates = ['deleted_at' ];
}
