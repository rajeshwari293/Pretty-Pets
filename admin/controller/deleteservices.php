<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `pet_services` where `s_id`='$pcid'","deleted");
echo "<script> alert('Pet services deleted successfully');window.location='../viewservices.php'</script>";
?>



