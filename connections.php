<?php
$connections = mysqli_connect("localhost:3306","root","","login_tbl");
    if(mysqli_connect_errno()){
        echo"Failed to connect to mysql: ".mysqli_connect_error();
    }else{
        
    }
?>