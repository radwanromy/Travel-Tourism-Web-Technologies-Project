<?php
    require_once '../../models/database.php';
    
	
    function getAllPayment()
	{
		$query ="SELECT * FROM payment WHERE status='active'";
		$pay = get($query);
		return $pay;	
	}
	
	function insertPayment($py_id, $status, $amount, $c_id, $b_id, $bl_id)
	{
		$query="INSERT INTO payment VALUES('$py_id','$status','$amount','$c_id', '$b_id', '$bl_id')";
		execute($query);
		
	}

	function getAllPaymentU($c_id)
	{
		$query ="SELECT * FROM payment where status='active' AND c_id='$c_id'";
		$payment = get($query);
		return $payment;	
    }
?>
    