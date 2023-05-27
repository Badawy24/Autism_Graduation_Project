<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_u extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'subject',
        'email',
        'message',
        'replay',
        'adminId',
        'created_at',
        'updated_at',
    ];
}
