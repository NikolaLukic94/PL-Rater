<div id="log" class="tabcontent">
  <div class="container">
    <div class="card">
        <div class="col-md-8 offset-2">
          <div class="card-header text-center">RWs:</div>
              <div class="card-body">
                @if($rw->count() == null)
                  <p>Something is wrong here.</p>
                @else
                  <table>
                    <tr>
                      <th>Action</th>
                      <th>Subject</th>
                      <th>Id</th>
                      <th>At</th>
                    </tr>
                    @foreach($log as $activity)
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
                      <td>Created by: </td>
                    </tr>  
                    @endforeach
                  </table>
                  <br>  
                @endif
              </div>
          </div>
        </div>
    </div>    
  </div>
</div>
