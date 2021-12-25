@extends('layout')
@section('title')
    Todolist | Update Tasks
@endsection
@section('content')
    <div class="container">
        <h2 class="text-center">Todo List</h2>
        <a href="/todos"><i class="fa fa-arrow-circle-o-left fa-2x mb-3" aria-hidden="true"></i></a>
        <div>
            <form action="/todos/{{ $todo->id }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <div class="input-group">
                    <input type="text" class="form-control" name="todo" value="{{ $todo->todo }}">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-primary" value="Update Task">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
