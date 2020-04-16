<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eseva');

$type_of_certificate=$_POST['category'];
$name=$_POST['firstname'];
$email_id=$_POST['email'];
$mobile_number=$_POST['phone'];
$address=$_POST['address'];
$s="SELECT * FROM certificate where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num > 0) 
{
echo "username already taken";
}
else {
$reg="INSERT INTO certificate values('$type_of_certificate','$name','$email_id', $mobile_number,'$address')";
mysqli_query($con,$reg);
echo "successful";
}