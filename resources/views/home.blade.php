@extends('layouts.app')

@section('content')

<div class="row department-cards">
  @foreach($ScanDepartments as $ScanDepartment)
    <div class="card col-sm-6 py-2 h-100">
        <div class="card-body">
            <h5 class="card-title">{{ $ScanDepartment->name }}</h5>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th scope="col">ScanPoint</th>
                        <th scope="col">Where</th>
                        <th scope="col">Who</th>
                        <th scope="col">Scans To Do</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>
                </div>                      
        </div>
    </div>
  @endforeach


</div>
@endsection
