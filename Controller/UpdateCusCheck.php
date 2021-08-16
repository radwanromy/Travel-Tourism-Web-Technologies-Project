<?php

	require_once('../Model/regiCustomerDB.php');
	
	if(isset($_POST['UPCUS'])){
        $cid             = $_POST['cid'];
		$cname		    = $_POST['cname'];
		$mobile 		    = $_POST['mobile'];
		$nationality		        = $_POST['nationality'];
        $gender   			= $_POST['gender'];
		$dob 	    	= $_POST['dob'];
		$idproof	    	= $_POST['idproof'];
        $addres     		= $_POST['addres'];
		$roomNo				= $_POST['roomNo'];
        $price   			= $_POST['price'];
        $status   			= $_POST['status'];
        
		if($cid				== "" ){
			echo "incomplete Customer id information...please try again!";}
        else if($cname				== "" ){
			echo "incomplete Customer Name information...please try again!";}
		else if($mobile		    == "" ){
			echo "incomplete mobile information...please try again!";}
		else if($nationality 		       == "" ){
			echo "incomplete nationality information...please try again!";}
        else if($gender  			== "" ){
			echo "incomplete gender information...please try again!";}
		else if($dob 	    	=== "" ){
			echo "incomplete Date Of Birth information...please try again!";}
		else if($idproof	    	== "" ){
			echo "incomplete ID Proof information...please try again!";}
        else if($addres     		== "" ){
			echo "incomplete address information...please try again!";}
        else if($roomNo 	    	=== "" ){
			echo "incomplete Room Number information...please try again!";}
		else if($price	    	== "" ){
			echo "incomplete price information...please try again!";}
        else if($status	    	== "" ){
			echo "incomplete status information...please try again!";}
        else{
            
			


			$cus = [
                            'cid'    =>$cid,
							'cname'			=>$cname, 
							'mobile'		=>$mobile, 
							'nationality'		=>$nationality,
                            'gender'				=>$gender, 
							'dob'	=>$dob, 
							'idproof'=>$idproof,
                            'addres'=>$addres, 
							'roomNo'=>$roomNo,
                            'price'=>$price,
                            'status'=> $status
						];

				$status = updateCus($cus);
                
				
		}
	}
?>