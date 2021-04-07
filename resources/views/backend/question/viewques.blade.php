@extends('backend.master2')
@section('content')
<div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Question</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Question</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Question</a></li>
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
										<h4 class="card-title">All Questions List  </h4>
										<!-- @if(auth()->user()->professor_id)
										<a href="{{route('question.add')}}" class="btn btn-primary">+ Add new</a>
										@endif -->
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														
														<th>SL</th>
														<th>Question</th>
														
														<th>Option 1</th>
														<th>Option 2</th>
														<th>Option 3</th>
														<th>Answer</th>
														@if(auth()->user()->professor_id)
														<th>Action</th>
														@endif
													</tr>
												</thead>
												<tbody>
												@foreach($questions as $key=>$question )
												   
													<tr>
														<!-- <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td> -->
														<td>{{$key+1}}</td>
														<td>{{$question['name']}}</td>
														<td>{{$question->options['option_1']}}</td>
														<td>{{$question->options['option_2']}}</td>
														<td>{{$question->options['option_3']}}</td>
														<td>{{$question['answer']}}</td>
													
														
														@if(auth()->user()->professor_id)
														<td>
															<a href="{{route('question.edit',$question->id)}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="{{route('question.delete',$question->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a> 
														</td>
														
														@endif
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