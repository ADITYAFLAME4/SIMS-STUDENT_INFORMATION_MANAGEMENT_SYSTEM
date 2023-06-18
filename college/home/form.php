
<?php 
include 'Includes/dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html > 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM CRUD OPERATION</title>
    <link rel="stylesheet" href="style1.css">



    <style>


    </style>
</head>
<body>
     <div style="height:60px;width:auto;background-color:black;">
  <a href="index.php" style="float:right;margin-right:100px;margin-top:15px;">  <button class="back" > Back</button></a>
    </div>


    <div class="container">
        <form action="" method="POST"  enctype="multipart/form-data">
        <div class="title">
        Registration For Admin
    
        </div>
        
        
        
        
        <center>
        <img src="img/logo/techno.jpg" style="height:100px;width:100px;"></center><br>
        <div class="form">
        


            <div class="input_field">
                
                <input type="text" class="input"  name="firstName" required placeholder="ENTER YOUR  FIRST NAME">
            </div>
            <div class="input_field">
               
                <input type="text" class="input" name="lastName" required  placeholder="ENTER YOUR LAST NAME">
            </div>
          
            
            
            
            <div class="input_field terms">
                <label class="check" >
                    <input type="checkbox" required><span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
                </div>
            <div class="input-field">
                <input type="submit" value="Register" class="btn" name="save">
            </div>
        </div>
</form>
    </div>
</body>
</html>
<?php 






if(isset($_POST['save'])){
    
    $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];



    $query=mysqli_query($conn,"select * from tbladmin where emailAddress ='technoindia@gmail.com'");
    $ret=mysqli_fetch_array($query);


    if($ret > 0){ 

        $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>This Email Address Already Exists!</div>";
    }
    else{

    $query=mysqli_query($conn,"INSERT into tbladmin(firstName,lastName,emailAddress,password) 
    value('$firstName','$lastName','technoindia@gmail.com','12345')");

if ($query) {
        
    $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Created Successfully!</div>";
        
}
else
{
     $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
}
}
}?>