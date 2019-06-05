@extends('layouts.app')

@section('content')
    <h1>Users index</h1>
    @foreach($users as $user)
        <ul>

            <li>{{ $user->name }}</li>
        </ul>
    @endforeach
@endsection