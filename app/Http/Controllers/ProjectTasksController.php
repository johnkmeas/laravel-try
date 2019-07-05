<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
  public function store(Project $project) {
    // Task::create([
    //   'project_id' => $project->id,
    //   'description' => request('description')
    // ]);
    $attributes = request()->validate(['description' => 'required']);
    $project->addTask($attributes);

    return back();
  }

  public function update(Task $task) {
    // $task->complete(request()->has('completed'));
    // $task->update([
    //   'completed' => request()->has('completed')
    // ]);

    $method = request()->has('complete') ? 'complete' : 'incomplete';

    $task->$method();

    return back();
  }
}
