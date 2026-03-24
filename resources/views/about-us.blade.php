<h1>ABOUT</h1>

@foreach ($users as $user)
    <p>{{ $user['name'] }}</p>
    <p>{{ $user['age'] }}</p>
@endforeach

<h3>USER ID: {{ $id }}</h3>
