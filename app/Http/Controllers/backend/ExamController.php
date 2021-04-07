<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eexam;
use App\Models\Professor;
class ExamController extends Controller
{
    //
    public function exam(){
      
        if(auth()->user()->professor_id){
          $data  = Eexam::where('professor_id',auth()->user()->professor_id)->get();
        }else{
          $data  = Eexam::all();
        }
  
         // dd($students);
    
         return view('backend.exam.viewexam',['exams'=>$data]);
    }

    public function addExam(){
      $professors = Professor::all();
        return view('backend.exam.addexam',compact('professors'));
    }

    public function createExam(Request $request){
         
        $this->validate($request,[
       'subject'=>'required',
       'date'=>'required',
       'time'=>'required',
       'mark'=>'required',
       'department'=>'required',
        ]);
     
       
      $data = Eexam::create([
        'subject' => $request->subject,
        'date' => $request->date,
        'time' => $request->time,
        'status'=>$request->status,
        'mark' => $request->mark,
        'department' => $request->department,
        'professor_id' => auth()->user()->professor_id,
      ]);
       
     
        
        return redirect()->back();
    }

    public function edit($id){
      
        return view('backend.question.addques',compact('id'));
      }

      public function delete($id){

        try{
          Eexam::find($id)->delete();
          return redirect()->route('exam.category')->with('success','data deleted successfully');
        }
        catch(Throwable $exception){
          return redirect()->back()->with('success','data deleted successfully');
        }
      }
    public function eedit($id){

      $exams = Eexam::find($id);
      $professors = Professor::all();
      return view('backend.exam.editexam',compact('exams','professors'));
    }
    public function update(Request $request,$id)
  {

    
    $exam  = Eexam::find($id);
    $exam->subject  =$request->subject;
        $exam->date      =$request->date;
        $exam->time       =$request->time;
        $exam->professor_id = auth()->user()->professor_id;
        $exam->status       =$request->status;
        $exam->mark      =$request->mark;
        $exam->department   =$request->department;
        $exam->save();
    
    return redirect()->route('exam.category');
  }
}
