<?php 
include("include/connection.php");
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($sql);
$count=mysqli_num_rows($sql);
if($count>0){
	$_SESSION['username']= $username;
header("Location:dashboards.php");
}
else{
echo 'username and password incorrect!';
}
}
?>
<html>
<head>
  <title> taxi service </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
.wrapper{
	width:500px;
	height:500px;
	content-justify:center;
	text-align:center;
	background-color:pink;
	border-radius:25px;
	margin-left:450px;
	margin-top:100px;	
}
.form-control{
	width:290px;
	height:40px;
	padding-left:20px;
	margin-left:7px;
	
	border-radius:20px;
font-size:15px;
}
.form-group{
	padding-top:20px;
	width:500px;
	height:40px;
	border-radius:30px;
	background-color:transparent;
	font-size:20px;
	padding-left:5px;
}

.btn{
	width:410px;
	height:50px;
	border-radius:20px;
}
.input{
border-radius: 15px;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" id="flower">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">    <img src="images/brand.png" alt="banner" style="media:(max-width: 430)
	  width:150px; height:50px; "></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="car.html">Our Car</a></li>
            <li><a href="package.html">Our Packages</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="booking.php">Booking</a></li>
				        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<form action="login.php" method="POST" id="aa">
<div class="wrapper">
<h1 style="text-align:center;padding-top:50px;">loging form</h1>
<div class="form-group">
<label for="username">username</label>
<input type="username" name="username" placeholder="Enter username" >
</div>
<br>
<br>
<div class="form-group">
<label for="password">password</label>
<input type="password" name="password" placeholder="Enter password" ></div>
<br><br>
<button type="submit" name="login" value="login" class="btn btn-default">Login</button>
</div>
</form>

</body>
<div class="container-fluid"  id="flower">
<div class="row" id="footer">
	  <section class="section1">
	  	  <div class="box">
    <div class="col-sm-3" id="footer1" >
    <h3 style="color:white;"> GET IN TOUCH </h3>
    <h5 style="color:white;"><i class="fa-solid fa-location-pin"></i>  118, Motibag opposite govt.</h5>
    <h5 style="color:white;">Engineering Collage,ujjian.</h5>
    <h5 style="color:white;"><i class="fa-solid fa-square-envelope"></i> <a href="ashirwadtaxiujjaiN@gmail.com" id="black-color">ashirwadtaxiujjaiN@gmail.com</a></h5>
   <h5 style="color:white;"> <i class="fa-solid fa-phone-volume"></i>  <a href="+91-9827065863" id="black-color">9827065863</a></h5>
    <h2 style="color:white;"><i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-square-instagram"></i>
    <i class="fa-brands fa-square-twitter"></i>
    <i class="fa-brands fa-youtube"></i></h2>
    </div> 
	
<div class="col-sm-3" id="footer2">
   <h3>Quick Links</h3>
<h3>Terms & Conditions</h3>
   <h5><i class="fa-solid fa-angles-right"></i>  Home</h5>
   <h5> <i class="fa-solid fa-angles-right"></i>  About Us</h5>
   <h5><i class="fa-solid fa-angles-right"></i>Packages</h5>
   <h5> <i class="fa-solid fa-angles-right"></i>  Our Cars</h5>
   <h5><i class="fa-solid fa-angles-right"></i>  Contact Us</h5>
   <h5><i class="fa-solid fa-angles-right"></i>  Terms & Conditions</h5></div>

<div class="col-sm-3" id="footer3">
   <h3>Ujjain Palace</h3>
   <h5><i class="fa-solid fa-angles-right"></i>  Mahakaleshwar Jyotirlinga</h5>
   <h5> <i class="fa-solid fa-angles-right"></i>  Mahakal Lok</h5>
   <h5><i class="fa-solid fa-angles-right"></i> Kaal Bhairav Mandir</h5>
   <h5><i class="fa-solid fa-angles-right"></i> Bada Ganesh Mandir</h5>
   <h5><i class="fa-solid fa-angles-right"></i>Ramghat</h5>
   <h5><i class="fa-solid fa-angles-right"></i>   Harsiddhi Mandir</h5>
   <h5><i class="fa-solid fa-angles-right"></i>Gopal Mandir</h5>
</div>
<div class="col-sm-3" id="footer4">
   <h2 style="padding-left:68px;">Pay Here</h2>
   
   <img src="images/barcode.webp" alt="phone pay" style="width:75%; height:180px; midea: (max-width: 430px)
width: 350px; margin-left:50px;margin-bottom: 10px; "> </div></div></section></div>
   </div>
 <div class="container-fluid" id="end1">

   <h4 style="color:white;margin-bottom:20px;"> 2026 Ashirwad Taxi Service <a href="vishal jatav" style="color:white;"> || Developed By Vishal Jatav </a></h4>
   </div>
    
   
</body>
<script>
    const boxes = document.querySelectorAll('.box');

    window.addEventListener('scroll', checkBoxes);

    function checkBoxes() {
      const triggerBottom = window.innerHeight * 0.85;

      boxes.forEach(box => {
        const boxTop = box.getBoundingClientRect().top;

        if (boxTop < triggerBottom) {
          box.classList.add('show');
        } else {
          box.classList.remove('show'); // agar aapko reverse effect chahiye to rakho, warna hata do
        }
      });
    }

    checkBoxes(); // page load hone par bhi check kare
  </script>
</html>