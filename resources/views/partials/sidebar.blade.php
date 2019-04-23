<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">PLQR</div>
  <div class="list-group list-group-flush">

    <a href="/users" class="list-group-item list-group-item-action bg-light">Users</a>
    <button class="dropdown-btn">Submissions 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="/subs/emails/index" class="list-group-item list-group-item-action bg-light">Received</a>
      <a href="/subs/emails/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>        
    <a href="/emails/create" class="list-group-item list-group-item-action bg-light">Email</a>
    <button class="dropdown-btn">Rates 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="/rate/index" class="list-group-item list-group-item-action bg-light">Open</a>
      <a href="/rate/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>   
    <a href="user/profile/{{Auth::user()->name }}" class="list-group-item list-group-item-action bg-light">Profile</a>
    <button class="dropdown-btn">Accounts 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="/file/index" class="list-group-item list-group-item-action bg-light">Search</a>
      <a href="/file/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>     
    <a href="/subs/stats/index" class="list-group-item list-group-item-action bg-light">Stats</a>
    <button class="dropdown-btn">Forms 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="/forms/index" class="list-group-item list-group-item-action bg-light">Open</a>
      <a href="/forms/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>     
      </div>
</div>

<script>
  //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }

</script>