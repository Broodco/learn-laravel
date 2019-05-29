@extends('../layouts/layout')

@section('title')
    Projects
@endsection

@section('header')
    <div class="ui basic segment">
        <h2 class="ui header">Projects</h2>
    </div>
@endsection

@section('content')
    <div class='ui relaxed celled animated list'>
        @foreach($projects as $project)
        <a class='item' href="/projects/{{$project->id}}">
            <div class="content">
                <div class='header'>{{ $project->title }}</div>
                <div class="description">{{ $project->description }}</div>
            </div>
        </a>
        @endforeach
    </div>
    <a href="/projects/create">
        <button class="ui button">Create a new project</button>
    </a>
@endsection
