<?php
include('../../controllers/customerController.php');
$t_customers=count(getAllCustomer());
echo $t_customers;

?>