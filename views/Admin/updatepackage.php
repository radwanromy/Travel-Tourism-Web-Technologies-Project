<?php
    include '../../controllers/packageController.php';
    $pid = $_GET["id"];
    $package=getPackage($pid);

    $price="";
    $err_price="";

    $feaure="";
    $err_feature="";

    $date="";
    $err_date="";

    $offer="off";

    $has_error=false;


    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['submit']))
	    {	
                    
                    if(empty($_POST['date']))
                    {
                        $err_date="*date requiers";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                    $date=$_POST['date'];
                    }
                   
                
                    if(empty($_POST['price']))
                    {
                        $err_price="*price Requires";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                        
                        if(is_numeric($_POST['price']))
                        {
                            $price=$_POST['price'];
                            if($price < $package['old_price'])
                            {
                                $offer="on";
                            }
                        }
                        else{
                            $err_price="*price must be a number";
                            $has_error=true;
                        }
                        
                    }

                    if(empty($_POST['details']))
                    {
                        $err_feature="*features Requires";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                        $feature=$_POST['details'];

                        if (ctype_space($feature)) {
                            $err_feature="*features can not be only spacces";
                            $has_error=true;
                        }
                        else if(!preg_match('/^[a-zA-Z.,\s]+$/',$feature))
                        {
                            $err_feature="*features only contains letter,coma and space";
                            $has_error=true;
                        }
                    }


                    if(!$has_error)
                    {
                        editPackage($pid,$price,$date,$feature,$offer);
                    }
		
    }

    if(isset($_POST['delete']))
    {
        deletePackage($pid);
    }
    

?>



<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/updatepackage.css">
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
        <div class="text" >Update Package</i>
        </div>
    <form method="post" action="">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Package Name:</h3></td>
                    
                    <td><h3><input type="text" name="pname" value="<?php echo $package["p_name"]?>" readonly ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="type" value="<?php echo $package["type"]?>" readonly></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Location:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="loc" value="<?php echo $package["location"]?>" readonly></h3></td>
                    <td></td>
                 

                </tr>

                

              

                <tr>
                    <td> <h3>Price:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="price" value="<?php echo $package["price"]?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_price;?></span></td>
                 

                </tr>

                

                

                <tr>
                    <td> <h3>Package Feature:</h3></td>
                    
                    <td><h3><input type="text" name="details" value="<?php echo $package["features"]?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_feature;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Travel Date:</h3></td>
                    
                    <td><h3><input type="date" name="date" value="<?php echo $package["travel_date"]?>"></h3></td>
                    <td><span style="color:red"><?php echo $err_date;?></span></td>
                    
                 

                </tr>


                


            </table>

            <h3><input type="submit" name="submit" value="UPDATE"> <input type="submit" name="delete" value="DELETE" style="background-color:red;"></h3>

            

            
           
        </div>

    
      



       
                
        
        

       
        
      
        
    </form>
        
    </body>
</html>
