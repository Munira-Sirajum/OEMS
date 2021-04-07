@extends('fontend.master')
<div  style="background-image: url(public/images/login-bg.png);background-repeat: no-repeat;background-color: #f8fafb">

    <div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
        <div class="row cs-row" style="margin-top: 180px">

        

            <div class="col-md-12">

                <div class="cs-box-resize  login-box">

                 <h4 class="text-center login-head">Login</h4>

                   

                    <!-- Form Login/Register -->

                    	<form method="POST" action="{{route('student.sign')}}" accept-charset="UTF-8" name="loginForm" novalidate="" class="loginform"><input name="_token" type="hidden" value="yb0E1JWfs3h3FEYLrYXiBEJ4rr3gC5PtYblGmTci">
                        @csrf


                        	



                        <div class="form-group">



                        	<label for="email">Email Address:</label>



                            <input class="form-control" ng-model="email" required="true" id="email" placeholder="Username/Email" ng-class="{&quot;has-error&quot;: loginForm.email.$touched &amp;&amp; loginForm.email.$invalid}" name="email" type="text">



        								<div class="validation-error" ng-messages="loginForm.email.$error" >



        									<p ng-message="required">This Field Is Required</p>



        									<p ng-message="email">Please Enter Valid Email</p>



        								</div>



                        </div>



                        <div class="form-group">

                            <label for="pwd">Password:</label>



                           <input class="form-control instruction-call" placeholder="Password" ng-model="registration.password" required="true" id="password" ng-class="{&quot;has-error&quot;: loginForm.password.$touched &amp;&amp; loginForm.password.$invalid}" ng-minlength="5" name="password" type="password" value="">



          							<div class="validation-error" ng-messages="loginForm.password.$error" >



          								<p ng-message="required">This Field Is Required</p>



          								<p ng-message="minlength">The Password Is Too Short</p>



          							</div>



                        </div>





                         <div class="form-group">



                             




                        </div>



                      	<button type="submit" class="btn button btn-primary btn-lg" ng-disabled='!loginForm.$valid' style="margin-left: 85px;">Login</button>



                    </form>

                    <br>



                     <div class="row">

                      <div class="col-md-6" >

                    
                    </div>

                     <div class="col-md-6" >

                    
                  </div>

                    

                    <div class="col-md-12">

                    


                    </div>

        </div>

        <br>

                    <!-- <ul class="login-links mt-2">

                               <li><a href="register.html">Register</a></li>

                               <li> <a href="javascript:void(0);" class="pull-left" data-toggle="modal" data-target="#myModal" ><i class="icon icon-question"></i> Forgot Password</a></li>

                            </ul> --> 



                    <!-- Form Login/Register

                </div>

            </div>

        </div>

    </div>

    <!-- Login Section -->





	<!-- Modal -->



<div id="myModal" class="modal fade" role="dialog">



  <div class="modal-dialog">



	<form method="POST" action="http://wefre.in/test/users/forgot-password" accept-charset="UTF-8" name="passwordForm" novalidate="" class="loginform"><input name="_token" type="hidden" value="yb0E1JWfs3h3FEYLrYXiBEJ4rr3gC5PtYblGmTci">



    <!-- Modal content-->



    <div class="modal-content">



      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal">&times;</button>



        <h4 class="modal-title">Forgot Password</h4>



      </div>



      <div class="modal-body">



        <div class="form-group">

          <label>Email Address</label>



				 







	    		<input class="form-control" ng-model="email" required="true" placeholder="Email" ng-class="{&quot;has-error&quot;: passwordForm.email.$touched &amp;&amp; passwordForm.email.$invalid}" name="email" type="email">



	<div class="validation-error" ng-messages="passwordForm.email.$error" >



		<p ng-message="required">This Field Is Required</p>



		<p ng-message="email">Please Enter Valid Email</p>



	</div>







			</div>



      </div>



      <div class="modal-footer">



      <div class="pull-right">



        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



        <button type="submit" class="btn btn-primary" ng-disabled='!passwordForm.$valid'>Submit</button>



        </div>



      </div>



    </div>



	</form>



  </div>



</div>

</div>