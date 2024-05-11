<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeinout extends Model
{
    use HasFactory;

    protected $fillable = [
        'timeIn_Morning',
        'timeOut_Morning',
        'timeIn_Afternoon',
        'timeOut_Afternoon'
    ];
}
