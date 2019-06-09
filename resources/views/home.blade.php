@extends('layouts.app')
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
                <img src="{{ $user->avatar }}"
                style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <form enctype="multipart/form-data" action="/profile/image/{{ Auth::id() }}" method="post">
                  {{ csrf_field() }}
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                  <div class="card" id="card">
                      <div class="card-header"></div>
                      <div class="card-body text-center">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                                  <b>Hello Again! </b>
                      </div>
                  </div><br>
                  <div class="card text-center" id="card-act">
                      <div class="card-header">Your recent activities:</div>
                      <div class="card-body">
                        <table>
                          <tr>
                            <th>Action</th>
                            <th>Subject</th>
                            <th>Id</th>
                            <th>At</th>
                          </tr>
                          @foreach($activities as $activity)
                          <tr>
                            <td>
                            @if( strpos( $activity->type, 'created' ) !== false)
                              <p>created</p>
                            @elseif ( strpos( $activity->type, 'updated' ) !== false)
                              <p>updated</p>
                            @elseif ( strpos( $activity->type, 'deleted' ) !== false)
                              <p>deleted</p>
                            @endif  
                            </td>
                            <td>
                              {{$activity->subject_type}}
                            </td>
                            <td>{{ $activity->subject_id }}</td>
                            <td>{{ $activity->created_at->diffForHumans() }}</td>
                          </tr>  
                          @endforeach
                        </table><br>
                        <div class="offset-4">
                        {{ $activities->links() }}
                        </div>
                      </div>
                  </div> 
                </div>
                </div>  
            </div>
          </div>
      </div>
  </div>

</body>

</html>

<style>
  #card-act {
    padding-bottom: 50px;
  }

</style>