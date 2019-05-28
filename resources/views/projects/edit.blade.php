@extends('../layouts/layout')

@section('title')
    Edit Project
@endsection

@section('header')
    <h1>Edit a Project</h1>
@endsection

@section('content')
    <form method="POST" action="/projects/{{$project->id}}" class="ui form">
        @csrf
        @method('PATCH')
        <div clas="field">
            <label for="title">Title</label>
        <input type="text" name="title" placeholder="Project title" value="{{$project->title}}" required/>
        </div>
        <div class="field">
            <label for="description">Description</label>
        <textarea name="description" required>{{$project->description}}</textarea>
        </div>
        <div>
            <button type="submit" class="ui blue submit button">Update Project</button>
        </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="ui submit button">Delete Project</button>
    </form>
@endsection
