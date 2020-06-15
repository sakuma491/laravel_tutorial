@extends('layouts.layout')

@section('title', 'To Do List')

@section('content')
    <div class="task">
        <a href="/todolist/add"><button class="btn btn-primary">Add Task</button></a>
        <div class="todolist">
            <h3>To Do List</h3>
            <table class="table text-nowrap">
                <thead>
                    <th scope="col">Title</th>
                    <th scope="col">Due Date</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach($list as $task)
                        @if($task->status === 0)
                            <tr>
                                <td><a href="/todolist/detail/{{ $task->id }}">{{ $task->title }}</a></td>
                                <td>{{ $task->due_date }}</td>
                                <td><a href="/todolist/edit/{{ $task->id }}">Edit</a></td>
                                <td><a href="/todolist/delete/{{ $task->id }}">Delete</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="completed">
            <h3>Completed</h3>
            <table class="table text-nowrap">
                <thead>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($list as $task)
                        @if($task->status === 1)
                            <tr>
                                <td><a href="/todolist/detail/{{ $task->id }}">{{ $task->title }}</a></td>
                                <td>{{ $task->due_date }}</td>
                                <td><a href="/todolist/edit/{{ $task->id }}">Edit</a></td>
                                <td><a href="/todolist/delete/{{ $task->id }}">Delete</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
