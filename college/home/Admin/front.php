<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';
require 'functions.php';
?>
<!DOCTYPE html>
<html > 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM CRUD OPERATION</title>
    <link rel="stylesheet"  type="text/css" href="style.css">
<style>
.table{
    background: linear-gradient(45deg, red,white);
}
.tr{
    background:linear-gradient(aqua,white,aqua);
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
        background-color: blue;
        height: 50px;
        width: 80px;
        border-radius: 15px;
       margin-left: 1200px;
    }
    .submit:hover{
        background-color: red;
    }
</style>
</head>
<body style="background:pink;">
<form action="" method="POST"  enctype="multipart/form-data">
    <div class="container">
        <form action="" method="POST"  enctype="multipart/form-data">
        <center><div class="title" style="background:red; width:10%;font-size: 25px; position:relative;">
         <b>Enter Notice</b>
        </div> </center><br>
        <div class="form">
        

<table border="3" cellspacing="8" width="90%" class="table">
          
<tr class="tr"> <th>subject</th>
    <th>Details</th>
    <th>Date</th>
   

   </tr><tr >
    <td><input type="text" name="subject" style="height: 50px; width: 100%;" class="subject" placeholder="Enter Notice Tittle"></td>
    <td><input type="text" name="details" style="height: 50px; width: 100%;" class="details" placeholder="Enter Notice Details"></td>
    <td><input type="datetime-local" name="date" style="height: 50px; width: 100%;" class="date" placeholder="Select Notice Date & Timing"></td>

    
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
    $subject= $_POST['subject'];
    $details= $_POST['details'];
    $date= $_POST['date'];
   
    
    
    $query="INSERT INTO notice(subject,details,date) 
    Values('$subject','$details','$date')";
    $data =mysqli_query($conn,$query);
if($data){
    echo" <script>alert(Data Register)</script>";

}else
{
    echo"<script>alert(Failed to Register)</script>";
}
}
?>

<?php 

error_reporting(0);
 $query="SELECT* FROM notice";
 $data= mysqli_query($conn,$query);

 $total= mysqli_num_rows($data);





 //echo $total;
 if($total !=0){
    ?>



   <center> <!DOCTYPE html>

   

    
        
    
    
    <table border="3" cellspacing="8" width="100%">
        <tr>
       
    <th width="10%"> Subject </th>
    <th width="10%"> Details </th>
    <th width="5%"> Date & Time </th>
    <th width="5%" >Operation</th>
    

 </tr>

    <?php
   
   while( $result=mysqli_fetch_assoc($data))
   {
    echo"   <tr>
                
              <td>$result[subject]</td> 
                <td>$result[details]</td>
                <td>$result[date]</td>
               
                
                <td><a href='delete1.php?id=$result[id]'><center><input type='submit' value='Delete' onclick='return checkdelete()' class='delete'></center></a></td>
                </tr>
                ";

   }
 }else{
    echo"No Record";
 }
?>
 
<script>
    function checkdelete()
{
    return confirm('Are you sure Want to delete this record?');
}
</script></body>
</html>
