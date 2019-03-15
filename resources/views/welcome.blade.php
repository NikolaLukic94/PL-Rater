



@extends('layouts.app')

<html>
<head>
  <title>Home</title>
</head>
<body>

        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    @include('/partials/top_nav')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0">BG:{{$bgTime}}</h1>
                    <h1 class="mb-0">US:{{$usTime}}</h1>
                    <h1 class="mb-0">CA:{{$montrealTime}} </h1>   
            </div>
        </div>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    @include('/partials/footer')
    </div>
  </div>
</body>
</html>