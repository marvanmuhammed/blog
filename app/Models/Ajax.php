<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
    use HasFactory;
    protected $table = 'ajaxes';
    protected $fillable = [
        'name',
        'email'
    ];
}
