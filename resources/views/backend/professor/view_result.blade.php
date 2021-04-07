@extends('backend.master2')
@section('content')
<div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Result</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Teacher</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Teacher</a></li>
                        </ol> -->
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
						</ul>
					</div>
                 
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Result</h4>
										
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="display" style="min-width: 845px">
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
													<td>
													<!-- <a href="" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a> -->

													</td>
												
                                                </tr>
												
                                                @endforeach
											
												</tbody>
											</table> 
										</div>
									</div>
                                </div>
                            </div>
							
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
            @endsection('content')