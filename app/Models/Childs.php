<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'childImage',
        'birthDate',
        'gender',
        'childEthnicity',
        'childJaundice',
        'userId',
        'created_at',
        'updated_at',
    ];
}
