<?php
include 'connections.php';

$fname  = $_POST['Fname'];
$uname =$_POST['Username'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Password = $_POST['Password'];
$Account_type = 2;

$insertsql = "INSERT INTO login_db (Fullname, Username, Email,  Contact, Password, Account_type) VALUES 
('$fname', '$uname', '$Email', $Contact, $Password, $Account_type)";

if($connections->query($insertsql) === TRUE){
    echo "<script>window.location.href = 'login.php?registration=true';</script>";
}
else{
    echo "ERROR:" .$insertsql . "br" .$connections->error;
}
