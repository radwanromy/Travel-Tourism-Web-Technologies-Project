<?php
session_start();
	if(isset($_COOKIE['flag'])){
	require_once('../Model/empDB.php');

    if(isset($_POST['piccng'])){
        
        $eid       = $_POST['eid'];
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetemp = $_FILES['image']['tmp_name'];
        $ext = explode('.', $filename);
        echo '.$filename';
        $location ='../image/ProfilePicture/'.time().'.'.$ext[1];

        if(move_uploaded_file($filetemp, $location)){
            echo "done";
        }else{
            echo "error";
        } 
        		
		if($filename     		== "" ){
			echo " incomplete file information...please try again!";}
        else{
        $emp = [
                            'eid'=>$eid,
            
            
                            'filename'=>$filename
						];

				$emp = changeEmpPic($emp);
                
				
		}
        
        
        
        
        
        
        
        
        
        
        
        
        
    }

	
	}else{
		header('location: ../view/login.php');
	}
?>