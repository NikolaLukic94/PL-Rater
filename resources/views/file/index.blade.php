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
  <button class="tablinks" onclick="openCity(event, 'London')">General Info</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Correspondence</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Submission</button>
  <button class="tablinks" onclick="openCity(event, 'rw')">RW</button>     
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Quote</button>   
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Binder</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Policy</button>                              
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Finance</button>      
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Support</button>   
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Log</button>           
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Note</button>                     
</div>
<!-- Tab content -->
<div id="London" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          {{ csrf_field()  }}
          {{ method_field('POST') }}                        
            <p>Named Insured:</p> 
            <input type="text" value="{{$file->named_insured}}" name="named_insured" required><br>
            <p>Additional Named Insured/DBA:</p>
            <input type="text" value="{{$file->additional_ni}}" name="additional_ni"><br>
            <p>Type of entitiy:</p>
            <input type="text" value="{{$file->entity_type}}" name="entity_type" required><br>
            <p>SSN:</p>
            <input type="text" value="{{$file->ssn}}" name="ssn"><br>
            <hr>
            <!-- Mailing address -->
            <p>Street name/number:</p>
            <input type="text" value="{{$file->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
            <p>City:</p>
            <input type="text" value="{{$file->mailing_address_city}}" name="mailing_address_city" required><br>
            <p>ZIP code:</p>
            <input type="text" value="{{$file->mailing_address_zip}}" name="mailing_address_zip" required><br>
            <p>County:</p>
            <input type="text" value="{{$file->mailing_address_county}}" name="mailing_address_county" required><br>
            <p>State:</p>
            <input type="text" value="{{$file->mailing_address_state}}" name="mailing_address_state" required><br>
            <hr>
            <!-- Location address -->
            <p>Street name/number:</p>
            <input type="text" value="{{$file->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required><br>
            <p>City:</p>
            <input type="text" value="{{$file->location_address_city}}" name="location_address_city" required><br>
            <p>ZIP code:</p>
            <input type="text" value="{{$file->location_address_zip}}" name="location_address_zip" required><br>
            <p>County:</p>
            <input type="text" value="{{$file->location_address_county}}" name="location_address_county" required><br>
            <p>State:</p>
            <input type="text" value="{{$file->mailing_address_state}}" name="location_address_state" required><br>          
            <br>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
      </div>
    </div>
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