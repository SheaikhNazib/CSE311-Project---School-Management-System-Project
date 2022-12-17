

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    

        <div class="loginbox">
        <img src="image/key.png" alt="logo" class="logo" >
        <h1>Login Here</h1>
        <form method="post" action="login.php" >
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p>

            <?php
            }

            ?>
            <label for="username" class="form_label">Username</label>
            <input type="text" class="form_input" name="username" placeholder="Enter Username" ><br>
            <label for="password" class="form_label">Password</label>
            <input type="password" class="form_input" name="pass" placeholder="Enter Password" > <br>
            <input type="submit" class="form_submit" name="submit" value="login">

            
            <br>
            
            <a href="#" class="form_text">Forgot your password ?</a> <br>
            <a href="#" class="form_text">Don't Have an account ?</a>
        </form>
         
    </div>   
    
   
    
    
</body>
</html>