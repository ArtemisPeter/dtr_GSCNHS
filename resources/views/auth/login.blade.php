@extends('layout.default')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 35rem;">
      <div class="card-header">
        <img src="public/dist/img/cityhigh/school-logo.png" style="width: 15%;" class="mx-auto d-block">
      </div>
      <div class="card-body">
        <form id='signin' method="POST" action="{{route('loginPost')}}">
            @csrf

            @if ($errors -> any())
                <div class="alert alert-danger" id='alert' role="alert">
                    @foreach ($errors->all() as $error )
                        {{$error}}
                    @endforeach
                </div>
            @endif


          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button type="submit" class="btn btn-success btn-lg btn-md w-100 mb-4">Log in</button>
        </form>

      </div>
    </div>
  </div>
@endsection
