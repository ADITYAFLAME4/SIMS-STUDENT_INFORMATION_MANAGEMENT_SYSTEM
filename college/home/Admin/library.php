
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






@media screen and (max-width: 500px) {


  .b,.container-fluid{
    width:80%;
    margin:auto;
  }
}
               .page .a{
            height: 200px;
            width: 200px;
        }
        .b{
            height: 650px;
            width: 1000px;
            margin-top: 30px;
           
            border: 2px solid red;
        }
        .c{
            height: 50px;
            width: 300px;
           margin-left: 250px;
            border: 1px solid red;
        }
        .e{
            height: 300px;
            width: 770px;
           margin-left: 10px;
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
            margin-top: 25px;
        }.sw{
            background:red;
            width:120px;
            height:30px;

        }.sn{
            width:200px;
            height:30px;
        }.m{
            margin-left: 10px;
           margin-top: 350px;
        }table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
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
  </style>
</head>

<body id="page-top" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
  <div id="wrapper" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); ">
    <!-- Sidebar -->
      <?php include "includes1/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column"style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); " style="overflow-x:auto;"> 
      <div id="content" style="background:linear-gradient(45deg ,#f0eaea,white,#f0eaea); "style="overflow-x:auto;">
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper"style="overflow-x:auto;" >
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="background:linear-gradient(white,#ffe6e6,white);overflow-x:auto;" >
            <h1 class="h3 mb-0 text-gray-800">COLLEGE NOTICE</h1>
           
          </div>
         
          <div class="b"style="overflow-x:auto;">
             <img src="125.jpg" alt="" width="100px" height="100px" style="margin-left:10px ;">
                
             <center>
        ENTER YOUR UNIVERSITY ID
    </center><br>
    <div class="container" style="overflow-x:auto;">
        <form action="" method="post">
        <center>
            <input type="text" name="Id" class="sn" placeholder="ENTER YOUR Id"/>
            <input type="submit" name="search" class="sw" value="SEARCH BY ID"></center>
        </form>
        <table  border="1px solid black" width="100%">
            <tr>
                <th>Book Name</th>
                <th>Code</th>
                <th>Issue Date</th>
                <th>Last Date</th>
            </tr><br>
            <?php
            $connection =mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'studentmanagement');
            if(isset($_POST['search']))
            {
                $Id =$_POST['Id'];
                $query = "SELECT * FROM sbook WHERE admissionNumber	='$Id' ";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>

<tr>
    <td> <?php echo $row['book']; ?></td>
    <td> <?php echo $row['code']; ?></td>
    <td> <?php echo $row['idate']; ?></td>
    <td> <?php echo $row['ldate']; ?></td>
</tr>
<tr>
    <td> <?php echo $row['book1']; ?></td>
    <td> <?php echo $row['code1']; ?></td>
    <td> <?php echo $row['idate1']; ?></td>
    <td> <?php echo $row['ldate1']; ?></td>
</tr>
<tr>
    <td> <?php echo $row['book2']; ?></td>
    <td> <?php echo $row['code2']; ?></td>
    <td> <?php echo $row['idate2']; ?></td>
    <td> <?php echo $row['ldate2']; ?></td>
</tr>


                    <?php
                }
            }?>
        </table>
             
             <div class="m">
            <B class="p"> PLEASE MAINTAIN THE LIBRARY RULE OTHERWISE YOU HAVE TO PAY FOR THIS</B>
        </div>
        

  


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


