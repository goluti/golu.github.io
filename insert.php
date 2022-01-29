<?php 

include 'form.php';

$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$photo=$_POST['photo'];

$query = "insert into dgs (name,email,phone,password,photo) 
values('$name','$email','$phone','$password','$photo') ";
mysqli_query($con,$query);
header('location:index.php');
?>