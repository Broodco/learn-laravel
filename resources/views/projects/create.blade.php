@extends('../layouts/layout')

@section('title')
    Create a new Project
@endsection

@section('header')
    <div class="ui basic segment">
        <h2 class='ui header'>Create a new Project</h2>
    </div>
@endsection

@section('content')
<div class="ui container segment">
    <form method="POST" action="/projects" class="ui form">
        @csrf
        <div class="field {{ $errors->has('title') ? 'error' : '' }}" >
            <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}" />
        </div>
        <div class="field {{ $errors->has('description') ? 'error' : '' }}" >
            <textarea name="description" placeholder="Project description" >{{ old('description') }}</textarea>
        </div>
        <button class="ui button" type="submit">Submit new Project</button>
        @include('errors')
    </form>
</div>
@endsection
