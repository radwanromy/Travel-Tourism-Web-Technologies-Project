<?php

	require_once('../Model/addRoomDB.php');
	
	if(isset($_POST['UP'])){
        $roomid             = $_POST['roomid'];
		$roomNo				= $_POST['roomNo'];
		$roomType 		    = $_POST['roomType'];
		$bed 		        = $_POST['bed'];
        $price   			= $_POST['price'];
		$booked 	    	= $_POST['booked'];
		$location	    	= $_POST['location'];
        $quality     		= $_POST['quality'];
		
		if($roomid				== "" ){
			echo "incomplete room id information...please try again!";}
        else if($roomNo				== "" ){
			echo "incomplete room number information...please try again!";}
		else if($roomType 		    == "" ){
			echo "incomplete room type information...please try again!";}
		else if($bed 		       == "" ){
			echo "incomplete bed information...please try again!";}
        else if($price   			== "" ){
			echo "incomplete price information...please try again!";}
		else if($booked 	    	=== "" ){
			echo "incomplete booking information...please try again!";}
		else if($location	    	== "" ){
			echo "incomplete location information...please try again!";}
        else if($quality     		== "" ){
			echo "incomplete quality information...please try again!";
			
		}else{
            
			


			$room = [
                            'roomid'    =>$roomid,
							'roomNo'			=>$roomNo, 
							'roomType'		=>$roomType, 
							'bed'		=>$bed,
                            'price'				=>$price, 
							'booked'	=>$booked, 
							'location'=>$location,
                            'quality'=>$quality
						];

				$status = updateRoom($room);
                
				
		}
	}
?>