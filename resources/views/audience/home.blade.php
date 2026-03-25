@extends('audience.layouts.app')
@section('header')
<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="w-100" style="max-width: 1100px;">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="text-center mb-4">Welcome to the Audience Page</h1>
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border-primary">
                            <div class="card-header bg-primary text-white">Posts</div>
                            <div class="card-body">
                                @if($posts->isEmpty())
                                    <p class="text-muted">No posts available yet.</p>
                                @else
                                    @foreach($posts as $post)
                                        <div class="mb-3">
                                            <h5 class="mb-1">{{ $post->title }}</h5>
                                            <p class="text-sm text-muted mb-0">{{ $post->description }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border-success">
                            <div class="card-header bg-success text-white">Tasks</div>
                            <div class="card-body">
                                @if($tasks->isEmpty())
                                    <p class="text-muted">No tasks available yet.</p>
                                @else
                                    @foreach($tasks as $task)
                                        <div class="mb-3">
                                            <h5 class="mb-1">{{ $task->title }}</h5>
                                            <p class="text-sm text-muted mb-0">{{ $task->description }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
