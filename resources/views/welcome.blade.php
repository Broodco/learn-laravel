@extends('layouts/layout')

@section('title')
    Welcome
@endsection

@section('header')
    <h1>Welcome</h1>
@endsection

@section('content')
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
