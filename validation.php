<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eseva');

$name=$_POST['user'];

$password=$_POST['password'];
$s="selecct * from codeuser where name='name' && password='password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if(num==1) 
{
header('location:code1.php');
}
else {
header('location:1.php');
}
?> 
