<?php
session_start();
	if(isset($_COOKIE['flag'])){
        
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/style.css" />
<script type="text/javascript" src="../JS/cursor.js">  </script>
 <script>

    </script>
 <meta charset="UTF-8">
<title>Hotel System Admin Dashboard</title>


	<body>
	</body>

	<table height = "50px" width = "100%"  border="0">
		<tr height = "100px">
<td colspan="2" > <section align='right'>  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
				 <h1>Logged in as<a href="../View/profile.php"> <?=$_SESSION['user']['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "30px">
		<th >
		    <h1 style="color:#007a99;font-size:60px;" align ="center">Customer Check Out</h1>
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
	require_once('../Model/regiCustomerDB.php');
	$cuss = getAllInCustomer();

?>

<body>
	<div id="main_content">
	
	
				<legend align="Center" ><h1>Display Checked In Customer Information</h1></legend>
			<table border="0" width="100%">
				
				<th>
                 Customer ID

					</th>
					<th>
                 Customer Name
					</th>
				<th>
                  Customer Mobile Number

					</th>
					<th>
                   Customer Nationality
					</th>
					<th>
                  Customer Gender
					</th>
					<th>
                  Customer Date Of Birth
					</th>
                <th>
                Customer ID Proof
					</th>
                <th>
                  Customer Address
					</th><th>
                 Customer Room Number

					</th>
               <th>
                 Customer Room Price

					</th>
               <th>
                 Customer Status

					</th>
                <th>
                   Action
					</th>
                
				<?php for($i=0; $i < count($cuss); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$cuss[$i]['cid']?></td>
				<td align="center"><?=$cuss[$i]['cname']?></td>
				<td align="center"><?=$cuss[$i]['mobile']?></td>
                <td align="center"><?=$cuss[$i]['nationality']?></td>
                <td align="center"><?=$cuss[$i]['gender']?></td>
                <td align="center"><?=$cuss[$i]['dob']?></td>
                <td align="center"><?=$cuss[$i]['idproof']?></td>
                <td align="center"><?=$cuss[$i]['addres']?></td>
                <td align="center"><?=$cuss[$i]['roomNo']?></td>
                <td align="center"><?=$cuss[$i]['price']?></td>
                <td align="center"><?=$cuss[$i]['status']?></td>
					
					<td>
					<form method="GET" action="../Controller/CusOutCheck.php">
                           <input type="input" name="cid" value="<?= $cuss[$i]['cid']?>" hidden  >
				        <input  type="submit" name="COUT" value="Check-Out Customer" placeholder="" >
						</form>
						
						 
						<!--<form method="GET" action="../View/deleteRoom.php">
                           <input type="button" name="roomNo" value="<?= $cuss[$i]['cid']?>" hidden >
				        <input  type="submit" name="sub" value="Delete Room" placeholder="" >
						</form> -->
					</td>
				</tr>

				<?php } ?>
			</table>
	
	</div>

</body>
           <?php
	
	//$title = "Display Product";
//	include('header.php');
	require_once('../Model/regiCustomerDB.php');
	$cuss = getAllOutCustomer();

?>

<body>
	<div id="main_content">
	
	
				<legend align="Center" ><h1>Display Checked Out Customer Information</h1></legend>
			<table border="0" width="100%">
				
				<th>
                 Customer ID

					</th>
					<th>
                 Customer Name
					</th>
				<th>
                  Customer Mobile Number

					</th>
					<th>
                   Customer Nationality
					</th>
					<th>
                  Customer Gender
					</th>
					<th>
                  Customer Date Of Birth
					</th>
                <th>
                Customer ID Proof
					</th>
                <th>
                  Customer Address
					</th><th>
                 Customer Room Number

					</th>
               <th>
                 Customer Room Price

					</th>
               <th>
                 Customer Status

					</th>
                
                
				<?php for($i=0; $i < count($cuss); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$cuss[$i]['cid']?></td>
				<td align="center"><?=$cuss[$i]['cname']?></td>
				<td align="center"><?=$cuss[$i]['mobile']?></td>
                <td align="center"><?=$cuss[$i]['nationality']?></td>
                <td align="center"><?=$cuss[$i]['gender']?></td>
                <td align="center"><?=$cuss[$i]['dob']?></td>
                <td align="center"><?=$cuss[$i]['idproof']?></td>
                <td align="center"><?=$cuss[$i]['addres']?></td>
                <td align="center"><?=$cuss[$i]['roomNo']?></td>
                <td align="center"><?=$cuss[$i]['price']?></td>
                <td align="center"><?=$cuss[$i]['status']?></td>
					
					
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
