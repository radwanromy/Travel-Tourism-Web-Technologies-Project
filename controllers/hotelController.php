<?php
    require_once '../../models/database.php';
    
    function getAllHotel()
	{
		$query ="SELECT * FROM hotel WHERE status='active'";
		$htls = get($query);
		return $htls;	
    }

    function getHotel($id)
	{
		$query="SELECT * FROM hotel WHERE h_id='$id'";
		$htl=get($query);
		return $htl[0];
    }

    function editHotel($id, $price, $features)
    {
        $query="UPDATE hotel SET price='$price',details='$features' WHERE h_id='$id'";
		
		execute($query);
		header("Location:../../views/Manager/managehotel.php");
    }
    
    function deleteHotel($id)
    {
        $query="UPDATE hotel SET status='inactive' WHERE h_id='$id'";
		
		execute($query);
		header("Location:../../views/Manager/managehotel.php");
    }
    
    function insertHotel($id,$name,$ref,$price,$seat,$details,$locf,$eid)
	{
		$query="INSERT INTO hotel VALUES('$id','$name','active','$ref','$price','$seat', '$details','$locf',0,'$eid')";
        execute($query);
        header("Location:../../views/Manager/managehotel.php");
		

    }
    
    function searchHotel($location)
	{
		$query="SELECT * FROM hotel WHERE location='$location' AND status='active'";
		$hotel=get($query);
		return $hotel;
    }
    
    function updateCountHotel($h_id, $count)
	{
		$query="UPDATE hotel SET count='$count' WHERE h_id='$h_id' and status='active'";
		execute($query);
		
	}


	

?>