<?php
require_once 'config.php';
$control = new Controller();
$admin = new Admin();


$id=$_GET['breed_id'];
$astmt=$admin->ret("SELECT * FROM `pet_category` WHERE `category_id` ='$id'");
$aread=$astmt->fetch(PDO::FETCH_ASSOC);
$category=$aread['category_id'];
$stmt=$admin->ret("SELECT * FROM `pet_breed` WHERE `petcat_id` ='$category'");
echo "<option value=''>Select Breed</option>";

while($read=$stmt->fetch(PDO::FETCH_ASSOC))
{
	echo "<option value='".$read['breed_id']."' <?php if($read['breed_id'] == $row['pb_id']) {?> selected <?php } ?>> ".$read['breed_name']."</option>";

}
?>