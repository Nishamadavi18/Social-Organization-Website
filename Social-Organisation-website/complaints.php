<?php
 $con=mysqli_connect("localhost","root","","project"); 
 if (mysqli_connect_errno()) 
 { 
 echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
  } 
 $sql="INSERT INTO needy_persons (FNAME,LNAME,MOBILE,ADDRESS,PROBLEM) 
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[mno]','$_POST[address]','$_POST[issue]')";  
 
if (!mysqli_query($con,$sql))  
 {   die('Error: ' . mysqli_error($con));   } 
else{echo "Your Complaint has been successfully registered<br>";
 }
 
mysqli_close($con);
 ?> 