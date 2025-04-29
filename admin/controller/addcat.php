<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
 $cat=$_POST['cat'];
 $stmt1=$admin->ret("SELECT * from `pet_category` WHERE `category_name`='$cat'");
 $row=$stmt1->fetch(PDO::FETCH_ASSOC);
 $num=$stmt1->rowCount();

 if($num > 0){
echo "<script>alert('Category already exists'); window.location='../addcategory.php';</script>";

 }else{

 $stmt=$admin->cud("INSERT INTO `pet_category`(`category_name`)
    VALUES('$cat')","saved");
    echo "<script> alert('category added successfully');window.location='../addcategory.php'</script>";
} 
} 
if(isset($_POST['addb']))
{
    $mcat=$_POST['mcat'];
    $breed=$_POST['breed'];
     $sdm=$admin->cud("INSERT INTO `pet_breed`(`petcat_id`,`breed_name`)
    VALUES('$mcat','$breed')","saved");
     echo "<script> alert('Pet breed added successfully');window.location='../viewcategory.php'</script>";
    } 
?>



