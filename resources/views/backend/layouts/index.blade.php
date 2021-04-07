@extends('backend.master1')
@section('content')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row">
				@if(auth()->user()->professor_id)
				<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Exam</p>
										<h3 class="text-white">@if(Auth::user()->role == "Professor")
										{{App\Models\Eexam::where('professor_id', Auth::user()->professor_id )->count()}}
											@else
											{{App\Models\Eexam::all()->count()}}
											@endif</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                        </div>
										<!-- <small>50% Increase in 25 Days</small> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					@else
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">{{App\Models\Student::all()->count()}}</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Exam</p>
										<h3 class="text-white">@if(Auth::user()->role == "Professor")
										{{App\Models\Eexam::where('professor_id', Auth::user()->professor_id )->count()}}
											@else
											{{App\Models\Eexam::all()->count()}}
											@endif</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                        </div>
										<!-- <small>50% Increase in 25 Days</small> -->
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Question</p>
										<h3 class="text-white">{{App\Models\AddQuestion::all()->count()}}</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
										</div>
										
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					@endif
                </div>
				
            </div>
        </div>
        @endsection('content')