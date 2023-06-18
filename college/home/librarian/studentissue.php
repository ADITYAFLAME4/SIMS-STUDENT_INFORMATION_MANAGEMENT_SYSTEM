
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

//-----------------------SAVE--------------------------------------------------

if(isset($_POST['save'])){
  
    
  
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $emailAddress=$_POST['emailAddress'];
  $admissionNumber=$_POST['admissionNumber'];
 
  $password=$_POST['password'];
  $mobile=$_POST['mobile'];
  $classId=$_POST['classId'];
  $book	=$_POST['book'];
  $code	=$_POST['code'];
  $idate=$_POST['idate'];
  $ldate=$_POST['ldate'];

    
  $query=mysqli_query($conn,"select * from sbook where idate ='$idate'");
  $ret=mysqli_fetch_array($query);

  
  if($ret > 0){ 

      $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>You Have Already Issue A Book!</div>";
  }
  else{



    $query=mysqli_query($conn,"insert into sbook(firstName,lastName,emailAddress,admissionNumber,password,mobile,classId,book,code,idate,ldate) 
    value('$firstName','$lastName','$emailAddress','$admissionNumber','$password','$mobile','$classId','$book','$code','$idate','$ldate')");

    if ($query) {
        
        $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Created Successfully!</div>";
            
    }
    else
    {
         $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
    }
  }
}

//---------------------------------------EDIT-------------------------------------------------------------






//--------------------EDIT------------------------------------------------------------

 if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id= $_GET['Id'];

        $query=mysqli_query($conn,"select * from tblstudents where Id ='$Id'");
        $row=mysqli_fetch_array($query);

       

        if(isset($_POST['update'])){

 


  
   $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $emailAddress=$_POST['emailAddress'];
  $admissionNumber=$_POST['admissionNumber'];
 

  $mobile=$_POST['mobile'];
 $password=$_POST['password'];

 $classId=$_POST['classId'];
 $code	=$_POST['code'];
 $idate=$_POST['idate'];
 $ldate=$_POST['ldate'];

 $query=mysqli_query($conn,"update tblstudents set st_img='$folder',firstName='$firstName', lastName='$lastName',emailAddress='
 $emailAddress', admissionNumber='$admissionNumber',fname='$fname',mname='$mname',gender='$gender',mobile='$mobile',idate='$idate',
 address='$address',dob='$dob',session='$session',semister='$semister',library='$library',cgpa='$cgpa',fees='$fees',state='$state',police='$police',exam='$exam',ctype='$ctype',notice='$notice'
 ,password='$password', classId='$classId',classArmId='$classArmId',code='$code',idate='$idate',ldate='$ldate'
   where Id='$Id' ");
            if ($query) {
                
                echo "<script type = \"text/javascript\">
                window.location = (\"studentissue.php\")
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
<?php include 'includes/title.php';?>
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
        <div class="container-fluid" id="container-wrapper" style="background:linear-gradient(white);">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Book For Students</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Manage Book For Students</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              

              <!-- Input Group -->
                 <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Student</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        
                        
                        <th>Admission No</th>
                     
                         <th>Add</th>
                       
                      </tr>
                    </thead>
                
                    <tbody>

                  <?php
                      $query = "SELECT tblstudents.Id,tblclass.className,tblclassarms.classArmName,tblclassarms.Id AS classArmId,tblstudents.firstName,
                      tblstudents.lastName,tblstudents.emailAddress,tblstudents.admissionNumber,tblstudents.password,tblstudents.dateCreated
                      FROM tblstudents
                      INNER JOIN tblclass ON tblclass.Id = tblstudents.classId
                      INNER JOIN tblclassarms ON tblclassarms.Id = tblstudents.classArmId ";
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
                                
                              
                                <td>".$rows['admissionNumber']."</td>
                               
                                <td><a href='?action=edit&Id=".$rows['Id']."'><i class='fas fa-fw fa-edit'></i></a></td>
                               
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
          </div><!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Books</h6>
                    <?php echo $statusMsg; ?>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                   <div class="form-group row mb-3">
                        
                        <div class="col-xl-6">
                        <label class="form-control-label">First name<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" name="firstName" value="<?php echo $row['firstName'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">Lastname<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" name="lastName" value="<?php echo $row['lastName'];?>" id="exampleInputFirstName" >
                        </div>
                    
                   
                     <div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label"for="emails">Email<span class="text-danger ml-2">*</span></label>
                        <input type="text" class="form-control" id="emails"name="emailAddress" value="<?php echo $row['emailAddress'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label"> Makaut ID<span class="text-danger ml-2">*</span></label>
                      <input type="number" class="form-control"  required name="admissionNumber" value="<?php echo $row['admissionNumber'];?>" id="exampleInputFirstName" >
                        </div>
                        
                        <div class="col-xl-6">
                        <label class="form-control-label">Phone Number<span class="text-danger ml-2">*</span></label>
                      <input type="number" class="form-control" required name="mobile" value="<?php echo $row['mobile'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label"> Class<span class="text-danger ml-2">*</span></label>
                      <input type="number" class="form-control" required name="classId" value="<?php echo $row['classId'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label" for="pwd">Password<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control"  minlength="8"name="password" value="<?php echo $row['password'];?>" id="exampleInputFirstName" >
                        </div> 

                        
                        <div class="col-xl-6">
                        <label class="form-control-label">Select Books<span class="text-danger ml-2">*</span></label>
                         <?php
                        $qry= "SELECT * FROM addbook ORDER BY name1 ASC";
                        $result = $conn->query($qry);
                        $num = $result->num_rows;		
                        if ($num > 0){
                          echo ' <select required name="book" class="form-control mb-3">';
                          echo'<option value="">--Select Books--</option>';
                          while ($rows = $result->fetch_assoc()){
                          echo'<option value="'.$rows['name1'].'" >'.$rows['name1'].'</option>';
                              }
                                  echo '</select>';
                              }
                            ?>  
                        </div>
                         
                        <div class="col-xl-6">
                        <label class="form-control-label">Select Book CODE<span class="text-danger ml-2">*</span></label>
                         <?php
                        $qry= "SELECT * FROM addbook ORDER BY code ASC";
                        $result = $conn->query($qry);
                        $num = $result->num_rows;		
                        if ($num > 0){
                          echo ' <select required name="code" class="form-control mb-3">';
                          echo'<option value="">--Select Code--</option>';
                          while ($rows = $result->fetch_assoc()){
                          echo'<option value="'.$rows['code'].'" >'.$rows['code'].'</option>';
                              }
                                  echo '</select>';
                              }
                            ?>  
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-xl-6">
                        <label class="form-control-label">Entry Date<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" required name="idate" value="<?php echo $row['idate'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">Submit Date <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" required name="ldate" value="<?php echo $row['ldate'];?>" id="exampleInputFirstName" >
                        </div>

                
                   
                        
                    </div><br>
                      <?php
                    if (isset($Id))
                    {
                    ?>
                    <button type="submit" name="save" class="btn btn-warning">Submit</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    } else {           
                    ?><br>
         
                    <?php
                    }         
                    ?>
                  </form>
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