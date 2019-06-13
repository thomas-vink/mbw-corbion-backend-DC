@extends('layouts.app')

@section('content')
<h1>ScanPoints</h1>
<table class="table table-bordered mb-0">
    <thead>
      <tr>
        <th scope="col">Barcode</th>
        <th scope="col">Locatie</th>
        <th scope="col">Department</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($scanpoints))
        @foreach ($scanpoints as $scanpoint)
          <tr>
              <td>{{$scanpoint->barcode}}</td>
              <td>{{$scanpoint->location}}</td>
              <td>{{$scanpoint->department_id}}</td>
              <td>   
                  <form style="display:inline-block" action="{{action('ScanpointController@edit', ['id' => $scanpoint->id])}}" method="get">
                      @csrf
                      <button type="submit" value="Submit" class="btn btn-secondary">Edit</button>
                  </form> 
                  <form style="display:inline-block"  action="{{action('ScanpointController@destroy', ['id' => $scanpoint->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="Submit" class="btn btn-danger">Delete</button>
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





  
