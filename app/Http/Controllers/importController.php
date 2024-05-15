<?php

namespace App\Http\Controllers;

use App\Models\Dtr;
use Illuminate\Http\Request;

class importController extends Controller
{
    public function importDtr(){

        $dtrs = Dtr::with('state')->get();
        return view('welcome', [
            'dtrs' => $dtrs
        ]);
    }


}
