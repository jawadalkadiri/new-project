@extends('admin.layout.app')
@section('content')
<div class="container"></div>

<ul class="list-group">
  <li class="list-group-item">{{ $user->id}}</li>
  <li class="list-group-item">{{ $user->name}}</li>
  <li class="list-group-item">{{ $user->email}}</li>
  <li class="list-group-item"></li>
    <ul>
      @foreach($user->posts as $post)
        <li>{{ $post->title }}</li>
      @endforeach
    </ul>
  </li>
</ul>
@endsection
