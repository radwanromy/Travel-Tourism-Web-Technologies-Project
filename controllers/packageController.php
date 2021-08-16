<?php
	require_once '../../models/database.php';
    
    
	

	function getAllPackage()
	{
		$query ="SELECT * FROM packages WHERE status='active'";
		$products = get($query);
		return $products;	
    }
    
    function getPackage($id)
	{
		$query="SELECT * FROM packages WHERE p_id='$id'";
		$package=get($query);
		return $package[0];
    }
    
    function editPackage($id, $price, $date, $features,$offer)
    {
        $query="UPDATE packages SET price='$price',features='$features', travel_date='$date',offer='$offer' WHERE p_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manage_package.php");
	}
	
	function insertPackage($id,$name,$type,$loc,$image,$price,$feature,$tr,$aid)
	{
		$query="INSERT INTO packages VALUES('$id','$name','$type','$loc','$image','$price','$price','$feature','$tr','off','$aid','active')";
		execute($query);
		header("Location:../../views/Admin/manage_package.php");
		

	}

	function deletePackage($id)
    {
        $query="UPDATE packages SET status='inactive' WHERE p_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manage_package.php");
	}
	function searchPackage($td,$type)
	{
		$query="SELECT * FROM packages WHERE travel_date='$td' AND type='$type' AND status='active'";
		$package=get($query);
		return $package;
	}
	
	function offerPackage($offer)
	{
		$query="SELECT * FROM packages WHERE offer='$offer' AND status='active'";
		$package=get($query);
		return $package;
    }

	
	
?>