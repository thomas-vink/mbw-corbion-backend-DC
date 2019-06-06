@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Barcode</th>
        <th scope="col">Locatie</th>
        <th scope="col">Department</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @if(isset($scanpoints))
        @foreach ($scanpoints as $scanpoint)
          <tr>
              <td></td>
              <td>{{$scanpoint->barcode}}</td>
              <td>{{$scanpoint->location}}</td>
              <td>{{$scanpoint->department_id}}</td>
              <td>
                  <form action="{{action('ScanpointController@destroy', ['id' => $scanpoint->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="Submit" class="btn btn-danger">Delete</button>
                  </form> 
              </td>
              <td>   
                  <form action="{{action('ScanpointController@edit', ['id' => $scanpoint->id])}}" method="get">
                      @csrf
                      <button type="submit" value="Submit" class="btn btn-secondary">Edit</button>
                    </form> 
              </td>
          </tr>
        @endforeach 
      @else 
        <td>Geen scanpunten</td>
      @endif
    </tbody>
</table>
  <a href="{{action('ScanpointController@create')}}"class="btn btn-success">Create</a>
@endsection





  
