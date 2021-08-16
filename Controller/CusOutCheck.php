<?php

	require_once('../Model/regiCustomerDB.php');
	
	if(isset($_GET['COUT'])){
        
		$cid  = $_GET['cid'];
		
		
		if($cid				== "" ){
			echo "incomplete Customer ID information...please try again!";}
        else{
            
				$status = checkOutCus($cid);
                
				
		}
	}
?>