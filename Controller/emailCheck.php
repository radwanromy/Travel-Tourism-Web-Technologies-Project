<? php
if(isset($_POST['email'])){

		echo "Done";

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "Email exist";
		}		
	}
	?>