@extends('layouts.layout')

@section('title', 'To Do List')

@section('content')
    <form class="form" action="/todolist/add" method="post">
        <h3>Add Task</h3>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
            @error('title')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="10">{{ old('body') }}</textarea>
            @error('body')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control @error('body') is-invalid @enderror" name="due_date" value="{{ old('due_date') }}" />
            @error('due_date')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label><br />
            <select class="custom-select" name="status">
                <option value="0" selected>Not Completed</option>
                <option value="1">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <p><a href="/todolist">Return to the main page.</a></p>
    </form>
@endsection
