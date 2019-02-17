<!DOCTYPE html>
<html lang="en">
<title>Sign in</title>
<meta charset="utf-8">
  <link rel="stylesheet" href="header.css">
		  <link rel="stylesheet" href="form.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <body>
<!-- Header -->
			<div class="header">
  <a class="logo">Incubation Center</a>
  <div class="header-right">
    <a href="index.html">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
	<div class="zx active"><a  class="active">login</a>
	  	     <ul class="cv">
	       <li ><a href="mentorsignin.php">Mentor</a></li>
	        <li><a href="usersignin.php">startup</a></li>
			</ul></div>
			  
  </div>
  </div>

<div class="we ">

<?php
  if((@$_GET["Empty"])==true)
{	
?>
<div class="alert-light text-danger"><?php echo$_GET["Empty"]?></div>
<?php
}
?>
<?php
if((@$_GET["Invalid"])==true)
{	
?>
<div style="font-size:15px"class="alert-light text-danger well"><?php echo $_GET["Invalid"] ?></div>
<?php
}
?>
<div   style="margin-left:auto;margin-right:auto">
<form action="validate.php"method="post">
<table >
<div ><h3 ><a style="text-align:center;">Mentor Login</a></h3>
<div>
<div ><tr><td>Username:</td></tr><tr><td ><input placeholder="Useername"type="text" name="username"required></td></tr></div>
<div ><tr><td>Password:</td></tr><tr><td ><input placeholder="password"type="password" name="password"style="width:100%"required></td></tr></div>
<div ><tr><td><button type="submit" name="login">login</button></td></tr></div>
</table>
</tr></td>
</form>
</div>
<h3 ><a href="mentorlogin.html" style="text-align:center;">Already a member sign up</a></h3>
</div>
</body>
</html>