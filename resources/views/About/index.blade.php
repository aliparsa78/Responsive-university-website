<title>Blogs</title>
@extends('Backend/master')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{Session::get('message')}}
      </div>
@endif
@if(session()->has('danger'))
<div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{Session::get('danger')}}
      </div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About table</h4>
                    <div class="table table-responsive text-center float-left">
                      <table class="table table-white text-white " style="table-layout: fixed; width: 100%;">
                        <thead >
                          <tr >
                            <th class="text-white"> # </th>
                            <th class="text-white"> Headline </th>
                            <th class="text-white "  > Details </th>
                            <th class="text-white"> Image </th>
                            <th class="text-white"> Edit</th>
                            <th class="text-white"> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  $id= 1;  ?>
                        @foreach($abouts as $about)
                          <tr>
                            <td> {{$id++}} </td>
                            <td style="white-space: normal;"> {{$about->headline}} </td>
                            <td  style="white-space: normal;"> {{$about->detail}} </td>
                            <td> <img src="{{asset('images/About/'.$about->image)}}" alt=""> </td>
                            <td> 
                                <a href="{{route('about.edit',$about->id)}}" class="btn btn-info">Edit</a>
                            </td>
                            <td>  
                                <form action="about_delete/{{$about->id}}" method="POST">
                                  @csrf
                                  <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>
                          </tr>
                        @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
     
@endsection