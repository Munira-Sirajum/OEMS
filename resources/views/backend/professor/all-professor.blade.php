@extends('backend.master2')
@section('content')
<div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Teacher</h4>
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
										<h4 class="card-title">Teacher</h4>
										@if(auth()->user()->id == 1)
										<a href="{{url('addprofessor')}}" class="btn btn-primary">+ Add new</a>
										@endif
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="display" style="min-width: 845px">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Email</th>
												
														<th>Mobile</th>
													
														<th>Department</th>
														
														<th>Action</th>
													</tr>
												</thead>
												<tbody>

											 @foreach($professors as $professor)
												<tr>
														<td>{{$professor['id']}}</td>
														<td>{{$professor['name']}}</td>
														<td>{{$professor['email']}}</td>
													
														<td>{{$professor['mobile_number']}}</td>
												
														<td><a href="javascript:void(0);"><strong>{{$professor['department']}}</strong></a></td>
														
														<td>															
														<a href="{{route('professor.profile',$professor->id)}}" class="btn btn-sm btn-primary"><i class="la la-view">view</i></a>

															@if(auth()->user()->id == 1)
															<!-- <a href="{{route('professor.profile',$professor->id)}}" class="btn btn-sm btn-primary"><i class="la la-view">view</i></a> -->
															<a href="{{route('professor.edit',$professor->id)}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>

															<a href="{{route('professor.delete',$professor->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
															@endif
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