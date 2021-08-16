<?php
	
	require_once('db.php');


	function insertRoom($room){
		$conn = getConnection();
		$sql = "insert into room values('roomid','{$room['roomNo']}', '{$room['roomType']}', '{$room['bed']}', '{$room['price']}', '{$room['booked']}', '{$room['location']}', '{$room['quality']}')";
		header('location: ../View/addRoom.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProduct($roomNo){
		$conn = getConnection();
		$sql = "select * from room where roomNo='{$roomNo}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllRoom(){
		$conn = getConnection();
		$sql = "select * from room";
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

	function updateRoom($room){
		$conn = getConnection();
		$sql = "update room set roomid='{$room['roomid']}',roomNo='{$room['roomNo']}', roomType='{$room['roomType']}', bed='{$room['bed']}'	, price='{$room['price']}', booked='{$room['booked']}', location='{$room['location']}', quality='{$room['quality']}'
 where roomid={$room['roomid']}";
		header('location: ../View/addRoom.php');
		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/addRoom.php');
		}
         header('location: ../View/addRoom.php');
	}
	function deleteRoom($roomNo){
		$conn = getConnection();
		$sql = "delete from room where roomNo='{$roomNo}'";
        header('location: ../View/addRoom.php');

		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/addRoom.php');
		}
	}

?>