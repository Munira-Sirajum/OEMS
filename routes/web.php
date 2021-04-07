<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProfessorController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\backend\ExamController;
use App\Http\Controllers\StratexamController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\SignController;
// use App\Http\Controllers\ResultController;
use App\Models\Eexam;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.layouts.index');
})->name('home');

Route::get('/main', function () {

    $examps = Eexam::where('status','published')->get();

    return view('fontend.main',compact('examps'));
})->name('main');

Route::get('/exam', function () {
    return view('fontend.practiceExam.pracexam');
});

Route::get('/addprofessor', function () {
    return view('backend.professor.add_professor');
});
Route::get('/edit', function () {
    return view('backend.professor.edit_pro');
});

//Login.........
//Route::get('login/login',[LoginController::class,'login'])->name('login.login');
Route::post('login/login',[LoginController::class,'log'])->name('login.login');

Route::get('login/login', function () {
    if (session()->has('email'))
    {
      return redirect('/');
    }
    return view('backend.login.login');
});

Route::get('/logout', function () {
    if (session()->has('email'))
    {
      session()->pull('email');
    }
    return redirect('login/login');
});
Route::get('/student-logout',[SignController::class,'logout'])->name('student.logout');

//Route::get('index', [LoginController::class,'index'])->name('test');

//Professors...........
Route::post('professor/add',[ProfessorController::class,'addPro'])->name('professor.store');
Route::get('professor/list',[ProfessorController::class,'professorList'])->name('professor.list');
Route::get('/professor/edit/{id}',[ProfessorController::class,'edit'])->name('professor.edit');
Route::get('/professor/delete/{id}',[ProfessorController::class,'delete'])->name('professor.delete');
Route::post('/professor/update/{id}',[ProfessorController::class,'update'])->name('professor.update');
Route::get('professor/profile/{id}',[ProfessorController::class,'profileview'])->name('professor.profile');
Route::get('result/student',[ProfessorController::class,'result'])->name('student.result');


//Students.............
Route::get('/studentList', function () {
    return view('backend.student.all_student');
});
Route::get('/addstudent', function () {
    return view('backend.student.add_student');
});
Route::get('studentList',[StudentController::class,'studentList'])->name('student.list');
Route::post('student/add',[StudentController::class,'addStudent'])->name('student.store');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('student/profile/{id}',[StudentController::class,'studenteview'])->name('student.profile');
Route::get('result/result',[StudentController::class,'studentresult'])->name('result.result');


//Question......
Route::get('question/add',[QuestionController::class,'addques'])->name('question.add');
Route::get('question/list/{id}',[QuestionController::class,'viewques'])->name('question.list');
Route::post('question/ad',[QuestionController::class,'store'])->name('question.ad');
Route::get('/question/delete/{id}',[QuestionController::class,'getDeletePost'])->name('question.delete');
Route::get('/question/edit/{id}',[QuestionController::class,'edit'])->name('question.edit');
Route::post('/question/update/{id}',[QuestionController::class,'update'])->name('question.update');


Route::post('/question/update/{id}',[QuestionController::class,'update'])->name('question.update');

//Exam........
Route::get('exam/category',[ExamController::class,'exam'])->name('exam.category');
Route::get('exam/add',[ExamController::class,'addExam'])->name('exam.add');
Route::post('create/exam',[ExamController::class,'createExam'])->name('create.exam');
Route::get('button/exam/{id}',[ExamController::class,'edit'])->name('button.exam');
Route::get('/exam/delete/{id}',[ExamController::class,'delete'])->name('exam.delete');
Route::get('/exam/edit/{id}',[ExamController::class,'eedit'])->name('exam.edit');
Route::post('/exam/update/{id}',[ExamController::class,'update'])->name('exam.update');



//Routine......
Route::get('exam/routine',[RoutineController::class,'routine'])->name('exam.routine');


//StartExam
Route::get('start/exam1/{id}',[StratexamController::class,'startexam'])->name('start.exam1')->middleware('checkExamp');


//iNSTRUCTION

Route::get('/instruction', function () {
    return view('backend.exam.instruction');
});





Route::get('/math', function () {
    return view('fontend.exam_categories.math');
});
Route::get('/physics', function () {
    return view('fontend.exam_categories.physics');
});
Route::get('/exam1', function () {
    
    return view('fontend.exam_categories.start_exam.exam1');
});


//Answer.....

Route::get('exam/answer',[StratexamController::class,'answer'])->name('exam.answer');
Route::post('start/exam2/{id}',[StratexamController::class,'finish'])->name('start.exam2')->middleware('checkExamp');

//Result......


//Sign.........
Route::get('sign',[SignController::class,'sign'])->name('sign');
Route::post('student/sign',[SignController::class,'signin'])->name('student.sign');


