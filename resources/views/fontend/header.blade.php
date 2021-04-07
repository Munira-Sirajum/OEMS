<nav class="navbar navbar-default pw-navbar-default navbar-fixed-top">
        <!-- /TOP BAR -->
        <div class="cs-topbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.html"><img    style="height: 40px;"></a>
                </div>
               
                <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">
                   
                   @auth()
            
                    <li>
                        <a href="{{ route('student.logout')}}" class="cs-nav-btn visible-lg">Logout</a>
                    </li>

                    <li>
                    <a href="{{route('student.profile',auth()->user()->student_id)}}" class="cs-nav-btn cs-responsive-menu"><span>Profile</span><i class="icon icon-User " aria-hidden="true"></i></a>
                    </li>

                    @endauth
           
                  
                    </ul>
                                    

            </div>
        </div>
        <!-- /TOP BAR -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                    <span class="sr-only">Toggle navigation</span>
                    <span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                </button>
            </div>
            <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">

                <ul class="nav navbar-nav navbar-left navbar-main myheader">

                   
                    
                <li class = active ><a href="{{ route('main') }}">Home</a></li>
                
                <li class = active ><a href="{{ route('result.result') }}">Result</a></li>
                
                    <!-- <li  > <a href="{{url('exam')}}">Practice Exams</a></li> -->
                    
                </ul>
            </div>
        </div>
    </nav>