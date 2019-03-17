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
        <form action="/subs/create" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agent_name">
                Agent Name
              </label>
            </div>
            <div class="col">
              <input name="agent_name" type="text" class="input" id="agent_name" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agency_name">
                Agency name
              </label>
            </div>
            <div class="col">             
              <input name="agency_name" type="text" class="input" id="agency_name" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_email_address">
                Agent email address
              </label>
            </div>
            <div class="col"> 
              <input name="agent_email_address" type="email" class="input" id="agent_email_address" required>
            </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_phone_number">
                Agent phone number
              </label>
            </div>
            <div class="col">             
              <input name="agent_phone_number" type="text" class="input" id="agent_phone_number" required>
            </div>
          </div>
        </div>    
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="type_of_coverage">
                LOB
              </label>
            </div>
            <div class="col">             
              <select name="lob" class="col-md-4 form-group">
                  <option  value="">Select State</option>
                    @if($lob)
                      @for($i = 1; $i <= count($lob); $i++)   
                    <option value="{{$i}}">{{$lob[$i]}}</option>
                  @endfor  
                  @endif                
               </select>
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="effective_date">
                Effective date
              </label>
            </div>
            <div class="col">             
              <input name="effective_date" type="date" class="input" id="effective_date">
            </div>
          </div>
        </div>  
        <p class="subtitle">Insured info</p>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="named_insured">
                Named Insured
              </label>
            </div>
            <div class="col">             
              <input name="named_insured" type="text" class="input" id="named_insured">
            </div>
          </div>
        </div>  
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_street_name_and_number">
                Mailing address Street name/number
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_street_name_and_number" type="text" class="input" id="mailing_address_street_name_and_number" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_city">
                City
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_city" type="text" class="input" id="mailing_address_city" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_county">
                County
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_county" type="text" class="input" id="mailing_address_county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_zip">
                Zip Code
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_zip" type="text" class="input" id="mailing_address_zip">
            </div>
          </div>
        </div>        
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_state">
                State
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="mailing_address_state" class="col-md-4 form-group">
                    <option  value="">Select State</option>
                    @if($state)
                      @for($i = 1; $i <= count($state); $i++)   
                     <option value="{{$i}}">{{$state[$i]}}</option>
                  @endfor  
                  @endif                
                </select>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="street_name_and_number">
                Street name/number
              </label>
            </div>
            <div class="col">             
              <input name="street_name_and_number" type="text" class="input" id="street_name_and_number" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="city">
                City
              </label>
            </div>
            <div class="col">             
              <input name="city" type="text" class="input" id="city" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="county">
                County
              </label>
            </div>
            <div class="col">             
              <input name="county" type="text" class="input" id="county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="location_address_zip">
                Zip Code
              </label>
            </div>
            <div class="col">             
              <input name="location_address_zip" type="text" class="input" id="location_address_zip">
            </div>
          </div>
        </div>          
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="state">
                State
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="state" class="col-md-4 form-group"> 
                    <option  value="">Select State</option>
                    @if($state)
                      @for($i = 1; $i <= count($state); $i++)   
                     <option value="{{$i}}">{{$state[$i]}}</option>
                  @endfor  
                  @endif                            
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="phone_number">
                Phone number
              </label>
            </div>
            <div class="col">             
              <input name="phone_number" type="text" class="input" id="phone_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="email_address">
                Email Address
              </label>
            </div>
            <div class="col">             
              <input name="email_address" type="text" class="input" id="email_address">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="cov_a">
                Coverage A
              </label>
            </div>
            <div class="col">             
              <input name="cov_a" type="text" class="input" id="cov_a" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="other_structures">
                Other Structures
              </label>
            </div>
            <div class="col">             
              <input name="other_structures" type="text" class="input"bid="other_structures">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="loss_of_use">
                Loss Of Use
              </label>
            </div>
            <div class="col">             
              <input name="loss_of_use" type="text" class="input" id="loss_of_use">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="med_pay">
                Med Pay
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="med_pay" class="col-md-4 form-group">
                    <option  value="">Select Med Pay</option>
                    @if($med_pay)
                      @for($i = 1; $i <= count($med_pay); $i++)   
                     <option value="{{$i}}">{{$med_pay[$i]}}</option>
                  @endfor  
                  @endif              
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="aop_ded">
                AOP Deductible
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="aop_ded" class="col-md-4 form-group">
                    <option  value="">Select AOP</option>                 
                    @if($aop)
                      @for($i = 1; $i <= count($aop); $i++)   
                     <option value="{{$i}}">{{$aop[$i]}}</option>
                  @endfor  
                  @endif
                </select>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="construction_type">
                Construction type
              </label>
            </div>
            <div class="col">             
              <select name="construction_type" class="col-md-4 form-group">
                  <option  value="">Select Construction Type</option>
                  @if($constr_type)
                    @for($i = 1; $i <= count($constr_type); $i++)   
                   <option value="{{$i}}">{{$constr_type[$i]}}</option>
                @endfor  
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="protection_class">
                Protection class
              </label>
            </div>
            <div class="col">             
              <select name="protection_class" class="col-md-4 form-group">
                  <option  value="">Select PC</option>
                  @if($pc)
                    @for($i = 1; $i <= count($pc); $i++)    
                   <option value="{{$i}}">{{$pc[$i]}}</option>
                @endfor  
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="new_purchase">
                New purchase
              </label>
            </div>
            <div class="col">             
              <select name="new_purchase" class="col-md-4 form-group">
                <option  value="">Select answer</option>                
                    @if($yes_no)
                      @for($i = 1; $i <= count($yes_no); $i++)    
                     <option value="{{$i}}">{{$yes_no[$i]}}</option>
                  @endfor  
                  @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier">
                Prior carrier
              </label>
            </div>
            <div class="col">             
              <select name="prior_carrier" class="col-md-4 form-group">
                <option  value="">Select answer</option>                  
                    @if($yes_no)
                      @for($i = 1; $i <= count($yes_no); $i++)    
                     <option value="{{$i}}">{{$yes_no[$i]}}</option>
                  @endfor  
                  @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier_name">
                Prior carrier's name
              </label>
            </div>
            <div class="col">             
              <input name="prior_carrier_name" type="text" class="input" id="prior_carrier_name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier_effective_date">
                Prior carrier eff date
              </label>
            </div>
            <div class="col">             
              <input name="prior_carrier_effective_date" type="date" class="input" id="prior_carrier_effective_date">
            </div>
          </div>
        </div>
        <hr>
        <div class="block">
                    <button type="submit" class="btn btn-outline-secondary">Send</button>
        </div>
    </div>
        <div class="block">
          <div class="notification">
            <hr>
            <div class="delete"></div>
              <p class="text-center">For more accurate pricing, please provide us with all information available!</p>
          </div>
          <hr>
        </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">

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
