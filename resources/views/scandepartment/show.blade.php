@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Department</h1>
	
	<h4>Amount of ScanPoints this ScanDepartments has</h4>

	<table class="table table-bordered">		
		<thead>
			<tr>
				<th scope="col">ScanPoints</th>
				<th scope="col">Where</th>
			</tr>
		</thead>
		<tbody>
		@foreach($ScanDepartments as $ScanDepartment)
		<tr>
			<td></td>
			<td></td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<a class="btn btn-secondary" href="{{ URL::to('scandepartment') }}">Back to all the ScanDepartments</a>
</div>
@endsection