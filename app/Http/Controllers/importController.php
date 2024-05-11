<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class importController extends Controller
{
    public function importDtr(){
        return view('welcome', [
            'teacher' => auth()->user()->teacher
        ]);
    }
}
