 
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

//------------------------SAVE--------------------------------------------------



if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "delete")
{
	$Id= $_GET['Id'];
	$classArmId= $_GET['classArmId'];

	$query = mysqli_query($conn,"DELETE FROM placement WHERE Id='$Id'");

	if ($query == TRUE) {

		echo "<script type = \"text/javascript\">
		window.location = (\"viewplacement.php\")
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



<style>	.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;width:auto;}
		h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
		.img-box{margin-top: 20px;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{}</style>
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
            <h1 class="h3 mb-0 text-gray-800">Show Placement Record</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Placement Record</li>
            </ol>
          </div>
		  <div class="container main">
			
			<marquee scrollamount=6  height=360  style="color:blue;">	<div class="img-box">
			<?php
	
	/*-- we included connection files--*/
	include "connection.php";

	$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select firstName,company,img from placement");
	while($rows = mysqli_fetch_array($image_query))
	{
		$firstName = $rows['firstName'];
		$company = $rows['company'];
		$img_src = $rows['img'];
	?>
	<div class="img-block">
	
	<img style="width: 180px;  padding: 15px;min-height: 200px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;"src="<?php echo $img_src; ?>" alt="" title="<?php echo $firstName; ?>" class="img-responsive" /><br>
	<p style="color:black;"><strong><?php echo $firstName; ?></strong></p>
	<p style="color:black;"><strong><?php echo $company; ?></strong></p>

	</div>	
	
	<?php 
	}
?>

			</div></marquee>
		</div>
         
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
                        <th>Name</th>
                        
                       
                        <th>Admission No</th>
                        <th>Session</th>
						<th>Company Name</th>
                       
                         <th>Deklete</th>
                      
                      </tr>
                    </thead>
                
                    <tbody>
					<?php
                      $query = "SELECT * FROM placement";
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
                                <td >".$Id."</td>
                                <td>".$rows['firstName']."</td>
                                
                                <td>".$rows['admissionNumber']."</td>
								<td>".$rows['session']."</td>
								<td>".$rows['company']."</td>
                               
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
                </div>
              </div>
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
