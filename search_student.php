<html>
    <head>
        <title> Search Student </title>
    </head>
    <body style="background-color:#81F7F2;">

        <h2>Print Student Information </h2>
        <table>
               <tr>
                <td>First_Name</td>
                <td>Last_Name</td>
                <td>Father_name</td>
                <td>Mother_name</td>
                <td>Date_of_Birth</td>
                <td>address</td>
                <td>Gender</td>
                <td>Roll_number</td>
                <td>Email_id</td>
                <td>Phone_Num</td>
               </tr> 
               
            
<?php

//$roll_number = NULL;

$db= mysqli_connect("localhost","root","", "project_database");

//$roll_number = $_POST['roll_number'];




if(isset ($_POST['roll_number'])){
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

$sql= "SELECT roll_number,first_name,last_name,mother_name,father_name,dob,address,gender,email_id,phone_number FROM student_info WHERE roll_number=$roll_number";
$result= mysqli_query($db,$sql);



while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row ["first_name"] . "</td>";
    echo "<td>" . $row ["last_name"] . "</td>";
    echo "<td>" . $row ["father_name"] . "</td>";
    echo "<td>" . $row ["mother_name"] . "</td>";
    echo "<td>" . $row ["dob"] . "</td>";
    echo "<td>" . $row ["address"] . "</td>";
    echo "<td>" . $row ["gender"] . "</td>";
    echo "<td>" . $row ["roll_number"] . "</td>";
    echo "<td>" . $row ["email_id"] . "</td>";
    echo "<td>" . $row ["phone_number"] . "</td>";
    echo "</tr>";

}
}

// if(mysqli_query($db,$sql)){

//     echo "RESULT FOUND";
// }
// else{
//     echo "error" . mysqli_error($db);
// }





?>

</table>
</body>
</html>