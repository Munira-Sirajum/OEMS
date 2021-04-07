 @extends('fontend.master')



 <link href="{{ asset('/') }}fontend/Themes/themeone/assets/site/css/main.css" rel="stylesheet">
     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/notify.css" rel="stylesheet">
     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/angular-validation.css" rel="stylesheet">

 <!-- Bootstrap Core CSS -->
    
    <!--FontAwesome-->

    
    <link href="{{ asset('/') }}fontend/public/css/sweetalert.css" rel="stylesheet" type="text/css">


     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/front-exam.css" rel="stylesheet">
     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/plugins/morris.css" rel="stylesheet">



    <link href="{{ asset('/') }}fontend/public/css/materialdesignicons.css" rel="stylesheet" type="text/css">

<div id="wrapper" class=" mt-150 " >

        <!-- Navigation -->

        <nav role="navigation">
            
        


        </nav>

         

        
        
            

        <aside class="right-sidebar mt-50" id="rightSidebar">

            

            
            <div class="panel panel-right-sidebar ">
            <div>Time is on </div>

            
                <div class="panel-heading">
					<h2>Time Status</h2>
				</div>
				<div class="panel-body">
				 
					<div  class="countdown-styled ">
                    <span id="timeBuild">10:00</span>

					</div>
					 
				</div>
				<div class="panel-heading countdount-heading">
					<h2>Total Time <span class="pull-right">00:10:00</span></h2>
				</div>


				 	

        </aside>

        

    
        


<link href="../../public/css/animate.css" rel="dns-prefetch"/>



<div id="page-wrapper" class="examform" ng-controller="angExamScript" ng-init="initAngData([127,123,138,136,125,133,124,131,128,135,22,21,132,129,137,126,134,130])">

    <div class="container-fluid">

    

        <div class="row">


        </div>



        <!-- /.row -->

        <!-- /.row -->


        <div class="row">

            <div class="col-md-12">


                <div class="panel panel-custom">

                    <div class="panel-heading">

                        <div class="pull-right exam-duration">

            <!-- <span>
            
            <select 
                  id="selected_language" 
                  onchange="languageChanged(this.value)" 
                  class="form-control st-selection">
              <option value="language_l1">English</option>
              
             <option value="language_l2">Hindi</option>

            </select>
           </span> -->
                    
                                       



                        </div>
                 
                       

                        <!-- <h1>

                            <span class="text-uppercase">

                               

                            </span>

                             Question

                            <span id="question_number">

                                1

                            </span>

                            of 15

                        </h1> -->

    

                    </div>

                    <div class="panel-body question-ans-box">

                        

                        <div id="questions_list">
                       

            <form action="{{route('start.exam2',request()->route()->parameters['id'])}}" method="post" id="formsubmit">
            @csrf
    @foreach($questions as $question)
    <div style="margin-top:10px">
            <div>
            
                <!-- <p> {{$question->id}}</p> -->
                
                <div>
                <p><strong>{{$loop->index+1}}. {{$question->name}}</strong></p>
                </div>
               
                <div>
                    <div>
                        <input type="radio" name="answer[{{$question->id}}][1]" id=""> <span style="margin-left:5px;text-tranform:capitalize">{{ $question->options->option_1 }}</span>
                    </div>
                    <div>
                        <input type="radio" name="answer[{{$question->id}}][2]" id=""> <span style="margin-left:5px;text-tranform:capitalize">{{ $question->options->option_2 }}</span>
                    </div>
                    <div>
                        <input type="radio" name="answer[{{$question->id}}][3]" id=""><span style="margin-left:5px;text-tranform:capitalize">{{ $question->options->option_3 }}</span>
                    </div>
                    
                </div>
                

            </div>
    </div>
    @endforeach
    <div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cencel</button>
										</div>

            </form>
    
</div>


	

                                </hr>

                            </div>

                            
                        </div>

                        

                        

                        
                    </div>

                </div>

            </div>

            

        </div>

    </div>

</div>

<!-- /#page-wrapper -->


    </div>

    </div>
     <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/jquery-3.1.1.min.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/bootstrap.min.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/slider/slick.min.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/bootstrap.offcanvas.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/jRate.min.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/wow.min.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/site/js/main.js"></script>
      <script src="{{ asset('/') }}fontend/../../Themes/themeone/assets/js/notify.js"></script>

    

    <script src="../../public/js/sweetalert-dev.js"></script>
    <script src="../../public/js/mousetrap.js"></script>

     <script src="../../public/js/landing-js/all.js"></script>
     

    
    
    <script>
            var csrfToken = $('[name="csrf_token"]').attr('content');

            setInterval(refreshToken, 600000); // 1 hour 

            function refreshToken(){
                $.get('refresh-csrf').done(function(data){
                    csrfToken = data; // the new token
                });
            }

            setInterval(refreshToken, 600000); // 1 hour 

        </script>

    

    <link rel="stylesheet" href="{{ asset('/') }}fontend/public/css/alertify/themes/alertify.core.css" >
  <link rel="stylesheet" href="{{ asset('/') }}fontend/public/css/alertify/themes/alertify.default.css" id="toggleCSS" >

 <script src="{{ asset('/') }}fontend/public/js/alertify.js"></script>
    

    
  

<script src="{{ asset('/') }}fontend/public/js/bootstrap-toggle.min.js">

</script>

<script src="{{ asset('/') }}fontend/public/js/jquery.flexslider.js"></script>



<script src="{{ asset('/') }}fontend/public/js/angular.js"></script>

<script src="{{ asset('/') }}fontend/public/js/angular-messages.js"></script>

<script src="{{ asset('/') }}fontend/public/js/mousetrap.js"></script> -->