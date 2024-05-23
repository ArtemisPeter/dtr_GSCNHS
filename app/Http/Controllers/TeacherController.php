<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\timeinout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{


    public function teacherView(){

        $teachersOTime = Teacher::with('teacherOfficialTime')->get();
        $OfficialTimes = timeinout::all();

       return view('TeacherView', [
        'teacherTime' => $teachersOTime,
        'OfficialTimes' => $OfficialTimes
       ]);
    }

    public function teacherUpdate(Request $request){
        $request->validate([
            'TeacherFname' => 'required',
            'TeacherLname' => 'required',
            'officeHours' => 'required'
        ]);

        //find the teacher through the ID
        $teacher = Teacher::find($request->input("teacher_Id"));

        if($teacher){
            $teacher->fname = $request->input('TeacherFname');
            $teacher->lname = $request->input('TeacherLname');


            //get the officialTime id

            $officialTimein = timeinout::find($request->input('officeHours'));
            if($officialTimein){
                $teacher->timeInOut_id = $officialTimein->id;
            }

            $teacher->save();

            return redirect()->route('teacherv')->with('success', 'Teacher updated Successfully');
        }else{

            return redirect()->route('teacherv')->with('error', 'Teacher not found');
        }
    }
}
