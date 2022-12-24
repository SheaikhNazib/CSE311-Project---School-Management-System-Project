<html>
<head>
    <title>Delete data</title>
</head>
<body>
    <center>
        <h1> Delete teacher's data from database </h1>
        <form action="" method ="post">
            <input type ="text" name="email_id" placeholder="Enter email to delete"/><br>
            <input type ="submit" name="delete" values="delete data">
            
</center>
</body>

</html>

<?php
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'project_database');

if(isset($_POST['delete']))
{
    $email_id=$_POST['email_id'];

    $query = "DELETE FROM teacher_info WHERE email_id='$email_id'";
    $query_run =mysqli_query($connection,$query);

    if($query_run){
        echo '<sript type= "text/javascript">alert("Data Deleted") </script>';
    }else{
        echo '<sript type= "text/javascript">alert("Data Not Deleted") </script>';
    }

}
?>