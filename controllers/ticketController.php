<?php
    require_once '../../models/database.php';
    

    function getAllTicket()
	{
		$query ="SELECT * FROM ticket WHERE status='active'";
		$tcs = get($query);
		return $tcs;	
    }
    function insertTicket($t_id, $status, $b_id, $price, $from_date, $no_days, $travel_date, $seat_no)
	{
		$query="INSERT INTO ticket VALUES('$t_id', '$status', '$b_id', '$price', '$from_date', '$no_days', '$travel_date', '$seat_no')";
		execute($query);
	}

	function getTicket($b_id)
	{
		$query = "SELECT * FROM ticket WHERE b_id='$b_id'";
		$tickets = get($query);
		return $tickets;
    }

	

?>