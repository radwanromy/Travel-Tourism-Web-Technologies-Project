<?php
    session_start();
	if(isset($_COOKIE['flag'])){
           require_once('../Model/empDB.php');
        $username = $_SESSION['user']['username'] ;
        $emp = getProduct($username);
                                
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css" />
 <script type="text/javascript" src="../JS/cursor.js">  </script>
<title>Dashboard Page</title>
    </head>
	<body>


	<table height = "50px" width = "100%"  border="0">
		<tr height = "100px">
<td colspan="2" > <section align="right">  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
				 <h1>Logged in as<a href="../View/profile.php"> <?=$emp['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
			
			</td>
		</tr>
		<tr height = "150px">
		<th >
            <h1 style="color:#007a99;font-size:60px;" align ="center"> Dashboard</h1>
		</th>
		<th rowspan="2">
		<form name="myForm" onsubmit="return validate();" action="../Controller/regick2.php" method="post"  enctype="multipart/form-data">
		
    <legend align="center"><b>REGISTRATION</b></legend>
	
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" placeholder="Enter Your User name" id="name">  </td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text"  placeholder="Enter Your Email Address" id="email" onkeyup="emailValidity()" >
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="username" id= 'username' type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input id='password' name="password" type="password" id='password'></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input  id='cpassword' name="confirmPassword" type="password"></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><br></td></tr>
			<tr>
					<td rowspan="2">Profile Picture </td>
				
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="file" name="image">
					</td>
				
			</tr>			
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td colspan="2">
				
						<legend>Gender</legend>    
						
				
				</td>
				<td><input id="gender" name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other</td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr>
				<td colspan="2">
				
						<legend>Date of Birth</legend>

					
				</td>
				<td>    
						<input id="day" type="text" name = "day" size="2" />/
						<input id="month" type="text" name="month" size="3" />/
						<input  id="year"  type="text" name= "year" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="Submit" >
		<input type="reset" name="reset" value="Reset">
	
                </form>
                <script type="text/javascript">
                        function validate(){
                        var user = document.getElementById('name').value;
                        let username = document.getElementById('username').value;
                        let email = document.getElementById('email').value;
                         let password = document.getElementById('password').value;
                        let cpassword = document.getElementById('cpassword').value;
                        let day = document.getElementById('day').value;
                        let month =document.getElementById('month').value;
                        let year = document.getElementById('year').value;
                        let gender = document.myForm.gender.value;
                        let pp = document.forms["myForm"]["image"].value;
                            if(user == ""){
                               alert('Name: Null value');
                                         return false;
                            }
                        //Email Validation
                        if(email  == ""){
                            alert('Email: Null value');
                                 return false;
                        }           
                        //Name Validation
                        if(username == ''){
                            alert('User Name: Null value');
                                return false;                                         
                        }
                        else if(username.length<2 && (username>='A' && username<='Z' || username>='a' && username<='z')){
                                alert('Username: Contains at least two words');
                                  return false;
                                }
                        else if(username >='0'  && username<='9' || username=='~' || username=='!' || username=='@' || username =='#' || username=='$' || username=='%' || username=='^' || username=='&' || username=='*' ||username=='()'|| username=='/' ){
                                alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
                                     return false;
                                }
                        else if(username>='0' && username<='9'){
                                alert('Name: Must be starts with letter');
                            return false;
                                }
                         //Password Validation
                        else if(password  == ""){
                            alert('Password: Null value');
                            return false;
                        }else if(password.length<6){
                            alert('Password: Password Must be more than 5 digit');
                             return false;
                        } 
                    
                             //Con Validation
                        else if(cpassword  == ""){
                            alert('Password: Null value');
                            return false;
                        }else if(cpassword.length<6){
                            alert('Password: Password Must be more than 5 digit');
                             return false;
                        }  
                             //Both Password Validation
                        else if(password  != cpassword){
                            alert('Password: Both Password Are Not matched');
                             return false;
                        }
                            
                        //Gender Validation
                       else if(gender == ""){
                             alert("Gender: At least one of them has to be selected");
                             return false;
                        }  

                        //Profile Picture Validation
                        else if(pp == ""){
                            alert("Profile Picture: Please, select a picture.");
                             return false;

                        }
                                    //Date of Birth Validation
                        else if(day == "" || month == "" || year == ""){
                            alert("Date of Birth: Cannot be empty");
                            return false;
                        }
                        else if((day < 1 && day >= 31) || (month <1 && month > 12) 
                        || (year <= 1900 && year >= 2021)){
                            alert("Date of Birth: Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)");
                            return false;

                        } 
                            
                             
                    }
                </script>

		</th>
		<tr>
		<td align ="center">
				<a href="../View/Regick2.php" style="color: #00ccff;font-size:30px;" ><u>. Register New Employee</u></a><br>
				<a href="../View/addRoom.php" style="color: #00ccff;font-size:30px;"><u>. Add Room</u></a><br>
              <a href="../View/HA_Customer_Regi.php" style="color: #00ccff;font-size:30px;"><u>.Customer Registration</u></a><br>
              <a href="../View/H_Checkout.php" style="color: #00ccff;font-size:30px;"><u>. Customer Check Out</u></a><br>
               <a href="../View/profile.php" style="color: #00ccff;font-size:30px;"><u>. View Profile</u></a><br>
               <a href="../View/edit_profile.php" style="color: #00ccff;font-size:30px;"><u>. Edit Profile</u></a><br>
               <a href="../View/picture.php" style="color: #00ccff;font-size:30px;"><u>. Change Profile Picture</u></a><br>
                <a href="../View/Delete_Employee.php" style="color: #00ccff;font-size:30px;"><u>. Delete Employee</u></a><br>
               <a href="../View/change_password.php" style="color: #00ccff;font-size:30px;"><u>. Change Password</u></a><br>
               <a href="../Controller/logout.php" style="color: #00ccff;font-size:30px;"><u>. Logout</u></a><br>
               
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center" colspan="2">
            
		   Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
		    </td>
		</tr>
	</table>
	</body> 
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>