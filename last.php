<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eseva');

$type_of_problem=$_POST['problems'];
$about=$_POST['about'];
$landmark=$_POST['landmark'];
$s="selecct * from problem where name='$type_of_problem'  ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1) 
{
echo "username already taken";
}
else {
$reg="INSERT INTO problem values('$type_of_problem','$about','$landmark')";
mysqli_query($con,$reg);
echo "registration successful";
}