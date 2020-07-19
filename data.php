<?php
include 'contactus.html'
include 'connection.php';
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$emailid = $_POST['emailid'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];

$sql = "INSERT INTO `contact_us` (`name`,`subject`,`message`,`emailid`,`contactno`,`address`) VALUES('$name','$subject','$message','$emailid','$contactno','$address')";

$result = mysqli_query($conn,$sql);
  
if ($result== TRUE){
$success = 'success';
$_SESSION['success']= $success;
header("Location: /foodie/contactus.html");
}


?>