<?php
	include '../controllers/loginController.php';
    
    $uid="";
    $err_uname="";
    $pass="";
    $err_pass="";

    $pass1="";
    $err_pass1="";
    $err_invalid="";
    
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
			$err_pass="*Security answer Required ";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
        }
        
        if(empty($_POST['pass1']))
		{
			$err_pass1="*new password Required ";
			$has_error=true;
			
		}
		else
		{
			$pass1=$_POST['pass1'];
		}
		
		
		if(!$has_error)
		{
            $user=getUser($uid);
            if($uid ==$user["id"] && $pass ==$user["ans"] && $user["status"]=="active" )
                {
                    forgetPassword($uid,$pass1);

                }

               

                else
                {
                    $flag=0;
                }
                    

			
        }
        
        if($flag == 0)
                {
			    
                    $err_invalid="Invalid Username or security answer";
                    $uid="";
                    $pass="";
                    $pass1="";
			    
                }
            }

            if(isset($_POST['submit1']))
            {
              header("Location:login.php");
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
        <i class="fas fa-question"></i>
        <input type="text" placeholder="WHAT IS YOUR PET NAME?" value="<?php echo $pass;?>" name="pass">
        <span style="color:red"><?php echo $err_pass;?></span>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="NEW PASSWORD" value="<?php echo $pass1;?>" name="pass1">
        <span style="color:red"><?php echo $err_pass1;?></span>
      </div>
     
  <input type="submit" class="btn" value="Recover" name="submit">
  <span style="color:red; font-size:20px"><?php echo $err_invalid;?></span>
  <input type="submit" class="btn" value="Login page" name="submit1">
 
  </form>
  
</div>
  </body>
</html>