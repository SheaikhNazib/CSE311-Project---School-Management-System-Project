<html>
    <head>
        <title> Teacher Information </title>
    </head>
    <body style="background-color:#81F7F2;">

        <h2>Print Teacher Information </h2>
        <table>
               <tr>
                <td>First_Name</td>
                <td>Last_Name</td>
                <td>Date_of_Birth</td>
                <td>address</td>
                <td>Gender</td>
                <td>Email_id</td>
                <td>Subject</td>
                <td>Phone_Num</td>
               </tr> 
               
            
<?php

$db= mysqli_connect("localhost","root","", "project_database");
$sql= "SELECT first_name, last_name, dob, address, gender, email_id , subject, phone_number FROM teacher_info";
$result= mysqli_query($db,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row ["first_name"] . "</td>";
    echo "<td>" . $row ["last_name"] . "</td>";
    echo "<td>" . $row ["dob"] . "</td>";
    echo "<td>" . $row ["address"] . "</td>";
    echo "<td>" . $row ["gender"] . "</td>";
    echo "<td>" . $row ["email_id"] . "</td>";
    echo "<td>" . $row ["subject"] . "</td>";
    echo "<td>" . $row ["phone_number"] . "</td>";
    echo "</tr>";

}
?>

</table>

</html>
