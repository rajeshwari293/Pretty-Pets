<?php
include('config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	  $sql=$admin->cud("UPDATE `customers` SET `password`='$password' where `cust_email`='$semail'","saved");
	  echo "<script>alert('password is sucessfully changed');
    window.location='register.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Dose not Match');
    window.location='repassword.php';
 </script>";
}