<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `workers` where `w_id`='$pcid'","deleted");
echo "<script> alert('workers deleted successfully');window.location='../viewworkers.php'</script>";
?>



