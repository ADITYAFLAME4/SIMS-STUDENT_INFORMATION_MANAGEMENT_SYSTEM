
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

//------------------------SAVE--------------------------------------------------



if(isset($_POST['save'])){
  
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder="eimg/".$filename;
  echo $folder;
  move_uploaded_file($tempname, $folder);
      
  $name1=$_POST['name1'];
  $author=$_POST['author'];
  $code=$_POST['code'];
  $date=$_POST['date'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $avail=$_POST['avail'];

      $query=mysqli_query($conn,"select * from addbook where code ='$code'");
      $ret=mysqli_fetch_array($query);
  
      if($ret > 0){ 
  
          $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>Same Data Already Exists!</div>";
      }
      else{
  
      $query=mysqli_query($conn,"insert into addbook(st_img,name1,author,code,date,price,quantity,avail) 
      value('$folder','$name1','$author','$code','$date','$price','$quantity','$avail')");
  
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

        $query=mysqli_query($conn,"select * from addbook where Id ='$Id'");
        $row=mysqli_fetch_array($query);

        //------------UPDATE-----------------------------

        if(isset($_POST['update'])){
    
             $img=$_POST['img'];
              $name1=$_POST['name1'];
              $author=$_POST['author'];
              $code=$_POST['code'];
              $date=$_POST['date'];
              $price=$_POST['price'];
              $quantity=$_POST['quantity'];
              $avail = date("avail");

    $query=mysqli_query($conn,"update addbook set img='$img', name1='$name1',
    author='$author', code='$code',date='$date', price='$price',quantity='$quantity'
    where Id='$Id'");
            if ($query) {
                
                echo "<script type = \"text/javascript\">
                window.location = (\"createClassTeacher.php\")
                </script>"; 
            }
            else
            {
                $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
            }
        }
    }


//--------------------------------DELETE------------------------------------------------------------------

  if (isset($_GET['Id']) && isset($_GET['quantity']) && isset($_GET['action']) && $_GET['action'] == "delete")
	{
        $Id= $_GET['Id'];
        $quantity= $_GET['quantity'];

        $query = mysqli_query($conn,"DELETE FROM addbook WHERE Id='$Id'");

        if ($query == TRUE) {

            $qu=mysqli_query($conn,"update tblclassarms set isAssigned='0' where Id ='$pri'");
            if ($qu) {
                
                 echo "<script type = \"text/javascript\">
                window.location = (\"createClassTeacher.php\")
                </script>"; 
            }
            else
            {
                $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
            }
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
            <h1 class="h3 mb-0 text-gray-800">Create Books</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Books</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Book</h6>
                    <?php echo $statusMsg; ?>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                   <div class="form-group row mb-3">
                   <div class="col-xl-6">
                        <label class="form-control-label">image<span class="text-danger ml-2">*</span></label>
                        <input type="file" class="form-control" name="uploadfile" value="<?php echo $row['uploadfile'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS NAME<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" required name="name1" value="<?php echo $row['name1'];?>" id="exampleInputFirstName" >
                        </div>
                    </div>
                     <div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label"for="emails">Books Author Name</label>
                        <input type="text" id="emails" class="form-control" required name="author" value="<?php echo $row['author'];?>" id="exampleInputFirstName" >
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS CODE ID<span class="text-danger ml-2">*</span></label>
                        <input type="text" class="form-control" required name="code" value="<?php echo $row['code'];?>" id="exampleInputFirstName">
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS Purches Date<span class="text-danger ml-2">*</span></label>
                        <input type="date" class="form-control" required name="date" value="<?php echo $row['date'];?>" id="exampleInputFirstName">
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS Price<span class="text-danger ml-2">*</span></label>
                        <input type="number" class="form-control" required name="price" value="<?php echo $row['price'];?>" id="exampleInputFirstName">
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS Quantity<span class="text-danger ml-2">*</span></label>
                        <input type="number" class="form-control" required name="quantity" value="<?php echo $row['quantity'];?>" id="exampleInputFirstName">
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">BOOKS available<span class="text-danger ml-2">*</span></label>
                        <input type="number" class="form-control" required name="avail" value="<?php echo $row['avail'];?>" id="exampleInputFirstName">
                        </div>


                    
                    
                    
                    
                    
                        
                    </div>
                      <?php
                    if (isset($Id))
                    {
                    ?>
                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    } else {           
                    ?>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                    <?php
                    }         
                    ?>
                  </form>
                </div>
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