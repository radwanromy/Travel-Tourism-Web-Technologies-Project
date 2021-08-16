<?php

session_start();


if(isset($_POST['submit'])){


		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$dob  = $_POST['dob'];
		$bg = $_POST['bg'];
		$nationality = $_POST['nationality'];
		$address = $_POST['address'];
		$image = $_FILES['file'];
		$password = $_POST['password'];

		
		if($name          != '' && 
		   $email         != '' && 
		   $phone         != '' && 
		   $gender        != '' && 
		   $dob           != '' && 
		   $bg            != '' && 
		   $nationality   != '' && 
		   $address       != '' && 
		   $image         != '' && 
		   $password      != '' ) {
			
		     // echo'Signup Successful.......';

			

			 

			$file = fopen('../txtFile/users.txt', 'a');
			fwrite($file, $user);
			fclose($file);

			header('location: ../view/u_login.html');


			// File(picture upload to a folder)

			$filename = $_FILES['file']['name'];
			$filesize = $_FILES['file']['size'];
 			$filetemp = $_FILES['file']['tmp_name'];
			$location = '../uploads/'.$filename; 

			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "insert into users values('$name', '$email', '$phone', '$gender', '$dob', '$bg','$nationality','$address','$password','$location')"; 
			$result = mysqli_query($conn, $sql);

			setcookie('flag','true',time()+3600, '/');
            move_uploaded_file($filetemp, $location); 

			}

		else{
			echo'Please fill the all imformation properly';
		}
	}
	else{
		echo'invalid request';
	}

?> 