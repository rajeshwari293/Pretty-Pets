<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `customers` where `cust_id`='$pcid'","deleted");
echo "<script> alert('customers details deleted successfully');window.location='../viewcustomers.php'</script>";
?>



