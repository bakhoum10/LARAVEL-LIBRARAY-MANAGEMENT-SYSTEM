@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="background-image">
            <img src="{{ asset('images/library_background.jpg') }}" alt="Library Background">
        </div>
        <div class="logo text-center">
            <img src="{{ asset('images/library.png') }}" alt="eLibrary Logo" class="logo-image">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form class="yourform" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3 class="heading">Sign In</h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-danger" value="Login" />
                </form>
                @error('username')
                    <div class='alert alert-danger'>{{ $message }}</div>
                @enderror
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection
