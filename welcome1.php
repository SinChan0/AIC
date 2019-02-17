<?php
session_start();
if(isset($_SESSION["user"])){
}
else
{
	header("location:mentorsignin.php");
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>TEST</title>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="header.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
	<body>

		<!-- Header -->
			<div class="header">
  <a class="logo">Incubation Center</a>
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
	<div class="zx"><a ><?php echo"".$_SESSION["user"]."";?></a>
	  	     <ul class="cv">
	       <li ><a href="mentorsignin.php">Profile</a></li>
		   <li ><a><?php echo '<a href="logout.php?logout">logout</a>';?></a></li>
			</ul></div>
			  
  </div>

</div>
<br>
<div class="container">
  <h2>Incubation Center</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://images.unsplash.com/photo-1521020773588-3b28297b1e70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="NEW WAY" style="width:100%;">
        <div class="carousel-caption">
          <h3>NEW Way</h3>
          <p>New way to adapt</p>
        </div>
      </div>

      <div class="item">
        <img src="http://www.stemmonsservices.com/wp-content/uploads/2018/02/5064735-hd-business-wallpaper.jpg" alt="Dream" style="width:100%;">
        <div class="carousel-caption">
          <h3>Dream</h3>
          <p>Help you to achieve your Dream</p>
        </div>
      </div>
    
      <div class="item">
        <img src="http://www.ngodoctor.com/wp-content/uploads/2017/07/5064289-hd-business-wallpaper.jpg" alt="Training" style="width:100%;">
        <div class="carousel-caption">
          <h3>Training</h3>
          <p>Make a proper path for you</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div style="display:block;background:blue"><h2 style="text-align:center"> <span class="well"style="display:block width:50%">Gallery</span></h2><a style="margin-left:90%"> <span   data-toggle="collapse" data-target="#demo"class=" btn btn-default glyphicon glyphicon-triangle-bottom"></span></h2></a></div>
<div id="demo"class=" containers collapse">
<ul>
  <li><div >
   <img id="img01"alt= "ds"src="https://cdn-images-1.medium.com/max/1600/1*kbj47o-yE7ZNK2puylg4lg.jpeg"class="img-responsive img-thumbnail">
<div><p class="ts">The Lifestyle Startup.<p></div></div></li>
	 <li><div >  <img id="img02"alt="daa"src="https://previews.123rf.com/images/diego_cervo/diego_cervo1504/diego_cervo150400010/38630168-people-running-small-family-business-with-asian-shop-owner-and-caucasian-wife-in-computer-store-show.jpg" class=" img-responsive img-thumbnail">
<div><p class="ts">Small businesses, usually family owned and run.<p></div></div></li>
	  <li> <div ><img id="img03"onclick="openmodel(this)"src="https://static.rfstat.com/bloggers_folders/user_50017/my_media/d5a05082-a93e-4ff6-8d70-ef689dde1216.jpg"  class="img-responsive img-thumbnail">
<div><p class="ts">Silicon Valley-type startups — designed to be scalable.<p></div></div></li>
	<li> <div >  <img id="img04"onclick="openmodel(this)"src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period2/2018/05/10/Photos/Processed/flipkartstartup-kbME--621x414@LiveMint.jpg"class="img-responsive img-thumbnail">
<div><p class="ts">Startups designed to be quickly sold, flipped.<p></div></div></li>
	 <li><div >  <img id="img05"onclick="openmodel(this)"src="https://amp.businessinsider.com/images/5582d6a2ecad04d802992696-1920-960.jpg" class="img-responsive img-thumbnail">
<div><p class="ts">Large company startups.<p></div></div></li>
	 <li> <div > <img id="img06"onclick="openmodel(this)"src="https://www.businessnewsdaily.com/images/i/000/017/045/original/Donation_Rawpixelcom.jpg?1544559719" class="img-responsive img-thumbnail">
<div><p class="ts">Social startups — usually some form of charitable foundation.<p></div></div></li>
  </ul>
</div>
</div>
<div style="display:block;background:blue"><h2 style="text-align:center"> <span class="well"style="display:block width:50%">About us</span></h2><a style="margin-left:90%"></h2></a></div>
<div class="aboutus">
<ul>
  <li><div >
   <img src="https://www.bapco.org.uk/media/pages/mission.png.742x400_q85_crop.png"class="img-thumbnail">
   <div><p class="gly"><span style="font-size:6em"class="glyphicon glyphicon-dashboard"></span></p><div>
<div><p class="well ts">Our Mission</p></div>
<div><p class="re">To reach out to each and every group of bright individuals 
developing a startup out there and making sure they get the right mentoring</p></div></div></li>
	 <li><div >  <img src="https://static1.squarespace.com/static/5372798ee4b0f8eee60b20a7/t/545c33b8e4b00403fdcecb17/1529514887611/vision.jpg?format=1500w" class="img-thumbnail">
 <div><p class="gly"><span style="font-size:6em"class="glyphicon glyphicon-eye-open"></span></p><div>
 <div><p class="well ts">Vision</p></div>
 <div><p class="re">Reaching our vision by creating a common platform for both startups and
investors/mentors. The platform for startups will be dynamic and solely 
performance based.</p></div></div></li>
	  <li> <div ><img src="https://www.hertz-kompressoren.com/mp-include/uploads/2017/04/vision.png"  class="img-thumbnail">
</div> <div><p class="gly"><span style="font-size:6em"class="glyphicon glyphicon-globe"></span></p><div>
<div><p class="well ts">Global</p></div>
<div><p class="re">The platform gives a global reach to both potential startups and potential
investors/mentors</p></div></li></div>

</body>
	</body>
</html>