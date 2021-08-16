<?php
    require_once '../../models/database.php';
    
    function getAllBooking()
	{
		$query ="SELECT * FROM booking WHERE status='active'";
		$books = get($query);
		return $books;	
	}
	
	function activeBooking($id)
    {
        $query="UPDATE booking SET status='active' WHERE b_id='$id'";
		
		execute($query);
		
	}
	function deleteBooking($id)
    {
        $query="UPDATE booking SET status='inactive' WHERE b_id='$id'";
		
		execute($query);
		
	}


	function insertBooking($b_id, $pht_id, $status, $c_id)
	{
		$query="INSERT INTO booking VALUES('$b_id','$pht_id','$status','$c_id')";
		execute($query);
		
	}
	
	function getAllBookingU($cid)
	{
		$query ="SELECT * FROM booking where c_id='$cid' AND status='active'";
		$booking = get($query);
		return $booking;	
    }
	
	function getBooking($b_id)
	{
		$query ="SELECT * FROM booking where b_id='$b_id' AND status='active'";
		$booking = get($query);
		return $booking[0];	
	}

	function getBookingS($b_id)
	{
		$query ="SELECT * FROM booking where b_id='$b_id'";
		$booking = get($query);
		return $booking[0];	
	}

	
	
?>