<?php
include '../../controllers/book_trackingController.php';
include '../../controllers/bookingController.php';
include '../../controllers/billController.php';
include '../../controllers/transportController.php';
include '../../controllers/hotelController.php';
$bt_id = $_GET["id"];
$bt=getBook_Tracking($bt_id);

    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['Accept']))
	    {	
           $booking=getBookingS($bt["b_id"]);
           
           $pht= $booking['pht_id'];
           if($pht[0]=='T')
           {
               $bill= getBillM($booking['b_id']);
               $amount=$bill['amount'];
              

               $trans=getTransport($pht);
               $price=$trans['price'];
               $count= intval($amount)/intval($price);
               $co= $trans['count'];
               $new=intval($co)-$count;
               updateCount($pht,$new);
           }

           else if($pht[0]=='H')
           {
                $hotel=getHotel($pht);
                $count= $hotel['count'];
                $new=$count-1;
                updateCountHotel($hotel['h_id'], $new);
           }

            editBook_Tracking($bt_id,"accepted");
        }

        if(isset($_POST['reject']))
	    {	
           
            activeBooking($bt["b_id"]);
            activeBill($bt["b_id"]); 
            editBook_Tracking($bt_id,"cancelled");
            
        }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/action.css">
    </head>
    <body>
       
           
        <div class="title" >Travel & TOURISM MANAGEMENT SYSTEM
        </div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manage_package.php'" value='manage_package'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Tour Packages</i></button><br>
                    <button class="btn" onClick="location.href='createpackage.php'" value='createpackage'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Package</i></button><br>
                    <button class="btn" onClick="location.href='manageuser.php'" value='manageuser'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Manage Customer</i></button><br>
                    <button class="btn" onClick="location.href='managebooking.php'" value='managebooking'><i class="fa fa-calendar-check-o">&nbsp;&nbsp;&nbsp;Manage Bookings</i></button><br>
                    <button class="btn" onClick="location.href='addemployee.php'" value='addemployee'><i class="fa fa-user-plus" >&nbsp;&nbsp;&nbsp;Add Employee</i></button><br>
                    <button class="btn" onClick="location.href='manageemployee.php'" value='managemployee'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Manage Employee</i></button><br>
                    <button class="btn" onClick="location.href='managepayment.php'" value='managepayment'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Payment</i></button><br>
                    <button class="btn" onClick="location.href='managereview.php'" value='managereview'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Reviews</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Manage Bookings</i>
        
        </div>
        <form method="post" action="">

        <div class="panel">
            <table>
            <tr>
                    <td> <h3>BOOKING ID:</h3></td>
                    
                    <td><h3><input type="text" name="bid" value="<?php echo $bt["b_id"]?>" readonly ></h3></td>
                  
                    
                 

                </tr>

            

                <tr>
                    <td> <h3>CUSTOMER ID:</h3></td>
                    
                    <td ><h3><input type="text" name="cid" value="<?php echo $bt["c_id"]?>" readonly></h3></td>
                   
                 

                </tr>
            </table>
            <h3><input type="submit" name="Accept" value="Accept"> <input type="submit" name="reject" value="Reject" style="background-color:red"></h3>



        </div>
    </form> 
        
    </body>
</html>
