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
				 <h1>Logged in as <a href="../View/profile.php"><?=$_SESSION['user']['name'] ?> </a><a href="../Controller/logout.php">| Logout</a> </h1>
			</section>
		
			</td>
		</tr>
		<tr height = "30px">
		<th >
		   <h1 style="color:#007a99;font-size:60px;" align ="center">Add Room</h1>
		</th>
		<th rowspan="2">
		  <form method="POST" action="../Controller/addRoomCheck.php">
        <fieldset>
          <h3 style="font-size:40px;" align ="center">  
 Hotel System Admin Dashboard<br>🏠Add Room🏠</h3>
           <table border="0" align="center">
         <tr>
           <td rowspan="8" width="300px" align="center" >
               <h1 >Room Details</h1>
           </td>
            <td width="250px" align="right">
                <h3>
                Location
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="location" style="color: #00ccff" id="location" border="0">
							<option value="Barishal (বরিশাল Barishal)">Barishal (বরিশাল Barishal)</option>
							<option value="Chittagong (চট্টগ্রাম Chittagong)">Chittagong (চট্টগ্রাম Chittagong)</option>
							<option value="Dhaka (ঢাকা Dhaka)">Dhaka (ঢাকা Dhaka)</option>
							<option value="Mymensingh (ময়মনসিংহ Mymensingh)">Mymensingh (ময়মনসিংহ Mymensingh)</option>
							<option value="Khulna (খুলনা Khulna)">Khulna (খুলনা Khulna)</option>
							<option value="Rajshahi (রাজশাহী Rajshahi)">Rajshahi (রাজশাহী Rajshahi)</option>
							<option value="Rangpur (রংপুর Rangpur)">Rangpur (রংপুর Rangpur)</option>
							<option value="Sylhet (সিলেট Sylhet)">Sylhet (সিলেট Sylhet)</option>
						</select><br>
             </td>
         </tr>
        <tr> <td width="250px" align="right">
                <h3>
                Quality/Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="quality" style="color: #00ccff" id="quality" border="0">
							<option value="5 Stars">5 Stars</option>
							<option value="4 Stars">4 Stars</option>
							<option value="3 Stars">3 Stars</option>
							<option value="2 Stars">2 Stars</option>
							<option value="1 Stars">1 Stars</option>
							<option value="Camping">Camping</option>
						</select><br>
            </td>
        </tr>
        <tr>
             
            <td align="right">
             <h3>
                 Room Number
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="roomNo" id="roomNo" value="" placeholder="Enter The Room Number"></h3> 
            </td>
        </tr>
         <tr> <td width="250px" align="right">
                <h3>
                Room Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="roomType" style="color: #00ccff" id="roomType" border="0">
							<option value="Non_AC" >Non_AC</option>
							<option value="AC">AC</option>
							<option value="Delux">Delux</option>
							<option value="Luxary">Luxary</option>
							<option value="Suite">Suite</option>
							<option value="VIP_Suite">VIP_Suite</option>
							
						</select><br>
           
            </td>
        </tr>
               <tr> <td width="250px" align="right">
                <h3>
                Bed Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="bed" style="color: #00ccff" id="bed" border="0">
							<option value="Single" style="color: #00ccff" >Single</option>
							<option value="Double(2 single Beded Room)" style="color: #00ccff">Double(2 single Beded Room)</option>
							<option value="Couple(1 Big Beded Room)" style="color: #00ccff">Couple(1 Big Beded Room)</option>
							<option value="Family(Max 6 Person)" style="color: #00ccff">Family(Max 6 Person)</option>
						</select><br>
           
            </td>
        </tr>
          <tr>
             
            <td align="right">
             <h3>
                Price
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="price" id="price" value="" placeholder="Enter The Room Price"></h3> 
            </td>
        </tr>
       <tr>
           <td>
              <h3 align="right"> Room Booked?<br>
       <input type="radio" name="booked" id="booked" value="no" placeholder="" checked="checked"> No
       <input type="radio" name="booked" id="booked"  value="yes" placeholder=""> Yes </h3>
           </td>
           <td  align="center">
              <input  type="submit" name="submit" value="Add Room" placeholder="" style="color: #00ccff;font-size: 50px" width="250px">
           </td>
       </tr>
           
              </table>
        </fieldset>
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
	$rooms = getAllRoom();

?>

<body>
	<div id="main_content">
	
		<fieldset style="width:full">
			<legend>Display Rooms Information</legend>
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

					</td>
				</tr>
					<form method="POST" action="../Controller/editRoomCheck.php">
				<tr align="center">
				<td ><input type="text" style="color: #00ccff" name="roomid" value="<?=$rooms[$i]['roomid']?>" /></td>
					<td ><input type="text" style="color: #00ccff"  name="roomNo" value="<?=$rooms[$i]['roomNo']?>" /></td>
					<td><input type="text" style="color: #00ccff"  name="roomType" value="<?=$rooms[$i]['roomType']?>" /></td>
					<td><input type="text" style="color: #00ccff"  name="bed" value="<?=$rooms[$i]['bed']?>" /></td>
					<td><input type="text"  style="color: #00ccff" name="price" value="<?=$rooms[$i]['price']?>" /></td>
				    <td><input type="text"  style="color: #00ccff" name="booked" value="<?=$rooms[$i]['booked']?>" /></td>
				    <td><input type="text"  style="color: #00ccff" name="location" value="<?=$rooms[$i]['location']?>" /></td>
				    <td><input type="text"  style="color: #00ccff" name="quality" value="<?=$rooms[$i]['quality']?>" /></td>
					<td>
				
                           
				        <input  type="submit"  style="color: #00ccff"  name="UP" value="Edit Room" placeholder="" >
				

						
					</td>
					
				</tr>
</form>
				<?php } ?>
			</table>
		</fieldset>
	</div>

</body>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>
		    Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a>
		    </td>
		</tr>
	</table>
	</head>
</html>