<!DOCTYPE html>   
<html>
<?php
	include("dataconnection.php");
	$error="";
	if(isset($_POST["submit"]))
	{
		$username = $_GET["username"];
		$email = $_GET["email"];
		$message = $_GET["message"];
		
		if(empty($username))
		{
			$error="The username is error.Please enter again.";			
		}
		else
		{
			$error="";	
		}
		
		
		global $connect;
		$sql=mysqli_query($connect, "INSERT INTO contact_us(username,email,message) VALUES ('$username''$email''$message')");
		
		$row = mysqli_query($connect, $sql);
	}
?>
<link rel="stylesheet" href="contact us.css">

<script>
function myFunction() 
{
  alert("Thanks for your cantact,we will try our best to improve");
}
</script>

<div class="contact">
  <div class="contact-header">
    <h1 style="color:#ffe4c4;">Contact us</h1>
  </div>
  <div class="contact-form">
  <form id="Contact-form" method="post" action="Contact us.php">
    <h3>Username:</h3>
    <input name="username" type="text" placeholder="Username" required/><br>
	<span id="error" style="color:red;"><?php echo $error; ?> </span>
	
    <h3>Email:</h3>
    <input name="email" type="Email" placeholder="Email" required/>
	<h3 style="color:	#black;">Message :</h3>
    <input name="message"  type="text2" placeholder="Messages" required/><br>
    <br>
    <input name="send" type="button" value="sumbit" class="submit-button" onclick="myFunction()" />
	
	
  </form>
  </div>
</div>

</body>
</html>  