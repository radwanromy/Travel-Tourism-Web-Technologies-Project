<?php
	
	$name = $_POST['name'];

	if($name == null){
		echo 'invalid data';
	}else{
		echo "Valid data: ".$name;		
	}

?>