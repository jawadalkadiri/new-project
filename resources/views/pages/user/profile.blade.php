@extends('layout.app')
        @section('header')

        <h1>PROFILE</h1>
        {{ $users['id'] }}
        {{ $users['name'] }}
        {{ $users['last_name'] }}
        {{ $users['gender'] }}
        {{ $users['nationality'] }}
        {{ $users['age'] }}
        {{ $users['address'] }}
        @foreach ($users['skills'] as $skill)
            <h1>{{ $skill }}</h1>
        @endforeach
        <img src="{{ asset('img/'.$users['img']) }}">
        @endsection
