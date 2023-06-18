
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

    
  
 if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id= $_GET['Id'];

        $query=mysqli_query($conn,"select * from events where Id ='$Id'");
        $row=mysqli_fetch_array($query);

        //------------UPDATE-----------------------------

        if(isset($_POST['update'])){
            $img=$_POST['img'];
    
            $subject=$_POST['subject'];
            $date=$_POST['date'];
            $details=$_POST['details'];
        
         
        
            $query=mysqli_query($conn,"update events set img='$img',subject='$subject',date='$date',details='$details'  where Id='$Id'");

            if ($query) {
                
                echo "<script type = \"text/javascript\">
                window.location = (\"events.php\")
                </script>"; 
            }
            else
            {
                $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
            }
        }
    }


//--------------------------------DELETE------------------------------------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "delete")
	{
        $Id= $_GET['Id'];

        $query = mysqli_query($conn,"DELETE FROM events WHERE Id='$Id'");

        if ($query == TRUE) {

                echo "<script type = \"text/javascript\">
                window.location = (\"events.php\")
                </script>";  
        }
        else{

            $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>"; 
         }
      
  }


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
<?php include 'includes/title.php';?>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
.table{
 
}
.tr{
 
}
.tr :hover{
    background-color: blueviolet;
}
.subject:hover{
    background-color: bisque;
}
.details:hover{
    background-color: bisque;
}
.date:hover{
    background-color: bisque;
}
    .submit{
        background-color: red;
        height: 50px;
        width: 80px;
        border-radius: 15px;
       margin-left: 1000px;
    }
    .submit:hover{
        background-color: white;
    }
</style>
</head>

<body id="page-top" >
  <div id="wrapper" >
    <!-- Sidebar -->
      <?php include "Includes/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content" >
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->
        <form action="" method="POST"  enctype="multipart/form-data">
    <div class="container">
        <form action="" method="POST"  enctype="multipart/form-data">
        <center><div class="title" style=" width:10%;font-size: 25px; position:relative;">
         <b>Events</b>
        </div> </center><br>
        <div class="form">
        

<table border="3" cellspacing="8" width="90%" class="table">
          
<tr class="tr"> <th>Upload Img</th><th>subject</th>
    <th>Details</th>
    <th>Date</th>
   

   </tr><tr ><td style="width:160px;"><input  type="file" class="form-control" name="img" value="<?php echo $row['img'];?>" id="exampleInputFirstName" ></td>
    <td><input type="text" name="subject" style="height: 50px; width: 100%;"value="<?php echo $row['subject'];?>" class="subject" placeholder="Enter Notice Tittle"></td>
    <td><input type="text" name="details" style="height: 50px; width: 100%;" value="<?php echo $row['details'];?>"class="details" placeholder="Enter Notice Details"></td>
    <br><td><input type="datetime-local" name="date" style="height: 50px; width: 100%;" value="<?php echo $row['date'];?>"class="date" placeholder="Select Notice Date & Timing"></td>

    
</tr>
                
            </div>
            

        </table> <br>
        <input type="submit" value="Submit" name="save1" class="submit">
    </div>
</form>
    </div></from>


<?php 
if($_POST['save1'])
{
    $filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder="eimg/".$filename;
echo $folder;
move_uploaded_file($tempname, $folder);

    $subject= $_POST['subject'];
    $details= $_POST['details'];
    $date= $_POST['date'];
   
    
    
    $query="INSERT INTO events(img,subject,details,date) 
    Values('$folder','$subject','$details','$date')";
    $data =mysqli_query($conn,$query);
if($data){
    echo" <script>alert(Data Register)</script>";

}else
{
    echo"<script>alert(Failed to Register)</script>";
}
}
?>

        

              <!-- Input Group -->
                 <div class="row"  >
              <div class="col-lg-12">
              <div class="card mb-4" >
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" >
                  <h6 class="m-0 font-weight-bold text-primary">All Notice</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr >
                      <th>EVENTS</th>
                        <th>SUBJECT</th>
                        <th>DETAILS</th>
                        <th>DATE</th>
                        
                        <th>DELETE</th>
                      </tr>
                    </thead>
                  
                    <tbody>

                  <?php
                      $query = "SELECT * FROM events";
                      $rs = $conn->query($query);
                      $num = $rs->num_rows;
                      $sn=0;
                      if($num > 0)
                      { 
                        while ($rows = $rs->fetch_assoc())
                          {
                             $sn = $sn + 1;
                            echo"
                              <tr >
                              <td  ><img src='$rows[img]' height='250px' width='250px'></td>
                                <td>".$rows['subject']."</td>
                                <td>".$rows['details']."</td>
                                <td>".$rows['date']."</td>
                                
                                <td><a href='?action=delete&Id=".$rows['Id']."'><i class='fas fa-fw fa-trash'></i>Delete</a></td>
                              </tr>";
                          }
                      }
                      else
                      {
                           echo   
                           "<div class='alert alert-danger' role='alert'>
                            No Record Found!
                            </div>";
                      }
                      
                      ?>
                    </tbody>
                  </table>

                  <button onclick="window.print()">Print</button>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!--Row-->

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
       <?php include "Includes/footer.php";?>
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