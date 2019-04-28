@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <title>PLQR</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')
    <br>
      <div class="container">
          <div class="row justify-content-center">
                          <div class="col-md-8">
                <div class="card">
                    <div id="approve"><!-- div approve -->
                    <div class="card-header">Users List to Approve</div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                                <th></th>
                            </tr>
                            @forelse($users_pending_approval as $user)
                            <form method="POST" action="/users/{{$user->id}}/approve">
                                {{ csrf_field() }}
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
                            
                                    </td>
                                    <td>    
                                        <form action="/manage/users/delete/{{$user->id}}" method="POST">
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }} 
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>          
                                    </td>
                                </tr>
                              </form>  
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div><!-- div approve -->
                    <div class="card-header">Existing & Approved Users</div><!-- div disapprove -->
                    <div id="approve">
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                                <th></th>
                            </tr>
                            @forelse ($users as $user)
                                {{ csrf_field() }}
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                    </td>
                                    <td>    
                                        <a class="btn btn-primary" href="/users/{{$user->id}}/disapprove" role="button"><i class="fa fa-window-close" aria-hidden="true"></i></a>
                                    </td>
                                    <td>    
                                        <form action="/manage/users/delete/{{$user->id}}" method="POST">
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }} 
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>          
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div><!-- div disapprove -->                
              </div>
            </div>
          </div>
      </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
</body>

</html>

<style>

tr:nth-child(even) {
  background-color: #dddddd;
}

table td{
  padding-bottom: 4px;
}

</style>

