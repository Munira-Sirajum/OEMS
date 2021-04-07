@extends('backend.master2')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Exam</h4>
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
                                <form action="{{route('create.exam')}}" method="post">
								@csrf
									<div class="row">

									
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Subject</label>
												<select type="text" class="form-control" name="subject">
												<option value="Java">Java</option>
												<option value="C#">C#</option>
												<option value="C#">datastructure</option>
												</select>
												<!-- <input type="text" class="form-control" name="subject"> -->
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date</label>
												<input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" name="date" class="datepicker-default form-control" id="datepicker" name="date">

												<!-- <input type="text" class="form-control" name="date"> -->
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Time</label>
												<input type="text" class="form-control" name="time">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Teacher Name</label>
												<select disabled type="text" class="form-control" name="professor_id">
													<!-- @foreach( $professors as  $professor) -->
													<option value="{{auth()->user()->professor->id}}">{{auth()->user()->professor->name}}</option>
													<!-- @endforeach -->
												</select>
											</div>
										</div>
										<div class="form-group">
												<label class="form-label">Status</label>
												<select name="status" class="form-control">
													<option value="draft" >Draft</option>
													<option value="publish">Publish</option>
												</select>
												</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mark</label>
												<input type="number" class="form-control" name="mark">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select type="text" class="form-control" name="department">
												<option value="CSE">CSE</option>
												<option value="EEE">EEE</option>
												</select>
												<!-- <input type="text" class="form-control" name="department"> -->
											</div>
										</div>
										
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