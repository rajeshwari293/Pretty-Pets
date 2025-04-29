<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $sname=$_POST['sname'];
    $petname=$_POST['petcat'];
     $sprice=$_POST['sprice'];
    $desc=$_POST['desc'];
    $breed=$_POST['petbreed'];
    $target='uploads/';
    $image=$target.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
 $sdm=$admin->cud("INSERT INTO `pet_services`(`s_name`,`pet_id`,`breed_id`,`service_price`,`short_desc`,`image`)
    VALUES('$sname','$petname','$breed','$sprice','$desc','$image')","saved");
 echo "<script> alert('Pet services added successfully');window.location='../viewservices.php'</script>";
}       
?>
<?php 
if(isset($_GET['ppp'])){
 $ppp = $_GET['ppp'];
 $stmt = $admin->cud("UPDATE `pet_services` set `sdate`= now() where `s_id`='$ppp'","updated");
    echo "<script> alert('Updated Successfully');window.location='../viewpetserv.php'</script>";
}
?>



