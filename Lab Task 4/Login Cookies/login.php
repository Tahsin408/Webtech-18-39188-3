
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
        <div class="container" style="width:500px;"> 
        <form action="welcome.php" method="post"> <br />

	
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"> <br />
	
		 Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> <br />

		<input type="checkbox" name="remember" /> Remember me <br />
	
	<input type="submit" value="Login"> <br />
	
		</form>
		</div>
      </body>  
 </html>  