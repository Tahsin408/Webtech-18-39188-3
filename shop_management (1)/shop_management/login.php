<!DOCTYPE html>
<!-- saved from url=(0039)file:///C:/Users/Dell/Desktop/FROM.html -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home.css">
	<title>login</title>
<style type="text/css">
	th{
		border: 1px solid #dddddd;
		text-align: left;
		padding: 10px;
	}
	h3{
		text-align: right;
	}
	h4{
		text-align: center;
	}
</style>
<body>

<header>
		<a href="home.html" class="logo">Grocer<span>i</span>es</a>
		<ul class="navigation">
			<!-- 
			<li><a href="#about">About</a></li>
			<li><a href="#service">Service</a></li>
			<li><a href="login.php">Login</a></li> -->
			<li><a href="home.html">Home</a></li>
			<li><a href="registration.php">Registration</a></li>
			
			
		</ul>
	</header>


	<section class="login" id="login">
		<div class="title">
			<h2 class="titleText">Log<span>i</span>n</h2>
			
		</div>
		<div class="titleLog">
			<table cellpadding="10" cellpadding="10" align="center">
	<form method="post" action="validation.php">
		
		<tr>
			<th>Email</th><td><input type="text" name="email"></td>
		</tr>
		<tr>
			<th>Password</th><td><input type="password" name="password"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember me</td></tr>
		<tr><td colspan="20" align="right"><input type="submit" value="login" name="login"></td></tr>
    
	</form>

	
</table>
		</div>
	</section>
	

      
      

</body>