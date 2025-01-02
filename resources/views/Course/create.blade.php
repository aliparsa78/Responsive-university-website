<title>Course Form</title>
<base href="../public">
@extends('Backend/master')
@section('content')
<div class="card">
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{Session::get('message')}}
        </div>
    @endif
    <div class="card-body">
      <h4 class="card-title">  Course Form </h4>
      <form class="form-sample" action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Course Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="cours_name" />
              </div>
            </div>
          </div>
    
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Details</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="details" columns="4" rows="3" ></textarea>

              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Start Date</label>
              <div class="col-sm-9">
              <input type="date" class="form-control" name="start_date">

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