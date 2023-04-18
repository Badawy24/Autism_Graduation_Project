<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'childId',
        'testImage',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'whoCompletesTheTest',
        'userFamilyMemberWith',
        'testScore',
        'testReasult',
        'testTime',
    ];
}