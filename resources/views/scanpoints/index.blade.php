@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Barcode</th>
        <th scope="col">Locatie</th>
        <th scope="col">Department</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($scanpoints as $scanpoint)
            <tr>
                <td>{{$scanpoint->barcode}}</td>
                <td>{{$scanpoint->location}}</td>
                <td>{{$scanpoint->department_id}}</td>
            </tr>
    @endforeach
    </tbody>
  </table>

@endsection





  
