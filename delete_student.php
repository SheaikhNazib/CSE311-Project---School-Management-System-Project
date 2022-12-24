<html>
<head>
    <title>Delete data</title>
</head>
<body>
    <center>
        <h1> Delete data from database </h1>
        <form action="" method ="post">
            <input type ="text" name="roll_number" placeholder="Enter roll number to delete"/><br>
            <input type ="submit" name="delete" values="delete data">
            
</center>
</body>

</html>

<?php
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'project_database');

if(isset($_POST['delete']))
{
    $roll_number=$_POST['roll_number'];

    $query = "DELETE FROM student_info WHERE roll_number='$roll_number'";
    $query_run =mysqli_query($connection,$query);

    if($query_run){
        echo '<sript type= "text/javascript">alert("Data Delete") </script>';
    }else{
        echo '<sript type= "text/javascript">alert("Data Not Deleted") </script>';
    }

}
?>