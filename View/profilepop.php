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
		
		<tr height = "150px">
	
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
        <a href="../View/edit_profile.php">Edit Profile</a>	<tr>
            
        </tr>
	</form>
</fieldset>
		</th>
	
		
	</table>
	
	</body>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>