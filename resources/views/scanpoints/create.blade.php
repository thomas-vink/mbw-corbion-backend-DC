@extends('layouts.app')

@section('content')

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create a new ScanPoint') }}</div>

                    <div class="card-body">
                    <form action="{{route('scanpoint.store')}}" method="POST">
                        {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Barcode') }}</label>

                                <div class="col-md-6">
                                     <input class="form-control form-control-lg w-50"  type="text" name="barcode" placeholder="Barcode" required="required">
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input class="form-control form-control-lg w-50"  type="text" name="location" placeholder="Location" required="required">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Pick a Department') }}</label>
                                <div class="col-md-6">
                                    <select name="scandepartment" class="col-md w-50 col-form-label text-md-right">
                        @foreach ($ScanDepartments as $ScanDepartment)
                            <option  value="{{$ScanDepartment->id}}">{{$ScanDepartment->name}}</option>
                        @endforeach
                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


 