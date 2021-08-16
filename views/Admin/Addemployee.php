

<?php
	
    include '../../controllers/employeeController.php';
    
    
    
    
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }


    $x=rand(2,10000000);
    
    $eid="E-".$x;
    $name="";
	$err_name="";
	$gender="";
    $err_gender="";
  
    $email="";
    $err_email="";

    $phone="";
    $err_phone="";

    $address="";
    $err_address="";

    $salary="";
    $err_salary="";


    $ans="";
    $err_ans="";

    $err_date="";
    $date="";
  
   

   $has_error=false;

   $aid=$_SESSION["loggedinuser"];
   $status="active";
   $type="employee";
   $pass="pass";
   


  
   



 
	
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['ename']))
		{
            $err_name="*Name Requires";
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
        
        if(empty($_POST['date']))
		{
            $err_date="*date of birth Requires";
            $has_error=true;
	
			
		}
		else
		{
		   $date=$_POST['date'];
        }
		if(empty($_POST['gender']))
		{
            $err_gender="*gender Requires";
            $has_error=true;
	
			
		}
		else
		{
			$gender=$_POST['gender'];
        }
    
        if(empty($_POST['email']))
	    {
            $err_email="*email Requires";
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
            $err_phone="*Phone no. Requires";
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

        

        if(empty($_POST['answer']))
	    {
            $err_ans="*answer Requires";
            $has_error=true;
	
			
		}
		else
		{
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
          
            
            insertEmployee($eid,$name,$date,$salary,$address,$gender,$email,$phone,$status,$aid);
            insertUser($eid,$pass,$type,$ans,$status);
        
            
            
            
        }
    }
	
		
  
  ?>



  







<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/Addemployee.css">
        <script>
         function remove()
                    {
                        document.getElementById( "na" ).innerHTML ="";
                        document.getElementById( "na1" ).innerHTML ="";
                        document.getElementById( "na2" ).innerHTML ="";
                        document.getElementById( "na3" ).innerHTML ="";
                        document.getElementById( "na4" ).innerHTML ="";
                        document.getElementById( "na5" ).innerHTML ="";
                        document.getElementById( "na6" ).innerHTML ="";
                        document.getElementById( "na7" ).innerHTML ="";
                        document.getElementById( "t1" ).value="";
                        document.getElementById( "t2" ).value="";
                        document.getElementById( "t3" ).value="";
                        document.getElementById( "t4" ).value="";
                        document.getElementById( "t5" ).value="";
                        document.getElementById( "t6" ).value="";
                        document.getElementById( "t7" ).value="";
                       
                    }
        </script>
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
        <div class="text" >Add Employee</i>
        </div>
       <form method="post" action="">
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
        

        <div class="panel">
            <table  > 
           
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="ename" id="t1" placeholder="Employee name" value='<?php echo"$name";?>'></h3></td>
                    <td><span style="color:red" id="na"><?php echo $err_name;?></span></td>

                    
                 

                </tr>

               

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="date" name="date" id="t2" value='<?php echo"$date";?>'></h3></td>
                    <td><span style="color:red" id="na6" ><?php echo $err_date;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="radio" name="gender" value="male" <?php if($gender=="male"){echo"checked";}?> > Male <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo"checked";}?>>Female</h3></td>
                    <td><span style="color:red" id="na7"><?php echo $err_gender;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" id="t3" placeholder="xyz@example.com" value='<?php echo"$email";?>'></h3></td>
                    <td><span style="color:red"  id="na1"><?php echo $err_email;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneno" id="t4" placeholder="Phone no."value='<?php echo"$phone";?>' ></h3></td>
                    <td><span style="color:red"  id="na2"><?php echo $err_phone;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address" id="t5" placeholder="Address" value='<?php echo"$address";?>' ></h3></td>
                    <td><span style="color:red"  id="na3"><?php echo $err_address;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Salary:</h3></td>
                    
                    <td><h3><input type="text" name="salary" id="t6" placeholder="salary" value='<?php echo"$salary";?>'></h3></td>
                    <td><span style="color:red"  id="na4"><?php echo $err_salary;?></span></td>
                 

                </tr>

               

                

                <tr>
                    <td> <h3>Security Qus:</h3></td>
                    
                    <td><h3>What's Your Pet Name?</h3></td>
                    <td></td>
                 

                </tr>

                <tr>
                    <td> <h3>Security Ans:</h3></td>
                    
                    <td><h3><input type="text" name="answer" id="t7" placeholder="Security Answer" value='<?php echo"$ans";?>'></h3></td>
                    <td><span style="color:red"  id="na5"><?php echo $err_ans;?></span></td>
                 

                </tr>

               


                


            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" onclick="remove();" value="Reset"></h3>

            

            
           
        </div>

    
      



       
                
        
        

       
        
      
        </form>

        
    </body>
</html>
