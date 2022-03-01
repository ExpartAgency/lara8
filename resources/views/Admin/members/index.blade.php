@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Members') }} 
                  <a href="{{route('contactus')}}" class="btn btn-info btn-sm" style="float: right;">Contact Us</a></div>


                <div class="card-body">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Members Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  	@foreach ($member as $key=>$row)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$row->member_name}}</td>
      <td>
      	<a href="" class="btn btn-info btn-sm">Edit</a>
      	<a href="" class="btn btn-danger btn-sm">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
