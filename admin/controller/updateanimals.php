<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['update']))
{   
$mcat=$_POST['mcat'];
    $bcat=$_POST['bcat']; 
    $dob=$_POST['dob']; 
    $price=$_POST['price'];
    $petdesc=$_POST['petdesc'];
    $petid = $_POST['petid'];
    $image = $_POST['img'];
    $gender = $_POST['gender'];
    $typpe = $_POST['typpe'];
if(is_uploaded_file($_FILES["petimg"]["tmp_name"])){
        $imagetargetfolder ='uploads/'; 
        $image=$imagetargetfolder.basename($_FILES["petimg"]["name"]); //['image'] HTML tag input imagedb name
        move_uploaded_file($_FILES["petimg"]["tmp_name"],$image); 
    }
$sdm=$admin->cud("UPDATE `pet_table` set `status`='$typpe',`gender`='$gender',`pc_id`='$mcat',`pb_id`='$bcat',`dob`='$dob',`pet_price`='$price',`pet_desc`='$petdesc',`pet_image`='$image' where `pet_id`='$petid'","updated");
     echo "<script> alert('Pet details updated successfully');window.location='../viewpet.php'</script>";
}       
?>





