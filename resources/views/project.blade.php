@extends('layout')

@section('title')
    Projects
@endsection

@section('header')
    <h1>Projects</h1>
@endsection

@section('content')
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection
