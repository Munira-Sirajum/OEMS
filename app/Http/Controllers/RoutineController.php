<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutineController extends Controller
{
    //
    public function routine(){
        return view('backend.manageexam.examroutine');
    }
}
