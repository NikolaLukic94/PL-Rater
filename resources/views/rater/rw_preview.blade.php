@extends('layouts.app')


  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <br>
            <div class="card">
                <div class="card-header text-center"></div>
                <div class="card-body">
    @if(isset($file))
        <form action="/file/rate/prepare/rw" method="POST">
              {{ csrf_field() }} 
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="type_of_coverage">
                      LOB
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="type_of_coverage">
                      {{$file->lob}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->lob}}
                    </label>
                  </div>                  
                </div>
              </div>           
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="cov_a">
                    <p>Coverage A</p>
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="cov_a">
                      {{$file->cov_a}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->cov_a}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="other_structures">
                    <p>Other Structures</p>
                    </label>{
                  </div>
                  <div class="col">             
                    <label class="label" for="other_structures">
                      {{$file->other_structures}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->other_structures}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="loss_of_use">
                    <p>Loss of Use</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->loss_of_use}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->loss_of_use}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="med_pay">
                    <p>Med Pay</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->med_pay}}
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->med_pay}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="aop_ded">
                    <p>AOP Deductible</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->aop_ded}}
                    </label>                     
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->aop_ded}}
                    </label>
                  </div>                  
                </div>
              </div>
              <hr>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="construction_type">
                    <p>Construction type</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->construction_type}}
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->construction_type}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="protection_class">
                    <p>PC</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->protection_class}}
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                       {{$rater->protection_class}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="new_purchase">
                    <p>New purchase?</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                    @if($file->new_purchase == '1') 
                       yes
                    @else
                      no
                    @endif                       
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->new_purchase}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="prior_carrier">
                    <p>Prior carrier?</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                    @if($file->prior_carrier)
                      yes
                    @else
                      no
                    @endif  
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->prior_carrier}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="prior_carrier_name">
                    <p>Prior carrier - name</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="type_of_coverage">
                      {{$file->prior_carrier_name}}
                    </label>                    
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->prior_carrier_name}}
                    </label>
                  </div>                  
                </div>
              </div>
          @endif         
              </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
            <div class="field is-grouped is-grouped-centered">
              <p class="control">
                <div class="col">
                  <a class="btn btn-primary" href="/rater/rw/{{$file->id}}/{{$rater->id}}" role="button">Create RW</a>  </div>               
              </p>
              @include('errors')
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







