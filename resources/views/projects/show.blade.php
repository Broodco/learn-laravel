@extends('../layouts/layout')

@section('title')
    Project {{$project->id}}
@endsection

@section('header')
    <h1>{{$project->title}}</h1>
@endsection

@section('content')
    <p>{{$project->description}}</p>
    <p>
        <a href="/projects/{{$project->id}}/edit">Edit this Project</a>
    </p>
@endsection
