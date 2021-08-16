
<?php

	require_once('../Model/empDB.php');

    if(isset($_GET['forgotpass'])){
        
        $username       = $_GET['username'];
        $email       =  $_GET['email'];
       // $opass = $_POST['opass'];
        $password =  $_GET['password'];
        $repass =  $_GET['repass'];
    
        		
		if($password != $repass){
			echo " Type new pass correctly information...please try again!";}
        else if(strlen($password   )		<5){
			echo "incomplete password information..password must contain more than 5 letters!";}
        else{
        $emp = [
                            'username'=>$username,
                            'email'=>$email,
                            'password'=>$password
						];

				$emp = forgotPass($emp);
                
				
		}
        
    }

	
	else{
		header('location: ../view/login.php');
	}
?>