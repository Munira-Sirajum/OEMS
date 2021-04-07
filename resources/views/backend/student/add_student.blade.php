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
                                <form action="{{url('student/add')}}" method="post">
								@csrf
									<div class="row">

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label"> Name</label>
												<input type="text" class="form-control" name="name">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email Here</label>
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control" pattern=".{4,}" name="password">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="number" class="form-control"  name="mobile_number">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select type="text" class="form-control" name="gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
												</select>
												<!-- <input type="text" class="form-control" name="gender"> -->
											</div>
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
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<!-- <label class="form-label">Role</label> -->
												<input type="hidden" class="form-control" name="role" value="Student" readonly>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<!-- <label class="form-label">Status</label> -->
												<input type="hidden" class="form-control" name="status" value="Active" readonly>
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