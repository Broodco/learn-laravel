<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects.index')->withProjects($projects);
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // Old syntax
        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        // Old syntax n°2
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        // Simple server side form validation
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);

        // Compact syntax
        Project::create($validated);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        // Old syntax
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
