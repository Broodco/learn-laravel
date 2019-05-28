@extends('../layouts/layout')

@section('title')
    Edit Project
@endsection

@section('header')
    <h1>Edit a Project</h1>
@endsection

@section('content')
    <form method="POST" action="/projects/{{$project->id}}">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
        <input type="text" name="title" placeholder="Project title" value="{{$project->title}}"/>
        </div>
        <div>
            <label for="description">Description</label>
        <textarea name="description">{{$project->description}}</textarea>
        </div>
        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Project</button>
    </form>
@endsection
