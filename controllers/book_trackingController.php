<?php
	require_once '../../models/database.php';
    
    
	

	function getAllBook_Tracking()
	{
		$query ="SELECT * FROM book_tracking WHERE active_status='requested'";
		$bts = get($query);
		return $bts;	
    }
    
    function getBook_Tracking($id)
	{
		$query="SELECT * FROM book_tracking WHERE bt_id='$id'";
		$bt=get($query);
		return $bt[0];
    }
    
    function editBook_Tracking($id,$status)
    {
        $query="UPDATE book_tracking SET active_status='$status' WHERE bt_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/managebooking.php");
	}
	function insertBookTracking($bt_id, $status, $active_status, $b_id, $c_id)
	{
		$query="INSERT INTO book_tracking VALUES('$bt_id', '$status', '$active_status', '$b_id', '$c_id')";
		execute($query);
	}

	function getBook_TrackingU($c_id)
	{
		$query ="SELECT * FROM book_tracking WHERE c_id='$c_id' AND status='active'";
		$bts = get($query);
		return $bts;	
	}

	
	
	?>