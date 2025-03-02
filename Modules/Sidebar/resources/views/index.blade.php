@extends('sidebar::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('sidebar.name') !!}</p>
@endsection
