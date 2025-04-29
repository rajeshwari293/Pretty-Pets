<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
 $pname=$_POST['pname'];
    $price=$_POST['price'];
    $qty=$_POST['Qty'];
    $desc=$_POST['desc'];
    $target='uploads/';
    $image=$target.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
     $sdm=$admin->cud("INSERT INTO `products`(`p_name`,`image`,`p_price`,`quantity`,`description`)
    VALUES('$pname','$image','$price','$qty','$desc')","saved");
    echo "<script> alert('Pet products added successfully');window.location='../viewproducts.php'</script>";
}       
?>

