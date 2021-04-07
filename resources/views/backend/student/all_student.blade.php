@extends('backend.master2')
@section('content')
<div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Student</a></li>
                        </ol>
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
										<h4 class="card-title">All Students List  </h4>
										<a href="{{url('addstudent')}}" class="btn btn-primary">+ Add new</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table  class="display" style="min-width: 845px">
												<thead>
													<tr>
														
														<th>ID</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile</th>
														<!-- <th>Password</th> -->
														<th>Department</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												@foreach($students as $student)
													<tr>
														<!-- <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td> -->
														<td>{{$student['id']}}</td>
														<td>{{$student['name']}}</td>
														<td>{{$student['email']}}</td>
													
														
														<td><a href="javascript:void(0);"><strong>{{$student['mobile_number']}}</strong></a></td>
														<!-- <td><a href="javascript:void(0);"><strong>{{$student['department']}}</strong></a></td> -->
														<td>{{$student['department']}}</td>
														<td>
															<a href="{{route('student.edit',$student->id)}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="{{route('student.delete',$student->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
															<a href="{{route('student.profile',$student->id)}}" class="btn btn-sm btn-primary"><i class="la la-view">view</i></a>

														</td>
													</tr>
													@endforeach()
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
            @endsection('content')