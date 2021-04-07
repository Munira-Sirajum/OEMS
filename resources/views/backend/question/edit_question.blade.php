@extends('backend.master2')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="add-professor.html">Student</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="{{route('question.update',$questions->id)}}" method="post">

								@csrf
									
										<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12" id="dynamicAddS">
											<div>
												<div class="form-group">
														<label class="form-label">Question</label>
														<input type="text" class="form-control" name="name" value="{{$questions->name}}">
													</div>
													<div class="form-group">
														<label class="form-label">Option 1</label>
														<input  type="text" class="form-control" name="option_1" value="{{$questions->options->option_1}}">
													</div>
													<div class="form-group">
														<label class="form-label">Option 2</label>
														<input type="text" class="form-control" name="option_2" value="{{$questions->options->option_2}}">
													</div>
													<div class="form-group">
														<label class="form-label">Option 3</label>
														<input type="text" class="form-control" name="option_3" value="{{$questions->options->option_3}}">
													</div>
													
													<div class="form-group">
												<label class="form-label">Answer</label>
												<input type="text" class="form-control" name="answer" value="{{$questions->answer}}">
											</div>
											</div>
										</div>
										<input type="hidden" name="eexam_id" value="{{ $questions->id }}">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cencel</button>
										</div>
									</div>
									
								</form>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>


