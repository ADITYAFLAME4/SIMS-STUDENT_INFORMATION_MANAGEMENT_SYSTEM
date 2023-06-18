<?php  
 $connect = mysqli_connect("localhost", "root", "", "attendancemsystem");  
 $number = count($_POST["name"]);
 $number = count($_POST["name1"]);  
 $number = count($_POST["name2"]);    
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           
           {  
                $sql = "INSERT INTO student(name) VALUES('".$_POST["value"][$i]."')";  
                mysqli_query($connect, $sql);  
           }if(trim($_POST["name1"][$i] != ''))  
           
           {  
                $sql = "INSERT INTO student(name1) VALUES('".$_POST["name1"][$i]."')";  
                mysqli_query($connect, $sql);  
           }  
           if(trim($_POST["name2"][$i] != ''))  
           
           {  
                $sql = "INSERT INTO student(name2) VALUES('".$_POST["name2"][$i]."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";
      
 }  
 
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
   