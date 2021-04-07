<style>
    
    .content_box{
    float:left;
    width:100%;
}
.left_bar{
    float:left;
    width:15%;
    background:#eaf4ff;
    height:100vh;
}

.right_bar{
    float:left;
    width:85%;
    padding:15px;
        /*border-left:1px solid #ccc;*/
        height:100%;
}

.nav-tabs--vertical li{
    float:left;
    width:100%;
    padding:0;
    position:relative;
}


.nav-tabs--vertical li a{
    float:left;
    width:100%;
    padding: 15px;
    border-bottom:1px solid #adcff7;
    color:#1276F0;
}

.nav-tabs--vertical li a.active::after {
    content: "";
    border-color: #1276F0;
    border-style: solid;
    position: absolute;
    right: -8px;
    /* border-top: transparent; */
    border-right: transparent;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    /*border-bottom: 16px solid #1276F0;*/
      border-bottom: 16px solid #fff;
    border-top: 0;
    transform: rotate(270deg);
    z-index:999;
}
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="content_box">
	<!-- <div class="left_bar">
	    <ul class=" nav-tabs--vertical nav" role="navigation">
		<li class="nav-item">
			<a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">Lorem</a>
		</li>
		<li class="nav-item">
			<a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Ipsum</a>
		</li>
		<li class="nav-item">
			<a href="#dolor" class="nav-link " data-toggle="tab" role="tab" aria-controls="dolor">Dolor</a>
		</li>
		<li class="nav-item">
			<a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Sit Amet</a>
		</li>
	</ul>
	</div> -->
    <div class="right_bar ">
        	<div class="tab-content ">
		<div class="tab-pane fade show active" id="lorem" role="tabpanel">
<!--		   <div class="row">-->
<!--		        <div class="col-md-4">-->
<!--		        <p> <b>Tester</b> </p>-->
<!--		        <p> UI Developer</p>-->
<!--		    </div>-->
<!--		     <div class="col-md-8 text-right">-->
<!--		        <p> +91-938923748 </p>-->
<!--		        <p> Test@gamil.com </p>-->
<!--		    </div>-->
		
<!--		     <div class="col-md-12">-->
<!--		              <hr style="margin:5px 0;"/>  -->
		       
<!--		         <dl class="row">-->
<!--  <dt class="col-sm-2">Description lists :</dt>-->
<!--  <dd class="col-sm-10">  <p>-->
<!--		             <small>Collaborate closely with project management and development to conceptualize, design, and prototype web features and applications-->
<!--Work with cross-functional teams to create UI components and designs-->
<!--Create static and dynamic prototypes-->
<!--Assist with the development of front-end features-->
<!--Create front-end applications from concept to implementation-->
<!--Conceptualize ideas that bring simplicity and user friendliness to complex design roadblocks-->
<!--Create wireframes, storyboards, user flows, process flows, and site maps to effectively communicate ideas-->
<!--Work with development and QA teams to ensure compatibility and quality-->
<!--Conduct user research and evaluate user feedback-->
<!--Other duties as assigned</small>-->
<!--		         </p></dd>-->

<!--  <dt class="col-sm-2">Education :</dt>-->
<!--  <dd class="col-sm-10">-->
<!--     <p>-->
<!--		             <small>Collaborate closely with project management and development to conceptualize, design, and prototype web features and applications-->
<!--Work with cross-functional teams</small>-->
<!--</p>-->
<!--  </dd>-->
<!--  <dt class="col-sm-2">Experience :</dt>-->
<!--  <dd class="col-sm-10">-->
<!--     <p>-->
<!--		             <small>7 Years</small>-->
<!--</p>-->
<!--  </dd>-->
<!--  <dt class="col-sm-2">Score :</dt>-->
<!--  <dd class="col-sm-10">-->
<!--     <p>-->
<!--		             <small>78.023</small>-->
<!--</p>-->
<!--  </dd>-->
<!--</dl>-->
<!--		         </div>-->
<!--		   </div>-->
<div id='printMe'>
<table class="table table-bordered">
    <!-- <thead>
        <h2>Result</h2>
      <tr>
        <th>Exam Name</th>
        <th>Date</th>
        <th>Result</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>good</td>
        </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>Good</td>
      </tr>
      
    </tbody>
  </table>
		</div>
		<div class="tab-pane fade" id="ipsum" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>good</td>
      </tr>
      
    </tbody>
    </table>
		</div>
		<div class="tab-pane fade" id="dolor" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>good</td>
      </tr>
      
    </tbody>
  </table>
		</div>
		<div class="tab-pane fade" id="sit-amet" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>good</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>good</td>
      </tr>
      
    </tbody> -->
    
    <thead>
													<tr>
														
														<th>Exam ID</th>
                            <th>Subject</th>
														<th>Student ID</th>
												    
														<th>Marks</th>
														
														<!-- <th>Action</th> -->
													</tr>
												</thead>
                            <tbody>

                               @foreach($marks as $mark)

                                 <tr>
                                    <td>{{$mark->eexam_id}}</td>
                                    <td>{{$mark->subject}}</td>
														        <td>{{$mark->student_id}}</td>
														        <td>{{$mark->result}}</td>
                                  
													        <!-- <td> -->
													<!-- <a href="" class="btn btn-sm btn-primary"><i class="la la-trash-feedback">Feedback</i></a> -->

													        <!-- </td> -->
												
                                    </tr>
                                
                                 @endforeach
											
												</tbody>
  </table>
  <div>
  <button onclick="printDiv('printMe')">Print</button> 

	</div>
	</div>
    </div>
</div>




<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>