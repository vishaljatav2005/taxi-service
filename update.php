<?php
include("include/connection.php");
if(isset($_GET['uid']))
{
$id=$_GET['uid'];
$sql=mysqli_query($con, "SELECT * FROM booking WHERE id='$id' ");
$row=mysqli_fetch_array($sql);
}
else
{
$hid=$_POST['hid'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$taxi=$_POST['taxi'];
$date=$_POST['date'];
$sql=mysqli_query($con, "UPDATE booking SET name='$name', contact='$contact', 
taxi='$taxi',date='$date' WHERE id='$hid'");
header("Location:view.php"); 
}
?>
<html>
<head>
<title>student information</title>
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
	width:300px;
	height:40px;
	border-radius:20px;
		content-justify:center;
	text-align:center;
font-size:15px;
}
.form-group{
	width:380px;
	height:40px;
	border-radius:30px;
	background-color:transparent;
	font-size:25px;
	padding-left:55px;
}
.btn{
	width:410px;
	height:50px;
	border-radius:20px;
}
.myDropdown{
width:70%;
height:40px;

color:black;
border-radius:18px;

}
</style>
</head>
<body>
<div class="wrapper">
<h1 style="text-align:center;font-family:italic;padding-top:50px;">update form</h1>
<br>
<form action="update.php" method="POST">
<div class="form-group">
<input type="hidden" name="hid" class="form-control" value="<?php echo $row['id']; ?>" />

<label for="name">Name</label>
<input type="name" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
</div>
<br><br>

<div class="form-group">
<label for="contact">contact</label>
<input type="contact" class="form-control" name="contact" value="<?php echo $row['contact']; ?>"  
 />
</div><br>
<br>

<div class="form-group">
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
<option value="scorpio">scorpio</option></select></div></div><br>
<br>
<div class="form-group">
<label for="date">date</label>
<input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>"  />
</div><br>
<br>
<button type="submit" name="update" value="update" class="btn">button</button>
</form>
</div>
</body>
</html>