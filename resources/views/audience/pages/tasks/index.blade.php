@extends('audience.layouts.app')
@section('header')
    <div class="container py-4">
        <ul class="list-group">
            @forelse ($tasks as $task)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-success">Task {{ $loop->iteration }}</span>
                        <small class="text-muted">Created: {{ $task->created_at->format('M d, Y') }}</small>
                    </div>
                    <p class="mb-1"><strong>Title:</strong> {{ $task->title }}</p>
                    <p class="mb-1"><strong>Description:</strong> {{ $task->description }}</p>
                    <p class="mb-1"><strong>Last Updated:</strong> {{ $task->updated_at->format('M d, Y') }}</p>
                    <p class="mb-0"><strong>Assigned To:</strong>
                        @foreach($task->users as $user){{ $user->name }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </p>
                </li>
                @if (!$loop->last)
                    <li class="list-group-item list-group-item-light p-0 border-0"><hr class="my-1" /></li>
                @endif
            @empty
                <li class="list-group-item text-muted">No tasks available.</li>
            @endforelse
        </ul>
    </div>
@endsection()
