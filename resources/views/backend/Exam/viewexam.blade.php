@extends('backend.master2')
@section('content')
<div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Exam</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Exams</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Exam</a></li>
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
										<h4 class="card-title">Exam List  </h4>
										@if(auth()->user()->professor_id)
										<a href="{{route('exam.add')}}" class="btn btn-primary">+ Add new</a>
										@endif
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table  class="display" style="min-width: 845px">
												<thead>
													<tr>
			
														<th>ID</th>
														<th>Subject</th>
														<th>Date</th>
														<th>Time</th>
														<!-- <th>Teacher Name</th> -->
														<th>Mark</th>
														<th>Department</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													
												@foreach($exams as $key=>$exam)
	
													<tr>
														<!-- <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td> -->
														<td>{{$key+1}}</td>
														<td>{{$exam['subject']}}</td>
														<td>{{$exam['date']}}</td>
														<td>{{$exam['time']}}</td>
														<!-- <td>{{$exam['techer_name']}}</td> -->
														<td>{{$exam['mark']}}</td>
														<td>{{$exam['department']}}</td>
														
														
														<td>
														@if(auth()->user()->professor_id)
															<a href="{{route('question.list',$exam->id)}}" class="btn btn-sm btn-primary"><i class="la la-view">view question</i></a>
															<a href="{{route('button.exam',$exam->id)}}" class="btn btn-sm btn-primary"><i class="la la-add">add question</i></a>
															<a href="{{route('exam.delete',$exam->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
															<a href="{{route('exam.edit',$exam->id)}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
														@else
															<a href="{{route('question.list',$exam->id)}}" class="btn btn-sm btn-primary"><i class="la la-view">view question</i></a>
															<!-- <a href="{{route('exam.delete',$exam->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a> -->
														@endif
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