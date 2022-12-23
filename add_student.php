
<?php

$db=mysqli_connect("localhost","root","","project_database");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mname = $_POST['mname'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$roll_number = $_POST['roll_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$sql="INSERT INTO student_info(first_name,last_name,mother_name,father_name,dob,address,gender,roll_number,email_id,phone_number) 
 VALUES ('$firstName','$lastName','$mname','$fname','$dob','$address','$gender',$roll_number,'$email',$phone)";

if(mysqli_query($db,$sql)){

    echo "Information inserted";
}
else{
    echo "error" . mysqli_error($db);
}







// if(!empty($firstName)|| !empty($lastName)|| !empty($mname)||!empty($fname)||!empty($dob)||
// !empty($address)||!empty($gender)||!empty($roll_number)||!empty($email)||!empty($phone)){

//     $db=mysqli_connect("localhost","root","","project_database");

//     if(mysqli_connect_error()){
//         // die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
//         echo "Error occur";
//      } else {

//         $sql="INSERT INTO student_info(first_name,last_name,mother_name,father_name,dob,address,gender,roll_number,email_id,phone_number) 
// VALUES ($firstName,$lastName,$mname,$fname,$dob,$address,$gender,$roll_number,$email,$phone)";
          
//           echo "New record inserted successfully";
//      } 
// }else{
//     echo "Someone already register using this roll number";
// }












// $sql="INSERT INTO student_info(first_name,last_name,mother_name,father_name,dob,address,gender,roll_number,email_id,phone_number) 
// VALUES ($st_firstName,$st_lastName,$st_mname,$st_fname,$st_dob,$st_address,$st_gender,$st_roll_number,$st_email,$st_phone)";

// $sql="INSERT INTO student_info(first_name,last_name,mother_name,father_name,dob,address,gender,roll_number,email_id,phone_number) 
// VALUES (firstName,lastName,mname,fname,dob,address,gender,roll_number,email,phone)";

//$sql="INSERT INTO student_info(first_name,last_name,"

// $result=mysqli_query($db,$sql);




// if($result)
// {
//     echo "Information Inserted";
// }
// else
// {
//     echo "error" . mysqli_error($db);
// }

?>