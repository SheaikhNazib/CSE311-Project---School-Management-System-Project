<?php

$db=mysqli_connect("localhost","root","","project_database");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];


$sql="INSERT INTO teacher_info(first_name,last_name,dob,address,gender,email_id,subject,phone_number) 
 VALUES ('$firstName','$lastName','$dob','$address','$gender','$email','$subject',$phone)";

if(mysqli_query($db,$sql)){

    echo "Information inserted";
}
else{
    echo "error" . mysqli_error($db);
}




?>