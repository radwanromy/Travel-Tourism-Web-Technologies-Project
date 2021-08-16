<?php
include '../../controllers/employeeController.php';
$eid = $_GET["id"];
$emp=getEmployee($eid);

    $name="";
    $err_name="";

    $salary="";
    $err_salary="";

    

    $has_error=false;

    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['submit']))
	    {	
                    
                    if(empty($_POST['ename']))
                    {
                        $err_name="*name requiers";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                    $name=$_POST['ename'];
                    if (ctype_space($name)) {
                        $err_name="*name can not be only spacces";
                        $has_error=true;
                    }
                    else if(!preg_match('/^[a-zA-Z\s]+$/',$name))
                    {
                        $err_name="*name only contains letter and space";
                        $has_error=true;
                    }
                    }
                   
                
                    if(empty($_POST['salary']))
                    {
                        $err_salary="*salary Requires";
                        $has_error=true;
                
                        
                    }
                    else
                    {
                        $salary=$_POST['salary'];
                        if(!preg_match('/^[0-9]+$/', $salary))
                            {
                                $err_salary="*invalid salary .";
                                $has_error=true;
                            }
                        
                    }

                    


                    if(!$has_error)
                    {
                        editEmployee($eid,$name,$salary);
                    }
        }

        if(isset($_POST['delete']))
        {
            deleteEmployee($eid);
        }

                   
                    
    
  
    
 
		
	
		
    

?>



<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/updateemployee.css">
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
        <div class="text" >Update Employee</i>
        </div>

        <form method="post" action="">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="ename"  value="<?php echo $emp["name"]?>" ></h3></td>
                    <td><span style="color:red"><?php echo $err_name;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="text" name="date"  value="<?php echo $emp["dob"]?>" readonly></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="text" name="gender"  value="<?php echo $emp["gender"]?>" readonly > </h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" value="<?php echo $emp["email"]?>" readonly ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneno" value="<?php echo $emp["mobile"]?>" readonly ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address" value="<?php echo $emp["address"]?>" readonly ></h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Salary:</h3></td>
                    
                    <td><h3><input type="text" name="salary" value="<?php echo $emp["salary"]?>"  ></h3></td>
                    <td><span style="color:red"><?php echo $err_salary;?></span></td>
                 

                </tr>

               

                

               


                


            </table>

            <h3><input type="submit" name="submit" value="Update"> <input type="submit" name="delete" value="Delete" style="background-color:red"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
