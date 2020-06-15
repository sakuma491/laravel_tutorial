@extends('layouts.layout')

@section('title', 'Join')

@section('content')
    <form class="form" action="/join" method="post">
        <h3>Sign up</h3>
        @csrf
        @if(isset($message))
            <div class="alert alert-danger">{{ $message }}</div>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" />
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('name') }}" />
            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" />
            @error('username')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
            <label class="show-password">
                <input type="checkbox" onclick="showPassword()" />
                Show Password
            </label>
            @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
        <p>You already have an account? <a href="/">Click here.</a></p>
    </form>
@endsection

@section('javascript')
    <script src="{{ asset('js/showPassword.js') }}"></script>
@endsection
