<!DOCTYPE html>
<?php include("dataconnection.php");?>
<html>
<?php
	
	$error="";
	$valid=1;
	$success=0;
	
	if(isset($_POST["send"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if(empty($username))
		{
			$valid=1;		
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $username;
		
		if(empty($password))
		{
			$valid=1;
			
		}
		else
		{
			$error="";
			$valid=0;			
		}
		
		echo $password;
		
		if($valid!=1)
		{
			$success=mysqli_query($connect,"INSERT INTO admin_login (username,password) VALUES ('$username','$password')");
		}
		
		if($success)
		{
		?>
		
		<script>
		
			alert("You are login successfully");

		</script>
		
		<?php
		}
	}
?>
  <head>
	<link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="login">
      <div class="login-header">
    <h1>Admin Login</h1>
  </div>
    <div class="login-form">
	<form id="Login-form" method="post">	  
		  
	<img src="username.PNG" width="60" height="60" align="left">
    <h3 style="color:grey;">Username:</h3>
    <input type="text" name="username" placeholder="Username" required/><br>
	
	<img src="p.PNG" width="60" height="40" align="left">	
    <h3 style="color:grey;">Password:</h3>
    <input type="password" name="password" placeholder="Password" required/>
	
    <br>
	
    <input type="submit" name="send" value="Login" class="login-button ">
    <br>
    <h6 class="no-access">Can't access your account?</h6>
	
	</form>
  </div>
</div>
      </div>

  </body>
</html>