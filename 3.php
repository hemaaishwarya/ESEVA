<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if(!empty($username)) {
if(!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "eseva";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error()) {
 die('connect error ('. mysqli_connect_errno().')'
 .mysqli_connect_error());
}
else{
$sql = "select * from users where email_id='$email_id' AND password='$password'"
if ($conn->query($sql)) {
 echo 'record inserted';
}
else "error: ". $sql . "<br>" . $conn->error;
} 
$conn->close();
}
}
else{
echo "fields can't be empty";
die();
}
?>

<html>
<head>
<body bgcolor="#ADD8E6">
<h3><center><marquee width="100%" bgcolor="pink"
direction="right"><b><u>E-SEVA</u></b></marquee></center></h3>
<form method="post" action="3.php">
<h1 align="center">LOGIN PAGE</h1>
<body>
<form>  
    <label for="name">Enter Email Id</label><br> 
</br>
 
    <input type="text"  name="email_id"><br>
</br>  
</br>
    <label for="pass">Enter Password</label><br>  
</br>
    <input type="Password"  name="password"><br> 
</br>
</br> 
    <input type="submit" value="submit">  
</br>
</br>
<a href="1.html"><input type="button" value="Back"/></a>
</form> 
</body>
</head>
</html>