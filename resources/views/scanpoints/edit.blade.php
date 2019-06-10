@extends('layouts.app')

@section('content')
   <h1>Create a new Scandepartment</h1>
    <form action="{{route('scanpoint.update', ['id' => $ScanPoint->id])}}" method="POST">
        {{ csrf_field() }}
        @method('PATCH')
        <div>
        <input type="text" name="barcode" placeholder="Barcode" required="required" value="{{$ScanPoint->barcode}}">
            <input type="text" name="location" placeholder="Location" required="required" value="{{$ScanPoint->location}}">
            <select name="scandepartment">
                @foreach ($ScanDepartments as $ScanDepartment)
                @if ($ScanDepartment->id === $ScanPoint->department_id)
                    <option selected="selected" value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                @else
                    <option value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div>
            <button type="submit" value="Submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection

