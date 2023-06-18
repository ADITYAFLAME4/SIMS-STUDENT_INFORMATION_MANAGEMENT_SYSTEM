
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
  <title>Note</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

    <STYle>
	@media print {
      body *{
    
margin-left: 350px;
margin-top: 400px;
      }
      
	  
    }
</STYle>

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
       







	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register Form</h2>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-md-12">
					<div class="wrapper">

						<div class="row" >
							
							<div class="col-md-9" >
								<div class="row no-gutters">
									<div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
										<div class="contact-wrap w-100 p-md-5 p-4">
											<h3 class="mb-4">Type Input</h3>
											<div id="form-message-warning" class="mb-4"></div>
											<div id="form-message-success" class="mb-4">
												Your message was sent, thank you!
											</div>
											<form method="POST" id="contactForm" name="contactForm" class="contactForm">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="name">Subject</label>
															<input type="text" class="form-control" name="name"
																id="name" placeholder="Name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="email">Link</label>
															<input type="email" class="form-control" 
																id="email" placeholder="Link">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="label" for="subject">Time</label>
															<input type="datetime-local" class="form-control" name="subject"
																id="subject" placeholder="Subject">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="label" for="#">Details</label>
															<textarea name="text" class="form-control" id="message"
																cols="30" rows="4" placeholder="Message"></textarea>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group" >
															<input type="submit" value="Send Message" style="background-color: RED;"
																 onclick="generateqr()">
															<div class="submitting"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="text pl-3">
									
								</div>
							</div>



							<div class="col-md-3" style="background-color: WHITE;">
								<div id="qrcode" class="mt-5 text-center">
							
								</div>
								<a href="javascript:void(0);" onclick="printPageArea('qrcode')">Print</a>
							</div>







						</div>
					</div>
				</div>
			</div>
		</div>


		</div>

		</div>
		</div>
		</div>
	</section>

	<SCRipt>
		function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
	</SCRipt>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>

	<script>

		function generateqr() {
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var subject = document.getElementById('subject').value;
			var message = document.getElementById('message').value;

			console.log('Name: ' + name + " " + email + " " + subject + " " + message);

			var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Subject:" +
			name + "%0a Link: " + email + " Time: " + subject + " Message: " + message;

			var ifr = `<iframe src="${url}" height="210" width="210"></iframe>`;

			document.getElementById('qrcode').innerHTML = ifr;
		}

	</script>













        

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