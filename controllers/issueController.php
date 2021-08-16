<?php
    require_once '../../models/database.php';
    

    function getAllIssue()
	{
		$query ="SELECT * FROM issue ";
		$iss = get($query);
		return $iss;	
	}
	
	function getIssue($id)
	{
		$query="SELECT * FROM issue WHERE is_id='$id'";
		$issue=get($query);
		return $issue[0];
	}
	
	function insertIssue($isid, $comment, $cid)
	{
		$query="INSERT INTO issue VALUES('$isid','$comment','$cid')";
		execute($query);
	}
    

	

?>