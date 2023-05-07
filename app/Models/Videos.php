<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'courseId',
        'videoTitleEn',
        'videoTitleAr',
        'videoApi',
        'created_at',
        'updated_at',
    ];
}
