@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="column-md-10">
        <div class="column">
          <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
          <a href="/manage/roles/create" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($roles as $role)
                <tr>
                  <th>{{$role->name}}</th>
                  <td>{{$role->display_name}}</td>
                  <td>{{$role->description}}</td>

                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="">View</a><a class="button is-light" href="">Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
      <br>
       {{ $roles->links() }}
    </div>
    
    </div>

@endsection