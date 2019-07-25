<div id="rw" class="tabcontent">
  <div class="container">
    <div class="card">
        <div class="col-md-8">
          <div class="card-header text-center">RWs:</div>
              <div class="card-body">
              <form method="POST" action="/file/update/general-info/{{$file->id}}">
                @if($rw->count() == null)
                  <p>There are no RWs for this file! Go rate it <a href="/rater/index/{{$file->id}}">here!</a></p>
                @else
                  <table class="text-center">
                  <tr>
                    <th><abbr title="">lob</abbr></th>
                    <th><abbr title="">Created at</abbr></th>                                   
                    <th><abbr title=""></abbr></th>
                  </tr>                
                    @foreach($rw as $r)
                    <div class="row">
                        <tr>
                          <td>
                            {{$r->file_lob}}
                          </td>                         
                          <td>
                            @if(isset($r->rw_created_at))
                              {{date('m/d/Y',strtotime($r->rw_created_at))}}
                            @endif  
                          </td>                                                  
                          <td>    
                            <a class="btn btn-primary" href="/rating-worksheet/show/{{$r->rw_id}}" role="button"><i class="fa fa-eye"></i></a> &nbsp;  
                             <a class="btn btn-primary" href="" role="button"><i class="fas fa-envelope"></i></a> &nbsp;                             
                             <a class="btn btn-primary" href="" role="button"><i class="fas fa-copy"></i></a> &nbsp; 
                          </td>                                                                    
                            </form>                            
                          </td>                                     
                      </tr>
                    </div>  
                    @endforeach
                  </div>
                </table> 
                @endif
              </form>
              </div>
          </div>
        </div>
    </div>    
  </div>
</div>
