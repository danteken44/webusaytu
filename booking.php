<?php

include 'connect2.php';

if(isset($_POST['booknowbtn'])){
    $firstName=$_POST['fName1'];
    $lastName=$_POST['lName1'];
    $email=$_POST['email1'];
    $hotel=$_POST['hotel'];
    $bookingDate=$_POST['date'];
 
     $checkEmail="SELECT * From booked where email='$email'";
     $result=$conn1->query($checkEmail);
     if($result->num_rows>0){
        echo "You already booked!";
     }
     else{
        $insertQuery="INSERT INTO booked(firstName,lastName,email,hotel,bookingDate)
                       VALUES ('$firstName','$lastName','$email','$hotel','$bookingDate')";
            if($conn1->query($insertQuery)==TRUE){
                header("location: homepage.php");
            }
            else{
                echo "Error:".$conn1->error;
            }
     }
 
 }

?>
