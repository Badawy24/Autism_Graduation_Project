<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'courseTitleEn',
        'courseTitleAr',
        'courseDescriptionEn',
        'courseDescriptionAr',
        'courseImage',
        'courseType',
        'created_at',
        'updated_at',
    ];
}
