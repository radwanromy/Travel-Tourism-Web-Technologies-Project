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
		    <h1 style="color:#007a99;font-size:60px;" align ="center">Customer Registration</h1>
		</th>
		<th rowspan="2">
  <form method="POST" action="../Controller/CusRegiCheck.php" >

          <h1 style="font-size:40px;" align ="center">  
 📊Hotel System Admin Dashboard📊<br></h1>
           <table border="0" align="center" width="100%" height="100%">
           <tr>
               <td width="250px" align="center">
                   <h3>
                       Name
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="text" name="cname" id= "cname" value="" placeholder="Enter Your Full Name">
                   </h3>
               </td>
           </tr>
       <tr>
               <td width="250px" align="center">
                   <h3>
                      Mobile Number
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="tel" name="mobile" id= "mobile" value="" placeholder="Enter Your Phone Number">
                   </h3>
               </td>
           </tr>
         <tr>

               <td width="250px" align="center">
                   <h3>
                      Nationality
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="text" name="nationality" id= "nationality" value="" placeholder="Enter Your Nationality">
                   </h3>
               </td>
           </tr>
         <tr>
          <td width="250px" align="center">
                   <h3>
                      Gender
                   </h3>
               </td>
           <td>
              <h3 align="center">
       <input type="radio" name="gender" id= "gender" value="Male" placeholder="">Male
       <input type="radio" name="gender" id= "gender" value="Female" placeholder="">Female
               <input type="radio" name="gender" id= "gender" value="Other" placeholder="">Other </h3>
           </td>
               </tr>
               
                 <tr>
          <td width="250px" align="center">
                   <h3>
                     Date Of Birth
                   </h3>
               </td>
           <td>
              <h3 align="center">
              <input type="date" style= "color:#00ccff " name="dob" id= "dob" value="" > </h3>
           </td>
               </tr>
              
               <tr>

               <td width="250px" align="center">
                   <h3>
                      ID Proof
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="text" name="idproof" id= "idproof" value="" placeholder="Enter Your National ID Number">
                   </h3>
               </td>
           </tr>
                          
               <tr>

               <td width="250px" align="center">
                   <h3>
                      Adddress
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="text" name="addres" id= "addres" value="" placeholder="Postal Code, Village, Thana, District, Division">
                   </h3>
               </td>
           </tr>   
               
         
         <tr>
             
            <td align="center">
             <h3>
                 Room Number
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="roomNo"  id= "roomNo" value="" placeholder="Enter The Room Number"></h3> 
            </td>
        </tr>
          <tr>
             
            <td align="center">
             <h3>
                Price
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="price" id= "price" value="" placeholder="Enter The Room Price"></h3> 
            </td>
        </tr>
   
       <tr>
         
           <td  align="center" colspan="2">
              <input  type="submit" name="CusR" value="Allotment" placeholder=""style="color:#00ccff;font-size:50px;"  width="250px">
           </td>
       </tr>
           
              </table>
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
               <a href="../View/change_password.html" style="color: #00ccff;font-size:30px;"><u>. Change Password</u></a><br>
               <a href="../Controller/logout.php" style="color: #00ccff;font-size:30px;"><u>. Logout</u></a><br>
               
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center" colspan="2">

<?php
	
	//$title = "Display Product";
//	include('header.php');
	require_once('../Model/addRoomDB.php');
	$rooms = getAllUnBookedRoom();

?>

<body>
	<div id="main_content">
	
		<fieldset style="width:full">
			<legend align="Center"><h1>Display Available Rooms Information</h1></legend>
			<table border="0">
				
				
					<th>
                   Serial No
					</th>
				<th>
                  Room Number

					</th>
					<th>
                   Room Type
					</th>
					<th>
                   Bed Type
					</th>
					<th>
                   Price
					</th>
                <th>
                  Room Booked?
					</th>
                <th>
                  Location
					</th><th>
                  Quality/Type

					</th>
                <th>
                   Action
					</th>
                
				<?php for($i=0; $i < count($rooms); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$rooms[$i]['roomid']?></td>
					<td ><?=$rooms[$i]['roomNo']?></td>
					<td><?=$rooms[$i]['roomType']?></td>
					<td><?=$rooms[$i]['bed']?></td>
					<td><?=$rooms[$i]['price']?></td>
					<td><?=$rooms[$i]['booked']?></td>
					<td><?=$rooms[$i]['location']?></td>
					<td><?=$rooms[$i]['quality']?></td>
					<td>
					<form method="GET" action="../Controller/editRoom.php">
                           <input type="button" name="roomNo" value="<?= $rooms[$i]['roomNo']?>" hidden >
				        <input  type="submit" name="sub" value="Edit Room" placeholder="" >
						</form>
						<a href="edit.php?roomid=<?= $rooms[$i]['roomid']?>"> edit </a> |
						 
						<form method="GET" action="../View/deleteRoom.php">
                           <input type="button" name="roomNo" value="<?= $rooms[$i]['roomNo']?>" hidden >
				        <input  type="submit" name="sub" value="Delete Room" placeholder="" >
						</form>
					</td>
				</tr>

				<?php } ?>
			</table>
		</fieldset>
	</div>

</body>
       
           
<?php
	
	//$title = "Display Product";
//	include('header.php');
	require_once('../Model/regiCustomerDB.php');
	$cuss = getAllCustomer();

?>

<body>
	<div id="main_content">
	
		<fieldset style="width:full">
				<legend align="Center"><h1>Display Registered Customer Information</h1></legend>
			<table border="0">
				
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
				
						
						 
					<!--	<form method="GET" action="../View/deleteRoom.php">
                           <input type="button" name="cid" value="<?= $cuss[$i]['cid']?>" hidden >
				        <input  type="submit" name="sub" value="Check Out" placeholder="" >
						</form> -->
					</td>
				</tr>
				<form method="POST" action="../Controller/UpdateCusCheck.php">
				<tr align="center">
				<td ><input type="text" name="cid" value="<?=$cuss[$i]['cid']?>" /></td>
					<td ><input type="text" name="cname" value="<?=$cuss[$i]['cname']?>" /></td>
					<td><input type="text" name="mobile" value="<?=$cuss[$i]['mobile']?>" /></td>
					<td><input type="text" name="nationality" value="<?=$cuss[$i]['nationality']?>" /></td>
					<td><input type="text" name="gender" value="<?=$cuss[$i]['gender']?>" /></td>
				    <td><input type="text" name="dob" value="<?=$cuss[$i]['dob']?>" /></td>
				    <td><input type="text" name="idproof" value="<?=$cuss[$i]['idproof']?>" /></td>
				    <td><input type="text" name="addres" value="<?=$cuss[$i]['addres']?>" /></td>
				    <td><input type="text" name="roomNo" value="<?=$cuss[$i]['roomNo']?>" /></td>
				    <td><input type="text" name="price" value="<?=$cuss[$i]['price']?>" /></td>
				    <td><input type="text" name="status" value="<?=$cuss[$i]['status']?>" /></td>
					<td>
				
                           
				        <input  type="submit" name="UPCUS" value="Edit Information" placeholder="" >
				

						
					</td>
					
				</tr>

				<?php } ?>
                </form>
			</table>
		</fieldset>
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
