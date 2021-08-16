<?php
	require_once '../../models/database.php';
    
    
	
	function getAllEmployee()
	{
		$query ="SELECT * FROM emp WHERE status='active'";
		$emp = get($query);
		return $emp;	
    }
    
    function getEmployee($id)
	{
		$query="SELECT * FROM emp WHERE e_id='$id'";
		$emp=get($query);
		return $emp[0];
    }
    
    function editEmployee($id, $name, $salary)
    {
        $query="UPDATE emp SET name='$name',salary='$salary' WHERE e_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
	}
	
	function insertEmployee($id,$name,$dob,$salary,$address,$gender,$email,$mobile,$status,$aid)
	{
		$query="INSERT INTO emp VALUES('$id','$name','$dob','$salary','$address','$gender','$email','$mobile','$status','$aid')";
		execute($query);
		

	}
	function insertUser($id,$pass,$type,$ans,$status)
	{
		
		$query="INSERT INTO login VALUES('$id','$pass','$type','$ans','$status')";
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
		
		
		
		

	}

	function deleteEmployee($id)
    {
        $query="UPDATE emp SET status='inactive' WHERE e_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
	}

	function updatePassword($id, $pass)
    {
        $query="UPDATE login SET password='$pass' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/login.php");
		
	}
	
	function getUser($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$user=get($query);
		return $user[0];
	}
	

	function editEmployeeself($id, $mobile, $email, $address)
    {
        $query="UPDATE emp SET address='$address',email='$email',mobile='$mobile' WHERE e_id='$id'";
		
		execute($query);
		
    }
    
    function editSecurity($id, $security)
    {
        $query="UPDATE login SET ans='$security' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/Manager/editprofile.php");
		
    }


	

	
?>