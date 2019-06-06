@extends('layouts.app')

@section('content')
   
   <h1>Create a new Scandepartment</h1>
    <form action="{{ route('scandepartment.index') }}" method="POST">
        {{ csrf_field() }}
        <div>

            <input type="text" name="name" placeholder="Scan Department" required="required">

        </div>

        <div>
            <button type="submit" value="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection