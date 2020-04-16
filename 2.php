<?php
if (isset($_POST['reg_user'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eseva";
// Create connection
$db = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$db)
{
die("Connection failed: " . mysqli_connect_errors());
}

$name="";
$location="";
$address="";
$mobile_number="";
$email_id="";
$password="";


$name= mysqli_real_escape_string($db, $_POST['name']);
$location= mysqli_real_escape_string($db, $_POST['location']);
$address= mysqli_real_escape_string($db, $_POST['address']);
$mobile_number= mysqli_real_escape_string($db, $_POST['mobile_number']);
$email_id= mysqli_real_escape_string($db, $_POST['email_id']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$sql2 = "INSERT INTO users (name,location,address,mobile_number,email_id,password) VALUES('$name','$location','$address','$mobile_number','$email_id','$password')";

mysqli_query($db, $sql2);
}
?>

<html>
<body bgcolor="#ADD8E6">
<h3><center><marquee width="100%" bgcolor="pink"
direction="right"><b><u>E-SEVA</u></b></marquee></center></h3>
<img src="C:\Users\Maru Murali\Desktop\egov1.jpg" height="500" width="1300" align="center">
<form name="myform" method="post" action="certificate.html">
<h1 align="center">Personal Details</h1>
<table border="0" cellspacing="0" cellpadding="5">
<tr>
<td><textarea name="inputtext1"></textarea></td>
<p name="username"><b>NAME</b></p>
</td>
</tr></table>
<table border="0" cellspacing="0" cellpadding="5"><tr>
<p name="gender"><b>SELECT GENDER</b></h3>
</br>
 <input type="radio" name="gender" value="male" checked> Male<br>
 <input type="radio" name="gender" value="female"> Female<br>
 <input type="radio" name="gender" value="other"> Other
<td><textarea name="inputtext2"></textarea></td>

<p name="location"><b>LOCATION</B></p>
</td>
</tr></table>

<table border="0" cellspacing="0" cellpadding="5"><tr>
<td><textarea name="inputtext3"></textarea></td>
<p name="address"><b>ADDRESS</b></p>
</td>
</tr></table>

<table border="0" cellspacing="0" cellpadding="5"><tr>
<td><textarea name="inputtext4"></textarea></td>
<p name="mobile number"><b>MOBILE NUMBER</b></p>
</td> 
</tr></table>

<table border="0" cellspacing="0" cellpadding="5"><tr>
<p name="email"><b>E-MAIL ID</b></p>
<td><textarea name="inputtext5"></textarea></td>
</td>
</tr></table>

<table border="0" cellspacing="0" cellpadding="5"><tr>
<td><textarea name="inputtext6"></textarea></td>
<p name="passwordr"><b>PASSWORD</b></p>
</td> 
</tr></table>
<br>
</br>
</br>
<p></p><input type="submit" name="reg_user" value="sign-up"></p>
</br>
<a href="1.html"><input type="button" value="Back"/></a>
</center>
</html>