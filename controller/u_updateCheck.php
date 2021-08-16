<?php

session_start();


if(isset($_POST['update'])){


		
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$nationality = $_POST['nationality'];
		$address = $_POST['address'];
		$file = $_FILES['file'];
		$password = $_POST['password'];

		
		 if($email !==" "){
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET Email=? WHERE Name=?";
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("ss", $email, $_SESSION['name']);
			$stmt->execute();
		 }


		 if($phone !==" "){
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET Phone=? WHERE Name=?";
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("ss", $phone, $_SESSION['name']);
			$stmt->execute();
		 }


		 if($nationality !=" "){
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET Nationality=? WHERE Name=?";
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("ss", $nationality, $_SESSION['name']);
			$stmt->execute();
		 }


		 if($address !=" "){
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET Address=? WHERE Name=?";
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("ss", $address, $_SESSION['name']);
			$stmt->execute();
		 }


		 if($file !==""){

		 	$filename = $_FILES['file']['name'];
			$filesize = $_FILES['file']['size'];
 			$filetemp = $_FILES['file']['tmp_name'];
			$location = '../uploads/'.$filename; 

			if($location !=="../uploads/"){
				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
				$sql = "UPDATE users SET Image=? WHERE Name=?";
				$stmt= $conn->prepare($sql);
				$stmt->bind_param("ss", $location, $_SESSION['name']);
				$stmt->execute();
			}
		 }
		 // echo $email;
		 // echo $phone;
		 // echo $address;
		 // echo $password;
		 // echo $nationality;
		    // echo $file;
		   // echo $_SESSION['file'];
		 
		 
		 // echo $location;
		 



		 if($password !==" "){
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET Password=? WHERE Name=?";
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("ss", $password, $_SESSION['name']);
			$stmt->execute();
		 }
		
		header('location: ../view/u_login.html');
	
	}
	else{
		echo'invalid request';
	}

?> 