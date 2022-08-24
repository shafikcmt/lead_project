<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = [
        'email',
        'mobile',
        'password',
        'ref_code',
        'course',

    ];
}
