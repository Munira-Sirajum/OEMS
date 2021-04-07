@extends('backend.master2')
<div class="content-body">
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
                                    <form action="{{route('exam.update',  $exams->id)}}" method="post">
                                    @csrf
                                        <div class="row">
    
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Subject</label>
                                                    <input type="text" class="form-control" name="subject" value="{{$exams->subject}}">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Date</label>
                                                    <input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" name="date" class="datepicker-default form-control" id="datepicker" name="date" value="{{$exams->date}}">
    
                                                    <!-- <input type="text" class="form-control" name="date"> -->
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Time</label>
                                                    <input type="text" class="form-control" name="time" value="{{$exams->time}}">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Teacher Name</label>
                                                    <select type="text" class="form-control" name="professor_id">
                                                        @foreach( $professors as  $professor)
                                                        <option value="{{$professor->id}}">{{$professor->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
												<label class="form-label">Status</label>
												<select name="status" class="form-control">
													<option value="draft" >Draft</option>
													<option value="published">Published</option>
												</select>
												</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Mark</label>
                                                    <input type="number" class="form-control" name="mark" value="{{$exams->mark}}">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Department</label>
                                                    <input type="text" class="form-control" name="department" value="{{$exams->department}}">
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
</div>
