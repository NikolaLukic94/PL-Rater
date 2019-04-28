@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PLQR</title>
</head>
<body>
  <div class="d-flex" id="wrapper">
    @include('partials.sidebar')
    <div id="page-content-wrapper">
    @include('partials.navbar')
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
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
                                @forelse ($users as $user)
                                <form method="POST" action="/users/{{$user->id}}/approve">
                                    {{ csrf_field() }}
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Approve</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No users found.</td>
                                    </tr>
                                @endforelse
                            </table>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
</body>
</html>