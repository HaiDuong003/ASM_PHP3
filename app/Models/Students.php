<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Students extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'address',
        'image'
    ];
}
