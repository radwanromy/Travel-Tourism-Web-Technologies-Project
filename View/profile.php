<?php
session_start();
	if(isset($_COOKIE['flag'])){
?>
<?php
	
	//$title = "Display Product";
//	include('header.php');

//	require_once('../Model/empDB.php');
         require_once('../Model/empDB.php');
        $username = $_SESSION['user']['username'] ;
        $emp = getProduct($username);
                                

?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

</head>
	<body>
	

	<table height = "50px" width = "100%"  border="0">
		<tr height = "100px">
<td colspan="2" ><section align="right">  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
				 <h1>Logged in as <a href="../View/profile.php"> <?=$emp['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "150px">
		<th >
		   <h1 style="color:#007a99;font-size:60px;" align ="center">View Profile</h1>
		</th>
		<th rowspan="2">
		 <fieldset>
    <legend><b>PROFILE</b></legend>
     <div class="container-fluid">
 
     <img src="../Image/<?=$emp['filename'] ?>" width="150" height="150" align ="center"/>

  </div>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0" align="Center">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td> <?=$emp['name'] ?></td>
			
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td> <?=$emp['email'] ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td> <?=$emp['gender'] ?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td> <?=$emp['day'] ?>/<?=$emp['month'] ?>/<?=$emp['year'] ?></td>
			</tr>
		</table>	
        <hr/>
        <a href="../View/edit_profile.php">Edit Profile</a>	
	</form>
</fieldset>
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
		header('location: ../view/login.php');
	}
?>