<?php
include("include/connection.php");
if($_SESSION['username']== null || $_SESSION['username']== "")
{
	header("Location:login.php");
	
}
if(isset($_GET['did']))
{
	$a=$_GET['did'];
	$sql=mysqli_query($con, "DELETE FROM booking WHERE id='$a'");
	header("Location:view.php");
}
	else{
		$sql=mysqli_query($con, "SELECT * FROM booking");
		$row=mysqli_fetch_array($sql);
		$count=mysqli_num_rows($sql);
	}
	?>
<html>
 <head>
<title> user information </title>
</head>
<body>
<table  width="1100px" height="40px" style="border:1px solid black;">
<tr>
<td width="100px" height="40px" style="border:1px solid black;"><h3>ID</h3></td>
<td width="200px" height="40px" style="border:1px solid black;"><h3>name</h3></td>
<td width="200px" height="40px" style="border:1px solid black;"><h3>contact</h3></td>
<td width="200px" height="40px" style="border:1px solid black;"><h3>taxi</h3></td>
<td width="200px" height="40px" style="border:1px solid black;"><h3>date</h3></td>
<td width="200px" height="40px" style="border:1px solid black;"><h3>action</h3></td>

</tr>
<?php
if ($count>0) {
	$i=1;
do{
	?>
<tr style="border:1px solid black;">
<td width="100px" height="40px" style="border:1px solid black;">
 <?php echo $i; ?></td>
<td width="200px" height="40px" style="border:1px solid black;">
 <?php echo $row['name']; ?></td>
<td width="200px" height="40px" style="border:1px solid black;">
 <?php echo $row['contact']; ?></td>
<td width="200px" height="40px" style="border:1px solid black;">
 <?php echo $row['taxi']; ?></td>
 <td width="200px" height="40px" style="border:1px solid black;">
 <?php echo $row['date']; ?></td>
<td  width="200px" height="40px"  style="border:1px solid black;">
<a href="view.php?did=<?php echo $row['id'];?>">Delete</a>
<a href="update.php?uid=<?php echo $row['id'];?>">update</a>

</td></tr>
<?php 
$i++;
} 
while ($row =mysqli_fetch_array($sql));
}
?>
</table>
</body>
</html>