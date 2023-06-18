<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';
if(isset($_SESSION['userId'], $_SESSION['password'])) {

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .q{
        height:200px;
        width:400px;
        border:1px solid red;
        margin-top:20px; 
        background:linear-gradient(white,red);
      }
      .v{
        height:600px;
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

        height:100px;
        width:100px;
        border:1px solid red;
        margin-top:20px; 
        background:linear-gradient(yellow,blue);
      }
    </style>
</head>
<body>
  
   <form action="" method="POST" enctype="multipart/form-data">
   <center>
   
   <input type="file" class="form-control" name="uploadfile"  id="exampleInputFirstName" >
 <br>
<button type="submit" class="e" name="save" value="student1.php"> UPLOAD YOUR IMAGE</button></div></center>
   </form> 
</body>
</html>
<?php
}
?>