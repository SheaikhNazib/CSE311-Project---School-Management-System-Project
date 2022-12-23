<?php
if(empty($_POST["name"])){
    die("Name is requred");
}

if ( ! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
{
    die("Valid email is required");
}
if (strlen($_POST["password"])<6)
{
    die("Password must be at least 6 characters");
}
if ($_POST["password"] !== $_POST["password_confirmation"])
{
    die("Passwords must match ");
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

print_r($_POST);
var_dump($password_hash);


?>