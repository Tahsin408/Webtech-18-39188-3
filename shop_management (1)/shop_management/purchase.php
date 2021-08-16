<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home.css">

	<title>SHOP MANAGEMENT</title>
</head>

<body>
	<?php include 'header.php';?>
	
	<section class="service" id="service">
		<div class="title">
			<h2 class="titleText">Thank You <span>F</span>or Your Purchase! Your order will be with you shortly!</h2>
			
		</div>
		<br>
		<br>
		<br>
		<div class="content">
				<div class="text">
					<h3><ul class="restaurant">
					<a href="home.html" class="btn">Return Home</a></h3>
					
				</div>
				
			</div>			
			
		</div>
		
	</section>
	<?php include 'about.php';?>

	<script type="text/javascript">
		window.addEventListener('scroll', function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});
	</script>
	<?php include 'footer.php';?>
</body>
</html>