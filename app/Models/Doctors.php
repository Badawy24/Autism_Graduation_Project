<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'email',
        'doctorAddress',
        'doctorPhone',
    ];
}
