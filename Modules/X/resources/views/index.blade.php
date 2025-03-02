@extends('x::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('x.name') !!}</p>
@endsection
