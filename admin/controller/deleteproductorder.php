<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `order_details` where `od_id`='$pcid'","deleted");
echo "<script> alert('Product order deleted successfully');window.location='../viewproductorder.php'</script>";
?>



