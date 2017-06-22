@extends('layout')

@section('content')
        @if (empty($people))
            There are no people
        @else
            People are there
        @endif 
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
@stop