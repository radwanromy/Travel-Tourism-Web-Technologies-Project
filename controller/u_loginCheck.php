<?php 

session_start();

if(isset($_POST['submit'])){


		$password = $_POST['password'];
		$name = $_POST['name'];

		if($password != "" || $password != ""){

			$_SESSION['name'] = $name;
			$_SESSION['password'] = $password;

			$conn = mysqli_connect('localhost', 'root','', 'webtech');
			$sql = "select * from users where Name = '".$name."' and Password = '".$password."'";
			$result = mysqli_query($conn, $sql);



			if(mysqli_num_rows($result) > 0 ){

				setcookie('flag','true',time()+3600, '/');
				header('location: ../view/u_profile.php');
				
						
				
			}else{
				echo"Invalid Username or Password Please Try again";
			}


		}
		else{
			echo "Null value found";
		}


}

else{
		echo'invalid request';
	}

?>