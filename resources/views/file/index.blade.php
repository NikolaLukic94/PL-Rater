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
  <button class="tablinks" onclick="openCity(event, 'general')">General Info</button>
  <button class="tablinks" onclick="openCity(event, 'correspondence')">Correspondence</button>
  <button class="tablinks" onclick="openCity(event, 'submission')">Submission</button>
  <button class="tablinks" onclick="openCity(event, 'rw')">RW</button>     
  <button class="tablinks" onclick="openCity(event, 'quote')">Quote</button>   
  <button class="tablinks" onclick="openCity(event, 'binder')">Binder</button>
  <button class="tablinks" onclick="openCity(event, 'policy')">Policy</button>                              
  <button class="tablinks" onclick="openCity(event, 'finance')">Finance</button>      
  <button class="tablinks" onclick="openCity(event, 'support')">Support</button>   
  <button class="tablinks" onclick="openCity(event, 'log')">Log</button>           
  <button class="tablinks" onclick="openCity(event, 'note')">Note</button>                     
</div>
<!-- Tab content -->
<div id="general" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          {{ csrf_field()  }}
          {{ method_field('POST') }}    
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="named_insured">
                <p>Named Insured:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->named_insured}}" name="named_insured" required><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="additional_ni">
                <p>Additional Named Insured/DBA:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->additional_ni}}" name="additional_ni"><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="entity_type">
                <p>Type of entitiy:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->entity_type}}" name="entity_type" required><br><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="ssn">
                <p>SSN:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->ssn}}" name="ssn"><br>
            </div>
          </div>
        </div>            
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_street_name_and_number">
                <p>Street name/number:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_city">
                <p>City:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_city}}" name="mailing_address_city" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_zip">
                <p>ZIP code:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_zip}}" name="mailing_address_zip" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_county">
                <p>County:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_county}}" name="mailing_address_county" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_state">
                <p>State:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_state}}" name="mailing_address_state" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_street_name_and_number">
                <p>Street name/number:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_city">
                <p>City:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_city}}" name="location_address_city" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_zip">
                <p>ZIP code:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_zip}}" name="location_address_zip" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_county">
                <p>County:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_county}}" name="location_address_county" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_state">
                <p>State:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_state}}" name="location_address_state" required><br>
            </div>
          </div>
        </div> 






          
            <br>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
      </div>
    </div>


<div id="Paris" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          <h5>Status: {{$file->status}}</h5>
          <hr>   
          <h5>Underwriter:</h5>
          <hr>
          <h5>Agency: {{$file->agency_name}}</h5>
          <hr>
          <h5>Agency status:</h5>
          <hr>  
          <h5>Effective date: {{$file->effective_date}}</h5>
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
              <input name="agent_name" value="{{$submission->agent_name}}" type="text" class="input" id="agent_name">
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
              <input name="agency_name" value="{{$submission->agency_name}}" type="text" class="input" id="agency_name">
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
                <input name="agent_email_address" value="{{$submission->agent_email_address}}"  type="email" class="input" id="agent_email_address">
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
              <input name="agent_phone_number" value="{{$submission->agent_phone_number}}" type="text" class="input"  id="agent_phone_number">
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
              <input name="type_of_coverage" value="{{$submission->type_of_coverage}}" type="text" class="input"  id="type_of_coverage">
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
              <input name="lob" type="text" value="{{$submission->type_of_coverage}}" class="input" id="lob">
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
              <input name="effective_date" value="{{$submission->effective_date}}" type="date" class="input" id="effective_date">
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
              <input name="named_insured" value="{{$submission->named_insured}}" type="text" class="input" id="named_insured">
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
              <input name="mailing_address" value="{{$submission->mailing_address}}" type="text" class="input" id="mailing_address">
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
              <input name="street_name_and_number" value="{{$submission->street_name_and_number}}" type="text" class="input" id="street_name_and_number">
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
              <input name="city" type="text" value="{{$submission->city}}" class="input" id="city">
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
              <input name="county" type="text" value="{{$submission->county}}" class="input" id="county">
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
              <input name="state" type="text" value="{{$submission->state}}" class="input"  id="state">
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
              <input name="phone_number" type="text" value="{{$submission->phone_number}}" class="input" id="phone_number">
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
              <input name="email_address" value="{{$submission->email_address}}" type="text" class="input" id="email_address">
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
              <input name="cov_a" type="text" value="{{$submission->cov_a}}" class="input" id="cov_a">
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
              <input name="other_structures" value="{{$submission->other_structures}}" type="text" class="input" id="other_structures">
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
              <input name="loss_of_use" type="text" value="{{$submission->loss_of_use}}" class="input" id="loss_of_use">
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
              <input name="med_pay" type="text" value="{{$submission->med_pay}}" class="input" id="med_pay">
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
              <input name="aop_ded" type="text" value="{{$submission->aop_ded}}" class="input" id="aop_ded">
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
              <input name="construction_type" value="{{$submission->construction_type}}" type="text" class="input" id="construction_type">
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
              <input name="protection_class" value="{{$submission->protection_class}}" type="text" class="input" id="protection_class">
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
              <input name="new_purchase" value="{{$submission->new_purchase}}" type="text" class="input" id="new_purchase">
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
              <input name="prior_carrier" value="{{$submission->prior_carrier}}" type="text" class="input" id="prior_carrier">
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
              <input name="prior_carrier_name" value="{{$submission->prior_carrier_name}}" type="text" class="input" id="prior_carrier_name">
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
              <input name="prior_carrier_effective_date" value="{{$submission->prior_carrier_effective_date}}" type="date" class="input" id="prior_carrier_effective_date">
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
                          {{$r->cov_a}}
                        </td>                                                 
                        <td>
                            <a class="btn btn-primary" href="/rating-worksheet/show/{{$r->id}}" role="button">Open</a> &nbsp;
                            <a class="btn btn-primary" href="/send-rw" role="button">Email</a>
                            <a class="btn btn-primary" href="" >Quote</a> &nbsp;                            
                          </form>                            
                        </td>                                     
                    </tr>
                  @endforeach
                @else
                    <p>There are no RWs for this file! Go rate it <a href="/rater/index/{{$file->id}}">here!</a></p>
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
        @if($rw)
          @foreach($rw as $r)
            {{ $r->id }}
          @endforeach
        @endif    
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