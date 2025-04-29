<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $wname=$_POST['wname'];
    $wphno=$_POST['wphno'];
    $waddress=$_POST['waddress'];
    $doj=$_POST['DOJ'];
    $gender=$_POST['gender'];
    $target='uploads/';
    $image=$target.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
     $sdm=$admin->cud("INSERT INTO `workers`(`w_name`,`w_phone`,`w_address`,`DOJ`,`gender`,`adhaar_image`)
    VALUES('$wname','$wphno','$waddress','$doj','$gender','$image')","saved");
    echo "<script> alert('Workers added successfully');window.location='../viewworkers.php'</script>";
}       
?>

