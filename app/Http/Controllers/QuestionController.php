<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddQuestion;
use App\Models\Option;
class QuestionController extends Controller
{
    //
    public function addques(){
        return view('backend.question.addques');
    }
    public function viewques($id){
        
        $data  = AddQuestion::where('eexam_id', $id)->get();
         // dd($students);
    
         return view('backend.question.viewques',['questions'=>$data]);
    }
    public function store(Request $request)
    {   

        //  dd($request->all());
        $this->validate($request,[
          
            
           'name'=>'required',
           'answer'=>'required',
            ]);
         
           
            $question  =  new AddQuestion();
            $question->name     =$request->name;
            $question->answer       =$request->answer;
            $question->eexam_id       =$request->eexam_id;
            
            $question->save();

            $option = new  Option();
            $option->addquestion_id     =$question->id;
            $option->option_1       =$request->option_1;
            $option->option_2       =$request->option_2;
            $option->option_3       =$request->option_3;
            $option->option_4       =$request->option_4;
            
            $option->save();
            
            return redirect()->back()->with('message','Question is added');
        }
 
        // public function delete($id){

        //     try{
        //       AddQuestion::find($id)->delete();
        //       return redirect()->route('question.list')->with('success','data deleted successfully');
        //     }
        //     catch(Throwable $exception){
        //       return redirect()->back()->with('success','data deleted successfully');
        //     }
        //   }
        public function getDeletePost($post_id)
{
    $post = AddQuestion::where('id',$post_id)->first();
    $post->delete();
    return redirect()->back()->with(['message'=> 'Successfully deleted!!']);
} 

public function edit($id){

    $questions = AddQuestion::with('options')->find($id);

    return view('backend.question.edit_question',compact('questions'));
  }

public function update(Request $request,$id)
  {
     
    $question  =  AddQuestion::find($id);
    $question->name     =$request->name;
    $question->answer       =$request->answer;
    $question->eexam_id       =$request->eexam_id;
    
    $question->save();

    $option =  Option::find($id);
    
    $option->addquestion_id     =$question->id;
    $option->option_1       =$request->option_1;
    $option->option_2       =$request->option_2;
    $option->option_3       =$request    ->option_3;
$option->option_4       =$request->option_4;
    
    $option->save();
    
    return redirect()->back();
 }
        
}



