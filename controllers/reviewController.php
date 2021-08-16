<?php
    require_once '../../models/database.php';
    
    function getAllReview()
	{
		$query ="SELECT review.*,customer.name FROM review,customer WHERE review.status='active' and review.c_id=customer.c_id";
		$rev = get($query);
		return $rev;	
	}
	
	function getReview($id)
	{
		$query="SELECT * FROM review WHERE r_id='$id' and status='active'";
		$review=get($query);
		return $review[0];
    }	

	
	function insertReview($id,$comment,$status,$cid,$bid)
	{
		$query="INSERT INTO review VALUES('$id','$comment','$status','$cid','$bid')";
		execute($query);
	}
?>
