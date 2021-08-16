<?php
    require_once '../../models/database.php';

    function editAdmin($id, $mobile, $email, $address)
    {
        $query="UPDATE admin SET mobile='$mobile',email='$email',address='$address' WHERE a_id='$id'";
		
		execute($query);
		
    }
    
    function editSecurity($id, $security)
    {
        $query="UPDATE login SET ans='$security' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/Admin/editprofile.php");
		
    }
    
    function getAdmin($id)
	{
		$query="SELECT * FROM admin WHERE a_id='$id'";
		$admin=get($query);
		return $admin[0];
    }

    function getUser($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$user=get($query);
		return $user[0];
    }

    function updatePassword($id, $pass)
    {
        $query="UPDATE login SET password='$pass' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/login.php");
		
    }

   

    
    
?>