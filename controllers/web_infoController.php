<?php
    require_once '../../models/database.php';
    
    
    function insertInfo($id,$name,$details,$image)
	{
		$query="INSERT INTO web_info VALUES('$id','$name', '$details','$image')";
        execute($query);
        header("Location:../../views/Manager/home.php");
		
    }
    
    function getAllInfo()
	{
		$query="SELECT * FROM web_info;";
		$info=get($query);
		return $info;
	}

	function getInfo($w_id)
	{
		$query="SELECT * FROM web_info WHERE w_id='$w_id';";
		$info=get($query);
		return $info[0];
	}



?>