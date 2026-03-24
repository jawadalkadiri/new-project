@extends('layout.app')
@section('header')
<div class="container"></div>

{{ $task->id}}
{{ $task->title}}
{{ $task->description}}

@endsection
