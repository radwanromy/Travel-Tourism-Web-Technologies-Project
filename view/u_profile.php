<?php 

    session_start();

 $conn = mysqli_connect('localhost', 'root','', 'webtech');
 $sql = "select * from users where Name = '".$_SESSION['name']."' and Password = '".$_SESSION['password']."'";
 $result = mysqli_query($conn, $sql);

 $user = mysqli_fetch_assoc($result);
   //if(isset($_SESSION['flag'])){
    if(isset($_COOKIE['flag'])){
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet"  href="../css/style.css">
	<title>User Profile</title>
</head>

<body bgcolor="#49E6E8">

    <h4 align="right" style="margin-right: 20px; color: blue;"   >
        <a style="text-decoration:blink;" href="u_login.html">🔙 Back</a>
    </h4>

	<details>

           <summary style="font-size: 25px">
               MENU Ⓜ️
           </summary>

      <h2 style="font-family:courier,arial,helvetica;">
        <a href="../js/allDivision.html" style="color: #106252; text-decoration:blink;">🔍 Search Place</a> <br>
        <a href="hotel_booking.html" style="color: #106252; text-decoration:blink;" >🏨 Hotel Booking  </a> <br>
        <a href="vehicel_rent.html" style="color: #106252; text-decoration:blink;"  >🚗 Vehicel Rent </a><br>
        <a href="buy_ticket.html" style="color: #106252; text-decoration:blink;"  >🎫 Buy Ticket </a><br>
        <a href="u_update_info.php" style="color: #106252; text-decoration:blink;">👤 Edit your profile </a><br>
        <a href="../controller/delete.php" style="color: #106252; text-decoration:blink;">❌ Delete your account </a><br>
    </h2>
     </details>




  <h1 align="center" style="color: #106252; font-size: 60px; ">Welcome To Your Profile </h1>

  <hr color="black"/>


   <table border="0" align="center" cellpadding="10">
   	
   	<tr > 
      <td colspan="2"> 
      	<h1 style="font-size:40px; text-transform: uppercase;"> <?php echo $user['Name'];?> </h1>

		 
         <img src="<?php echo $user['Image'];?>" width="150" height="200" >
          

        </td> 
   	</tr>

   	<tr>
   		<td class="data"> Date of birth : </td>
   		<td class="data"> <?php echo $user['DOB'];?> </td>
   	</tr>

   	<tr>
   		<td class="data">Gender:</td>
   		<td class="data"> <?php echo $user['Gender'];?> </td>
   	</tr>

   	<tr>
   		<td class="data">Nationality:</td>
   		<td class="data"> <?php echo $user['Nationality'];?> </td>
   	</tr>

   	<tr>
   		<td class="data">Address: </td>
   		<td class="data"> <?php echo $user['Address'];?> </td>
   	</tr>

   	<tr>
   		<td class="data">Number: </td>
   		<td class="data"> <?php echo $user['Phone'];?> </td>
   	</tr>

   	<tr>
   		<td class="data">Email Address: </td>
   		<td class="data"> <?php echo $user['Email'];?> </td>
   	</tr>

   </table>

   <h3 align="center"><a href="../controller/logout.php">Logout</a></h3>
   


</body>
</html>

<?php
    }
    else{
        //echo 'invalid request';
        header('location:../view/u_login.html');
    }
?> 



