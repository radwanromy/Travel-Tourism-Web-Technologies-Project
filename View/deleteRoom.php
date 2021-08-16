<?php

	require_once('../Model/addRoomDB.php');
	
	if(isset($_GET['not'])){
        
		$roomNo  = $_GET['roomNo'];
		
		
		if($roomNo				== "" ){
			echo "incomplete room number information...please try again!";}
        else{
            
				$status = deleteRoom($roomNo);
                
				
		}
	}
?>