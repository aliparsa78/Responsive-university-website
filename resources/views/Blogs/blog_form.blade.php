<title>Blog Form</title>
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
      <h4 class="card-title">Horizontal Two column</h4>
      <form class="form-sample" action="blog" method="POST">
        @csrf
        <div class="">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Blog Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="blog_name" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Capecity</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="capacity" />
              </div>
            </div>
          </div>
    
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" >Status</label>
              <div class="col-sm-9">
                <select class="form-control" name="status">
                  <option value="1">Active</option>
                  <option value="0">DeActive</option>
                </select>
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
            <input type="submit" class="btn btn-success btn-right" value="Add Blog">
          </div>
        
        </div>
      </form>
    </div>
    </div>
</div>
     
@endsection