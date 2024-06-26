<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtr extends Model
{
    use HasFactory;

    protected $fillable=[
        'teacher_id',
        'recordedTime',
        'state_id'
    ];

    public function state(){
        return $this->belongsTo(State::class, 'state_id');
    }

    public function teacherName(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
