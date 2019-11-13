@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create an Employee') }}</div>
                    <div class="card-body">

                            <form action="{{ route('employees.store') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Name" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('EmployeeCode') }}</label>

                                    <div>
                                        <input class="form-control form-control-lg" type="text" name="employeecode" placeholder="EmployeeCode" required="required">
                                    </div>
                                </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                             <button type="submit" value="Submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

