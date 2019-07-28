@extends('layouts.app')
  <div class="d-flex" id="wrapper"><!-- d-flex start --> 
    @include('partials.sidebar')
    <div id="page-content-wrapper"><!-- page-content-wrapper start --> 
    @include('partials.navbar')
      <div class="tab"><!-- tab start -->
        <div class="container"><!-- container start -->
          <div class="row"><!-- row start -->
            <button class="tablinks" onclick="openCity(event, 'general')">General Info</button>
            <button class="tablinks" onclick="openCity(event, 'correspondence')">Correspondence</button>
            <button class="tablinks" onclick="openCity(event, 'submission')">Submission</button>
            <button class="tablinks" onclick="openCity(event, 'rw')">RW</button>     
            <button class="tablinks" onclick="openCity(event, 'quote')" >Quote</button>   
            <button class="tablinks" onclick="openCity(event, 'binder')" disabled>Binder</button>
            <button class="tablinks" onclick="openCity(event, 'policy')" disabled>Policy</button>                  
            <button class="tablinks" onclick="openCity(event, 'finance')" disabled>Finance</button>      
            <button class="tablinks" onclick="openCity(event, 'support')">Support</button>   
            <button class="tablinks" onclick="openCity(event, 'log')">Log</button>           
            <button class="tablinks" onclick="openCity(event, 'note')">Note</button>     
          </div><!-- row end -->
            @include('partials.file.rw')
            @include('partials.file.submission')
            @include('partials.file.general')
            @include('partials.file.log')           
        </div><!-- container end -->
      </div><!-- tab end -->
  </div><!-- page-content-wrapper end --> 
</div><!-- d-flex end --> 
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

<style>
tr:nth-child(even) {
  background-color: #dddddd;
}

table td{
  padding-bottom: 4px;
}

</style>