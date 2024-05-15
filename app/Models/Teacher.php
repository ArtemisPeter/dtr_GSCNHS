<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'role_id',
        'timeInOut_id'
    ];

    public function account(){
        return $this->hasOne(Account::class, 'teacher_id');
    }

    public function dtr(){
        return $this->belongsTo(Dtr::class, 'teacher_id');
    }

}
