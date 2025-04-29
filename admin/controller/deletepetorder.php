<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `petorder_table` where `o_id`='$pcid'","deleted");
echo "<script> alert('Pet order deleted successfully');window.location='../viewpetorder.php'</script>";
?>



