<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    //
    
    // public function studentresult(){
    //     //$marks  = Answer::select('student_id', 'exam_id')->groupBy('student_id')->get();
    //     $marks = DB::table('answers')
    //     ->select('exam_id', 'student_id', DB::raw('sum(result) as result'))
    //     ->groupBy('student_id', 'exam_id')
    //     ->get();
      
    //     return view('fontend.result',compact('marks'));
    //   }
}
