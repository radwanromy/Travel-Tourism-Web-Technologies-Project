<?php
include('../../controllers/bookingController.php');
$t_book=count(getAllBooking());
echo $t_book;

?>