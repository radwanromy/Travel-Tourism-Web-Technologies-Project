<?php
include '../../controllers/adminController.php';

    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }
       
       $aid=$_SESSION["loggedinuser"];
       $admin=getAdmin($aid);
       $user=getUser($aid);

       $email="";
       $err_email="";
   
       $phone="";
       $err_phone="";

       $address="";
       $err_address="";

       $ans="";
       $err_ans="";
   
       $has_error=false;

       if(isset($_POST['submit']))
       {	
                   
                   if(empty($_POST['email']))
                   {
                       $err_email="*email requiers";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                     $email=$_POST['email'];
                     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $err_email = "Invalid email format";
                        $has_error=true;
                      }
                   }
                  
               
                   if(empty($_POST['phoneno']))
                   {
                       $err_phone="*phone no Requires";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                       $phone=$_POST['phoneno'];
                       if(!preg_match('/^[0-9]{11}+$/', $phone))
                        {
                            $err_phone="*invalid Phone no. phone no must be 11 digit";
                            $has_error=true;
                        }

                       
                   }

                   if(empty($_POST['address']))
                   {
                       $err_address="*address Requires";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                       $address=$_POST['address'];
                       if (ctype_space($address)) {
                        $err_address="*address can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match('/^[a-zA-Z\s]+$/',$address))
                    {
                        $err_address="*adress only contains letter and space.";
                        $has_error=true;
                    }
                       
                   }

                   if(empty($_POST['answer']))
                   {
                       $err_ans="*answer Requires";
                       $has_error=true;
               
                       
                   }
                   else
                   {
                       $ans=$_POST['answer'];
                       $ans=$_POST['answer'];
                       if (ctype_space($ans)) {
                           $err_ans="*ans can not be only spacces";
                           $has_error=true;
                       } 
                       else if(!preg_match('/^[a-zA-Z\s]+$/',$ans))
                       {
                           $err_ans="*name only contains letter and space";
                           $has_error=true;
                       }
                       
                   }

                   


                   if(!$has_error)
                   {
                       editAdmin($aid,$phone,$email,$address);
                       editsecurity($aid,$ans);
                   }
       }

?>




<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/editprofile.css">
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
                    <button class="btn" onClick="location.href='manageemployee.php'" value='managemployee'><i class="fa fa-id-badge" >&nbsp;&nbsp;&nbsp;Manage Employee</i></button><br>
                    <button class="btn" onClick="location.href='managepayment.php'" value='managepayment'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Payment</i></button><br>
                    <button class="btn" onClick="location.href='managereview.php'" value='managereview'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Reviews</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Edit Profile</i>
        </div>
        <form method="post" action="">
        <div class="panel">
       
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="ename" value="<?php echo $admin["name"]?>" readonly></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="text" name="date" value="<?php echo $admin["dob"]?>" readonly></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="text" name="gender" value="<?php echo $admin["gender"]?>" readonly ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" value="<?php echo $admin["email"]?>"></h3></td>
                    <td><span style="color:red"><?php echo $err_email;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneno"value="<?php echo $admin["mobile"]?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_phone;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address" value="<?php echo $admin["address"]?>"  ></h3></td>
                    <td><span style="color:red"><?php echo $err_address;?></span></td>
                 

                </tr>

                

                

                <tr>
                    <td> <h3>Security Qus:</h3></td>
                    
                    <td><h3>What's Your Pet Name?</h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Security Ans:</h3></td>
                    
                    <td><h3><input type="text" name="answer"value="<?php echo $user["ans"]?>"  ></h3></td>
                    <td><span style="color:red"><?php echo $err_ans;?></span></td>
                 

                </tr>


                


            </table>

            <h3><input type="submit" name="submit" value="update"> </h3>
            

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
