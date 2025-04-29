<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `pet_table` where `pet_id`='$pcid'","deleted");
echo "<script> alert('Pets deleted successfully');window.location='../viewpet.php'</script>";
?>



