<?php
$host1="localhost";
$user1="root";
$pass1="";
$db1="book";
$conn1=new mysqli($host1,$user1,$pass1,$db1);
if($conn1->connect_error){
    echo "Failed to connect DB".$conn1->connect_error;
}

?>
