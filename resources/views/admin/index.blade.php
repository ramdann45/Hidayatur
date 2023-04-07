@extends('admin.layouts.main')

@section('content')
    <h1>Assalammualaikum, {{ Auth::user()->name }}</h1>
@endsection
