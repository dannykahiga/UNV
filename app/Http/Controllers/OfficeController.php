<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'name' => 'required',
        'project_ref' => 'required',

        'start_date' => 'required',
        'duration' => 'required',
        'end_date' => 'required',
        'status' => 'required'
      ]);

      $project = new Project;
      $project->project_ref = $request->input('project_ref');
      $project->title = $request->input('title');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
