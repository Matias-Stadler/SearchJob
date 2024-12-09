<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'id',
        'status',
        'company',
        'jobPosition',
        'web',
        'created_at',
        'updated_at',
    ];
}
