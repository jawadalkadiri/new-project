@extends('admin.layout.app')

@section('title')
Create
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Enrollment</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.enrollment.update', $enrollment->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="user_id" class="form-label">User ID</label>
                            <select name="user_id" id="user_id" class="form-control" required>
                                <option value="" selected>{{ $enrollment->user->name}}</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="task_id" class="form-label">Task ID</label>
                            <select name="task_id" id="task_id" class="form-control" required>
                                <option value="" selected>{{ $enrollment->task->title }}</option>
                                @foreach ($tasks as $task)
                                    <option value="{{ $task->id }}">
                                        {{ $task->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>




                        <button type="submit" class="btn btn-primary w-100">Update Enrollment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
