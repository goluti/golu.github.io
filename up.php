<?php
$usename='root';
$password='';
$server='localhost';
$db='dg';
$con=mysqli_connect($server,$usename,$password,$db);
mysqli_select_db($con,'dg');


$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$photo=$_POST['photo'];

$q =" UPDATE `dgs` SET id=$id,name='$name',email='$email',phone='$phone',password='password',photo='$photo',where id= $id ";
mysqli_query($con,$q);


?>