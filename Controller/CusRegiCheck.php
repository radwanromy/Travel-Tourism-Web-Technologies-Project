<?php

	require('../Model/regiCustomerDB.php');
	
	if(isset($_POST['CusR'])){
        
		$cname				= $_POST['cname'];
		$mobile 		    = $_POST['mobile'];
		$nationality	    = $_POST['nationality'];
        $gender  			= $_POST['gender'];
		$dob 	        	= $_POST['dob'];
		$idproof	    	= $_POST['idproof'];
        $addres     		= $_POST['addres'];
        $price	    	    = $_POST['price'];
        $roomNo     		= $_POST['roomNo'];
         $status    		= $_POST['status'];
		if($cname				== "" ){
			echo "incomplete room number information...please try again!";}
		else if($mobile 		    == "" ){
			echo "incomplete room type information...please try again!";}
		else if($nationality 		       == "" ){
			echo "incomplete bed information...please try again!";}
        else if($gender   			== "" ){
			echo "incomplete gender information...please try again!";}
		else if($dob 	    	=== "" ){
			echo "incomplete booking information...please try again!";}
		else if($idproof	    	== "" ){
			echo "incomplete idproof information...please try again!";}
        else if($addres     		== "" ){
			echo "incomplete quality information...please try again!";	}
        else if($price	    	== "" ){
			echo "incomplete price information...please try again!";}
        else if($roomNo    		== "" ){
			echo "incomplete quality information...please try again!";}
        else if($status   		== "" ){
			echo "incomplete status information...please try again!";}
        else{
           
 

			$cus = [
							'cname'			=>$cname, 
							'mobile'		=>$mobile, 
							'nationality'	=>$nationality,
                            'gender'			=>$gender, 
							'dob'	=>$dob, 
							'idproof'=>$idproof,
                            'addres'=>$addres,
                            'price'	=>$price, 
							'roomNo'=>$roomNo, 
							'status'=>$status
						];

				$db = insertCustomer($cus);
            $dbr= room($cus);
      
          
				
		}
	}
?>