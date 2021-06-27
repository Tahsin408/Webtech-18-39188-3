<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <h1>Welcome to my Page!</h1>
           <button class="home" >Home</button>
           <button class="login" >Login</button>
           <button class="registration" >Registration</button> 
      </head>
      <body>
      	<form>
			<?php

			if(!empty($_POST["remember"])) {
				setcookie ("username",$_POST["username"],time()+ 50);
				setcookie ("password",$_POST["password"],time()+ 50);
				echo "Cookies Set Successfuly <br>";
				echo "Welcome ". $_POST["username"];
			} 
			else 
			{
				setcookie("username","");
				setcookie("password","");
				echo "Cookies Not Set. I will forget you !!!!";
			}

			?>

			<p><a href="login.php"> Go to Login Page </a> </p>
			</form>
		</body>
	</html>  