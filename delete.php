<?php

$username ="root";
$password ="";
$server ='localhost';
$db ='dg';
$con = mysqli_connect($server,$username,$password,$db);
mysqli_select_db($con,'dg');
$id = $_GET['id'];
$q ="DELETE FROM `dgs` WHERE id = $id ";
mysqli_query($con,$q);
header('location:displaydata.php');









?>