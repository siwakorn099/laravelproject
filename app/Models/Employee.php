<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'tel',
        'age',
        'address',
        'avartar',
        'status'
    ];

}