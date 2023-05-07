<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Healthcare extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'healthcarName',
        'healthcarAddress',
        'healthcarPhone',
        'healthcarWebSite',
        'created_at',
        'updated_at',
    ];
}
