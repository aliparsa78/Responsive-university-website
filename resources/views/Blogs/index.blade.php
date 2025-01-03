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
                    <h4 class="card-title">Blogs table</h4>
                    <div class="table-responsive">
                      <table class="table table-white text-white " style="table-layout: fixed; width: 100%;">
                        <thead >
                          <tr >
                            <th class="text-white"> # </th>
                            <th class="text-white"> Blog Name </th>
                            <th class="text-white "  > Details </th>
                            <th class="text-white"> Capacity </th>
                            <th class="text-white"> Status</th>
                            <th class="text-white"> Edit</th>
                            <th class="text-white"> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  $id= 1;  ?>
                        @foreach($blogs as $blog)
                          <tr>
                            <td> {{$id++}} </td>
                            <td> {{$blog->blog_name}} </td>
                            <td style="word-wrap:break-word; word-break: break-all; overflow: auto; max-width: 120px;" > {{$blog->blog_detail}} </td>
                            <td> {{$blog->blog_capacity}} </td>
                            <td> {{$blog->status}} </td>
                            <td> 
                                <a href="blog_edit/{{$blog->id}}" ><p class="mdi mdi-border-color"></p></a>
                            </td>
                            <td>  
                                <form action="blog_delete/{{$blog->id}}" method="POST">
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