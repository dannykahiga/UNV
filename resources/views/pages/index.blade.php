@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center mt-5">
    <div class="container">
      <h3 class="display-3">UNEP Projects</h3>
      <p>Create and manage UNEP projects from different countries.</p>
      <p>
        <a class="btn btn-primary btn-lg" href="/projects/create" role="button">Create Project</a>
        <a class="btn btn-primary btn-lg" href="/apipage" role="button">APIs</a>
        <a class="btn btn-primary btn-lg" href="/projects" role="button">Existing Projects</a>
      </p>
    </div>
  </div>
@endsection
