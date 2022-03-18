<?php
$connect=mysqli_connect("localhost","root","","fyp");

if($connect)
{
	echo"Connect Successfully";
}
else
{
	die("Could not connect".mysql_error());
}
?>