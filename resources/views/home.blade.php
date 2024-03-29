@extends('layouts.app')

@section('content')
    <form style="display:inline-block" action="{{action('HomeController@importCsv')}}" method="get">
        @csrf
        <button type="submit" value="Submit" class="btn btn-secondary">Get scanfile</button>
    </form>
<div class="row department-cards">
  @foreach($ScanDepartments as $ScanDepartment)
    <div class="card col-sm-6 py-2 h-100">
        <div class="card-body">
            <h5 class="card-title">{{ $ScanDepartment->name }}</h5>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th scope="col">ScanPoint</th>
                        <th scope="col">Where</th>
                        <th scope="col">Who</th>
                        <th scope="col">Scans To Do</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Scanpoints as $Scanpoint)
                        <tr>
                          @if($Scanpoint->department_id === $ScanDepartment->id)
                            <th>{{$Scanpoint->barcode}}</th>
                            <td>{{$Scanpoint->location}}</td>
                            <td></td>
                            <td></td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>                      
        </div>
    </div>
  @endforeach


</div>
@endsection

