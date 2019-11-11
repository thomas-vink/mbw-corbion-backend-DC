@extends('layouts.app')

@section('content')

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit a Scandepartment') }}</div>
                        <div class="card-body">
                            <form action="{{route('scandepartment.update', ['id' => $ScanDepartment->id])}}" method="POST">
                                @csrf
                                @method('PATCH')

                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Scandepartment') }}</label>

                                    <div>
                                        <input class="form-control form-control-lg" type="text" placeholder="ScanDepartment" name="name" placeholder="ScanDepartment" required="required" value="{{ $ScanDepartment->name }}">
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                             <button type="submit" value="Submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

@endsection

