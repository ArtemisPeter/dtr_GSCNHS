<?php

namespace App\Http\Controllers;

use App\Models\Dtr;
use App\Models\State;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class importCsv extends Controller
{
    public function importCsv(Request $request){

        $request->validate([
            'dtr_' => 'required|mimes:csv'
        ]);

        $file = $request->file('dtr_');
        $path = $file->getRealPath();
        $handle = fopen($path, 'r');
        $count = 0;
        $error = false;

        DB::beginTransaction();

        try{
            while(($row = fgetcsv($handle, 1000, ","))!==FALSE){

                if($count == 0){
                    $count++;
                    continue;
                }

                $TeacherName = $row[2];
                $time = $row[3];
                $state = $row[4];

                $formattedDateTime = date('Y-m-d H-i-s', strtotime($time));



                    $NameParts = explode(' ', $TeacherName);

                    $fname = implode(' ', array_slice($NameParts, 1));
                    $lname = $NameParts[0];

                    $teacher = Teacher::firstOrCreate(
                        ['fname' => $fname, 'lname' => $lname],
                        ['role_id' => 1, 'timeInOut_id' => 1]
                    );

                    $StateId = State::where('state', $state)->value('id');

                    Dtr::create([
                        'teacher_id' => $teacher->id,
                        'recordedTime' => $formattedDateTime,
                        'state_id' => $StateId
                    ]);


                $count++;
            }
            fclose($handle);
            DB::commit();
            return redirect()->back()->with('success', 'Imported Successfully!, please refresh the page');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'There was an error while saving the CSV' . $e->getMessage());
        }





    }
}
