@extends('layouts.app')

@section('content')
    {{ __("Scanned points") }}
    <div>
        <ul>
        @foreach($lines as $line)
            <li>{{ $line }}</li>
        @endforeach
        </ul>
    </div>
@endsection
