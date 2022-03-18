<!DOCTYPE html> 
<?php include("dataconnection.php");?>
<html>
<?php
	
	$error="";
	$valid=1;
	$success=0;
	
	if(isset($_POST["send"]))
	{
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$ICnumber = $_POST["ICnumber"];
		$email = $_POST["email"];
		$birthday = $_POST["birthday"];
		
		if(empty($name))
		{
			$valid=1;		
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $name;
		
		if(empty($phone))
		{
			$valid=1;
			
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $phone;
		
		if(empty($ICnumber))
		{
			$valid=1;
			
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $ICnumber;
		
		if(empty($email))
		{
			$valid=1;
			
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $email;
		
		if($valid!=1)
		{
			$success=mysqli_query($connect,"INSERT INTO profile (Name,Phone,IC_Number,Email,Birthday) VALUES ('$name','$phone','$ICnumber','$email','$birthday')");
		}
		
		if($success)
		{
		?>
		
		<script>
		
			alert("You profile have been recorded.");

		</script>
		
		<?php
		}
	}
?>
<link rel="stylesheet" href="profile.css">

<div class="profile">
  <div class="profile-header">
  <form id="Login-form" method="post">
    <h2>PROFILE</h2>
	<br>
  </div>
  <div class="profile-form">
	<img src="username.PNG" width="160" height="160" align="center">
	<input type="file" id="myfile" name="myfile">
	<hr>
  
	<div class="user-edit">
<br>
    <h3>Name:</h3>
    <input type="text" name="name" placeholder="Enter your name" required/><br>
	
	<h3>Phone:</h3>
    <input type="text" name="phone" placeholder="Enter your phone number" required/><br>
	
	<h3>IC number:</h3>
    <input type="text" name="ICnumber" placeholder="Enter your IC number" required/><br>
	
	<h3>Email:</h3>
    <input type="text" name="email" placeholder="Enter your email" required/><br>
	
    <h3>Birthday:</h3>
    <input type="date" id="birthday" name="birthday">


<br>    
	<label>   
	<br>
    <input type="submit" name="send" value="Save" class="save-button" >
<br>

</div>
	
</div>
</form>
</div>
</body>
</html> 