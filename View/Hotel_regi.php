<?php
session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<title>Hotel System Admin Dashboard</title>
<link rel="stylesheet" href="../CSS/style.css" />
 <script type="text/javascript" src="../JS/cursor.js">  </script>
	<body>
	</body>

	<table height = "50px" width = "100%"  border="0">
		<tr height = "100px">
<td colspan="2" align="center"> 
	  <a href=../Home.php> <img src="../Image/Capturcsdfcsde.JPG" width="180" height="080" align ="left"/></a>
			</td>
		</tr>
		<tr height = "30px">
		
		<th rowspan="2">
  <form action="ha_dash.html" method="get">
        <fieldset>
          <h1 style="color:goldenrod;font-size:40px;" align ="center">  
 📊Hotel Booking Registration Request📊<br></h1>
           <table border="0" align="center">
           <tr>
               <td width="250px" align="center">
                   <h3>
                       Name
                   </h3>
               </td>
               <td width="250px" align="center">
                   <h3>
                       <input type="text" name="" value="" placeholder="Enter Your Full Name">
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
                       <input type="tel" name="" value="" placeholder="Enter Your Phone Number">
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
                       <input type="text" name="" value="" placeholder="Enter Your Nationality">
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
       <input type="radio" name="gender" value="" placeholder="">Male
       <input type="radio" name="gender" value="" placeholder="">Female
               <input type="radio" name="gender" value="" placeholder="">Other </h3>
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
              <input type="date" name="" value="" > </h3>
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
                       <input type="text" name="" value="" placeholder="Enter Your National ID Number">
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
                       <input type="text" name="" value="" placeholder="Postal Code, Village, Thana, District, Division">
                   </h3>
               </td>
           </tr>   
               
         <tr>
           
            <td width="250px" align="center">
                <h3>
                Location
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="loc" id="loc" border="0">
							<option value="">Barishal (বরিশাল Barishal)</option>
							<option value="">Chittagong (চট্টগ্রাম Chittagong)</option>
							<option value="">Dhaka (ঢাকা Dhaka)</option>
							<option value="">Mymensingh (ময়মনসিংহ Mymensingh)</option>
							<option value="">Khulna (খুলনা Khulna)</option>
							<option value="">Rajshahi (রাজশাহী Rajshahi)</option>
							<option value="">Rangpur (রংপুর Rangpur)</option>
							<option value="">Sylhet (সিলেট Sylhet)</option>
						</select><br>
             </td>
         </tr>
        <tr> <td width="250px" align="center">
                <h3>
                Quality/Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="loc" id="loc" border="0">
							<option value="">5 Stars</option>
							<option value="">4 Stars</option>
							<option value="">3 Stars</option>
							<option value="">2 Stars</option>
							<option value="">1 Stars</option>
							<option value="">Camping</option>
						</select><br>
            </td>
        </tr>
        
         <tr> <td width="250px" align="center">
                <h3>
                Room Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="loc" id="loc" border="0">
							<option value="" >Non_AC</option>
							<option value="">AC</option>
							<option value="">Delux</option>
							<option value="">Luxary</option>
							<option value="">Suite</option>
							<option value="">VVIP_Suite</option>
							
						</select><br>
           
            </td>
        </tr>
               <tr> <td width="250px" align="center">
                <h3>
                Bed Type
             </h3>
            </td>
             <td width="250px" align="center"> 
              <select name="loc" id="loc" border="0">
							<option value="" >Single</option>
							<option value="">Double(2 single Beded Room)</option>
							<option value="">Couple(1 Big Beded Room)</option>
							<option value="">Family(Max 6 Person)</option>
						</select><br>
           
            </td>
        </tr>
         <tr>
             
            <td align="center">
             <h3>
                 Room Number
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="" value="" placeholder="Enter The Room Number"></h3> 
            </td>
        </tr>
          <tr>
             
            <td align="center">
             <h3>
                Price
             </h3>   
            </td>
            <td align="center">
                <h3><input type="text" name="" value="" placeholder="Enter The Room Price"></h3> 
            </td>
        </tr>
         <tr>
             
            <td align="center">
             <h3>
                Picture
             </h3>   
            </td>
            <td align="center">
                <h3><input type="file" name="" value="" placeholder=""></h3> 
            </td>
        </tr>
       <tr>
           <td>
              <h3 align="center"> Room Booked?<br>
       <input type="radio" name="booked" value="" placeholder="" >  No
       <input type="radio" name="booked" value="" placeholder="" checked="checked"> Yes </h3>
           </td>
           <td  align="center">
              <input  type="submit" name="" value="Allotment" placeholder="" style="font-size: 50px" width="250px">
           </td>
       </tr>
           
              </table>
        </fieldset>
    </form>

		</th>
		<tr>
		  
		
		   
		</tr>
		
	</table>
	<center>Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a></center> 
	</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>
