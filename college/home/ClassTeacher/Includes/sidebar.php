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
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background:#dfdbdb ">
      <a class="sidebar-brand d-flex align-items-center bg-gradient-primary justify-content-center" href="index.php" style="background:linear-gradient(white,#fab9b9);">
        <div class="sidebar-brand-icon" >
        <div class="container1">
  <div class="box"><img src="img/logo/12.jpg" style="height:100px;width:100px;">
  </div>
</div>
        </div>
        <div class="sidebar-brand-text mx-3"><marquee style="color:black " >CLASS TEACHER PANNEL</marquee></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"   style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea);">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> 
      <hr class="sidebar-divider" style="background:#f0eaea">
      <div class="sidebar-heading" style="background:#f0eaea">
        Students
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2" style="background:#f0eaea">
          <i class="fas fa-user-graduate"></i>
          <span>Manage Students</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Students</h6>
            <a class="collapse-item" href="viewStudents.php">View Students</a>
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Result Management
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2" style="background:#f0eaea">
          <i class="fas fa-user-graduate"></i>
          <span>Manage  Result</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="exmsubject.php"> Semister Result</a>
        
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>


      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Code Register
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2" style="background:#f0eaea">
          <i class="fas fa-user-graduate"></i>
          <span>Manage  Registration</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="registration.php"> Registration System</a>
        
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>



      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Attendance
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
          aria-expanded="true" aria-controls="collapseBootstrapcon" style="background:#f0eaea">
          <i class="fa fa-calendar-alt"></i>
          <span>Manage Attendance</span>
        </a>
        <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Attendance</h6>
            <a class="collapse-item" href="takeAttendance.php">Take Attendance</a>
            <a class="collapse-item" href="viewAttendance.php">View Class Attendance</a>
            <a class="collapse-item" href="viewStudentAttendance.php">View Student Attendance</a>
            <a class="collapse-item" href="downloadRecord.php">Today's Report (xls)</a>
            <!-- <a class="collapse-item" href="addMemberToContLevel.php ">Add Member to Level</a> -->
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
      <div class="version" id="version-ruangadmin"></div>
    </ul>