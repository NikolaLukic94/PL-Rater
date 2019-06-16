<nav class="navbar navbar-expand-lg border-bottom">
  @if((Auth::check()) && (auth()->user()->approved_at !== null))
    <button class="btn btn-primary" id="menu-toggle">Menu</button>
  @endif
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      @if (Auth::guest())
      <li class="nav-item active">
        <a class="nav-link" href="/login">Log In <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp Home</a>
      </li>            
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/home"><i class="fa fa-user" aria-hidden="true"></i>&nbsp Profile</a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog"></i>&nbsp Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i>&nbsp Log Out</a>
        </div>
      </li>
      @endif
    </ul>
  </div>
</nav>