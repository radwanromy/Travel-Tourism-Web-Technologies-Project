<?php
	require_once  '../models/database.php';
	
    
    

	function getUser($id)
	{
		
		$query="SELECT * FROM login WHERE id='$id'";
		
		$users=get($query);

		if($users != null)
		{
			return $users[0];
		}

		else{
			return null;
		}
		
		
	}

	function forgetPassword($id,$pass)
    {
        $query="UPDATE login SET password='$pass' WHERE id='$id'";
		
		execute($query);
		header("Location:../views/login.php");
	}

	

	
	
	
?>






