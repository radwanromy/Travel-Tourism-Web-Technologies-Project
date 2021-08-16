<?php 

    session_start();

 $conn = mysqli_connect('localhost', 'root','', 'webtech');
 $sql = "DELETE FROM users WHERE Name = '".$_SESSION['name']."' and Password = '".$_SESSION['password']."'";
 $result = mysqli_query($conn, $sql);

 header('location: ../view/u_login.html');


?>


