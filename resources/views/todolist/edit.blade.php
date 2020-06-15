@extends('layouts.layout')

@section('title', 'To Do List')

@section('content')
    <form class="form" action="/todolist/edit" method="post">
        <h3>Edit Task</h3>
        @csrf
        <input type="hidden" name="id" value="{{ $task->id }}" />
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $task->title }}" />
            @error('title')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="10">{{ $task->body }}</textarea>
            @error('body')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}" />
            @error('due_date')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label><br />
            <select class="custom-select" name="status">
                <option value="0" @if($task->status === 0) selected @endif>Not Completed</option>
                <option value="1" @if($task->status === 1) selected @endif>Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <p><a href="/todolist">Return to the main page.</a></p>
    </form>
@endsection
