@extends('layouts.app')

@section('content')
 <div class="container">
   <h1>Create a new Scandepartment</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{action('ScanDepartmentController@update', ['id' => $ScanDepartment->id])}}">
        @csrf
        @method('PUT')

    <div class="form-group row">
			<label for="scanDepartment_name" class="col-sm-4 col-form-label text-md-right">{{ __('ScanDepartment Name') }}</label>

			<div class="col-md-6">
				<input id="scanDepartment_name" type="text" name="scanDepartment_name" value="{{ old('scanDepartment_name', $ScanDepartment->scanDepartment_name) }} " required autofocus>
    		</div>
    </div>

    <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>                             
            </div>
        </div>
	</form>
</div>
@endsection




        

