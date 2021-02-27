@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
    <ul>
        @foreach($services as $svc)
            <li>{{$svc}}</li>
        @endforeach
    </ul>
    @endif
    <p>This is Services page</p>
@endsection