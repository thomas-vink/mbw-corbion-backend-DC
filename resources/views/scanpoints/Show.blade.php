@foreach ($scandepartments as $scanDepartment)
@foreach ($scanpoints as $scanpoint)
 @if ($scanDepartment->id === $scanpoint->department_id)
     {{$scanpoint->id}}
 @endif
@endforeach
@endforeach