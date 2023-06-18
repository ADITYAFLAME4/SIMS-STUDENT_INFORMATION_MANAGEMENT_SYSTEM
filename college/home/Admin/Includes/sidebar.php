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
  background-color: white;
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
      <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center"   style="background:linear-gradient(white,#fab9b9,#ff5050);">
        <div class="sidebar-brand-icon" >
        <div class="container1">
  <div class="box"><img src="../img/t.png" style="height:100px;width:100px; border-radius: 45%;">
  </div>
</div>
        </div>
        <div class="sidebar-brand-text mx-3"style="color:black"><marquee >ADMIN PANNEL</marquee></div>
      </a>






      
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link"  style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea);">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider" style="background:#f0eaea">
      <div class="sidebar-heading" style="background:#f0eaea">
       Session & Term
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
          aria-expanded="true" aria-controls="collapseBootstrapcon" style="background:#f0eaea">
          <i class="fa fa-calendar-alt"></i>
          <span>Manage Session & Term</span>
        </a>
        <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contribution</h6>
            <a class="collapse-item" href="createSessionTerm.php">Create Session and Term</a>
            <!-- <a class="collapse-item" href="addMemberToContLevel.php ">Add Member to Level</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
        Class and Class Arms
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>Manage Courses</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Courses</h6>
            <a class="collapse-item" href="createClass.php">Create Courses</a>
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapusers"
          aria-expanded="true" aria-controls="collapseBootstrapusers" style="background:#f0eaea">
          <i class="fas fa-code-branch"></i>
          <span>Manage Years  </span>
        </a>
        <div id="collapseBootstrapusers" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Years Group</h6>
            <a class="collapse-item" href="createClassArms.php">Create Years </a>
            <!-- <a class="collapse-item" href="usersList.php">User List</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider" style="background:#f0eaea">
      <div class="sidebar-heading" style="background:#f0eaea">
        Subjects
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2" style="background:#f0eaea">
          <i class="fas fa-user-graduate"></i>
          <span>Manage Subjects</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
           
          <a class="collapse-item" href="manage_subject.php">Create Subjects</a>

      
         
            
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>


       <hr class="sidebar-divider" style="background:#f0eaea"> 
      <div class="sidebar-heading" style="background:#f0eaea">
        Teachers
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapassests"
          aria-expanded="true" aria-controls="collapseBootstrapassests" style="background:#f0eaea">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Manage Teachers</span>
        </a>
        <div id="collapseBootstrapassests" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Class Teachers</h6>
             <a class="collapse-item" href="createClassTeacher.php">Create Class Teachers</a>
              <!-- <a class="collapse-item" href="assetsCategoryList.php">Assets Category List</a>
             <a class="collapse-item" href="createAssets.php">Create Assets</a> -->
          </div>
        </div>
      </li>
      
       <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapschemes"
          aria-expanded="true" aria-controls="collapseBootstrapschemes">
          <i class="fas fa-home"></i>
          <span>Manage Schemes</span>
        </a>
        <div id="collapseBootstrapschemes" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Schemes</h6>
             <a class="collapse-item" href="createSchemes.php">Create Scheme</a>
            <a class="collapse-item" href="schemeList.php">Scheme List</a>
          </div>
        </div>
      </li> -->

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
            <a class="collapse-item" href="createStudents.php">Create Students</a>
            
           
            
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>

     
   
      <hr class="sidebar-divider" style="background:#f0eaea"> 
      <div class="sidebar-heading" style="background:#f0eaea">
        Notice & Events
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapassests"
          aria-expanded="true" aria-controls="collapseBootstrapassests" style="background:#f0eaea">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Notice  & Events</span>
        </a>
        <div id="collapseBootstrapassests" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage notice</h6>
            <a class="collapse-item" href="displaynotice.php"> Display Notice</a>
             <a class="collapse-item" href="createClassTeacher1.php"> Notice for All</a>
             
             <div id="collapseBootstrapassests" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Events</h6>
             <a class="collapse-item" href="events.php">Events</a>
             
             
              <!-- <a class="collapse-item" href="assetsCategoryList.php">Assets Category List</a>
             <a class="collapse-item" href="createAssets.php">Create Assets</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider"style="background:#f0eaea" >
      <div class="sidebar-heading" style="background:#f0eaea">
       Regarding Placement
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap"style="background:#f0eaea">
          <i class="fas fa-chalkboard"></i>
          <span>PlaceMent Cell</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="placement.php">PLACEMENT RECORD</a>
          <a class="collapse-item" href="viewplacement.php">PLACEMENT VIEW</a>
         
            <!-- <a class="collapse-item" href="#">Member List</a> -->
          </div>
        </div>
      </li>


      <hr class="sidebar-divider" style="background:#f0eaea">
      <div class="sidebar-heading" style="background:#f0eaea">
    Members
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
          aria-expanded="true" aria-controls="collapseBootstrapcon" style="background:#f0eaea">
          <i class="fa fa-calendar-alt"></i>
          <span>Manage Members</span>
        </a>
        <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
    
            <a class="collapse-item" href="accountant.php">Accountant</a>
            
            <a class="collapse-item" href="librarian.php">Librarian</a>

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
      
    </ul>