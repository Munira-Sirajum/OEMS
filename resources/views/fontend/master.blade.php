<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf_token" content="yb0E1JWfs3h3FEYLrYXiBEJ4rr3gC5PtYblGmTci">
    <link rel="icon" href="{{ asset('/') }}fontend/public/uploads/settings/YCF4SrI6FQeEKDu.png" type="image/x-icon" />
    <title>
     Online Examination System
    </title>
  

    

     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/site/css/main.css" rel="stylesheet">
     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/notify.css" rel="stylesheet">
     <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/angular-validation.css" rel="stylesheet">
      <link href="{{ asset('/') }}fontend/Themes/themeone/assets/css/sweetalert.css" rel="stylesheet">


   
  
</head>

<body ng-app="academia">
    <!-- Navigation -->
    @include('fontend.header')
     <!-- NAVIGATION -->
    
    <!-- /NAVIGATION -->
  
    

       @yield('content')

       @include('fontend.footer')
    
      
    <!-- jQuery -->

      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/jquery-3.1.1.min.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/bootstrap.min.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/slider/slick.min.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/bootstrap.offcanvas.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/jRate.min.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/wow.min.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/site/js/main.js"></script>
      <script src="{{ asset('/') }}fontend/Themes/themeone/assets/js/notify.js"></script>
         <script src="{{ asset('/') }}fontend/Themes/themeone/assets/js/sweetalert-dev.js"></script>
         <script>

        var form =document.getElementById('formsubmit');

        function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
           
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        if((minutes == 0) && (seconds==0)){
            form.submit();

        }

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);

}
 
jQuery(function ($) {
    
    var fiveMinutes = 60 * 10,
        display = $('#timeBuild');
    startTimer(fiveMinutes, display);
    
});

     </script>
    

        
      <script>
        function showSubscription(use_first = ''){
        
        if(use_first == 'yes'){
        var user_email  = $("#email").val();
        }
        else{
        var user_email  = $("#email1").val();
          
        }

      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      
      if(!re.test(user_email))
      {
          showMessage('Sorry','Please enter a valid email','error');
          return;
      }
     else{
      
      
         $.ajax({
              
                url      : 'http://wefre.in/test/subscription/email',
                type     : 'post',
                data: {

                useremail    : user_email,
                '_token'     : $('[name="csrf_token"]').attr('content')

                },

                success: function( response ){
                    var email_staus  = $.parseJSON(response);
                     if(email_staus.status == 'existed'){
                        showMessage('Ok','You are already subscribed','info');
                     }
                     else{

                        showMessage('Success','You are subscription was successfull','success'); 
                     }
                 }

               
            });

           var mytext  = ''  
           $("#email").val(mytext);
           $("#email1").val(mytext);

          
    }
  
  

  function showMessage(title,msg,type){
// console.log(u_title);
   $(function(){
            PNotify.removeAll();
            new PNotify({
                title: title,
                text: msg,
                type: type,
                delay: 2000,
                shadow: true,
                width: "300px",
                
                animate: {
                            animate: true,
                            in_class: 'fadeInLeft',
                            out_class: 'fadeOutRight'
                        }
                });
        });
  }

}
      </script>

    
 
 <script>

  $(".cs-nav-pills li").first().addClass("active");
  $(".lms-cats li").first().addClass("active");

</script>
    
    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
     

   
    
</body>


</html>