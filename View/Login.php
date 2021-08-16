<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<link rel="stylesheet" href="../CSS/style.css" />
 <script type="text/javascript" src="../JS/cursor.js">  </script>
	<body >
	

	<table height = "50px" width = "100%"  border="0">
		<tr>
			<td> <section align ="right"><h2>
		  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
				<a href = "Hotel_System_Home.html">Home</a>|
				<a href = "Login.php">Login</a>|
				<a href="Registration.php"> Registration </a> </h2>
			</section>
			</td>
		</tr>
		<tr height = "150px">
			<td>
					<form name="myForm" onsubmit="return logValidate();" action="../Controller/logcheck.php" method="POST">
				<fieldset>
					<legend><h2>Login</h2></legend>
					Username : <input type = "text" name="username" value="" placeholder="Enter Your User name" id="name"><br><br>
					Password  :  <input type = "password" name="password" value="" placeholder="Enter Your Password" id="password"><br><br> 
					<input type = "submit" name="submit" value="submit"> <a href="Forgot_password.php">Forgot Password?</a>				
					</fieldset>
                </form>
                 <script type="text/javascript">
                        function logValidate(){
                        var user = document.getElementById('name').value;
                       
                         let password = document.getElementById('password').value;
                       
                             //Name Validation
                            if(user == ""){
                               alert('Name: Null value');

                            }
                         //Password Validation
                        if(password  == ""){
                            alert('Password: Null value');
                             return false;
                        }else if(password.length<6){
                            alert('Password: Password Must be more than 5 digit');
                             return false;
                        }  
                           
                       
                        
                    }
                </script>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center">
             <h3 style="color: orangered">Are You In The Wrong Place? No Porblem.</h3>
                <a href="../Home.php" > <h2>[Visit Our Website As a Guest]</h2></a>
		    </td>
		</tr>
	</table>
   <center>
    Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
   </center>
	  
	</body>
</html>