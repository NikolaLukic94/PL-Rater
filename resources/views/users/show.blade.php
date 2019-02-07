@extends('layouts.app')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Info is below:</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="/manage/roles/create" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <p>{{$role->name}}</p>
            </p>
          </div>

          <div class="field">
            <label for="display_name" class="label">Display name:</label>
            <p class="control">
              <p>{{$role->display_name}}</p>
            </p>
          </div>

          <div class="field">
            <label for="description" class="label">Description</label>
            <p class="control">
              <p>{{$role->description}}</p>
            </p>
          </div>
        </div> <!-- end of .column -->

      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Create New Role</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection