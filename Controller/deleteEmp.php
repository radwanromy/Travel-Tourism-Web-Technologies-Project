<?php

	require_once('../Model/empDB.php');
	
	if(isset($_GET['enot'])){
        
		$eid  = $_GET['eid'];
		
		
		if($eid			== "" ){
			echo "incomplete Employee ID Number information...please try again!";}
        else{
            
				$status = deleteEmp($eid);
                
				
		}
	}
?>