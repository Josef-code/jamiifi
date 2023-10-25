<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function Show(Request $request)
    {

        $projects = Projects::where('project_creator', $request->user()->id)->get();

        return view('projects/projects', ['projects' => $projects]);
    }

    public function Create(Request $request)
    {
        return view('projects/create-project');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'project_name' => ['required'],
            'project_description' => ['required'],
            'funding_goal' => ['required'],
            'category' => ['required'],
        ]);

        $projects = Projects::create([
            'project_creator' => $request->user()->id,
            'project_name' => $request->project_name,
            'description' => $request->project_description,
            'funding_goal' => $request->funding_goal,
            'category' => $request->category,
            'media_url' => $request->media_url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect('/projects')->with("project_created", "Project has been created successfully!");
    }

    public function View(Request $request, $id)
    {
        $project = Projects::where("id", $id)->with("user")->first();
        return view('projects/view-project', ['project' => $project]);
    }
}
