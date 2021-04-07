<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddQuestion;
use App\Models\Option;
use App\Models\Answer;
use App\Models\Eexam;
use App\Models\Mark;
class StratexamController extends Controller
{
    //
    public function startexam($id){


      $questions  = AddQuestion::with('options')->where('eexam_id','=',$id)->get();
    
    //  $examps  = Eexam::where('eexam_id','=',$id)->where('status','published')->get();

    // $AddQuestion  = Option::where('addquestion_id','=',5)->get();
 
    
    
        return view('fontend.startexam.exam1',compact('questions'));
    }

    // public function answer(){

    //     return view('fontend.startexam.answer');
    // }

    public function finish(Request $request,$examp_id)
    {
       
        // dd($request->all());
        // $ans = $request->answer;
        $eexam_id='';
        foreach($request->answer as $key =>$options){
            $answer = array_search ('on', $options);
        
        $ques = AddQuestion::find($key);
      $eexam_id=$ques->eexam_id;

    

      $result=0;

if($answer==$ques->answer)
{
$result=1;
}

           Answer::updateOrcreate([
                'question_id'=>$key,
                'submitted_answer'=>$answer,
                'correct_answer'=>$ques->answer,
                'result'=>$result,
                'student_id'=>auth()->user()->id,
                'eexam_id'=>$ques->eexam_id
           ]);
            

        }


        $resultCount=Answer::where('eexam_id',$eexam_id)->where('student_id',auth()->user()->id)->where('result',1)->get()->count();
             
        
        
      

     return view ('fontend.startexam.answer',compact('resultCount'));
    }
    
}
