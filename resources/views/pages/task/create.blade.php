@extends('layout.app')
@section('header')
<div class="container">
    <form method="POST" action="{{ route('task.store') }}">
        @csrf
        <label for="title"></label>
        Title:<input type="text" name="title" id="title">

        <label for="description"></label>
        Desc:<input type="text" name="description" id="description">



        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>

@endsection
