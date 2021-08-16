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
				 <h1>Logged in as <a href="../View/profile.php"> <?=$emp['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "150px">
		<th >

		    <h1 style="color:#007a99;font-size:60px;" align ="center">Change Profile Picture</h1>
		</th>
		<th rowspan="2">
		  <fieldset>
    <legend><b>PROFILE PICTURE</b></legend>
    <form action="../Controller/picck.php" method="POST" enctype="multipart/form-data">
  <!-- <img src="../Image/R6d81db685b266efc045c799c8f1cb327.jpg" width="250px"/> -->


 <img src="../Image/<?=$emp['filename'] ?>" width="150" height="150" align ="center"/>
   
 

        
        <br />
        <input type= "text" name='eid' value=" <?=$_SESSION['user']['eid'] ?>" hidden >
        
        <input type="file" name="image">
        
        <hr />
        <input type="submit" name="piccng" value="Submit">
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
	</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>