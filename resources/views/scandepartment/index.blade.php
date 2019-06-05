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
            @foreach($ScanDepartments as $ScanDepartment)
            		<tr>
                        <td>{{ $ScanDepartment->name }}</td>
                        <td>
                        	<a href="/scandepartment/{{$ScanDepartment->id}}/edit" class="btn btn-secondary">Edit</a> 
                        	<form style="display:inline-block" action="{{action('ScanDepartmentController@destroy', ['id' => $ScanDepartment->id])}}" method="post">
								@csrf
								@method('DELETE')
								<button onclick="return confirm('Are you sure you want to Delete a ScanDepartment?')" class="btn btn-danger" type="submit">Delete</button>
							</form>
						</td>		
            		</tr>
            @endforeach
		</tr>
	</table>

    <a class="btn btn-success" href="{{ route('scandepartment.create') }}">Create</a>


@endsection