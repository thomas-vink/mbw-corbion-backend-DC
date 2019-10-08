@extends('layouts.app')

@section('content')
    
<div class="row department-cards">
  @foreach($ScanDepartments as $ScanDepartment)
    <div class="card col-sm-6 h-400">
        <div class="card-body">
            <h5 class="card-title">{{ $ScanDepartment->name }}</h5>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th scope="col">ScanPoint</th>
                        <th scope="col">Where</th>
                        <!--<th scope="col">Who</th>-->
                        <th scope="col">Scans To Do</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Scanpoints as $Scanpoint) 
                          @if($Scanpoint->department_id === $ScanDepartment->id)
                          <tr> 
                            <td>{{$Scanpoint->barcode}}</td>
                            <td>{{$Scanpoint->location}}</td>
                            <!--<td></td>-->
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

<!--<form style="display:inline-block" action="{{action('HomeController@importCsv')}}" method="get">
        @csrf
        <button type="submit" value="Submit" class="btn btn-secondary">Get scanfile</button>
    </form>
  -->
</div>
@endsection

