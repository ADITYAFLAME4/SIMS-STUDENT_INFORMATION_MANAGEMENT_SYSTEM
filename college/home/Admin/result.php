
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
       @media only screen and (max-width:300px) {
  /* For mobile phones: */
  .body,.all, .table {
    width: auto%;
  }
}
        
.all{
    width:100ah;
}

output{
    width:50%;
    height: 24px;

    border: 1px solid black;
}
.st{
    width:100%;
    height: 24px;

    border: 1px solid black
}.sv{
    width:100%%;
    height: 24px;
float: inline-end;
    border: 1px solid black
}
.sy{
    width:100%%;
    height: 24px;
float: inline-end;
    
}
.ab{
 float: left;
 border-right: 1px solid black;
 width:50%;
    height: 24px;
    text-align: left;

}
.xy{
 float: left;
 
 width:50%;
    height: 24px;
    text-align: left;

}.ac{
    margin-left: 20px;
    text-align: left;
}
.yz{
   text-align: center;
    text-align: left;
}
.sv{width:100%%;
    height: 24px;

    border: 1px solid black;
    text-align: left;

}
.svv{width:100%%;
    height: 24px;

    border: 1px solid black;
   

}
.st{width:30%;
    height: 24px;

    border: 1px solid black;
    text-align: left;

}table, th, td {
  border: 0.5px solid;

}td{
    text-align: left;
}
        .page .a{
            height: 200px;
            width: 200px;
        }
        .bb{
            height: 550px;
            width: auto;
            margin-top: 30px;
           
            border: 2px solid red;
        }
        .c{
            height: 50px;
            width: 500px;
           
            border: 1px solid red;
            
        }
        .e{
            height: 300px;
            width: 900px;
           
           margin-top: 15px;
            border: 1px solid red;
        }
        .f{
            height: 30px;
            width: 130px;
           margin-left: 10px;
           
            border: 1px solid red;
        }
        .p{
            margin-left: 10px;
        }
  
    .b{
      background:white;
   
    }
    .z{
      width:140px;
      height:25px;
      border: solid 1px black;
      margin-left:900px;
    }

    @media print {
      body *{
        visibility:hidden;
      }
      buttom *{
        visibility:hidden;
      }
      .print-container, .print-container *{
        visibility:visible;
        width:auto;
        font-size:18px;
      }
      .print-container{
        left:0px;
        top:0px; margin-right:20px;
      }
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
            <h1 class="h3 mb-0 text-gray-800">COLLEGE NOTICE</h1>
           
          </div>
         
  
  <div class="print-container">
          
<div class="all">
    <H1 align="center">TECHNO INDIA GROUP </h1> 
<center><img src="../img/t.png"height="100px" width="100px">  <BR>
<h3>
    <U>PROVISIONAL RECORD</U>
</h3>
<div class="svv"><b> ALL SEMESTER EXAMINATION OF</b></div>
 


<table style="width:100%;padding:20px;">
  <th style="width:50%;">NAME  : <?php
       if(isset($_SESSION['prompt'])) {
         showPrompt();
    }
       $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
          if($result = mysqli_query($conn, $query)) {
     $row = mysqli_fetch_assoc($result);
echo " <span>".$row['firstName']." ".$row['lastName']."</span>";} ?>
   
  </th>
  <th> REGISTRATION NO  :  <?php
       if(isset($_SESSION['prompt'])) {
         showPrompt();
    }
       $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
          if($result = mysqli_query($conn, $query)) {
     $row = mysqli_fetch_assoc($result);
echo "<strong></strong> <span>".$row['admissionNumber']."</span>";} ?></th>
</table>
<table style="width:100%;padding:20px;">
  <th style="width:50%;">EMAIL :  <?php
       if(isset($_SESSION['prompt'])) {
         showPrompt();
    }
       $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
          if($result = mysqli_query($conn, $query)) {
     $row = mysqli_fetch_assoc($result);
echo "<strong></strong> <span>".$row['emailAddress']."</span>";} ?></th>
  <th> CONTACT NO :  <?php
       if(isset($_SESSION['prompt'])) {
         showPrompt();
    }
       $query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
          if($result = mysqli_query($conn, $query)) {
     $row = mysqli_fetch_assoc($result);
echo "<strong></strong> <span>".$row['mobile']."</span>";} ?> </th>
</table>





<div class="sv"><b >COURSE :  </b><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<span>".$row['classId']."</span>";} ?></div>
   <div class="sv"><b >SESSION :  </b><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['session']."</span>";} ?></div>
   <div class="sv"><b >COLLEGE/INSTITUTION :         </b>    TECHNO ENGINEERING COLLEGE BANIPUR  </div>

<br><br>
   <table class="table" style="width:100%; border-top:1.5px solid black;">
    <thead style="border-bottom:1.5px solid black;">
      <tr>
        <th>SEMISTER</th>
        <th >TOTAL MARKS(CGPA)</th>
        <th style="width:400px ;">REMARKS</th>

      </tr>
    </thead>
    <tbody style="text-align:right; border-top:1.5px solid black;">
      <tr >
        <td>1ST SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['first']."</span>";} ?></center></td>
        <td>
        <center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark']."</span>";} ?></center>
        </td>
        

      </tr>
    
      <tr>
        <td>2ND SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number2']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark2']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>3RD SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number3']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark3']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>4TH SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number4']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark4']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>5TH SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number5']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark5']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>6TH SEMISTER </td>
        <td>
        <center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number6']."</span>";} ?></center>
        </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark6']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>7TH SEMISTER </td>
        <td> <center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number7']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark7']."</span>";} ?></center></td>
      </tr>
      <tr>
        <td>8TH SEMISTER </td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['number8']."</span>";} ?></center></td>
        <td><center><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['remark8']."</span>";} ?></center></td>
      </tr> 
      

      




    </tbody>
    
 
</table><br>
<div class="sv"><b >AVERAGE :  </b><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo " <span>".$row['average']."</span>";} ?></div>
<div class="sv"><b >STUDENT COURSE TYPE : </b><?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
     }
$query = "SELECT * FROM tblstudents WHERE Id = '".$_SESSION['userId']."' AND password = '".$_SESSION['password']."'";;
if($result = mysqli_query($conn, $query)) {
$row = mysqli_fetch_assoc($result);
echo "<span>".$row['ctype']."</span>";} ?></div> <BR>
    </BR>

<BR><BR>



</center><table style="width:100%; border:1.5px solid white;">
  <th style="width:50%;">KOLKATA</th>
  <th> Signature Of Principal</th>
</table>
</div>
      <br><br>
        
        
<button  style="background:green;"onclick="window.print()">Print this page</button>



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


