<title>About Form</title>
<base href="{{asset('/public')}}">
@extends('Backend/master')
@section('content')
<div class="card">
   <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <div class="">
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Head line</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="headline" value="{{$about->headline}}" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Image</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="image" />
              </div>
            </div>
          </div>
    
          <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Details</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="details" columns="4" rows="3" >{{$about->detail}}</textarea>

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