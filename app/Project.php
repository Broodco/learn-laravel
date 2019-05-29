<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($description, $project_id)
    {
        return Task::create([
            'project_id' => $project_id,
            'description' => $description
        ]);
    }
}
