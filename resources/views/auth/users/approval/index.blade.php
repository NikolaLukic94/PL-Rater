@extends('layouts.app')
<div class="d-flex" id="wrapper"><!-- d-flex id=wrapper start -->
    @include('partials.sidebar')
    <div id="page-content-wrapper"><!-- page-content-wrapper start -->
        @include('partials.navbar')
        <br>
        <div class="container"><!-- container start -->
            @if (session('message'))
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>  
            @endif
            <br>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div id="approve"><!-- div approve -->
                            <div class="card-header text-center">Users List to Approve</div>
                                <div class="card-body">
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
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
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
                    <div class="card"><!-- card dissaprove -->
                        <div class="card-header text-center">Existing & Approved Users</div><!-- card-heade start -->
                            <div id="approve">
                                <div class="card-body">

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

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No users found.</td>
                                            </tr>
                                        @endforelse
                                    </table>
                                    <div class="d-flex justify-content-center">{{ $users->links() }}</div>
                                </div><!-- card-header end -->
                            </div><!-- div disapprove end-->                
                    </div><!-- card dissaprove end -->
        </div><!-- container end -->                      
    </div><!-- page-content-wrapper end -->
</div><!-- d-flex id=wrapper end -->


