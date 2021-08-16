<?php
	session_start();
require_once('../Model/empDB.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			//$file = fopen('users.txt', 'r');
			//$data = fread($file, filesize('users.txt'));
			//$user = explode('|', $data);

			//$data = fgets($file);
			//$user = explode('|', $data);
			//feof($file);
            
  
	$emp = getProduct($username);
          
                

			if($emp['username'] == $username && $emp['password'] == $password){
            //if($_SESSION['user']['username'] == $username && $_SESSION['user']['password']== $password){
                    $_SESSION['flag'] = true;
                $_FILES['flag']['flag'] = true;
					setcookie('flag', 'true', time()+3600, '/');
               $user=['eid'=> $emp['eid'],'name'=> $emp['name'],'username'=> $emp['username'], 'email'=> $emp['email'],'password'=> $emp['password'], 'gender'=>$emp['gender'], 'day'=>$emp['day'], 'month'=> $emp['month'], 'year'=> $emp['year'], 'filename'=> $emp['filename']];
                
           $_SESSION['user']=$user;
              
           header('location: ../View/Dashboard.php' );
			}else{
				echo 'invlaid username/password';
			}
                }

		}else{
			echo "null value found...";
		}
	
?>