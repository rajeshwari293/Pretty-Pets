<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `products` where `p_id`='$pcid'","deleted");
echo "<script> alert('Products deleted successfully');window.location='../viewproducts.php'</script>";
?>



