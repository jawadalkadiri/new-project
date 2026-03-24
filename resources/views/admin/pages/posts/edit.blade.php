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
                    <h4 class="mb-0">Edit Post</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.post.update',['post'=>$post->id]) }}">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value="{{ $post->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Enter description" value="{{ $post->description }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="user_id" class="form-label">User_id</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" placeholder="user_id" value="{{ $post->user_id }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Edit Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
