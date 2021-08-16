<?php
    require_once '../../models/database.php';
    
	
    function getAllTransport()
	{
		$query ="SELECT * FROM transport WHERE status='active'";
		$trans = get($query);
		return $trans;	
    }

    function getTransport($id)
	{
		$query="SELECT * FROM transport WHERE tr_id='$id'";
		$tran=get($query);
		return $tran[0];
    }

    function editTransport($id, $price, $features)
    {
        $query="UPDATE transport SET price='$price',details='$features' WHERE tr_id='$id'";
		
		execute($query);
		header("Location:../../views/Manager/managetransport.php");
    }
    
    function deleteTransport($id)
    {
        $query="UPDATE transport SET status='inactive' WHERE tr_id='$id'";
		
		execute($query);
		header("Location:../../views/Manager/managetransport.php");
    }
    
    function insertTransport($id,$name,$type,$date,$locf,$loct,$ref,$seat,$price,$details,$eid)
	{
		$query="INSERT INTO transport VALUES('$id','$name','$type','$date','$locf','$loct','$ref','$seat','$price', '$details',0,'$eid','active')";
        execute($query);
        header("Location:../../views/Manager/managetransport.php");
		

	}

    function searchTransport($date, $locf, $loct, $type)
	{
		$query="SELECT * FROM transport WHERE traveldate='$date' AND location_f='$locf' AND location_t='$loct' AND type='$type' and status='active'";
		$transport=get($query);
		return $transport;
    }
    
    function updateCount($tr_id,$count)
	{
		$query="UPDATE transport SET count='$count' WHERE tr_id='$tr_id' and status='active'";
		execute($query);
		
	}

?>