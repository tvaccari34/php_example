@extends('templates.app')

@section('content')
    <h1>Home</h1>
@endsection

@section('sidebar')
    @parent
    This is appended to the sidebar from the view perspective
@endsection
