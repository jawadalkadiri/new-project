@extends('layout.app')

@section('header')

<h1>TASK</h1>

<div class="container">

    <div class="mb-3">
        <a href="{{ route('task.create') }}"><button type="button" class="btn" style="color: blue">Create Task</button></a>
        <a><button type="button" class="btn" style="color: blue">Delete Task</button></a>
        <a href="{{route('task.show',1)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
        <a href="{{ route('trash.index') }}"><button type="button" class="btn" style="color: black">Trash</button></a>
    </div>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
                    @foreach ( $tasks as $task )
                    @if($task->status == 1)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            <a href="{{ route('task.edit',$task->id) }}"><button type="button" class="btn" style="color: blue">Edit Task</button></a>
                             <a href="{{route('task.show',$task->id)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
                            <form method="POST" action="{{route('task.soft_destroy',$task->id)}}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn" style="color: blue">Remove Task</button>

                            </form>

                             <form method="POST" action="{{route('task.destroy',$task->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color: blue">Delete Task</button>

                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
        </tbody>
    </table>

</div>

@endsection
