@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="uk-card uk-card-default">
                <div class="uk-card-title">
                  <legend class="uk-text-center">APIs</legend>
                </div>

                <div class="uk-card-body">

                    <div class="row">
                        <div class="col-sm-4">
                          <div class="card text-center">
                              <div class="card-body">
                                  <h5 class="card-title">API 1</h5>
                                  <p class="card-text">Will return all projects from country Kenya as JSON</p>
                                  <a href="/api/projects/country/kenya" class="btn btn-primary">Send Request</a>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card text-center">
                              <div class="card-body">
                                  <h5 class="card-title">API 2</h5>
                                  <p class="card-text">Will return all projects as JSON</p>
                                  <a href="/api/projects/all" class="btn btn-primary">Send Request</a>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">API 3</h5>
                                    <p class="card-text">Will return all projects with status completed as JSON</p>
                                    <a href="/api/projects/status/completed" class="btn btn-primary">Send Request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
