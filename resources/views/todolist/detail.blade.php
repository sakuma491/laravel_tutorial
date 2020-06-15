@extends('layouts.layout')

@section('title', 'To Do List')

@section('content')
    <div class="detail">
        <h3>{{ $task->title }}</h3>
        <table class="table table-borderless">
            <tr>
                <th>Start Date</th>
                <td>{{ $task->created_at->format('Y/m/d') }}</td>
                <th>Due Date</th>
                <td>{{ $task->due_date }}</td>
            </tr>
            <tr>
                <th>Last Updated</th>
                <td>{{ $task->updated_at->format('Y/m/d') }}</td>
                <th>Status</th>
                @if($task->status === 0)
                    <td>Not Completed</td>
                @elseif($task->status === 1)
                    <td>Completed</td>
                @endif
            </tr>
        </table>
        <div class="description">
            <h5>Description</h5>
            <p>{!! nl2br(e($task->body)) !!}</p>
        </div>
    </div>
    <p><a href="/todolist">Return to the main page.</a></p>
@endsection
