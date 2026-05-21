
<?php
include("include/connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$taxi=$_POST['taxi'];
	$date=$_POST['date'];
	$sql=mysqli_query($con, "insert into booking(name,contact,taxi,date)values('$name','$contact','$taxi','$date')");
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
 <script src="js/jquery.js"></script>
 <script src="js/min.js"></script>

<style>
.wrapper{
width:100%;
color:white;
border-radius:8px;
background-color:#13357b;
item-align:center;
font-size:25px;
padding-top:10px;
item-align:center;
justify-content:center;
align-content:center;
text-align:center;
}
.btn{
	width:80%;
	height:40px;
	font-size:20px;
	border-radius:18px;
	text-align:center;
	background-color:blue;
	margin-bottom:12px;
}
.input{
width:50%;
height:35px;
border-radius:18px;
color:black;
}

.myDropdown{
width:50%;
height:35px;
color:black;
border-radius:18px;

}
.input-box{
	
	font-size:20px;
}
 section-2 {
      justify-content: center;
      align-items: center;
      font-size: 2rem;
    }

    .box-2 {
      opacity: 1;
      transform: translateY(0px);
      transition: all 0.7s ease-out;
    }

    .box-2.show {
      opacity: 1;
      transform: translateY(0);
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
	  width:150px; height:50px;" ></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="car.html">Our Car</a></li>
            <li><a href="package.html">Our Packages</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="booking.html">Booking</a></li>
				        <li><a href="login.html">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" id="flower">
<div class="co-sm-12"><h3  style="color:#13357b;text-align:left;font-family:italic;text-align:center;">Booking----</h3>
<h3 style="color:#13357b;font-family:italic;text-align:center;">Online Booking</h3>
</div></div>

<div class="container" id="aboutcar1">
<section class="section-2">
	  	  <div class="box-2">
<div class="row">

<div class="col-sm-12">
<div class="container">
<div class="row">
<div class="col-sm-6">
    <img src="images/sanchi.png" class="img-rounded" alt="navgrah" width="100%" height="470px"></div>
<div class="col-sm-6" id="form2" >
<div class="wrapper">
  <h2 style="text-align:center;margin-top:12px;">Login form</h2><br>
  <form action="booking.php" method="POST">
<div class="input-box">
<label for="name">Enter Name</label>
<input type="name" class="input" name="name"  placeholder="Enter Name"></div><br>
<div class="input-box">
<label for="contact">Enter contact</label>
<input type="contact" class="input" name="contact"  placeholder="Enetr contact"></div><br>

<div class="input-box">
<label for="taxi">select taxi</label>
<select class="myDropdown" name="taxi">
<option value="swift desire">swift desire</option>
<option value="bmw">bmw</option>
<option value="range rover">range rover</option>
<option value="bolero">bolero</option>
<option value="fronzex">fronzex</option>
<option value="tata neno">tata neno</option>
<option value=" maruti suzuki"> maruti suzuki</option>
<option value="tawera">tawera</option>
<option value="ecco">ecco</option>
<option value="baleno">baleno</option>
<option value="fortuner">fortuner</option>
<option value="scorpio">scorpio</option></select></div>
<br>
<div class="input-box">
<label for="date">select date</label>
<input type="date" class="input" name="date"  placeholder="Enetr date"></div><br>
<button type="submit" name="submit" class="btn">submit</button>
</div>

</form>
</div>
</div></div></div></div></div></section>
</div>

<div class="container-fluid"  id="flower">
<div class="row" id="footer">
	  <section class="section1">
	  	  <div class="box">
    <div class="col-sm-3" id="footer1" >
    <h3 style="color:white;"> GET IN TOUCH </h3>
    <h5 style="color:white;"><i class="fa-solid fa-location-pin"></i> maruti parisar panwasa </h5>
    <h5 style="color:white;">maxi road ujjain.</h5>
    <h5 style="color:white;"><i class="fa-solid fa-square-envelope"></i> <a href="vy9479958@gmail.com" id="black-color">vy9479958@gmail.com</a></h5>
   <h5 style="color:white;"> <i class="fa-solid fa-phone-volume"></i>  <a href="+91-8602407951" id="black-color">8602407951</a></h5>
    <h2 style="color:white;"><i class="fa-brands fa-facebook"></i>
    <a href="https://www.instagram.com/mr.vishalyadav__"><i class="fa-brands fa-square-instagram" style="color:white;"></i></a>
    <i class="fa-brands fa-square-twitter"></i>
  <a href="https://www.youtube.com/channel/UCkaZa805wcoDsFp2WxosZKQ">  <i class="fa-brands fa-youtube" style="color:white;"></i></a></h2>
    </div> 
	
<div class="col-sm-3" id="footer2">
   <h3>Quick Links</h3>
<h3>Terms & Conditions</h3>
   <h5><i class="fa-solid fa-angles-right"></i> <a href="index.html" style="color:white;"> Home </a></h5>
   <h5> <i class="fa-solid fa-angles-right"></i><a href="about.html" style="color:white;">  About Us </a></h5>
   <h5><i class="fa-solid fa-angles-right"></i><a href="package.html" style="color:white;">Packages </a></h5>
   <h5> <i class="fa-solid fa-angles-right"></i> <a href="car.html" style="color:white;"> Our Cars </a></h5>
   <h5><i class="fa-solid fa-angles-right"></i> <a href="contact.html" style="color:white;"> Contact Us </a></h5>
   <h5><i class="fa-solid fa-angles-right"></i>  Terms & Conditions</h5></div>
<div class="col-sm-3" id="footer3">
   <h3>  Ujjain Palace</h3>
   <h5><i class="fa-solid fa-angles-right"></i> <a href="https://www.google.com/search?q=mahakal+mandir&rlz" style="color:white;"> Mahakaleshwar Jyotirlinga </a></h5>
   <h5> <i class="fa-solid fa-angles-right"></i><a href="https://www.google.com/search?q=mahakal+lok&newwindow" style="color:white;">  Mahakal Lok </a></h5>
   <h5><i class="fa-solid fa-angles-right"></i><a href="https://www.google.com/search?q=ka+bhairav+mandir&newwindow" style="color:white;"> Kaal Bhairav Mandir</a> </h5>
   <h5><i class="fa-solid fa-angles-right"></i><a href="https://www.google.com/search?q=bada+ganesh+mandir+ujjain+&newwindow" style="color:white;"> Bada Ganesh Mandir</a></h5>
   <h5><i class="fa-solid fa-angles-right"></i> <a href="https://www.google.com/search?q=ramghat+ujjain&newwindow" style="color:white;">Ramghat</a></h5>
   <h5><i class="fa-solid fa-angles-right"></i> <a href="https://www.google.com/search?q=harsidhhi+mandir+ujjain&newwindow" style="color:white;">  Harsiddhi Mandir</a></h5>
   <h5><i class="fa-solid fa-angles-right"></i><a href="https://www.google.com/search?q=gopal+mandir+ujjain+&newwindow" style="color:white;">Gopal Mandir</a></h5>
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