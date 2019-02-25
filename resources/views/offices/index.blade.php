@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'UNV')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <legend>Add Office</legend>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">
                      <a class="btn btn-primary" href="/projects/create" role="button">Create Project</a>
                    </div>

                    <div class="card-body">
                        {!! Form::open(['action' => 'OfficeController@store', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::textarea('name', '', ['class' => 'form-control', 'place-holder' => 'Name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('project_ref', 'Project Ref')}}
                            {{Form::text('project_ref', '', ['class' => 'form-control', 'place-holder' => 'Project Ref'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('country', 'Country')}}
                            {{Form::text('country', '', ['class' => 'form-control', 'place-holder' => 'Country'])}}
                        </div>

                          <div class="container">
                              <div class="row">
                                  <div class="col-sm">
                                    <div class="form-group">
                                        {{Form::label('grant', 'Grant')}}
                                        {{Form::text('grant', '', ['class' => 'form-control', 'place-holder' => 'Grant'])}}
                                    </div>
                                  </div>
                                  <div class="col-sm">
                                    <div class="form-group">
                                        {{Form::label('disbursement', 'Disbursement')}}
                                        {{Form::text('disbursement', '', ['class' => 'form-control', 'place-holder' => 'Disbursement'])}}
                                    </div>
                                  </div>
                              </div>
                          </div>

                        {{-- <input id="datepicker" width="276" /> --}}

                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
          $('#datepickerGCF').datepicker({
              uiLibrary: 'bootstrap4'
          });
          $('#datepickerStart').datepicker({
              uiLibrary: 'bootstrap4'
          });
          $('#datepickerEnd').datepicker({
              uiLibrary: 'bootstrap4'
          });
      </script>

</body>

</html>
@endsection
