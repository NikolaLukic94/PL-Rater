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
    <button class="tablinks" onclick="openCity(event, 'additional_coverage')">Additional Coverage</button>
    <button class="tablinks" onclick="openCity(event, 'forms')">Forms</button>     
    <button class="tablinks" onclick="openCity(event, 'additional_insured_or_interest')">Additional Insured/Interest</button>   
    <button class="tablinks" onclick="openCity(event, 'prior_carrier')">Prior Carrier</button>
    <button class="tablinks" onclick="openCity(event, 'premium')">Premium</button> 
    <button class="tablinks" onclick="openCity(event, 'agency_info')">Agency Info</button>   
    <button class="tablinks" onclick="openCity(event, 'subjectivities')">Subjectivities</button>                
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
    <div class="card-header text-center">General Info</div>
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

<div id="additional_coverage" class="tabcontent">
  <div class="col">
    <div class="card-header text-center"><h1>General Info</h1></div>
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
    <div class="card-header text-center">Forms:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>



<div id="additional_insured_or_interest" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Additional Insured/Interest:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="prior_carrier" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Prior Carrier:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="premium" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Premium:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="premium" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Agency Info:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
        </form>
      </div>
    </div>
  </div>
</div>

<div id="subjectivities" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">Subjectivities:</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                
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