@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PLQR</title>
</head>
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
<body>

  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'general_info')">General Info</button>
    <button class="tablinks" onclick="openCity(event, 'exposure_info')">Exposure Info</button>
    <button class="tablinks" onclick="openCity(event, 'risk_details')">Risk Details</button>
    <button class="tablinks" onclick="openCity(event, 'additional_coverage')">Additional Coverage</button>
    <button class="tablinks" onclick="openCity(event, 'forms')">Forms</button>     
    <button class="tablinks" onclick="openCity(event, 'additional_insured_or_interest')">Additional Insured/Interest</button>   
    <button class="tablinks" onclick="openCity(event, 'prior_carrier')">Prior Carrier</button>
    <button class="tablinks" onclick="openCity(event, 'premium')">Premium</button> 
    <button class="tablinks" onclick="openCity(event, 'agency_info')">Agency Info</button>   
    <button class="tablinks" onclick="openCity(event, 'subjectivities')">Subjectivities</button>     
    <button class="tablinks" onclick="openCity(event, 'generate')">Create</button>                
  </div>
<!-- Tab content -->
<div id="general_info" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>General Info</h1></div>
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
        <h1>Mailing Address:</h1>
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
        <h1>Location Address:</h1>
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

<div id="exposure_info" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Exposure Info</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
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
        </form>
      </div>
    </div>
  </div>
</div>

<div id="risk_details" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Risk Details:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">

          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="usage"></label>
                <p>Usage</p>
              </div>
              <div class="col">             
                <input name="Usage" type="text" class="input"  id="Usage">
              </div>
            </div>
          </div>   
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="year_built"></label>
                <p>Year Built</p>
              </div>
              <div class="col">             
                <input name="year_built" type="text" class="input"  id="year_built">
              </div>
            </div>
          </div>  
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="updates_year_roof"></label>
                <p>Roof Update Year</p>
              </div>
              <div class="col">             
                <input name="updates_year_roof" type="text" class="input"  id="updates_year_roof">
              </div>
            </div>
          </div>  
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="updates_year_hvac"></label>
                <p>HVAC Update Year</p>
              </div>
              <div class="col">             
                <input name="updates_year_hvac" type="text" class="input"  id="updates_year_hvac">
              </div>
            </div>
          </div>            
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="updates_year_plumbing"></label>
                <p>Plumbing Update Year</p>
              </div>
              <div class="col">             
                <input name="updates_year_plumbing" type="text" class="input"  id="updates_year_plumbing">
              </div>
            </div>
          </div>  
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="roof_type"></label>
                <p>Roof Type</p>
              </div>
              <div class="col">             
                <input name="roof_type" type="text" class="input"  id="roof_type">
              </div>
            </div>
          </div>  
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="roof_shape"></label>
                <p>Roof Shape</p>
              </div>
              <div class="col">             
                <input name="roof_shape" type="text" class="input"  id="roof_shape">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="roof_material"></label>
                <p>Roof Material</p>
              </div>
              <div class="col">             
                <input name="roof_material" type="text" class="input"  id="roof_material">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="roof_protections"></label>
                <p>Roof Protections</p>
              </div>
              <div class="col">             
                <input name="roof_protections" type="text" class="input"  id="roof_protections">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="plumbing_system_condition"></label>
                <p>Plumbing System Condition</p>
              </div>
              <div class="col">             
                <input name="plumbing_system_condition" type="text" class="input"  id="plumbing_system_condition">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="plumbing_system_any_known_leaks"></label>
                <p>Plumbing System Any Known Leaks</p>
              </div>
              <div class="col">             
                <input name="plumbing_system_any_known_leaks" type="text" class="input"  id="plumbing_system_any_known_leaks">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="fuel_tank_storage_on_premises"></label>
                <p>Fuel Storege Tank On Premises</p>
              </div>
              <div class="col">             
                <input name="fuel_tank_storage_on_premises" type="text" class="input"  id="fuel_tank_storage_on_premises">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="swimming_pool_present"></label>
                <p>Swimming Pool Present</p>
              </div>
              <div class="col">             
                <input name="swimming_pool_present" type="text" class="input"  id="swimming_pool_present">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="swimming_pool_approved_fence"></label>
                <p>Swimming Pool Approved Fence</p>
              </div>
              <div class="col">             
                <input name="swimming_pool_approved_fence" type="text" class="input"  id="swimming_pool_approved_fence">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="swimming_pool_inground"></label>
                <p>Swimming Pool Inground</p>
              </div>
              <div class="col">             
                <input name="swimming_pool_inground" type="text" class="input"  id="swimming_pool_inground">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="distance_to_coast"></label>
                <p>Distance To Coast</p>
              </div>
              <div class="col">             
                <input name="distance_to_coast" type="text" class="input"  id="distance_to_coast">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="distance_to_fire_station"></label>
                <p>Distance To Fire Station</p>
              </div>
              <div class="col">             
                <input name="distance_to_fire_station" type="text" class="input"  id="distance_to_fire_station">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="row">
              <div class="col">         
                <label class="label" for="distance_to_hydrant"></label>
                <p>Distance To Hydrant</p>
              </div>
              <div class="col">             
                <input name="distance_to_hydrant" type="text" class="input"  id="distance_to_hydrant">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<div id="additional_coverage" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Additional Coverage</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          {{ csrf_field()  }}
          {{ method_field('POST') }}    
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mold">
                <p>Mold:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mold}}" name="mold" required><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mold_limit">
                <p>Mold Limit:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mold_limit}}" name="mold_limit" required><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="water_back_up">
                <p>Water Back Up:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->water_back_up}}" name="water_back_up" required><br>
            </div>
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="water_back_up_limit">
                <p>Water Back Up Limit:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->water_back_up_limit}}" name="water_back_up_limit" required><br>
            </div>
          </div>
        </div>               
            <br>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
      </div>
    </div>

<div id="forms" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Forms:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>



<div id="additional_insured_or_interest" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Additional Insured/Interest:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="prior_carrier" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Prior Carrier:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="premium" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Premium:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="premium" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Agency Info:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
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
        </form>
      </div>
    </div>
  </div>
</div>

<div id="subjectivities" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>Subjectivities:</h1></div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          <input type="checkbox" name="accords" value="accords">Signed And Dated Accord Application<br>
          <input type="checkbox" name="sl_form" value="sl_form">SL Form<br>
          <input type="checkbox" name="ohs" value="ohs">Older Home Supplemental<br>
          <input type="checkbox" name="per_questionnaire" value="per_questionnaire">Pet Questionnaire<br>          
          <input type="checkbox" name="trampoline_exclusion" value="trampoline_exclusion">Trampoline Exclusion<br>
          <input type="checkbox" name="swimming_pool_exclusion" value="swimming_pool_exclusion">Swimming Pool Exclusion<br>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="rw" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <p>324</p>
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