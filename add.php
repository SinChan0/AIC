<?php
$a=$_POST['mentorname'];
$b=$_POST['aof'];
$c=$_POST['mobileno'];
$d=$_POST['email'];
$e=$_POST['designaton'];
$f=$_POST['username'];
$g=$_POST['sex'];
$h=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'startup1');
$q="insert into mentor(Name,Area_of_interest,designation,email,contact,sex,username,password) values( '$a','$b','$e','$d','$c','$g','$f','$h')";
$i=mysqli_query($con,$q);

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>obito</title>

</head>
<body>

<p style="font-size:200% ;background-color:lightblue"> Hello <b><?php echo"$a"?></b>  <?php echo"$b"?><sup>th </sup>your mobileno <?php echo"$c"?>

</pre>
</body>
</html>
