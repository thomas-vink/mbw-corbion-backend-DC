@extends('layouts.app')

@section('content')

<div class="row department-cards">

    <div class="card col-sm-6 py-2 h-100">
        <div class="card-body">
            <h5 class="card-title">Department 1</h5>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Loading: 25%</div>
            </div>                       
        </div>
    </div>

        <div class="card col-sm-6 py-2 h-100">
        <div class="card-body">
            <h5 class="card-title">Department 2</h5>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Loading: 25%</div>
            </div>                       
        </div>
    </div>

        <div class="card col-sm-6 py-2 h-100 mt-3">
        <div class="card-body">
            <h5 class="card-title">Department 3</h5>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Loading: 100%</div>
            </div>                       
        </div>
    </div>

        <div class="card col-sm-6 py-2 h-100 mt-3">
        <div class="card-body">
            <h5 class="card-title">Department 4</h5>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Loading: 50%</div>
            </div>                       
        </div>
    </div>


</div>
@endsection
