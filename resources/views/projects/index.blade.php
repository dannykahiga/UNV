@extends('layouts.app')

@section('content')
<h1>Projects</h1>

                <div class="uk-card uk-card-default">
                  <a class="uk-button uk-button-primary uk-position-top-right" href="/projects/create">Add Project</a>
                    <div class="uk-card-title">
                      <!-- Example split danger button -->
                      <button class="uk-button uk-button-default" type="button">Hover to select Number of Rows</button>

                      <div uk-dropdown>
                          <ul class="uk-nav uk-dropdown-nav">
                              <li><a href="/paginate5">5 Rows</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="/paginate15">15 Rows</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="/paginate25">25 Rows</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="/paginate35">35 Rows</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="/paginate45">45 Rows</a></li>
                              <li class="uk-nav-divider"></li>
                          </ul>
                      </div>
                    </div>

                    <div class="uk-card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center" scope="col">Ref</th>
                                    <th class="text-center" scope="col">Title</th>
                                    <th class="text-center" scope="col">Country</th>
                                    <th class="text-center" scope="col">GCF Date</th>
                                    <th class="text-center" scope="col">Start Date</th>
                                    <th class="text-center" scope="col">Duration</th>
                                    <th class="text-center" scope="col">End Date</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $row)
                                <tr>
                                    <td class="text-center">{{$row['project_ref']}}</td>
                                    <td class="text-center">{{$row['title']}}</td>
                                    <td class="text-center">{{$row['country']}}</td>
                                    <td class="text-center">{{$row['gcf_date']}}</td>
                                    <td class="text-center">{{$row['start_date']}}</td>
                                    <td class="text-center">{{$row['duration']}}</td>
                                    <td class="text-center">{{$row['end_date']}}</td>
                                    <td class="text-center">{{$row['status']}}</td>
                                    <td class="text-center">

                                        <div class="container">
                                                <div class="row justify-content-center">
                                                  <div>
                                                    <a href="/projects/{{$row->id}}" class="btn btn-success btn-sm" tabindex="-1" role="button" aria-disabled="true">Show</a>
                                                  </div>
                                                  <div>
                                                    <a href="/projects/{{$row->id}}/edit" class="btn btn-warning btn-sm" tabindex="-1" role="button" aria-disabled="true">Update</a>
                                                  </div>
                                                  <div>
                                                    {!! Form::open(['action' => ['ProjectsController@destroy', $row->id], 'method' => 'POST']) !!}
                                                    {{Form::submit('Delete', ['class'=>'btn btn-danger btn-sm'])}}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {!! Form::close() !!}
                                                  </div>
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $projects->links() }}
                    </div>
                </div>

@endsection
