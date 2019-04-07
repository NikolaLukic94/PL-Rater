@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PLQR</title>
</head>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Page Content -->
    <div id="page-content-wrapper">
    @include('partials.navbar')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header text-center">Please verify current info:</div>
              <div class="card-body">
            <form action="/contactus/send" method="POST">
                {{ csrf_field()  }}
               <br>
                  <div class="form-group">
                    <label for="sender">Your email</label>
                    <input name="sender" type="text" class="form-control" id="sender">
                  </div>
                  <div class="form-group">
                    {{Form::label('body', 'Text')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Your email here...'])}}
                  </div>                  
                <button type="submit" class="btn btn-primary">Send</button>
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
