@extends('layouts.app')

@section('content')
  <div class="jumbotron text-left mt-5">
    <div class="container">
      <h4 class="display-4">Project Details</h4>
      <ul class="list-group">
        <li class="list-group-item">
          Title : {{$project->title}}
        </li>
        <li class="list-group-item">
          Project Ref : {{$project->project_ref}}
        </li>
        <li class="list-group-item">
          Country : {{$project->country}}
        </li>
        <li class="list-group-item">
          GCF Date : {{$project->gcf_date}}
        </li>
        <li class="list-group-item">
          Start Date : {{$project->start_date}}
        </li>
        <li class="list-group-item">
          Duration (Number of Day(s)) : {{$project->duration}}
        </li>
        <li class="list-group-item">
          End Date : {{$project->end_date}}
        </li>
        <li class="list-group-item">
          Status : {{$project->status}}
        </li>
      </ul>
      <br>
      <p>
        <a class="btn btn-success btn-lg" href="/projects/create" role="button">Create Project</a>
        <a class="btn btn-primary btn-lg" href="/projects" role="button">Existing Projects</a>
      </p>
    </div>
  </div>
@endsection
