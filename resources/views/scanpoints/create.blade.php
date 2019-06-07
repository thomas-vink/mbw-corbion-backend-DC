@extends('layouts.app')

@section('content')

   <h1>Create a new Scandepartment</h1>
    <form action="{{route('scanpoint.store')}}" method="POST">
        {{ csrf_field() }}
        <div>

            <input type="text" name="barcode" placeholder="Barcode" required="required">
            <input type="text" name="location" placeholder="Location" required="required">
            <select name="scandepartment">
                @foreach ($ScanDepartments as $ScanDepartment)
                    <option value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                @endforeach
              </select>


        </div>

        <div>
            <button type="submit" value="Submit" class="btn btn-success">Save</button>
        </div>
    </form>

@endsection

