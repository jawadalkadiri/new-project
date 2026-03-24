@extends('admin.layout.app')
@section('content')
<div class="container"></div>

<ul class="list-group">
  <li class="list-group-item">{{ $post->id}}</li>
  <li class="list-group-item">{{ $post->user_id}}</li>
  <li class="list-group-item">{{ $post->title}}</li>
  <li class="list-group-item">{{ $post->description}}</li>

</ul>
@endsection
