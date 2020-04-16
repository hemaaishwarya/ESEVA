<html>
<head>
<title> user login and register</title>
<link rel="stylesheet" type="text/css" href="style1.css">
c</head>
<body>
<img src="egov2.png" height="500" width="1300" align="center">

<div class="container">
 <div class="row">
 <div class="col-md-7">
  <h2> REGISTER </h2>
   <form action="registration.php" method="post">
<div class="form-group">
</br>
<label>username</label>
<input type="text" name="user" class="form-control" required>
</div>
</br>
<div class="form-group">
<label>select gender</label>
</br>
<input type="radio" name="gender" value="male" checked> Male<br>
 <input type="radio" name="gender" value="female"> Female<br>
 <input type="radio" name="gender" value="other"> Other</br>
</div>
</br>
<div class="form-group">
<label>location</label>
<input type="text" name="location" class="form-control" required>
</div>
</br>
<div class="form-group">
<label>address</label>
<input type="text" name="address" class="form-control" required>
</div>
</br>
<div class="form-group">
<label>email_id</label>
<input type="text" name="email_id" class="form-control" required>
</div>
</br>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control" required>
</div>
</br>
<button type="submit" class="btn-btn-primary">sign-up</button>
</form>
</div>
</br>
</br>
<div class="col-md-7">
 <div class="login-box">
  <h2> LOGIN </h2>
   <form action="validation.php" method="post">
<div class="form-group">
<label>username</label>
<input type="text" name="user" class="form-control" required>
</div>
</br>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control" required>
</div>
</br>
<button type="submit" class="btn-btn-primary">login</button>
</form>
</div>
</div> 
</div> 
</div>
</body>
</html>
