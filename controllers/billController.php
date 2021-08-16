<?php
    require_once '../../models/database.php';
    
    function activeBill($id)
    {
        $query="UPDATE bill SET status='active' WHERE b_id='$id'";
		
		execute($query);
		
	}
	
	function deleteBill($id)
    {
        $query="UPDATE bill SET status='inactive' WHERE b_id='$id'";
		
		execute($query);
		
    }

    function getAllBill()
	{
		$query ="SELECT * FROM bill WHERE status='active'";
		$bill = get($query);
		return $bill;	
    }
    function insertBill($bl_id, $status, $pay_status, $amount, $c_id, $b_id)
	{
		$query="INSERT INTO bill VALUES('$bl_id','$status','$pay_status','$amount', '$c_id', '$b_id')";
		execute($query);
		
	}
	function payBill($bl_id)
	{
		$query="UPDATE bill SET pay_status='paid' where bl_id='$bl_id'";
		execute($query);
	}

	
	
	function showBill($bl_id)
	{
		$query="SELECT * from bill where bl_id='$bl_id' and status='active'";
		$bill = get($query);
		return $bill[0];

	}
	
	function getPaidBill($cid)
	{
		$query ="SELECT * FROM bill WHERE pay_status='paid' AND c_id='$cid' and status='active'";
		$bill = get($query);
		return $bill;	
	}
	
	function getUnPaidBill($cid)
	{
		$query ="SELECT * FROM bill where pay_status='unpaid' AND c_id='$cid' AND status='active'";
		$bill = get($query);
		return $bill;	
	}
	
	function getBillM($bid)
	{
		$query ="SELECT * FROM bill where b_id='$bid' ";
		$bill = get($query);
		return $bill[0];	
    }

	


?>