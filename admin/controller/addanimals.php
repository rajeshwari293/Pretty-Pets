<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{   
 $mcat=$_POST['mcat'];
    $bcat=$_POST['bcat']; 
    $dob=$_POST['dob']; 
    $pcode=$_POST['pcode']; 
    $gender=$_POST['gender']; 
    $price=$_POST['price'];
    $petdesc=$_POST['petdesc'];
    $target='uploads/';
    $image=$target.basename($_FILES['petimg']["name"]);
    move_uploaded_file($_FILES['petimg']["tmp_name"],$image);


    $stmt=$admin->ret("SELECT * from `pet_table` WHERE `pet_code`='$pcode'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();

    if($num > 0){
echo "<script>alert('Pet Code already exists'); window.location='../addpet.php';</script>";

    }else{

    $sdm=$admin->cud("INSERT INTO `pet_table`(`gender`,`pet_code`,`pc_id`,`pb_id`,`dob`,`pet_price`,`pet_desc`,`pet_image`)
    VALUES('$gender','$pcode','$mcat','$bcat','$dob','$price','$petdesc','$image')","saved");
     echo "<script> alert('Pets added successfully');window.location='../viewpet.php'</script>";
    }       
    }       
    ?>





