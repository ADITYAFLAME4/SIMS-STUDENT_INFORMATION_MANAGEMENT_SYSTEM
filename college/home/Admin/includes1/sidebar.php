<html>
  <head>
    <style>
          

p {
  font-size: 24px;
  color: #fff;
}

.container1 {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.box {
  animation: loader 1.25s infinite;
  background-color: red;
  width: 50px;
  height: 50px;
  color: #00136c;
  display: flex;
  justify-content: center;
  align-items: center;
}

@keyframes loader {
  0% {
    rotate: 0deg;
  }
  100% {
    border-radius: 50%;
    rotate: 0deg;
  }
  50% {
    border-radius: 60%;
    rotate: 45deg;
  }
}
    </style>
  </head>
</html>  
 <ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar" style="background:#dfdbdb ">
      <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center"   style="background:linear-gradient(white,#fab9b9);">
        <div class="sidebar-brand-icon" >
        <div class="container1">
  <div class="box"><img src="../img/logo/12.jpg" style="height:100px;width:100px;border-radius:30%">
  </div>
</div>
        </div>
        <div class="sidebar-brand-text mx-3"style="color:black"><marquee >STUDENT PANNEL</marquee></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link"  href="studentindex.php" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea);">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
       PROFILE
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>My Profile</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="profile.php">My Profile</a>
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
       NOTICE
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>NOTICE</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="stnotice.php">NOTICE</a>
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>

      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
       LIBRARY
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>LIBRARY</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="library.php">LIBRARY</a>
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>

      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
       RESULT RECORD
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>RESULT RECORD</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="result.php">RESULT</a>
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>
      
    
    
     
      <!-- <li class="nav-item">
        <a class="nav-link" href="forms.html">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Forms</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>UI Colors</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li> -->
      <hr class="sidebar-divider">
  
    </ul>