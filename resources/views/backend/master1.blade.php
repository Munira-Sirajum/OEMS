<!DOCTYPE html>
<html lang="en">


<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}backend/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/jqvmap/css/jqvmap.min.css">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<!-- Summernote -->
    <link href="{{ asset('/') }}backend/vendor/summernote/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/') }}backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/css/skin-3.css">

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
       
        <!--**********************************
            Nav header end
        ***********************************-->
            @include('backend.partials.header')
        <!--**********************************
            Header start
        ***********************************-->
        
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('backend.partials.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('backend.partials.footer')
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
    <script src="{{ asset('/') }}backend/vendor/global/global.min.js"></script>
	<script src="{{ asset('/') }}backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('/') }}backend/js/custom.min.js"></script>
    <script src="{{ asset('/') }}backend/js/dlabnav-init.js"></script>	
	
	<!-- Chart sparkline plugin files -->
    <script src="{{ asset('/') }}backend/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="{{ asset('/') }}backend/js/plugins-init/sparkline-init.js"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="{{ asset('/') }}backend/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/morris/morris.min.js"></script> 
	
    <!-- Init file -->
    <script src="{{ asset('/') }}backend/js/plugins-init/widgets-script-init.js"></script>
	
	<!-- Demo scripts -->
    <script src="{{ asset('/') }}backend/js/dashboard/dashboard.js"></script>
	
	<!-- Summernote -->
    <script src="{{ asset('/') }}backend/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="{{ asset('/') }}backend/js/plugins-init/summernote-init.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="{{ asset('/') }}backend/vendor/svganimation/vivus.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/svganimation/svg.animation.js"></script>
    <script src="{{ asset('/') }}backend/js/styleSwitcher.js"></script>
		
</body>

</html>