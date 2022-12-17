<?php
include "db_conn.php";
if(isset($_POST['username']) && isset($_POST['pass'])){
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $uname= validate($_POST['username']);
    $pass= validate($_POST['pass']);

    if(empty($uname)){
        header("Location:index.php? error=User Name is required");
        exit();
    }
    else if(empty($pass)){
        header("Location:index.php? error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE username='$uname' AND pass='$pass'";
        $result =mysqli_query($db,$sql);
        if(mysqli_num_rows($result)) {
            echo "Hello";
        }
     

    }

}
else{
    header("Location:index.php");
    exit();
}
?>