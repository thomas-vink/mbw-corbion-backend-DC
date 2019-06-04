@extends('layouts.app')

@section('content')

	<h1>Scandepartments</h1>

	 <table class="table table-bordered mb-0">
        <thead>
           	<tr>
                <th scope="col">ScanDepartments</th>
                <th scope="col">Option</th>
                
            </tr>
        </thead>
            <tbody>
            <tr>
            	@foreach($ScanDepartments as $ScanDepartment)
            	
                        <td>{{ $ScanDepartment->name }}</td>
                        <td>
                        	<a href="/scandepartment/{{$ScanDepartment->id}}/edit">Edit</a> 
                        	<button type="button" class="btn btn-secondary" href="/scandepartment/{{$ScanDepartment->id}}/edit">Edit</button> 
                        	<form action="{{action('ScanDepartmentController@destroy', ['id' => $ScanDepartment->id])}}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit">Delete</button>
							</form>
			</td>

            </tr>
                @endforeach
		</tr>
	</table>

    <a class="btn btn-success"  href="{{ route('scandepartment.create') }}">Create</a>


@endsection