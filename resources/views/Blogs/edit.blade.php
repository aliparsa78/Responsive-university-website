<title>Blog Form</title>
<base href="{{asset('public')}}">

@extends('Backend/master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Blog edit table</h4>
    <form class="form-sample" action="update_blog/{{$blog->id}}" method="POST">
        @csrf
        <div class="">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Blog Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="blog_name" value="{{$blog->blog_name}}" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Capecity</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="capacity" value="{{$blog->blog_capacity}}" />
              </div>
            </div>
          </div>
    
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" >Status</label>
              <div class="col-sm-9">
                <select class="form-control" name="status">
                  <option value="1" <?php if($blog->status == 1){echo "selected";} ?> >Active</option>
                  <option value="0"<?php if($blog->status=='0'){echo "selected";} ?>>DeActive</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Details</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="details" columns="4" rows="3">{{$blog->blog_detail}}</textarea>

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