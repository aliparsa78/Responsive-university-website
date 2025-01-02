<title>Course Edit</title>
<base href="{{asset('../public')}}">
@extends('Backend/master')
@section('content')
<div class="card">
    
    <div class="card-body">
      <h4 class="card-title">  Course Form </h4>
      <form class="form-sample" action="{{route('course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Course Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="cours_name" value="{{$course->course_name}}" />
              </div>
            </div>
          </div>
    
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Details</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="details" columns="4" rows="3" >{{$course->course_detail}}</textarea>

              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Start Date</label>
              <div class="col-sm-9">
              <input type="date" class="form-control" name="start_date" value="{{$course->start_date}}">

              </div>
            </div>
            <input type="submit" class="btn btn-success btn-right" value="Add Blog">
          </div>
        
        </div>
      </form>
    </div>
    </div>
</div>
     
@endsection