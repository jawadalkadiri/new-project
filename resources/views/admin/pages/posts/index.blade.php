@extends('admin.layout.app')
@section('title')
Posts
@endsection()
@section('content')

@if(session('Success'))
    <h1>{{ session('Success') }}</h1>
@endif

<div class="container">
    <div class="mb-3">
        <a href="{{ route('admin.post.create') }}"><button type="button" class="btn" style="color: blue">Add Post</button></a>
        {{-- <a><button type="button" class="btn" style="color: blue">Delete Task</button></a>
        <a href="{{route('task.show',1)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
        <a href="{{ route('trash.index') }}"><button type="button" class="btn" style="color: black">Trash</button></a> --}}
    </div>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">UserID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        <tbody>
                    @foreach ( $posts as $post )

                    <tr>

                        <td>{{$post->id}}</td>
                        <td>{{$post->user_id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>

                        <td>
                            <a href="{{ route('admin.post.show',$post->id) }}"><button type="button" class="btn" style="color: blue">View</button></a>
                             <a href="{{ route('admin.post.edit',$post->id) }}"><button type="button" class="btn" style="color: blue">Edit</button></a>
                            <form method="POST" action="{{route('admin.post.destroy',$post->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color: blue">Remove Post</button>

                            </form>
                        </td>
                    </tr>

                @endforeach
        </tbody>
    </table>

</div>



@endsection
