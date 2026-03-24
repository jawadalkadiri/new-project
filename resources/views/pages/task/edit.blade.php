@extends('layout.app')
@section('header')
<div class="container"></div>
    <form method="POST" action="{{ route('task.update',$task->id) }}">
        @method('PUT')
        @csrf
        <label for="title"></label>
        Title:<input type="text" name="title" id="title" value="{{ $task->title }}">

        <label for="description"></label>
        Desc:<input type="text" name="description" id="description" value="{{ $task->description }}">

        <button type="submit" class="btn btn-primary">Edit Task</button>
    </form>

@endsection
