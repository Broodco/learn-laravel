@extends('../layouts/layout')

@section('title')
    Project {{$project->id}}
@endsection

@section('header')
    <div class="ui basic segment">
        <h2 class="ui header">{{$project->title}}</h2>
        <a class="ui right aligned container" href="/projects/{{$project->id}}/edit">
            <button class="ui button">Edit this Project</button>
        </a>
    </div>
@endsection

@section('content')
    <div class="ui text container">
        <p>{{$project->description}}</p>
    </div>
    @if ($project->tasks->count())
        <div class="ui container segments">
            @foreach ($project->tasks as $task)
                <li class="ui segment">
                <form class="ui form" method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <div class="inline field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                <label for="completed" class="{{ $task->completed ? 'isCompleted' : ''}} ">{{$task->description}}</label>
                            </div>
                        </div>
                    </form>
                </li>
            @endforeach
        </div>
    @endif
    <div class="ui container segment">
        <form method="POST" action="/tasks" class="ui form">
            @csrf
            <div class="field {{$errors->has('description') ? 'error' : '' }}">
                <label for="description">New Task</label>
                <input type="text" name="description" />
            </div>
            <div class="field">
                <input type="hidden" name="project_id" value="{{$project->id}}">
            </div>
            <button class="ui button" type="submit">Add</button>
            @include('errors')
        </form>
    </div>
@endsection
