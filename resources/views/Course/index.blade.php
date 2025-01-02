<title>Course</title>
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
                    <h4 class="card-title">Course table</h4>
                    <div class="table table-responsive text-center float-left">
                      <table class="table table-white text-white " style="table-layout: fixed; width: 100%;">
                        <thead >
                          <tr >
                            <th class="text-white"> # </th>
                            <th class="text-white"> Course Name </th>
                            <th class="text-white "  > Details </th>
                            <th class="text-white"> Start Date </th>
                            <th class="text-white"> Edit</th>
                            <th class="text-white"> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  $id= 1;  ?>
                        @foreach($courses as $course)
                          <tr>
                            <td> {{$id++}} </td>
                            <td style="white-space: normal;"> {{$course->course_name}} </td>
                            <td  style="white-space: normal;"> {{$course->course_detail}} </td>
                            <td>{{$course->start_date}}</td>
                            <td> 
                                <a href="{{route('course.edit',$course->id)}}" class="btn btn-info">Edit</a>
                            </td>
                            <td>  
                                <form action="{{route('course.destroy',$course->id)}}" method="POST">
                                  @method('Delete')
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