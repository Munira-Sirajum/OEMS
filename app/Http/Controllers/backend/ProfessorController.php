<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Professor;
use App\Models\User;
use App\Models\Answer;
class ProfessorController extends Controller
{
    

  public function edit($id){

    $professors = Professor::find($id);
    return view('backend.professor.edit_pro',compact('professors'));
  }
  public function delete($id){

    try{
      Professor::find($id)->delete();
      return redirect()->route('professor.list')->with('success','data deleted successfully');
    }
    catch(Throwable $exception){
      return redirect()->back()->with('success','data deleted successfully');
    }
  }
  public function update(Request $request,$id)
  {
    $professor  = Professor::find($id);
    $professor->name     =$request->name;
    $professor->email       =$request->email;
    $professor->joining_date   =$request->joining_date;
    $professor->password       =$request->password;
    $professor->mobile_number      =$request->mobile_number;
    $professor->gender      =$request->gender;
    $professor->designation   =$request->designation;
    $professor->department   =$request->department;
    $professor->save();
    
    return redirect()->back()->with('message','Updated successfully');
  }

  public function professorList(){

    if(auth()->user()->professor_id){
      $data  = Professor::where('id' , auth()->user()->professor_id)->get();
    }else{
      $data  = Professor::all();
    }
   
     // dd($students);
     return view('backend.professor.all-professor',['professors'=>$data]);
   }
        
        public function addPro(Request $request){
          
            $this->validate($request,[
              
           'name'=>'required',
           'email'=>'required',
           'joining_date'=>'required',
           'password'=>'required',
           'mobile_number'=>'required',
           'gender'=>'required',
           'designation'=>'required',
           'department'=>'required',
            ]);
            
      // DB::BeginTransaction();
      //dd($request->all());
       $professor = new Professor();
        
        $professor->name  = $request->name;
        $professor->email  = $request->email;
        $professor->joining_date  = $request->joining_date;
        $professor->password = bcrypt($request->password);
        $professor->mobile_number  = $request->mobile_number;
        $professor->gender  = $request->gender;
        $professor->designation   = $request->designation;
        $professor->department  = $request->department;
        
        $professor->save();
      
  
      //dd($request->all());
      
         User::create([
              'name'  => $professor->name,
              'professor_id'  => $professor->id,
              'email'  => $professor->email,
              'password'  => bcrypt($request->password),
              'status'  => $request->status,
              'role'  => $request->role,
            ]);
            
        
            // DB::Commit();
            return redirect()->route('professor.list');
       
        
          }
          public function profileview($id){
              $professors=Professor::find($id);
              return view('backend.professor.professor_profile',compact('professors'));
          }

          public function result(){
            //$marks  = Answer::select('student_id', 'exam_id')->groupBy('student_id')->get();
            if(auth()->user()->professor_id){

              $marks = DB::table('answers') ->join('eexams', 'eexams.id', '=', 'answers.eexam_id')
              ->where('professor_id','=',auth()->user()->professor_id)
              ->select('eexam_id', 'student_id', 'subject', DB::raw('sum(result) as result'))
              ->groupBy('student_id', 'eexam_id', 'subject')
              ->get();

            }else{
              $marks = DB::table('answers') ->join('eexams', 'eexams.id', '=', 'answers.eexam_id')
          
              ->select('eexam_id', 'student_id', 'subject', DB::raw('sum(result) as result'))
              ->groupBy('student_id', 'eexam_id', 'subject')
              ->get();
            }
          
          
            return view('backend.professor.view_result',compact('marks'));
          
        }

          
        }
