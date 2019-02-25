<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index')->with('projects', $projects);
    }

    public function paginate5()
    {
        $projects = Project::latest()->paginate(5);
        return view('projects.index')->with('projects', $projects);
    }

    public function paginate15()
    {
        $projects = Project::latest()->paginate(15);
        return view('projects.index')->with('projects', $projects);
    }

    public function paginate25()
    {
        $projects = Project::latest()->paginate(25);
        return view('projects.index')->with('projects', $projects);
    }

    public function paginate35()
    {
        $projects = Project::latest()->paginate(35);
        return view('projects.index')->with('projects', $projects);
    }

    public function allprojects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function allcompletedprojects()
    {
        $projects = Project::all()->where('status', 'Completed');
        return $projects;
    }

    public function allkenyanprojects()
    {
        $projects = Project::all()->where('country', 'Kenya');
        return $projects;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'project_ref' => 'required',
          'title' => 'required',
          'country' => 'required',
          'gcf_date' => 'required',
          'start_date' => 'required',
          'duration' => 'required',
          'end_date' => 'required',
          'status' => 'required'
        ]);

        $project = new Project;
        $project->project_ref = $request->input('project_ref');
        $project->title = $request->input('title');
        $project->country = $request->input('country');
        $project->gcf_date = $request->input('gcf_date');
        $project->start_date = $request->input('start_date');
        $project->duration = $request->input('duration');
        $project->end_date = $request->input('end_date');
        $project->status = $request->input('status');
        $project->save();

        return redirect('/projects')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project_ref)
    {
        $project = Project::find($project_ref);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project_ref)
    {
        $project = Project::find($project_ref);
        if (empty($project)) {

           return redirect('/projects')->with('error', 'Something is wrong');
    }
        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_ref)
    {
      $this->validate($request, [
        'project_ref' => 'required',
        'title' => 'required',
        'country' => 'required',
        'gcf_date' => 'required',
        'start_date' => 'required',
        'duration' => 'required',
        'end_date' => 'required',
        'status' => 'required'
      ]);

      $project = Project::find($project_ref);
      $project->project_ref = $request->input('project_ref');
      $project->title = $request->input('title');
      $project->country = $request->input('country');
      $project->gcf_date = $request->input('gcf_date');
      $project->start_date = $request->input('start_date');
      $project->duration = $request->input('duration');
      $project->end_date = $request->input('end_date');
      $project->status = $request->input('status');
      $project->save();

      return redirect('/projects')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_ref)
    {
        $project = Project::find($project_ref);
        $project->delete();
        return redirect('/projects')->with('success', 'Project Deleted');
    }
}
