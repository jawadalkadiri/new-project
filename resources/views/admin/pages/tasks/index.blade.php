@extends('admin.layout.app')
@section('title')
Users
@endsection()
@section('content')

@if(session('Success'))
    <h1>{{ session('Success') }}</h1>
@endif

<div class="container">
    <div class="mb-3">
        <a href="{{ route('admin.task.create') }}"><button type="button" class="btn" style="color: blue">Create Task</button></a>
        {{-- <a><button type="button" class="btn" style="color: blue">Delete Task</button></a>
        <a href="{{route('task.show',1)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
        <a href="{{ route('trash.index') }}"><button type="button" class="btn" style="color: black">Trash</button></a> --}}
    </div>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">User_Id</th>
            </tr>
        </thead>

        <tbody>
                    @foreach ( $tasks as $task )

                    <tr>

                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->user_id}}</td>
                        <td>
                            <a href="{{ route('admin.task.show',$task->id) }}"><button type="button" class="btn" style="color: blue">View</button></a>
                             <a href="{{ route('admin.task.edit',$task->id) }}"><button type="button" class="btn" style="color: blue">Edit</button></a>
                            <form method="POST" action="{{route('admin.task.destroy',$task->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color: blue">Remove Task</button>

                            </form>
                        </td>
                    </tr>

                @endforeach
        </tbody>
    </table>

</div>



@endsection
