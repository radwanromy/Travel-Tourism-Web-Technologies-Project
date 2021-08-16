<?php
	include '../controllers/loginController.php';
    
    $uid="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $err_invalid="";
    $type="";
    $has_error=false;
   
    $flag=1;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*UserID Required";
			$has_error=true;
			
		}
		else
		{
			$uid=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
            $user=getUser($uid);
            if($uid ==$user["id"] && $pass ==$user["password"] && $user["status"]=="active" )
                {
                    $type =$user["type"] ;

                    if($type == "admin")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$uid;
                        header("Location:Admin/home.php");
                    }

                    if($type == "employee")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$uid;
                        header("Location:Manager/home.php");
                    }
                    if($type == "user")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$uid;
                        header("Location:User/profile.php");
                    }

                  

                }

               

                else
                {
                    $flag=0;
                }
                    

			
        }
        
        if($flag == 0)
                {
			    
                    $err_invalid="Invalid Username or Password";
                    $uid="";
                    $pass="";
			    
                }
            }

            if(isset($_POST['submit1']))
            {
              header("Location:forgetpassword.php");
            }



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body, html {
    height: 100%;
    margin: 0;
    }
    .bg {
    background-image: url("../storage/login_image/login.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

   
  }
    </style>
  </head>
  <body class="bg">
      <div class="login-box">
      <h1>Travel & Tourism Management System</h1>
      <form method="post" action="">
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="USERID" value="<?php echo $uid;?>" name="uname">
        <span style="color:red"><?php echo $err_uname;?></span>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="PASSWORD" value="<?php echo $pass;?>" name="pass">
        <span style="color:red"><?php echo $err_pass;?></span>
      </div>
     
    
  <input type="submit" class="btn" value="Sign in" name="submit">
  <span style="color:red; font-size:20px"><?php echo $err_invalid;?></span>
  <input type="submit" class="btn" value="Forget password" name="submit1">
  </form>
  
</div>
  </body>
</html>
