<!DOCTYPE html>
<html lang="en">


<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}backend/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- Datatable -->
    <link href="{{ asset('/') }}backend/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}backend/css/style.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <h2>OEMS</h2>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div> -->
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/')}}">Dashboard </a></li>
                            
                        </ul>
                    </li>
					@if(auth()->user()->professor_id)
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Teacher</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('professor.list')}}">Teacher</a></li>
                            <!-- <li><a href="{{url('edit')}}">Edit Teachers</a></li> -->
                           

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Manage Exam</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('exam.category')}}">View Exam</a></li>
                            <li><a href="{{route('exam.add')}}">Create Exam</a></li>
                            
                            <li><a href="{{route('student.result')}}">View Result</a></li>
                        </ul>
                    </li>
                    @else
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Teacher</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('professor.list')}}">All Teacher</a></li>
                            <li><a href="{{url('addprofessor')}}">Add Teacher</a></li>
                            <!-- <li><a href="{{url('edit')}}">Edit Teachers</a></li> -->
                        </ul>
                    </li>
				
                   

                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Student</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{url('studentList')}}">All Student</a></li>
                            <li><a href="{{url('addstudent')}}">Add Student</a></li>
                            
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Exam</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('exam.category')}}">View Exam</a></li>
                        <li><a href="{{route('student.result')}}">View Result</a></li>

                            <!-- <li><a href="{{route('exam.add')}}">Create Exam</a></li>
                            
                            <li><a href="{{url('instruction')}}">Instruction</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Question</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('question.add')}}">Add Question</a></li>
                        </ul>
                    </li> -->
                    @endif
					<!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Manage Exam</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="">Create Exam</a></li>
                            <li><a href="">View Exam</a></li>
                        
                        </ul>
                    </li> -->
					
                    <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">Notification</span>
						</a>
                        
                    </li> -->
					
					
					
										
                    
                    
                    
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="Sirajum Munira" target="_blank">Sirajum Munira</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="{{ asset('/') }}backend/vendor/global/global.min.js"></script>
	<script src="{{ asset('/') }}backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('/') }}backend/js/custom.min.js"></script>
    <script src="{{ asset('/') }}backend/js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="{{ asset('/') }}backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}backend/js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="{{ asset('/') }}backend/vendor/svganimation/vivus.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/svganimation/svg.animation.js"></script>
    <script src="{{ asset('/') }}backend/js/styleSwitcher.js"></script>
    <script type="text/javascript">
var i = 0;
$("#addBtn").click(function(){
++i;
$("#dynamicAddS").append(`<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12" id="dynamicAddS">
											<div>
												<div class="form-group">
														<label class="form-label">Question</label>
														<input type="text" class="form-control" name="name">
													</div>
													<div class="form-group">
														<label class="form-label">Option 1</label>
														<input type="text" class="form-control" name="option_1">
													</div>
													<div class="form-group">
														<label class="form-label">Option 2</label>
														<input type="text" class="form-control" name="option_2">
													</div>
													<div class="form-group">
														<label class="form-label">Option 3</label>
														<input type="text" class="form-control" name="option_3">
													</div>
													
													<div class="form-group">
												<label class="form-label">Answer</label>
												<input type="text" class="form-control" name="answer">
											</div>
											</div>
										</div>`);
});
$(document).on('click', '.remove-tr', function(){  
$(this).parents('label').remove();
});  
</script>
	
</body>

</html>