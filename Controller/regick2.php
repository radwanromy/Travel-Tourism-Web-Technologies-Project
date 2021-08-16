
<?php
	session_start();
	require_once('../Model/empDB.php');

	if(isset($_POST['submit'])){
        $name       = $_POST['name'];
		$username  = $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$gender     = $_POST['gender'];
		$day        = $_POST['day'];
		$month      = $_POST['month'];
		$year       = $_POST['year'];
      
       
       
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetemp = $_FILES['image']['tmp_name'];
        $ext = explode('.', $filename);
        echo '.$filename';
        $location = '../image/ProfilePicture/'.time().'.'.$ext[1];

        if(move_uploaded_file($filetemp, $location)){
            echo "done";
        }else{
            echo "error";
        } 
        		
		if($name				== "" ){
			echo "incomplete name information...please try again!";}
		else if($username 		    == "" ){
			echo "incomplete username information...please try again!";}
		else if($email 		       == "" ){
			echo "incomplete email information...please try again!";}
        else if($password   			== "" ){
			echo "incomplete password information...please try again!";}
		else if($gender 	    	=== "" ){
			echo "incomplete gender information...please try again!";}
		else if($day	    	== "" ){
			echo "incomplete day information...please try again!";}
        else if($month     		== "" ){
			echo "incomplete month information...please try again!";}
        else if($year     		== "" ){
			echo "incomplete year information...please try again!";}
        else if($filename     		== "" ){
			echo "incomplete year information...please try again!";}
        else{
            
          /*  $user=['name'=> $name,'username'=> $username, 'email'=>$email,'password'=>$password, 'gender'=>$gender, 'day'=>$day, 'month'=> $month, 'year'=> $year ,'filename'=> $filename];
            
			$_SESSION['user']=$user;
            $user =$name."|".$username."|".$email ."|".$password ."|".$gender ."|".$day."|". $month ."|".$year."|".$filename."\n";
             $file = fopen('users.txt', 'a');
			fwrite($file, $user);
			fclose($file); 
  
*/



			$emp = [
							'name'			=>$name, 
							'username'		=>$username, 
							'email'		=>$email,
                            'password'				=>$password, 
							'gender'	=>$gender, 
							'day'=>$day,
                            'month'	=>$month, 
							'year'=>$year,
                            'filename'=>$filename
						];

				$status = insertEmpIn($emp);
                
				
		}
        
    }
		/*if($name != '' && $username != '' && $password != '' && $email != '' && $gender !='' && $day != '' && $month != '' && $year != ''  ){
            if(strlen($password) > 5){
                
			$user=['name'=> $name,'username'=> $username, 'email'=>$email,'password'=>$password, 'gender'=>$gender, 'day'=>$day, 'month'=> $month, 'year'=> $year]; //, 'image'=>$image

			 $_SESSION['user']=$user;
                /*

			$user =$name."|".$username."|".$email ."|".$password ."|".$gender ."|".$day."|". $month ."|".$year."\n"; 


			$file = fopen('users.txt', 'a');
			fwrite($file, $user);
			fclose($file); 

			header('location: ../view/Login.php'); 
			}else{
				header('location: ../View/Registration.php?msg=password_error');
			}
		
		}else{
			header('location: ../View/Registration.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}
	/*if(strlen($password) > 5){
                $user=$name."|".$username."|".$email."|".$password."|".$gender."|".$day."|".$month."|".$year;
				$_SESSION['user'] = $user;
                $file = fopen('users.txt', 'a');
				fwrite($file, $user);
				fclose($file);
				header('location: ../View/login.php');
			}else{
				header('location: ../View/Registration.php?msg=password_error');
			} */