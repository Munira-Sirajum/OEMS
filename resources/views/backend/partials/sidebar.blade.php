<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('home')}}">Dashboard </a></li>
                            
                        </ul>
                    </li>

                    @if(auth()->user()->professor_id)
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Teacher</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('professor.list')}}">Teacher</a></li>
                            <!-- <li><a href="{{url('edit')}}">Edit Teacher</a></li> -->
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
                            <!-- <li><a href="{{url('edit')}}">Edit Teacher</a></li> -->
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
							<i class="la la-building"></i>
							<span class="nav-text">Notification</span>
						</a>
                        
                    </li> -->
					
					
										
                    
                    
                    <li class="nav-label">Components</li>
                    
                            
                        </ul>
                    </li>
				</ul>
            </div>
        </div>