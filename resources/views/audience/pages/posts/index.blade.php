@extends('audience.layouts.app')
@section('header')
    <div class="container py-4">
        <ul class="list-group">
            @forelse ($posts as $post)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-primary">Post {{ $loop->iteration }}</span>
                        <small class="text-muted">Created: {{ $post->created_at->format('M d, Y') }}</small>
                    </div>
                    <p class="mb-1"><strong>Title:</strong> {{ $post->title }}</p>
                    <p class="mb-1"><strong>Description:</strong> {{ $post->description }}</p>
                    <p class="mb-1"><strong>Last Updated:</strong> {{ $post->updated_at->format('M d, Y') }}</p>
                    <p class="mb-0"><strong>Author:</strong> {{ $post->user->name }}</p>
                </li>
                @if (!$loop->last)
                    <li class="list-group-item list-group-item-light p-0 border-0"><hr class="my-1" /></li>
                @endif
            @empty
                <li class="list-group-item text-muted">No posts available.</li>
            @endforelse
        </ul>
    </div>
@endsection()
