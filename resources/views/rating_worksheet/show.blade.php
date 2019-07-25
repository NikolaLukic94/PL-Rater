@extends('layouts.app')
  <div class="d-flex" id="wrapper">
    @include('partials.sidebar')
    <div id="page-content-wrapper">
    @include('partials.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <br>
          @if(isset($rw))
            <div class="card">
                <div class="card-header text-center">RW:</div>
                <div class="card-body">
        <form action="/rating-worksheet/update/" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="lob">
              <p>LOB</p>
              </label>
            </div>
            <div class="col">             
              <input name="type_of_coverage" value="{{$rw->lob}}" type="text" class="input"  id="type_of_coverage">
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="effective_date">
              <p>Effective date</p>
              </label>
            </div>
            <div class="col">             
              <input name="effective_date" value="{{$rw->effective_date}}" type="date" class="input" id="effective_date">
            </div>
          </div>
        </div>  
        <p class="subtitle">Insured info</p>
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="named_insured">
              <p>Named Insured</p>
              </label>
            </div>
            <div class="col">             
              <input name="named_insured" value="{{$rw->named_insured}}" type="text" class="input" id="named_insured">
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="cov_a">
              <p>Coverage A</p>
              </label>
            </div>
            <div class="col">             
              <input name="cov_a" type="text" value="{{$rw->cov_a_value}}" class="input" id="cov_a">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="other_structures">
              <p>Other Structures</p>
              </label>
            </div>
            <div class="col">             
              <input name="other_structures" value="{{$rw->other_structures_value}}" type="text" class="input" id="other_structures">
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
              <input name="loss_of_use" type="text" value="{{$rw->loss_of_use_value}}" class="input" id="loss_of_use">
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
              <input name="med_pay" type="text" value="{{$rw->med_pay_value}}" class="input" id="med_pay">
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
              <input name="aop_ded" type="text" value="{{$rw->aop_ded_value}}" class="input" id="aop_ded">
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
              <input name="construction_type" value="{{$rw->construction_type_info}}" type="text" class="input" id="construction_type">
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
              <input name="protection_class" value="{{$rw->protection_class_info}}" type="text" class="input" id="protection_class">
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
            @if($rw->new_purchase_info == 1)                        
              <input name="new_purchase" value="yes" type="text" class="input" id="new_purchase">
            @else
              <input name="new_purchase" value="no" type="text" class="input" id="new_purchase">
            @endif
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
            @if($rw->prior_carrier_info == 1)    
              <input name="prior_carrier" value="yes" type="text" class="input" id="prior_carrier">
            @else
              <input name="prior_carrier" value="no" type="text" class="input" id="prior_carrier">
            @endif
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="grand_premium">
              <p>Grand premium</p>
              </label>
            </div>
            <div class="col">             
              <input name="grand_premium" value="${{substr ($rw->grand_premium, 0, 4)}}" type="text" class="input" id="grand_premium">
            </div>
          </div>
        </div>    
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="sl_tax_fee">
              <p>SL Tax</p>
              </label>
            </div>
            <div class="col">             
              <input name="sl_tax_fee" value="${{substr ($rw->sl_tax_fee, 0, 3)}}" type="text" class="input" id="sl_tax_fee">
            </div>
          </div>
        </div>    
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="empa">
              <p>Empa</p>
              </label>
            </div>
            <div class="col">             
              <input name="empa" value="${{substr ($rw->empa, 0, 3)}}" type="text" class="input" id="empa">
            </div>
          </div>
        </div>                   
        @endif    

          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">
          <p class="control">
                <hr>
              </div>         
                <button type="submit" class="btn btn-outline-secondary">Email to agent</button>
                
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