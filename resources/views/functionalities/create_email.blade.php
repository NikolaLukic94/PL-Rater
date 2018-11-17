@extends('layout')

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <form action="/prepemail" method="POST">
                {{ csrf_field()  }}
               <br>
                  <div class="form-group">
                    <label for="user_id">To (candidate):</label>
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

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

