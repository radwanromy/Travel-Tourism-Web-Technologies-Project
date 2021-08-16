<?php
session_start();
	if(isset($_COOKIE['flag'])){
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
				 <h1>Logged in as<a href="../View/profile.php"><?=$_SESSION['user']['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "150px">
		<th >
		   <h1 style="color:#007a99;font-size:60px;" align ="center">Delete Employee</h1>
		</th>
		<th rowspan="2">
		 <fieldset>
    <legend><b>Delete Employee</b></legend>
   <form  action="../Controller/deleteEmp.php" method="GET">
        <table>
            <tr>
                <td><font size="3">Employee ID</font></td>
				<td>:</td>
                <td><input type="number" name="eid" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" name="enot" value="Delete Employee" style="color:#00ccff;" />
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
            <?php
	
	//$title = "Display Product";
//	include('header.php');
	require_once('../Model/empDB.php');
	$rooms = getAllEmp();

?>

<body>
	<div id="main_content">
	
		
			<legend>Display Rooms Information</legend>
			<table border="0" width="100%">
				
				
					<th>
                   Employee ID
					</th>
				<th>
                  Employee Name

					</th>
					<th>
                   Employee Username
					</th>
					<th>
                  Email
					</th>
					<th hidden>
                 Password
					</th>
					<th>
                  Gender
					</th>
                <th>
                  Date of Birth
					</th>
                <th>
                 Profile Picture Filename
					</th>
                
				<?php for($i=0; $i < count($rooms); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$rooms[$i]['eid']?></td>
					<td ><?=$rooms[$i]['name']?></td>
					<td><?=$rooms[$i]['username']?></td>
					<td><?=$rooms[$i]['email']?></td>
					<td hidden><?=$rooms[$i]['password'] ?></td>
					<td><?=$rooms[$i]['gender']?></td>
					<td><?=$rooms[$i]['day']?>/
					<?=$rooms[$i]['month']?>/
					<?=$rooms[$i]['year']?></td>
					<td><?=$rooms[$i]['filename']?></td>
					<td>
					<!--<form method="GET" action="../Controller/editRoom.php">
                           <input type="button" name="eid" value="<?= $rooms[$i]['eid']?>" hidden >
				        <input  type="submit" name="esub" value="Edit Room"  style="color:#00ccff;"  placeholder="" >
						</form> 
						<form  action="deleteEmp.php" method="GET">
                           <input type="text" name="eid" value="<?= $rooms[$i]['eid']?>" hidden >
				        <input  type="submit" name="enot" value="Delete Room" style="color:#00ccff;" >
						</form> --->
					</td>
				</tr>

				<?php } ?>
			</table>
	
	</div>

</body>
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