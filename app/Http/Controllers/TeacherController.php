<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\timeinout;
use Illuminate\Http\Request;

class TeacherController extends Controller
{


    public function teacherView(){

        $teachersOTime = Teacher::with('teacherOfficialTime')->get();
        $OfficialTimes =timeinout::all();

       return view('TeacherView', [
        'teacherTime' => $teachersOTime,
        'OfficialTimes' => $OfficialTimes
       ]);
    }
}
