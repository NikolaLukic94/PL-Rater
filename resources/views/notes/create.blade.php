@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Add a note:</div>
          <div class="card-body">
            <form action="/notes/create/{{$file->id}}" method="POST">
              {{ csrf_field() }}
                <div class="field">
                  <div class="row">
                    <div class="col">
                      <label class="label" for="title">
                        Title
                      </label>
                    </div>
                    <div class="col">
                      <input name="title" type="text" class="input" id="title" required>
                    </div>
                  </div>
                </div>
              <hr>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="text">
                        Text
                      </label>
                    </div>
                    <div class="col">             
                      <input name="text" type="text" class="input" id="text">
                    </div>
                  </div>
                </div>
              <hr>
                <div class="block">
                  <button type="submit" class="btn btn-outline-secondary">Save</button>
                </div>
              </div>
              <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                  <div class="field is-grouped is-grouped-centered">
                    @include('errors')
            </form>     
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
    </div>
  </div>
</div>