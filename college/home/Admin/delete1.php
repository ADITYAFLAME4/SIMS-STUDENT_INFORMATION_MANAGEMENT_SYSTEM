
<?php include("connect.php");

$Id= $_GET['id'];
$query = " DELETE FROM notice WHERE id ='$Id'";
$data= mysqli_query($con,$query);

if($data){
    echo "Data UPdated";
    ?>
    <meta http-equiv = "refresh" content = ".0; url = http://localhost/admin/index.php" />
<?php

}else
{
    echo "<script>alert(Failed to Update)</script>";
}
?>