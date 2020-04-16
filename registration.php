<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eseva');

$name=$_POST['user'];
$location=$_POST['location'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$s="selecct * from registration where name='$name'";
$result=mysqli_query($con,$s);
$num-mysqli_num_rows($result);
if(num==1) 
{
echo "username already taken";
}
else {
$reg="insert into registration(name,location,address,email_id,password) values('$name','$location','$address','$email_id', '$password')";
mysqli_query($con,$reg);
echo "registration successful";
}