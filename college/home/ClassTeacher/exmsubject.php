
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

$query = "SELECT tblclass.className,tblclassarms.classArmName 
    FROM tblclassteacher
    INNER JOIN tblclass ON tblclass.Id = tblclassteacher.classId
    INNER JOIN tblclassarms ON tblclassarms.Id = tblclassteacher.classArmId
    Where tblclassteacher.Id = '$_SESSION[userId]'";

    $rs = $conn->query($query);
    $num = $rs->num_rows;
    $rrw = $rs->fetch_assoc();

?>

<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';




//--------------------EDIT------------------------------------------------------------

 if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id= $_GET['Id'];

        $query=mysqli_query($conn,"select * from tblstudents where Id ='$Id'");
        $row=mysqli_fetch_array($query);

        //------------UPDATE-----------------------------

        if(isset($_POST['update'])){

   


              $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $otherName=$_POST['otherName'];

  $emailAddress=$_POST['emailAddress'];
  $admissionNumber=$_POST['admissionNumber'];
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $gender=$_POST['gender'];
  $mobile=$_POST['mobile'];
  $religion=$_POST['religion'];
  $address=$_POST['address'];
  $dob=$_POST['dob'];
  $session=$_POST['session'];
  $semister=$_POST['semister'];
  $library=$_POST['library'];
  $cgpa=$_POST['cgpa'];
  $fees	=$_POST['fees'];
  $state=$_POST['state'];
 $police=$_POST['police'];
  $exam=$_POST['exam'];
  $ctype=$_POST['ctype'];
  $notice=$_POST['notice'];
  $password=$_POST['password'];
  $classId=$_POST['classId'];
  $classArmId=$_POST['classArmId'];
  $dateCreated = date("Y-m-d");
  $first=$_POST['first'];
  $remark=$_POST['remark'];

  $number2=$_POST['number2'];
  $remark2=$_POST['remark2'];

  
  $number3=$_POST['number3'];
  $remark3=$_POST['remark3'];

  
  $number4=$_POST['number4'];
  $remark4=$_POST['remark4'];

  
  $number5=$_POST['number5'];
  $remark5=$_POST['remark5'];

  
  $number6=$_POST['number6'];
  $remark6=$_POST['remark6'];

  
  $number7=$_POST['number7'];
  $remark7=$_POST['remark7'];

  
  $number8=$_POST['number8'];
  $remark8=$_POST['remark8'];

  $average=$_POST['average'];
 
  

 $query=mysqli_query($conn,"update tblstudents set st_img='$folder',firstName='$firstName', lastName='$lastName',emailAddress='
 $emailAddress', admissionNumber='$admissionNumber',fname='$fname',mname='$mname',gender='$gender',mobile='$mobile',religion='$religion',
 address='$address',dob='$dob',session='$session',semister='$semister',library='$library',cgpa='$cgpa',fees='$fees',state='$state',police='$police',exam='$exam',ctype='$ctype',notice='$notice'
 ,password='$password', classId='$classId',classArmId='$classArmId',first='$first',remark='$remark',number2='$number2',remark2='$remark2'
 ,number3='$number3',remark3='$remark3'
 ,number4='$number4',remark4='$remark4'
 ,number5='$number5',remark5='$remark5'
 ,number6='$number6',remark6='$remark6'
 ,number7='$number7',remark7='$remark7'
 ,number8='$number8',remark8='$remark8',average='$average'

   where Id='$Id' ");
            if ($query) {
                
                echo "<script type = \"text/javascript\">
                window.location = (\"exmsubject.php\")
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
        $classArmId= $_GET['classArmId'];

        $query = mysqli_query($conn,"DELETE FROM tblstudents WHERE Id='$Id'");

        if ($query == TRUE) {

            echo "<script type = \"text/javascript\">
            window.location = (\"createStudents.php\")
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
  <title>Dashboard</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">



   <script>
    function classArmDropdown(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxClassArms2.php?cid="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php include "Includes/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Student in (<?php echo $rrw['className'].' - '.$rrw['classArmName'];?>) Class</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Student in Class</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Records</h6>
                    <?php echo $statusMsg; ?>
                </div>


                
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                   <div class="form-group row mb-3">
            
                        <input type="hidden" class="form-control" name="uploadfile" value="<?php echo $row['uploadfile'];?>" id="exampleInputFirstName" >
                       
                       
                        
                        <input type="hidden" class="form-control" name="firstName" value="<?php echo $row['firstName'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" name="lastName" value="<?php echo $row['lastName'];?>" id="exampleInputFirstName" >

                        <input type="hidden" class="form-control" name="otherName" value="<?php echo $row['otherName'];?>" id="exampleInputFirstName" >
                       
                        <input type="hidden" class="form-control" id="emails"name="emailAddress" value="<?php echo $row['emailAddress'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control"  required name="admissionNumber" value="<?php echo $row['admissionNumber'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="fname" value="<?php echo $row['fname'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control" required name="mname" value="<?php echo $row['mname'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="gender" value="<?php echo $row['gender'];?>" id="exampleInputFirstName" >
                      
                      <input type="hidden" class="form-control" required name="mobile" value="<?php echo $row['mobile'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="religion" value="<?php echo $row['religion'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control" required name="address" value="<?php echo $row['address'];?>" id="exampleInputFirstName" >

                      <input type="hidden" class="form-control" required name="dob" value="<?php echo $row['dob'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control" required name="session" value="<?php echo $row['session'];?>" id="exampleInputFirstName" >
                      
                        
                      <input type="hidden" class="form-control" required name="semister" value="<?php echo $row['semister'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control"  name="library" value="<?php echo $row['library'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control" name="cgpa" value="<?php echo $row['cgpa'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="fees" value="<?php echo $row['fees'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control"  name="state" value="<?php echo $row['state'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="police" value="<?php echo $row['police'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="exam" value="<?php echo $row['exam'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control" required name="ctype" value="<?php echo $row['ctype'];?>" id="exampleInputFirstName" >
                       
                      <input type="hidden" class="form-control"  name="notice" value="<?php echo $row['notice'];?>" id="exampleInputFirstName" >
                        




























                        
                      <input type="hidden" class="form-control"  minlength="8"name="password" value="<?php echo $row['password'];?>" id="exampleInputFirstName" >

                      <input type="hidden" class="form-control"  minlength="8"name="classId" value="<?php echo $row['classId'];?>" id="exampleInputFirstName" >
                        
                      <input type="hidden" class="form-control"  minlength="8"name="classArmId" value="<?php echo $row['classArmId'];?>" id="exampleInputFirstName" >
                       
                        <div class="col-xl-6">
                        <label class="form-control-label" >1st Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="first" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>


                        <div class="col-xl-6">
                        <label class="form-control-label" >2nd Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number2" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark2" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>

                        <div class="col-xl-6">
                        <label class="form-control-label" >3rd Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number3" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark3" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" >4th Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number4" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark4" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" >5th Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number5" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark5" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" >6th Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number6" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark6" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" >7th Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number7" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark7" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" >8th Semister <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"name="number8" value="<?php echo $row['first'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" > Teacher's Remark<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="remark8" value="<?php echo $row['remark'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6" style="width:200px;">
                        <label class="form-control-label" > Average<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  name="average" value="<?php echo $row['average'];?>" id="exampleInputFirstName" >
                        </div>
                       


</div>
                    <button type="submit" name="update" class="btn btn-warning">Record Result</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    if (isset($Id))
                    {
                    ?>

                    <?php
                    }         
                    ?>
                    
                  </form>
                </div>
              </div>
              


              <!-- Input Group -->
                 <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Student In Class</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        
                        <th>Admission No</th>
                        <th>Class</th>
                        <th>Class Arm</th>
                        <th>ADD</th>
                       
                      </tr>
                    </thead>
                    
                    <tbody>

                  <?php
                      $query = "SELECT tblstudents.Id,tblclass.className,tblclassarms.classArmName,tblclassarms.Id AS classArmId,tblstudents.firstName,
                      tblstudents.lastName,tblstudents.otherName,tblstudents.admissionNumber,tblstudents.dateCreated
                      FROM tblstudents
                      INNER JOIN tblclass ON tblclass.Id = tblstudents.classId
                      INNER JOIN tblclassarms ON tblclassarms.Id = tblstudents.classArmId
                      where tblstudents.classId = '$_SESSION[classId]' and tblstudents.classArmId = '$_SESSION[classArmId]'";
                      $rs = $conn->query($query);
                      $num = $rs->num_rows;
                      $sn=0;
                      $status="";
                      if($num > 0)
                      { 
                        while ($rows = $rs->fetch_assoc())
                          {
                             $sn = $sn + 1;
                            echo"
                              <tr>
                                <td>".$sn."</td>
                                <td>".$rows['firstName']."</td>
                                <td>".$rows['lastName']."</td>
                       
                                <td>".$rows['admissionNumber']."</td>
                                <td>".$rows['className']."</td>
                                <td>".$rows['classArmName']."</td>
                                <td><button><a href='?action=edit&Id=".$rows['Id']."'><i class='fas fa-fw fa-edit'></i></a></button></td>
                               
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