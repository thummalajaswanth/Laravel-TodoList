@extends('layout')
@section('title')
    Todolist | Add Tasks
@endsection
@section('content')
    <h2 class="text-center">Todo List</h2>
    <div class="container">
        <a href="/todos"><i class="fa fa-arrow-circle-o-left fa-2x mb-3" aria-hidden="true"></i></a>
        <div>
            <form action="/todos" method="POST">
                @csrf
                @error('todo')
                    <div class="alert-danger" id="alert">
                        <p class="text-center">{{ $message }}</p>
                    </div>
                @enderror
                <div class="input-group">
                    <input type="text" class="form-control" name="todo" placeholder="Add Your Task" autocomplete="off">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-primary" value="Add Task">
                    </div>
                </div>
                {{-- @if ($errors->first('todo'))
                    <div class="mt-3 alert-warning">
                        <p class="text-center">{{ $errors->first('todo') }}</p>
                    </div>
                @endif --}}
            </form>
        </div>
        <div class="mt-3 todoContainer">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8"><label>{{ $todo->todo }}</label></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
