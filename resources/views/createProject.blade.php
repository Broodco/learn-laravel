@extends('layout')

@section('title')
    Create a new Project
@endsection

@section('header')
    <h1>Create a new Project</h1>
@endsection

@section('content')
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" />
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Submit new Project</button>
        </div>
    </form>
@endsection
