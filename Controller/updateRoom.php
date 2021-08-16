<?php

	require_once('../Model/addRoomDB.php');
	
	if(isset($_GET['sub'])){
        
		$roomNo		  = $_GET['roomNo'];
		
		
		if($roomNo				== "" ){
			echo "incomplete room number information...please try again!";}
        else{
            
				$status = deleteRoom($roomNo);
                
				
		}
	}
?>