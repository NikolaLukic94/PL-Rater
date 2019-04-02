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
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'general_info')">General Info</button>
  <button class="tablinks" onclick="openCity(event, 'exposure_info')">Exposure Info</button>
  <button class="tablinks" onclick="openCity(event, 'additional_coverage')">Additional Coverage</button>
  <button class="tablinks" onclick="openCity(event, 'forms')">Forms</button>     
  <button class="tablinks" onclick="openCity(event, 'additional_insured_or_interest')">Additional Insured/Interest</button>   
  <button class="tablinks" onclick="openCity(event, 'prior_carrier')">Prior Carrier</button>
  <button class="tablinks" onclick="openCity(event, 'premium')">Premium</button> 
  <button class="tablinks" onclick="openCity(event, 'agency_info')">Agency Info</button>                 
            
</div>
<!-- Tab content -->
<div id="agency_info" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Quoting</div>
      <div class="card-body">
        <form method="POST" action="/quote/create/{{$file->id}}">
          {{ csrf_field()  }}
          {{ method_field('POST') }}    
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agent_name">
                <p>Agent's name</p>
              </label>
            </div>
            <div class="col">
              <input name="agent_name" value="{{$file->agent_name}}" type="text" class="input" id="agent_name">
            </div>
        </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agency_name">
                <p>Agency name</p>
              </label>
            </div>
            <div class="col">             
              <input name="agency_name" value="{{$file->agency_name}}" type="text" class="input" id="agency_name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_email_address">
                <p>Agent's email address</p>
              </label>
            </div>
              <div class="col"> 
                <input name="agent_email_address" value="{{$file->agent_email_address}}"  type="email" class="input" id="agent_email_address">
              </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_phone_number"></label>
              <p>Agent's phone number</p>
            </div>
            <div class="col">             
              <input name="agent_phone_number" value="{{$file->agent_phone_number}}" type="text" class="input"  id="agent_phone_number">
            </div>
          </div>
        </div>    
            <br>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
      </div>
    </div>

<div id="general_info" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
<div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="effective_date">
              <p>Effective date</p>
              </label>
            </div>
            <div class="col">             
              <input name="effective_date" value="{{$file->effective_date}}" type="date" class="input" id="effective_date">
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
              <input name="named_insured" value="{{$file->named_insured}}" type="text" class="input" id="named_insured">
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address">
              <p>Mailing address</p>
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address" value="{{$file->lob}}" type="text" class="input" id="mailing_address">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="street_name_and_number">
              <p>Street name and number</p>
              </label>
            </div>
            <div class="col">             
              <input name="street_name_and_number" value="{{$file->lob}}" type="text" class="input" id="street_name_and_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="city">
              <p>City</p>
              </label>
            </div>
            <div class="col">             
              <input name="city" type="text" value="{{$file->lob}}" class="input" id="city">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="county">
              <p>County</p>
              </label>
            </div>
            <div class="col">             
              <input name="county" type="text" value="{{$file->lob}}" class="input" id="county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="state">
              <p>State</p>
              </label>
            </div>
            <div class="col">             
              <input name="state" type="text" value="{{$file->lob}}" class="input"  id="state">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="phone_number">
              <p>Named Insured's phone #</p>
              </label>
            </div>
            <div class="col">             
              <input name="phone_number" type="text" value="{{$file->phone_number}}" class="input" id="phone_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="email_address">
              <p>Email address</p>
              </label>
            </div>
            <div class="col">             
              <input name="email_address" value="{{$file->email_address}}" type="text" class="input" id="email_address">
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>










