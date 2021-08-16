

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="../CSS/style.css" />
<!-- <script type="text/javascript" src="../JS/validation.js"> </script> -->
</head>
	<body>
	</body>
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
				<form name="myForm" onsubmit="return validate();" action="../Controller/registrationck.php" method="post"  enctype="multipart/form-data">
		
    <legend align="center"><b>REGISTRATION</b></legend>
	
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0" align="center">
			<tr align="center">
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" placeholder="Enter Your Full Name" id="name"  onkeyup ='namee(this.value)'>  
				
		<p id="namee"></p>
		<script > 
                      function namee(){

                    const http = new XMLHttpRequest();
                    http.open('GET', 'location ./Alert/nametype.txt', true);
                    http.send();

                    http.onreadystatechange = function(){

                        if(this.readyState == 4 && this.status == 200){
                    document.getElementById('namee').innerHTML=this.responseText;
                        }
                    }	
                }</script>
		
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text"  placeholder="Enter Your Email Address" id="email" onkeyup="emailValidity()" >
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr >		
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td>User Name</td>
				<td>:</td>
				<td><input name="username" id= 'username'  placeholder="Enter Your Username"  type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td>Password</td>
				<td>:</td>
				<td><input id='password' name="password" type="password" id='password'  placeholder="Enter Your Password" ></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td>Confirm Password</td>
				<td>:</td>
				<td><input  id='cpassword' name="confirmPassword" type="password"  placeholder="Re-Type Your Password" ></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
					<td rowspan="2">Profile Picture </td>
				
				</tr>
				<tr align="center">
					<td ></td>
					<td align="center">
					&ensp; &ensp;&ensp; &ensp;  &ensp; &ensp;&ensp; 	<input type="file" name="image">
					</td>
				
			</tr>			
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td colspan="2">
				
						<legend>Gender</legend>    
						
				
				</td>
				<td><input id="gender" name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other</td>
			</tr>		
			<tr><td colspan="4"><br></td></tr>
			<tr align="center">
				<td colspan="2">
				
						<legend>Date of Birth</legend>

					
				</td>
				<td>    
						<input id="day" type="text" name = "day" size="2" />/
						<input id="month" type="text" name="month" size="3" />/
						<input  id="year"  type="text" name= "year" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font></td>
			</tr>
			<tr  colspan="4" align="center"><td colspan="4">
			    <br>
		<input 	 type="submit" name="submit" value="Submit" onclick = "f1()" style="color:#00ccff;font-size:30px;"  width="250px"> &ensp;&ensp; 
		<input type="reset" name="reset" value="Reset" style="color:#00ccff;font-size:30px;"  width="250px" >
	
			</td>
			    
			</tr>
		</table>
		
                </form>
                <script type="text/javascript">
                    function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
			
		}
                function emailValidity()
                  {
                    var email = document.getElementById('email').value;
                        var xhttp = new XMLHttpRequest();
                        xhttp.open('POST', '../php/emailCheck.php', true);
                        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhttp.send('email='+email);

                        xhttp.onreadystatechange = function (){
                        if(this.readyState == 4 && this.status == 200){

                            if(this.responseText != ""){
                                document.getElementById('emailMsg').innerHTML = this.responseText;
                            }else{
                                document.getElementById('emailMsg').innerHTML = "";
                            }

                        }	
                    }
                }
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
			</td>
		</tr>
		<tr>
			 <td align="center" colspan="2">
            
		        Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
		    </td>
		</tr>
		
	</table>
</html>