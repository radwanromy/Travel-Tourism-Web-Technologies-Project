<?php

	require_once('../Model/empDB.php');

if(isset($_POST['eemp'])){
    $eid       = $_POST['eid'];
        $name       = $_POST['name'];
		$email 		= $_POST['email'];
		$gender     = $_POST['gender'];
		$day        = $_POST['day'];
		$month      = $_POST['month'];
		$year       = $_POST['year'];
      
       
       
        		
		if($name				== "" ){
			echo "incomplete name information...please try again!";}
		else if($eid		       == "" ){
			echo "incomplete employee id information...please try again!";}
		else if($email 		       == "" ){
			echo "incomplete email information...please try again!";}
		else if($gender 	    	=== "" ){
			echo "incomplete gender information...please try again!";}
		else if($day	    	== "" ){
			echo "incomplete day information...please try again!";}
        else if($month     		== "" ){
			echo "incomplete month information...please try again!";}
        else if($year     		== "" ){
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
                            'eid'=>$eid,
							'name'			=>$name, 
							'email'		=>$email,
							'gender'	=>$gender, 
							'day'=>$day,
                            'month'	=>$month, 
							'year'=>$year
						];

				$status = updateEmp($emp);
                
				
		}
}
?>