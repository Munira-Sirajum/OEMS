<!-- Hero Header -->
@extends('fontend.master')
@section('content')
<header class="hero-header" style="background: url(public/uploads/settings/T6MdSSFMFdGucYc.png) center center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hero-content">
                        <h1 class="cs-hero-title"></h1>
                        <!-- <div><a href="www.fvti.co.html" class="btn btn-primary btn-hero" target="_blank">Get Started</a></div> -->
                    </div>
                </div>
                <div class="col-md-7">
                    

                        <img src="{{ asset('/') }}fontend/public/uploads/settings/bg.png" alt="" class="animated fadeInUp img-responsive wow" data-wow-duration="900ms" data-wow-delay="300ms"  >

                      
                       
                   
                </div>
            </div>
        </div>
    </header>
    <!-- Hero Header -->

    <!-- Call to action -->
   
    <!-- Call to action -->

    
    <section class="cs-gray-bg">
        <div class="container">
            <div class="cs-row">
                <div class="row">
                    <div class="col-sm-12 text-center clearfix">
                        <h2 class="cs-section-head">Attend Exams</h2>

                        <!-- <ul class="nav nav-pills cs-nav-pills text-center">

                           
                            
                               <li><a href="exam/categories/maths-category.html">C</a></li>

                            
                               <li><a href="exam/categories/physics-2.html">C</a></li>

                            
                               <li><a href="exam/categories/chemistry-category-3.html">Java</a></li>

                            
                               <li><a href="exam/categories/history-category-4.html">PHP</a></li>

                            
                               <li><a href="exam/categories/chemistry-5.html">Python</a></li>

                            
                             
                          
                        </ul> -->

                    </div>
                </div>
                <div class="row">

                       
                      @foreach($examps as $exam)   
             <div class="col-md-3 col-sm-6">
                        <!-- Product Single Item -->
                       <div class="cs-product cs-animate">
                            <a href="exams/start-exam/reasoning-ff5f6112ffc91c1745460088e840d89339bb4c5e-16.html">
                                <div class="cs-product-img">
                                                                        <img src="{{ asset('/') }}fontend/public/uploads/exams/categories/exam.jpg" alt="exam" class="img-responsive">
                                                                    </div>
                            </a>
                            <div class="cs-product-content">
                             <a href="" class="cs-product-title text-center">{{$exam->subject}}</a>



                              <ul class="cs-card-actions mt-0">
                                    <li>
                                        <a href="#">{{$exam->mark}}</a>
                                    </li>

                                    <li>  </li>

                                   
                                    <li class="cs-right">
                                        <a href="#">{{$exam->time}}</a>

                                    </li>


                                </ul>
                                <div class="text-center mt-2">
                                     <a href="{{route('start.exam1',$exam->id)}}" class="btn btn-blue btn-sm btn-radius">Start Exam</a>
                                </div>
                            
                            </div>
                        </div>
                        <!-- /Product Single Item -->
                    </div>

                    @endforeach

                         
                          
                              
                
            </div>
        </div>
    </section>
    <!-- /End Quizzes -->

    

     

    

        <!-- Info Boxes -->
    
    @endsection('content')
    <!-- /Info Boxes -->