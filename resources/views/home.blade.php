@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Current Shift<span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Scans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Overruled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Spills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Week View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Employees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inspection Points</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Daily Percentage</a>
      </li>
    </ul>
  </div>
</nav>

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

    <div class="row"></span>">
  <div class="col-md-2" style="border: 3px solid black; font-size: 150%;">Amount of This shift scans:</div>
  <div class="col-md-2" style="border: 3px solid black; font-size: 150%;">Amount of Yesterdays scans:</div>
  <div class="col-md-2" style="border: 3px solid black; font-size: 150%;">Amount of this week scans:</div>
  <div class="col-md-2" style="border: 3px solid black; font-size: 150%;">Amount of overruled used this week:</div>
  <div class="col-md-2" style="border: 3px solid black; font-size: 150%;">Amount of spills this week is:</div> 
</div>


</div>
@endsection
