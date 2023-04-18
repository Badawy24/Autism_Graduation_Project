<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'courseId',
        'userId',
    ];
}
