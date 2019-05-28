@extends('../layouts/layout')

@section('title')
    Projects
@endsection

@section('header')
    <h1>Projects</h1>
@endsection

@section('content')
    <div>
        <a href="/projects/create">Create a new project</a>
    </div>
    <ul>
        @foreach($projects as $project)
            <a href="/projects/{{$project->id}}">
                <li>{{ $project->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection
