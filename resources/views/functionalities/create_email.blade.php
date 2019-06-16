@extends('layouts.app')
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
              <div class="card-header text-center">Please verify current info:</div>
              <div class="card-body">
            <form action="/emails/send" method="POST">
                {{ csrf_field()  }}
               <br>
                  <div class="form-group">
                    <label for="user_id">To (agent that sent some of the subs):</label>
                    <select name="to" id="to" class="select2 form-control padd_only_min">
                    <option value="">-- Select --</option>
                    @if($submission)
                        @foreach($submission as $sub)
                            <option value="{{ $sub->agent_email_address }}">
                                {{ $sub->agent_name }}
                            </option>
                        @endforeach
                    @endif
                </select>
                </div>
                <!-- 
                <div class="form-group">
                    <label for="to">to</label>
                    <input name="to" type="text" class="form-control" id="to" placeholder="to">
                  </div> 
                  -->
                  <div class="form-group">
                    <label for="cc">cc</label>
                    <input name="cc" type="email" class="form-control" id="cc" placeholder="cc">
                  </div>
                  <div class="form-group">
                    <label for="subject_line">Subject line</label>
                    <input name="subject_line" type="text" class="form-control" id="subject_line" >
                  </div>
                  <div class="form-group">
                    {{Form::label('body', 'Text')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Your email here...'])}}
                </div>
                <button type="submit" class="btn btn-outline-secondary" style="width: 100%">Send</button>
            </form>       
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

</html>



</body>

</html>



  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>

