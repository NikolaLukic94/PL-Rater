<div class="sidebar">
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-center"><h2>PLQR</h2></div>
  <div class="list-group list-group-flush">
    <a href="/users" class="list-group-item list-group-item-action bg-light"><i class="fas fa-cog"></i>&nbsp Users</a>
    <button class="dropdown-btn"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp Submissions 
    </button>
    <div class="dropdown-container">
      <a href="/subs/emails/index" class="list-group-item list-group-item-action bg-light">Received</a>
      <a href="/subs/emails/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>        
    <a href="/emails/create" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp Email</a>
    <button class="dropdown-btn"><i class="fas fa-calculator"></i>&nbsp Rates 
    </button>
    <div class="dropdown-container">
      <a href="/rate/index" class="list-group-item list-group-item-action bg-light">Open</a>
      <a href="/rate/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>   
    <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user" aria-hidden="true"></i></i>&nbsp Profile</a>
    <button class="dropdown-btn"><i class="fa fa-file" aria-hidden="true"></i>&nbsp Accounts 
    </button>
    <div class="dropdown-container">
      <a href="/file/index" class="list-group-item list-group-item-action bg-light">Search</a>
      <a href="/file/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>     
    <a href="/subs/stats/index" class="list-group-item list-group-item-action bg-light"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp Stats</a>
    <button class="dropdown-btn"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp Forms 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="/forms/index" class="list-group-item list-group-item-action bg-light">Open</a>
      <a href="/forms/create" class="list-group-item list-group-item-action bg-light">Create</a>      
    </div>     
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