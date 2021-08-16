


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
	<body>
	</body>

	<table height = "50px" width = "100%"  border="0">
		<tr height = "100px">
<td colspan="2" > <section align="right">  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
				 <h1>Logged in as <a href="../View/profile.php"><?=$_SESSION['user']['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "150px">
		<th >
		   <h1 style="color:#007a99;font-size:60px;" align ="center">Edit Profile</h1>
		</th>
		<th rowspan="2">
	
    <legend><b>EDIT PROFILE</b></legend>
	<form action="../Controller/editemp.php" method="post" >
		<br/>
		<table cellpadding="0" cellspacing="0">
			
			<tr hidden>
				<td>Employee ID</td>
				<td>:</td>
				<td><input name="eid" type="text" value="<?=$_SESSION['user']['eid']?>"></td>
				<td rowspan="7" align="center">
				
				</td>
			</tr>	<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?=$_SESSION['user']['name']?>"></td>
				<td rowspan="7" align="center">
				
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="email" type="text" value="<?=$_SESSION['user']['email']?>">
					<abbr title="hint: sample@example.com"><b>i</b></abbr></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><input name="gender" type="radio" value="Male" checked >Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other</td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><input type="text" name ="day" value="<?=$_SESSION['user']['day']?>" size="2" />/
						<input type="text" name="month"  value="<?=$_SESSION['user']['month']?>" size="3"/>/
						<input type="text" name= "year" size="4" value="<?=$_SESSION['user']['year']?>" />
						<font size="2"><i>(dd/mm/yyyy)</i></font></td>
			</tr>
		</table>	
        <hr/>
       <input type="submit" name="eemp" value="Edit Employee">
	</form>

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
	</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>