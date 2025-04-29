<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $sname=$_POST['sname'];
    $petname=$_POST['petcat'];
     $sprice=$_POST['sprice'];
    $desc=$_POST['desc'];
    $s_id=$_POST['s_id'];
    $image=$_POST['img'];
if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        $imagetargetfolder ='uploads/'; 
        $image=$imagetargetfolder.basename($_FILES["image"]["name"]); 
        move_uploaded_file($_FILES["image"]["tmp_name"],$image); 
    }
$stmt=$admin->cud("UPDATE `pet_services` set `s_name`='$sname',`service_price`='$sprice',`short_desc`='$desc',`image`='$image',`pet_id`='$petname' where `s_id`='$s_id'","updated");
echo "<script> alert('Pet services updated successfully');window.location='../viewservices.php'</script>";
}       
?>



