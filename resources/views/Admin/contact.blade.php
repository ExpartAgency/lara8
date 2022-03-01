@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{('Create Classes') }}

               <a href="{{route('storecontact')}}" class="btn btn-danger btn-sm" style="float:right;">All Classes</a>
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="card-body">

                @if(session()->has('successs'))
                    <strong class="text-success">{{session()->get('successs')}}</strong>
                    @endif

                <form action="{{route('storecontact')}}" method="post">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Class Name </label>
                    <input type="text" class="form-control @error('text') is-invalid @enderror" name="Name" value="{{ old('Name') }}" class="form-control"  placeholder="Enter your class name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div><div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Class Name </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="form-control"  placeholder="Enter your class name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div><div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Class Name </label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" class="form-control"  placeholder="Enter your class name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                  
                    @error('class_name')
                    <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
