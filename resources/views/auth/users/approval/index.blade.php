@extends('layouts.app')
<div class="d-flex" id="wrapper"><!-- d-flex id=wrapper start -->
    @include('partials.sidebar')
    <div id="page-content-wrapper"><!-- page-content-wrapper start -->
    @include('partials.navbar')
    <br>
        <div class="container"><!-- container start -->
            <div class="row justify-content-center">
                <div class="col-md-10">
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
                                            @forelse ($users_pending_approval as $user)
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
                                            </form>    
                                            @empty
                                                <tr>
                                                    <td colspan="4">No users found.</td>
                                                </tr>
                                            @endforelse
                                        </table>
                                            
                                        <div class="d-flex justify-content-center">{{ $users_pending_approval->links() }}</div>
                                    </div>
                                </div>
                            </div><!-- div approve -->
                        <br>
                <div class="card"><!-- card approve -->
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
                        <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div><!-- div disapprove -->                
                    </div>
              </div>
    </div><!-- page-content-wrapper end -->
</div><!-- d-flex id=wrapper end -->


<style>

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    table td{
      padding-bottom: 4px;
    }

</style>


