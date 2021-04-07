<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Answer;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $examp_id= $request->route()->parameters['id'];
    

      if(Answer::where('eexam_id',$examp_id)->where('student_id',auth()->user()->id)->exists()){
          return redirect()->route('main');
      }
        // dd(auth()->user()->id);
        return $next($request);
    }
}
