@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="uk-card uk-card-default mt-3">

                <div class="uk-card-title">
                  <legend class="uk-legend uk-text-center">Edit Project</legend>
                </div>

                  <div class="uk-card-body">
                      {!! Form::open(['action' => ['ProjectsController@update', $project->project_ref], 'method' => 'POST']) !!}
                      <div class="form-group">
                          {{Form::label('project_ref', 'Project Ref')}}
                          {{Form::text('project_ref', $project->project_ref, ['class' => 'uk-input', 'place-holder' => 'Project Ref'])}}
                      </div>

                      <div class="container">
                          <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                    {{Form::label('title', 'Title')}}
                                    {{Form::textarea('title', $project->title, ['class' => 'uk-textarea uk-height-small', 'place-holder' => 'Title'])}}
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                    {{Form::label('country', 'Country')}}
                                    {{Form::text('country', $project->country, ['class' => 'uk-input', 'place-holder' => 'Country', 'id' => 'country'])}}
                                </div>
                              </div>
                          </div>
                      </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                  <div class="form-group">
                                      {!! Form::label('gcf_date', 'GCF Date: ' ) !!}
                                      {!! Form::text('gcf_date', $project->gcf_date, ['class' => 'form-control', 'id' => 'datepickerGCF', 'width' => '250']) !!}
                                  </div>
                                </div>
                                <div class="col-sm">
                                  <div class="form-group">
                                      {!! Form::label('start_date', 'Start Date: ' ) !!}
                                      {!! Form::text('start_date', $project->start_date, ['class' => 'form-control', 'id' => 'datepickerStart', 'width' => '250', 'name' => 'start_date']) !!}
                                  </div>
                                </div>
                                <div class="col-sm">
                                  <div class="form-group">
                                      {!! Form::label('end_date', 'End Date: ' ) !!}
                                      {!! Form::text('end_date', $project->end_date, ['class' => 'form-control', 'id' => 'datepickerEnd', 'width' => '250', 'name' => 'end_date']) !!}
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- <button class="uk-button uk-button-default" onclick="datediff()">Get Duration</button> --}}
                            {{-- {{Form::label('duration', 'Duration')}} --}}
                            {{Form::text('duration', $project->duration, ['class' => 'uk-input', 'place-holder' => 'Duration', 'id' => 'duration', 'name' => 'duration'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('status', 'Status')}}
                            {{Form::text('status', $project->status, ['class' => 'uk-input', 'place-holder' => 'Status', 'id' => 'status'])}}
                        </div>

                      {{-- <input id="datepicker" width="276" /> --}}

                      {{Form::hidden('_method', 'PUT')}}

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

  function parseDate(str) {
      var mdy = str.split('/');
      return new Date(mdy[2], mdy[0] - 1, mdy[1]);
  }

  var x = parseDate(document.getElementById("datepickerStart").value);
  var y = parseDate(document.getElementById("datepickerEnd").value);
  var z = null;

  function datediff() {

    z =(y - x) / 1000;
  z /= (60 * 60 * 24 * 7 * 4);
 return Math.abs(Math.round(z));

      // z = Math.round((y - x) / (60 * 60 * 24 * 7 * 4));
      // return z;
      // alert(datediff());
  }

  // alert("Duration Day(s): " + datediff());
  // document.getElementById("duration").value = datediff();

  function forceKeyPressUppercase(e)
{
  var charInput = e.keyCode;
  if((charInput >= 97) && (charInput <= 122)) {
    if(!e.ctrlKey && !e.metaKey && !e.altKey) {
      var newChar = charInput - 32;
      var start = e.target.selectionStart;
      var end = e.target.selectionEnd;
      e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
      e.target.setSelectionRange(start+1, start+1);
      e.preventDefault();
    }
  }
}

document.getElementById("country").addEventListener("keypress", function(e) {
      if (this.selectionStart == 0) {

          forceKeyPressUppercase(e);
      }
  }, false);

  document.getElementById("status").addEventListener("keypress", function(e) {
        if (this.selectionStart == 0) {

            forceKeyPressUppercase(e);
        }
    }, false);
</script>

@endsection