<div id="submission" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Submission Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
@if(isset($submission))
            <div class="card">
                <div class="card-body">
        <form action="/subs/" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agent_name">
                <p>Agent's name</p>
              </label>
            </div>
            <div class="col">
              <input name="agent_name" value="{{$file->agent_name}}" type="text" class="input" id="agent_name">
            </div>
        </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agency_name">
                <p>Agency name</p>
              </label>
            </div>
            <div class="col">             
              <input name="agency_name" value="{{$file->agency_name}}" type="text" class="input" id="agency_name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_email_address">
                <p>Agent's email address</p>
              </label>
            </div>
              <div class="col"> 
                <input name="agent_email_address" value="{{$file->agent_email_address}}"  type="email" class="input" id="agent_email_address">
              </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_phone_number"></label>
              <p>Agent's phone number</p>
            </div>
            <div class="col">             
              <input name="agent_phone_number" value="{{$file->agent_phone_number}}" type="text" class="input"  id="agent_phone_number">
            </div>
          </div>
        </div>    
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="type_of_coverage">
              <p>Type of coverage</p>
              </label>
            </div>
            <div class="col">             
              <input name="type_of_coverage" value="{{$file->type_of_coverage}}" type="text" class="input"  id="type_of_coverage">
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="type_of_coverage">
              <p>Type of coverage</p>
              </label>
            </div>
            <div class="col">             
              <input name="lob" type="text" value="{{$file->type_of_coverage}}" class="input" id="lob">
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
              <input name="effective_date" value="{{$file->effective_date}}" type="date" class="input" id="effective_date">
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
              <input name="named_insured" value="{{$file->named_insured}}" type="text" class="input" id="named_insured">
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address">
              <p>Mailing address</p>
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address" value="{{$file->mailing_address}}" type="text" class="input" id="mailing_address">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="street_name_and_number">
              <p>Street name and number</p>
              </label>
            </div>
            <div class="col">             
              <input name="street_name_and_number" value="{{$file->street_name_and_number}}" type="text" class="input" id="street_name_and_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="city">
              <p>City</p>
              </label>
            </div>
            <div class="col">             
              <input name="city" type="text" value="{{$file->city}}" class="input" id="city">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="county">
              <p>County</p>
              </label>
            </div>
            <div class="col">             
              <input name="county" type="text" value="{{$file->county}}" class="input" id="county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="state">
              <p>State</p>
              </label>
            </div>
            <div class="col">             
              <input name="state" type="text" value="{{$file->state}}" class="input"  id="state">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="phone_number">
              <p>Named Insured's phone #</p>
              </label>
            </div>
            <div class="col">             
              <input name="phone_number" type="text" value="{{$file->phone_number}}" class="input" id="phone_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="email_address">
              <p>Email address</p>
              </label>
            </div>
            <div class="col">             
              <input name="email_address" value="{{$file->email_address}}" type="text" class="input" id="email_address">
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
              <input name="cov_a" type="text" value="{{$file->cov_a}}" class="input" id="cov_a">
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
              <input name="other_structures" value="{{$file->other_structures}}" type="text" class="input" id="other_structures">
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
              <input name="loss_of_use" type="text" value="{{$file->loss_of_use}}" class="input" id="loss_of_use">
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
              <input name="med_pay" type="text" value="{{$file->med_pay}}" class="input" id="med_pay">
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
              <input name="aop_ded" type="text" value="{{$file->aop_ded}}" class="input" id="aop_ded">
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
              <input name="construction_type" value="{{$file->construction_type}}" type="text" class="input" id="construction_type">
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
              <input name="protection_class" value="{{$file->protection_class}}" type="text" class="input" id="protection_class">
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
              <input name="new_purchase" value="{{$file->new_purchase}}" type="text" class="input" id="new_purchase">
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
              <input name="prior_carrier" value="{{$file->prior_carrier}}" type="text" class="input" id="prior_carrier">
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
              <input name="prior_carrier_name" value="{{$file->prior_carrier_name}}" type="text" class="input" id="prior_carrier_name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier_effective_date">
              <p>Eff. date of prev. policy</p>
              </label>
            </div>
            <div class="col">             
              <input name="prior_carrier_effective_date" value="{{$file->prior_carrier_effective_date}}" type="date" class="input" id="prior_carrier_effective_date">
            </div>
          </div>
        </div>
    </div>
@endif    
        </form>
      </div>
    </div>
  </div>
</div>
<div id="rw" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">RWs:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                @if($rw)
                  @foreach($rw as $r)
                      <tr>
                        <td>
                          @if(isset($r->created_at))
                            {{date('m/d/Y',strtotime($r->created_at))}}
                          @endif  
                        </td> 
                        <td>
                          HO3  
                        </td>                                                 
                        <td>
                            <a class="btn btn-primary" href="/rating-worksheet/show/" role="button">Open</a> &nbsp;
                            <a class="btn btn-primary" href="/send-rw" role="button">Email</a>
                            <a class="btn btn-primary" href="" >Quote</a> &nbsp;                            
                          </form>                            
                        </td>                                     
                    </tr>
                  @endforeach
                @else
                    <p>There are no RWs for this file! Go rate it!</p>
                @endif
        </form>
      </div>
    </div>
  </div>
</div>
<div id="rw" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
   
      </div>
    </div>
  </div>
</div>  
</div>
     </div>
       </div>
    <!-- /#page-content-wrapper -->


  <!-- /#wrapper -->



</body>

</html>
<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>





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


        <!-- COVERAGES SECTION -->
            <!--cov_a, all others, w/h, ns etc page-->
        <!-- RISK details -->

              <!--               <!--
                  construction type 
                  siding
                  Actual cash value
                  Replacement cash value
                  Home type (dweling, condo)
                  Type of use (primary, secndary, rental)
                  Year built
                  dates of updates for hvac, roof, plumbing
                  type of roof
                  roof material
                  roof shape
                  roof protection (shutters, shingle)
                  plumbing system condition
                  plumbing system and known leaks
                  occupancy(primary, secondary, rental)
                  fuel tank storage - yes no
                  swimming pool - yes no
                  - swiming pool approved fence or inground
                  distance to coast
                  distance to fire station
                  distance to hydant
                  
                  
              -->
        <!-- ADDITIONAL COVERAGE -->
              <!--mold, water back up-->
        <!-- FORMS -->
              <!--for now, let it pull all forms names with option to add them thru checkbox
                  need to add two windows for mandatory and optional-->
        <!-- ADDITINAL INSURED -->
              <!--type of ai, name, address, form, description(none mandatory) need table as well-->
        <!-- PRIOR CARRIER - need table for it as it can have more that one --> 
              <!--name, expiry date, if any claims, if so claim #, if open or closed, and $$-->
        <!-- PREMIUM -->
              <!-- to be prefiled per rw but with option to change it and save quote -->
        <!-- agent / agency info -->      
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