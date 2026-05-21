	<?php
include("include/connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$taxi=$_POST['taxi'];
	$date=$_POST['date'];
	$sql=mysqli_query($con,"insert into booking(name,contact,taxi,date)
	values('$name','$contact','$taxi','$date')");
}
?>	
<html>
<head>
  <title> form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .btn{
	
	height:50px;
	width:400px;
	color:white;
	border-radius:50px;
	background-color:blue;
	margin-top:20px;
}
  .wrapper{
	  
	  background-color:pink;
	  width:500px;
	  height:500px;
	  justify-content:center;
	  border-radius:30px;
	  align-content:center;
	  align-item:center;
  }
  .form-group{
	  
	  color:black;
	  width:100%;
	  height:50px;
	  border-radius:20px;
  }
  .control-label
  {
	  width:100%;
	  height:50px;
	  border-radius:30px;
  }
  .input{
	  
	  width:100%;
	  height:50px;
  }
  .label{
	  
	  border-radius:30px;
	  color:black;
  }
  </style>
</head>
<body>
<div class="wrapper">
  <h2 style="text-align:center;align-content:center;">Login form</h2>
  <form class="form-horizontal" action="booking.php" style="text-align:center;">
    <div class="form-group" >
      <label class="control-label" for="name"><h3> name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter name " name="name">
      </h3></div>
   
    <div class="form-group">
      <label class="control-label " for="contact"><h3>contact:</label>
        <input type="contact" class="form-control" id="contact" placeholder="Enter contact" name="contact">
     </h3> </div>
    
    
	  <div class="form-group">
      <label class="sr-only" for="taxi"><h3>select taxi</label>
	     <select name="taxi" class="form-control" id="taxi">
<option value="select taxi"> select taxi </option>
      <option value="swift desire"> swift desire</option>
	        <option value="bmw"> bmw</option>
      <option value="enova">enova</option>
      <option value="bolero">bolero</option>
      <option value="alto"> alto </option>
      <option value="range rover">range rover</option>
      <option value="scorpio">scorpio</option>
      <option value="tata neno ">tata neno </option>
      <option value="thar">thar</option>
      <option value="tufan">tufan</option>
      <option value="baleno"> baleno</option>
      <option value="jeep">jeep</option>
      <option value="fronzex">fronzex</option>
      <option value="safari">safari</option>
      <option value="maruti suzuki">maruti suzuki</option>
   </select> </h3></div>
      <div class="form-group">
	        <label class="control-label" for="date"><h3>date:</label>
        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
     </h3> </div>
	 <button type="submit" name="submit" class="btn" >submit</button>
    </div>
  </form>
</div>
</body>
</html>