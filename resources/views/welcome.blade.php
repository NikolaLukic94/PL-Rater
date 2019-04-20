@extends('layouts.app')
<head>
  <title>PLQR</title>
</head>
<body>

<div class="d-flex" id="wrapper"><!-- d-flex start -->
  <div id="page-content-wrapper"><!-- page-content-wrapper start -->
  @include('partials.navbar')
    <body onload="startTime()">
      <div class="jumbotron"><!-- jumbotron start -->
      <div id="clockdate">
        <div class="clockdate-wrapper">
          <div id="clock"></div>
          <div id="date"></div>
        </div>
      </div>
      <br>
    <!--<div class="col">
        <h1 class="mb-0">BG:{{$bgTime}}</h1>
        <h1 class="mb-0">US:{{$usTime}}</h1>
        <h1 class="mb-0">CA:{{$montrealTime}} </h1>   
    </div> -->
      <div class="container"><!-- container start -->
        <div class="row"><!-- row start -->
          <div class="col text-center">
            <a href="/subs/emails/create">
              <button type="button" href="/subs/emails/create" class="btn btn-secondary">Send a submission?
              </button>
            </a>
            <a href="/contactus/create">
              <button type="button" class="btn btn-secondary">Contact Us</button>
            </a>
          </div>  
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- jumbotron end -->
  </div><!-- page-content-wrapper end -->
</div><!-- d-flex end -->
  @include('partials.footer')
</body>

<script>
  function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>