<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `shipping` where `sh_id`='$pcid'","deleted");
echo "<script> alert('ShippingS deleted successfully');window.location='../viewshipping.php'</script>";
?>



