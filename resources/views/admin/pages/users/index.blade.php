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
        <a href="{{ route('admin.user.create') }}"><button type="button" class="btn" style="color: blue">Create User</button></a>
        {{-- <a><button type="button" class="btn" style="color: blue">Delete Task</button></a>
        <a href="{{route('task.show',1)}}"><button type="button" class="btn" style="color: blue">Show Task</button></a>
        <a href="{{ route('trash.index') }}"><button type="button" class="btn" style="color: black">Trash</button></a> --}}
    </div>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>

        <tbody>
                    @foreach ( $users as $user )

                    <tr>

                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route('admin.user.show',$user->id) }}"><button type="button" class="btn" style="color: blue">View</button></a>
                             <a href="{{ route('admin.user.edit',$user->id) }}"><button type="button" class="btn" style="color: blue">Edit</button></a>
                            <form method="POST" action="{{route('admin.user.destroy',$user->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="color: blue">Remove User</button>

                            </form>
                        </td>
                    </tr>

                @endforeach
        </tbody>
    </table>

</div>



@endsection
