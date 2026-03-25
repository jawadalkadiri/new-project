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
        <a href="{{ route('admin.enrollment.create') }}"><button type="button" class="btn" style="color: blue">Add Enrollment</button></a>
        {{-- <a><button type="button" class="btn" style="color: blue">Delete Task</button></a>
        <a href="{{route('task.show',1)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
        <a href="{{ route('trash.index') }}"><button type="button" class="btn" style="color: black">Trash</button></a> --}}
    </div>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        <tbody>
                    @foreach ( $enrollments as $enrollment )

                    <tr>

                        <td>{{$enrollment->id}}</td>
                        <td>{{$enrollment->user->name}}</td>
                        <td>{{$enrollment->task->title}}</td>
                        <td>{{$enrollment->task->description}}</td>

                        <td>
                            <a href="{{ route('admin.enrollment.show',$enrollment->id) }}"><button type="button" class="btn" style="color: blue">View</button></a>
                             <a href="{{ route('admin.enrollment.edit',$enrollment->id) }}"><button type="button" class="btn" style="color: blue">Edit</button></a>
                            <form method="POST" action="{{route('admin.enrollment.destroy',$enrollment->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color: blue">Remove Enrollment</button>

                            </form>
                        </td>
                    </tr>

                @endforeach
        </tbody>
    </table>

</div>



@endsection
