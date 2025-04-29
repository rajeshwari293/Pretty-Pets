<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $pname=$_POST['pname'];
    $p_id=$_POST['p_id'];
    $price=$_POST['price'];
    $qty=$_POST['Qty'];
    $desc=$_POST['desc'];
    $image=$_POST['img'];
  if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        $imagetargetfolder ='uploads/'; 
        $image=$imagetargetfolder.basename($_FILES["image"]["name"]); //['image'] HTML tag input imagedb name
        move_uploaded_file($_FILES["image"]["tmp_name"],$image); 
    }
$stmt=$admin->cud("UPDATE `products` set `p_name`='$pname',`p_price`='$price',`quantity`='$qty',`description`='$desc',`image`='$image' where `p_id`='$p_id'","updated");
    echo "<script> alert('Pet products updated successfully');window.location='../viewproducts.php'</script>";
}       
?>

