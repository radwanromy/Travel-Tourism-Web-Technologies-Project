<?php
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

?>




<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/home2.css">

        <script>

        var myVar = setInterval( usercount, 100);
        var myVar1 = setInterval(reviewcount, 100);
        var myVar2 = setInterval(bookcount , 100);
        var myVar3 = setInterval(paymentcount , 100);
        var myVar4 = setInterval(packagecount , 100);
		function usercount()
		{
			http1 = new XMLHttpRequest();
			
			http1.onreadystatechange=function()
			{
				if(http1.readyState == 4 && http1.status == 200)
				{
					document.getElementById("t1").value="User "+http1.responseText;
				}
			}
			http1.open("GET","apply.php",true);
			http1.send();
          
		}

        function reviewcount()
		{
			http2 = new XMLHttpRequest();
			
			http2.onreadystatechange=function()
			{
				if(http2.readyState == 4 && http2.status == 200)
				{
					document.getElementById("t2").value="review "+http2.responseText;
				}
			}
			http2.open("GET","apply1.php",true);
			http2.send();
		}

        function bookcount()
		{
			http = new XMLHttpRequest();
			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("t3").value="bookings "+http.responseText;
				}
			}
			http.open("GET","apply2.php",true);
			http.send();
           
        }
        
        function paymentcount()
		{
			http3 = new XMLHttpRequest();
			
			http3.onreadystatechange=function()
			{
				if(http3.readyState == 4 && http3.status == 200)
				{
					document.getElementById("t4").value="payment "+http3.responseText;
				}
			}
			http3.open("GET","apply3.php",true);
			http3.send();
           
        }
        
        function packagecount()
		{
			http4 = new XMLHttpRequest();
			
			http4.onreadystatechange=function()
			{
				if(http4.readyState == 4 && http4.status == 200)
				{
					document.getElementById("t5").value="packages "+http4.responseText;
				}
			}
			http4.open("GET","apply4.php",true);
			http4.send();
           
		}


        
	</script>
    </head>
    <body >
       
           
        <div class="title" >Travel & TOURISM MANAGEMENT SYSTEM
        </div>
         
       

        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manage_package.php'" value='manage_package'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Tour Packages</i></button><br>
                    <button class="btn" onClick="location.href='createpackage.php'" value='createpackage'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Package</i></button><br>
                    <button class="btn" onClick="location.href='Manageuser.php'" value='manageuser'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Manage Customer</i></button><br>
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

       

        <div class="text" >Home</i>
        </div>


        <div class="panel">


            
            

            <input type="button" id="t1" style="background-color:rgb(104, 0, 102);"> 
            <input type="button" id="t2" style="background-color:801336;margin-left: 60px"><br>
            <input type="button" id="t3" style="background-color:#053f5e;margin-left: 240px; margin-top:20px"> <br>

            <input type="button"id="t4" style="background-color:#ad1d45; margin-top:20px"> 
            <input type="button" id="t5" style="background-color:#00454a;margin-left: 60px; margin-top:20px">
            
            
           
        </div>

        

        



       
                
        
        

       
        
      
        

        
    </body>
</html>
