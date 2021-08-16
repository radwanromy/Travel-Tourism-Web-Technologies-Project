<?php
session_start();
	if(isset($_COOKIE['flag'])){
	require_once('../Model/empDB.php');

    if(isset($_POST['passcng'])){
        
        $eid       = $_POST['eid'];
       // $opass = $_POST['opass'];
        $password = $_POST['password'];
        $repass = $_POST['repass'];
    
        		
		if($password != $repass){
			echo " Type new pass correctly information...please try again!";}
        else{
        $emp = [
                            'eid'=>$eid,
                            'password'=>$password
						];

				$emp = changeEmpPass($emp);
                
				
		}
        
    }

	
	}else{
		header('location: ../view/login.php');
	}
?>