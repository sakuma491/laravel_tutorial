@extends('layouts.layout')

@section('title', 'Login')

@section('content')
    <form class="form" action="/" method="post">
        <h3>Login</h3>
        @csrf
        @if(isset($message))
            <div class="alert alert-danger">{{ $message }}</div>
        @endif
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" />
            @error('username')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
            @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="/join"><p>Create an account.</p></a>
    </form>
@endsection
