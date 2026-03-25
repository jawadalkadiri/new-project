@extends('admin.layout.app')
@section('content')
<div class="container"></div>

<ul class="list-group">
  <li class="list-group-item">{{ $task->id}}</li>
  <li class="list-group-item">{{ $task->title}}</li>
  <li class="list-group-item">{{ $task->description}}</li>
  <li class="list-group-item">{{ $task->user_id}}</li>
  <li class="list-group-item"> {{ $task->user->name }}</li>

@endsection
