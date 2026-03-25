@extends('admin.layout.app')
@section('content')
<div class="container"></div>

<ul class="list-group">
  <li class="list-group-item">{{ $enrollment->id}}</li>
  <li class="list-group-item">{{ $enrollment->user->name}}</li>
  <li class="list-group-item">{{ $enrollment->task->title}}</li>
</ul>
@endsection
