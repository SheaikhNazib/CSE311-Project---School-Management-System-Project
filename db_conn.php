<?php

 $sname="localhost";
 $unmae="root";
 $password ="";
 $db_name="login";
 $db = mysqli_connect($sname,$unmae,$password,$db_name);

// $db = mysqli_connect("localhost", "root", "" , "login");
if (!$db)
{
    echo " database connection failed " .mysqli_connect_error();

}
else{
    echo " Connection successful ". "<br>";
}


?>