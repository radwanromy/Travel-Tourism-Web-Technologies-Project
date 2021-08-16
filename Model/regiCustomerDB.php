<?php
	
	require_once('db.php');
require_once('../Model/addRoomDB.php');
/*	function insertRoom($room){
		$conn = getConnection();
		$sql = "insert into room values('roomid','{$room['roomNo']}', '{$room['roomType']}', '{$room['bed']}', '{$room['price']}', '{$room['booked']}', '{$room['location']}', '{$room['quality']}')";
		header('location: ../View/addRoom.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
*/

	function insertCustomer($cus){
		$conn = getConnection();
		$sql = "insert into customer values('cid','{$cus['cname']}', '{$cus['mobile']}', '{$cus['nationality']}', '{$cus['gender']}', '{$cus['dob']}', '{$cus['idproof']}', '{$cus['addres']}', '{$cus['roomNo']}', '{$cus['price']}', '{$cus['status']}')";
        header('location:../View/HA_Customer_Regi.php');
		if(mysqli_query($conn, $sql)){
			return true;
          
            header('location:../View/HA_Customer_Regi.php');
		}else{
			return false;
            
            header('location:../View/HA_Customer_Regi.php');
		}
        
	}
	function room($cus){
		$conn = getConnection();
         $sql= "update room SET booked = 'YES'  WHERE roomNo = '{$cus['roomNo']}'";
        header('location:../View/HA_Customer_Regi.php');
		if(mysqli_query($conn, $sql)){
			return true;
           echo "if"; header('location:../View/HA_Customer_Regi.php');
		}else{
			return false;
           echo 'else';
            header('location:../View/HA_Customer_Regi.php');
		}
        
	}

/*	function getProduct($roomNo){
		$conn = getConnection();
		$sql = "select * from room where roomNo='{$roomNo}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	} */

	function getAllCustomer(){
		$conn = getConnection();
		$sql = "select * from customer";
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

	/* function updateRoom($room){
		$conn = getConnection();
		$sql = "update room set roomid='{$room['roomid']}',roomNo='{$room['roomNo']}', roomType='{$room['roomType']}', bed='{$room['bed']}'	, price='{$room['price']}', booked='{$room['booked']}', location='{$room['location']}', quality='{$room['quality']}'
 where roomid={$room['roomid']}";
		
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
		echo "Done";
		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/addRoom.php');
		}
	} */
    function updateCus($cus){
            $conn = getConnection();
            $sql = "update customer set cid='{$cus['cid']}',cname='{$cus['cname']}', mobile='{$cus['mobile']}',nationality='{$cus['nationality']}'	, gender='{$cus['gender']}', dob='{$cus['dob']}', idproof='{$cus['idproof']}', addres='{$cus['addres']}', roomNo='{$cus['roomNo']}', price='{$cus['price']}'
            , status='{$cus['status']}'
         where cid={$cus['cid']}";
            header('location: ../View/HA_Customer_Regi.php');
            if(mysqli_query($conn, $sql)){
                return true;
                header('location: ../View/HA_Customer_Regi.php');
            }else{
                return false;
                header('location: ../View/HA_Customer_Regi.php');
            }

        }
    function checkOutCus($cid){
            $conn = getConnection();
            $sql= "update customer SET status= 'CheckOut'  WHERE cid = '{$cid}'";
            header('location: ../View/H_Checkout.php');
            if(mysqli_query($conn, $sql)){
                return true;
                header('location: ../View/H_Checkout.php');
            }else{
                return false;
               header('location: ../View/H_Checkout.php');
            }
        } 
function getAllOutCustomer(){
		$conn = getConnection();
		$sql = "select * from customer WHERE status= 'CheckOut'";
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
function getAllInCustomer(){
		$conn = getConnection();
		$sql = "select * from customer WHERE status= 'CheckIn'";
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
 

?>