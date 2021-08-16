<?php
	
	require_once('db.php');


	function insertEmp($emp){
		$conn = getConnection();
		$sql = "insert into emp values('eid','{$emp['name']}', '{$emp['username']}', '{$emp['email']}', '{$emp['password']}', '{$emp['gender']}', '{$emp['day']}', '{$emp['month']}', '{$emp['year']}', '{$emp['filename']}')";
		header('location: ../view/login.php');
		if(mysqli_query($conn, $sql)){
            header('location: ../view/login.php');
			return true;
		}else{
			return false;
		}
	}

	function insertEmpIn($emp){
		$conn = getConnection();
		$sql = "insert into emp values('eid','{$emp['name']}', '{$emp['username']}', '{$emp['email']}', '{$emp['password']}', '{$emp['gender']}', '{$emp['day']}', '{$emp['month']}', '{$emp['year']}', '{$emp['filename']}')";
		header('location: ../View/dashboard.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

function getEmp($username){
		$conn = getConnection();
		$sql = "select * from emp ";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
    function getProduct($username){
            $conn = getConnection();
            $sql = "select * from emp where username='{$username}'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);

            return $row;
        }
	function getEmps($use){
		$conn = getConnection();
		$sql = "select * from emp where username='{$use['username']}'";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllEmp(){
		$conn = getConnection();
		$sql = "select * from emp";
		$result = mysqli_query($conn, $sql);
		$emps = [];
		//$profit = [];
		//$value = 0;
		//$count = 1;
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			/*if($row[$count]['buying_price'] >= $row[$count]['selling_price']){
				$value = $row[$count]['buying_price'] - $row[$count]['selling_price'];
			} else{
				$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			}*/
			//$count++;
			
			//$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			array_push($emps, $row);
			//array_push($profit, $value);
		}
		
		return $emps;
	}
function getAllUnBookedRoom(){
		$conn = getConnection();
		$sql = "select * from room Where booked='no'";
		$result = mysqli_query($conn, $sql);
		$rooms = [];
		//$profit = [];
		//$value = 0;
		//$count = 1;
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			/*if($row[$count]['buying_price'] >= $row[$count]['selling_price']){
				$value = $row[$count]['buying_price'] - $row[$count]['selling_price'];
			} else{
				$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			}*/
			//$count++;
			
			//$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			array_push($rooms, $row);
			//array_push($profit, $value);
		}
		
		return $rooms;
	}

	function updateEmp($emp){
		$conn = getConnection();
		$sql = "update emp set name='{$emp['name']}', email='{$emp['email']}', gender='{$emp['gender']}'	, day='{$emp['day']}', month='{$emp['month']}', year='{$emp['year']}'
 where eid={$emp['eid']}";
        header('location: ../View/profile.php');
		//header('location: ../Controller/logout.php');
		if(mysqli_query($conn, $sql)){
			return true;
         //   header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/addRoom.php');
		}
        // header('location: ../View/addRoom.php');
	}
    function changeEmpPic($emp){
		$conn = getConnection();
		$sql = "update emp set filename='{$emp['filename']}'
 where eid={$emp['eid']}";
         header('location: ../View/picture.php');
		//header('location: ../Controller/logout.php');
		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/picture.php');
         //   header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/picture.php');
		}
        // header('location: ../View/addRoom.php');
	}
 function changeEmpPass($emp){
		$conn = getConnection();
		$sql = "update emp set password='{$emp['password']}'
 where eid={$emp['eid']}";
		header('location: ../Controller/logout.php');
		if(mysqli_query($conn, $sql)){
			return true;
         //   header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/picture.php');
		}
        // header('location: ../View/addRoom.php');
	}
 function forgotPass($emp){
		$conn = getConnection();
		$sql = "UPDATE `emp` 
        SET `password`='{$emp['password']}'
        WHERE `username`='{$emp['username']}' AND `email`='{$emp['email']}' ";
		header('location: ../Controller/logout.php');
		if(mysqli_query($conn, $sql)){
			return true;
         //   header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/picture.php');
		}
        // header('location: ../View/addRoom.php');
	}

	function deleteEmp($eid){
		$conn = getConnection();
		$sql = "delete from emp where eid='{$eid}'";
        header('location: ../View/delete_employee.php');

		if(mysqli_query($conn, $sql)){
			return true;
           // header('location: ../View/addRoom.php');
		}else{
			return false;
           // header('location: ../View/addRoom.php');
		}
	}

?>