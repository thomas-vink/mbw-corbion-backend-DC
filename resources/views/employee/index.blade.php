@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h1>Werknemers</h1>
    <a href="{{action('EmployeeController@create')}}"class="btn btn-success">Nieuwe medewerker aanmaken</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Personeelsnummer</th>
            <th scope="col">Aanpassen</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($Employees))
            @foreach ($Employees as $Employee)
                <tr>
                    <td>{{$Employee->name}}</td>
                    <td>{{$Employee->employeecode}}</td>
                    <td>
                        <form action="{{action('EmployeeController@destroy', ['id' => $Employee->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="Submit" class="btn btn-danger">Delete</button>
                        </form>
                        <form action="{{action('EmployeeController@edit', ['id' => $Employee->id])}}" method="get">
                            @csrf
                            <button type="submit" value="Submit" class="btn btn-secondary">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <td>Geen werknemers gevonden</td>
        @endif
        </tbody>
    </table>
    <a href="{{action('EmployeeController@create')}}"class="btn btn-success">Nieuwe medewerker aanmaken</a>
@endsection