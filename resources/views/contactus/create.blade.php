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
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header text-center">Please verify current info:</div>
              <div class="card-body">
            <form action="/countactus/send" method="POST">
                {{ csrf_field()  }}
               <br>
                  <div class="form-group">
                    <label for="sender">Your email</label>
                    <input name="sender" type="text" class="form-control" id="sender" placeholder="sender">
                  </div>
                  <div class="form-group">
                    {{Form::label('body', 'Text')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Your email here...'])}}
                  </div>
                  <div class="form-group">
                    <label for="to">To:</label>
                    <input name="to" type="text" class="form-control" id="to" >
                  </div>                  
                <button type="submit" class="btn btn-primary">Submit</button>
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
