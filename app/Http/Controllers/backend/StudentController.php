<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;
use Auth;
class StudentController extends Controller
{
    //
    public function addStudent(Request $request){
      
        $this->validate($request,[
          
        
       'name'=>'required',
       'email'=>'required',
       'password'=>'required',
       'mobile_number'=>'required',
       'gender'=>'required',
       'department'=>'required',
        ]);
        
     
        $student  =  new Student();
        $student->name     =$request->name;
        $student->email       =$request->email;
        $student->password       =bcrypt($request->password);
        $student->mobile_number      =$request->mobile_number;
        $student->gender      =$request->gender;
        $student->department   =$request->department;

        $student->save();
        
        User::create([
          'name'  => $request->name,
          'student_id'  => $student->id,
          'email'=> $request->email,
          'password'=>bcrypt($request->password),
          'status'  => $request->status,
          'role'  => $request->role,
        ]);
        
        
        return redirect()->route('student.list');
    }
    
     public function studentList(){

        $data  = Student::all();
         // dd($students);
    
         return view('backend.student.all_student',['students'=>$data]);
       }

       public function edit($id){

        $students = Student::find($id);
        return view('backend.student.edit_student',compact('students'));
      }

       public function update(Request $request,$id)
  {
       $student = Student::find($id);
        $student->name     =$request->name;
        $student->email       =$request->email;
        $student->mobile_number      =$request->mobile_number;
        $student->gender      =$request->gender;
        $student->department   =$request->department;
        $student->save();
    
    return redirect()->route('student.list');
 }
       public function delete($id){

        try{
          Student::find($id)->delete();
          return redirect()->route('student.list')->with('success','data deleted successfully');
        }
        catch(Throwable $exception){
          return redirect()->back()->with('success','data deleted successfully');
        }
    }
    public function studenteview($id){
      $students=Student::find($id);
      return view('backend.student.student_profile',compact('students'));
  }

  public function studentresult(){
    //$marks  = Answer::select('student_id', 'exam_id')->groupBy('student_id')->get();

    
    $marks = DB::table('answers') ->join('eexams', 'eexams.id', '=', 'answers.eexam_id')
    ->where('student_id','=',auth()->user()->id)
    ->select('eexam_id', 'student_id', 'subject', DB::raw('sum(result) as result'))
    ->groupBy('student_id', 'eexam_id', 'subject')
    ->get();
  
    return view('backend.student.result',compact('marks'));
  }
}