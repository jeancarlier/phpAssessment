@extends('layouts.app')

@section('content')
<div class="container">
       
<h2>List of Users</h2>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->firstName . $user->lastName}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>

    

</div>
@endsection
