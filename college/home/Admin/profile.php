
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

if(isset($_SESSION['userId'], $_SESSION['password'])) {



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
<?php include 'includes1/title.php';?>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
  <style>
    .q{
        height:100px;
        width:400px;
        border:1px solid red;
        margin-top:20px; 
        background:linear-gradient(white,red);
      }
      .v{
        height:200px;
        width:1100px;
        border:1px solid red;
        margin-top:20px; 
        background:linear-gradient(blue,white,red);
        background-image: url(125.jpg);

      }
      .e{
        background:linear-gradient(white,green);
      }
      .form-control{

        height:50px;
        width:300px;
        border:1px solid red;
        margin-top:20px; 
        background:linear-gradient(pink,red);
      }
    .b{
      background:pink;
      width:1400px;
    }
    .z{
      width:140px;
      height:25px;
      border: solid 1px black;
      margin-left:900px;
    }
  </style>
</head>

<body id="page-top" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
  <div id="wrapper" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
    <!-- Sidebar -->
      <?php include "includes1/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column"style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
      <div id="content" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="background:linear-gradient(white,#ffe6e6,white); >
            <h1 class="h3 mb-0 text-gray-800">My Own Profile</h1>
           
          </div>
          <section>

<div class="container" >
  <strong class="title">My Profile</strong>
    
            
  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span><img src='$row[st_img]' height='180px' width='180px'></span></div>";} ?></a></li>
        <br>


<table >
        <table border="3" cellspacing="8" width="92%"
        style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black; font-size: 16px; ">
            <tr style="background-color: pink ;border-radius:7px;">
           <th width="7%"> <center>ID</center></th>
            
            
        <th width="15%"> <center>Name </center></th>
        <th width="15%"> <center>Email Address</center></th></tr>
        <tr>
        <td width="7%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['Id']."</span></div>";} ?></td>
        <td width="7%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['firstName']." ".$row['lastName']."</span></div>";} ?></td>
        <td width="7%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['emailAddress']."</span></div>";} ?></td>
        
        </tr>

      </table>
       
      
        
    
     
     
     
     <table><br><br><table border="3" cellspacing="8" width="92%" 
        style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black; font-size: 16px; ">
            <tr style="background-color: #fae1e1 ;border-radius:7px;">
            <th width="12%"><center>Admission Number</center></th>
            <th width="12%"> <center>Father Name </center></th>
            <th width="10%"> <center>Mother Name</th>
            <th width="10%"> <center>Gender</center></th>
        
        
      </tr> <tr>
      <td width="12%">
      <?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
    $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
       if($result = mysqli_query($conn, $query)) {
  $row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['admissionNumber']."</span></div>";} ?>
      </td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['fname']."</span></div>";} ?></td>
      <td width="12%">
      <?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['mname']."</span></div>";} ?>
      </td>
      <td width="12%">
      <?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['gender']."</span></div>";} ?>
      </td>
      </tr>
      
      
      
      <table>
        <table><br><br><table border="3" cellspacing="8" width="92%" 
            style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black; font-size: 16px; ">
                <tr style="background-color: #fae1e1 ;border-radius:7px;">
                <th width="12%"><center>Contact Number</center></th>
                <th width="12%"><center> Religion</center> </th>
                <th width="10%"><center> Address</center></th>
            <th width="8%"><center> Date of Birth</center> </th>
            
          </tr>




          <tr>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
     }
            $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
  if($result = mysqli_query($conn, $query)) {
  $row = mysqli_fetch_assoc($result);
    echo "<div class='info'><center><strong></strong> <span>".$row['mobile']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['religion']."</span></div>";} ?></td>
      <td width="12%">
      <?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['address']."</span></div>";} ?>
      </td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['dob']."</span></div>";} ?></td>
      </tr>
      <table> 
            <table><br><br><table border="3" cellspacing="8" width="92%" 
                style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black;  font-size: 16px; ">
                    <tr style="background-color: #fae1e1 ;border-radius:7px;">
                    <th width="12%"><center>Session</center></th>
                    <th width="12%"><center> Current Semister</center></th>
                    <th width="10%"><center> library Card NO</center></th>
                    <th width="10%"><center> cgpa</center></th>
                
              
              </tr>
              <tr>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['session']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['semister']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['library']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['cgpa']."</span></div>";} ?></td>
      </tr>
      <table> 
                <table><br><br><table border="3" cellspacing="8" width="92%" 
                    style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black; font-size: 16px; ">
                        <tr style="background-color: #fae1e1 ;border-radius:7px;">
                        <th width="12%"><center> Have Any Due Fees</center></th>
                        <th width="12%"><center> State Name</center></th>
                        <th width="10%"><center> Police Station</center></th>
                        
                    
                    <th width="15%"><center> LAST PASSED EXM(%)</center></th>
                   
                  </tr>
                  <tr>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['fees']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['state']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['police']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['exam']."</span></div>";} ?></td>
      </tr><table>
        
      
      
      
      
      
      
      
      
      
      <table><br><br><table border="3" cellspacing="8" width="92%" style="background:linear-gradient(45deg ,#fae1e1,white,#fae1e1); color: black; font-size: 16px; ">
                        <tr style="background-color: #fae1e1 ;border-radius:7px;">
                        <th width="12%"> <center>Course Type</center></th>
                        <th width="12%"> <center> Stream</center></th>
                        <th width="10%"><center> Section</center></th>
                        <th width="15%"><center> Your Password </center></th>
                   
                  </tr>
                  <tr>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['ctype']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['classId']."</span></div>";} ?></td>
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['classArmId']."</span></div>";} ?></td>n
      <td width="12%"><?php
    if(isset($_SESSION['prompt'])) {
      showPrompt();
 }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<div class='info'><center><strong></strong> <span>".$row['password']."</span></div>";} ?></td>
      </tr><table>

        
 </table>
  
  

 <form action="" method="POST" enctype="multipart/form-data">
  
   
   <input type="file" class="form-control" name="uploadfile"  id="exampleInputFirstName" >
 <br>
<button type="submit" class="e" name="save" value="student1.php"> UPLOAD YOUR IMAGE</button>
   </form> <?php 


  $Id= $_GET['Id'];
$userId =$_SESSION['userId'];
$query=mysqli_query($conn,"select * from tblstudents where Id ='$userId'");
    $row=mysqli_fetch_array($query);

?>
<?php
if(isset($_POST['save'])){
  
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder="img/".$filename;
  echo $folder;
  move_uploaded_file($tempname, $folder);
    
        
       
       
      
      
        $query = "UPDATE tblstudents set st_img='$folder' WHERE ID='$userId'";
        if ($query) {
                
          echo "<script type = \"text/javascript\">
          window.location = (\"profile.php\")
          </script>"; 
      }
        $data =mysqli_query($conn,$query);
    if($data){
        echo "<script>alert(Data UPdated)</script>";
        ?>
        <meta http-equiv = "refresh" content = ".0; url = http://localhost/FInal%20Year%20Project/attendance-php/Admin/student1.php?page=profile" />
    <?php
    
    }else
    {
        echo "<script>alert(Failed to Update)</script>";
    }
    
      
      
}
?>










<br>
  
   
    

  
</div>

</section>


<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

          <!-- Documentation Link -->
          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div> -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
       <?php include "includes1/footer.php";?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
   <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>
</html>

<?php


  } 

?>


