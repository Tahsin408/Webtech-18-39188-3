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
			<h2 class="titleText">Serv<span>i</span>ce</h2>
			
		</div>
		<br>
		<br>
		<br>
		<div class="content">
			<div class="box">
				<div class="imgBx">
					<img src="image/img_vegetable.jpg" height="190" width="300">
					
				</div>
				<div class="text">
					<h3><a href="/shop_management (1)/shop_management/grocery/vegetable.php" class="btn">Vegetable</a></h3>
					
				</div>
				
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="image/juice.jpg" height="190" width="300">
					
				</div>
				<div class="text">
					<h3><a href="/shop_management (1)/shop_management/grocery/juice.php" class="btn">JUICE</a></h3>
					
				</div>
				
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="image/meat.jpg"  height="190" width="300">
					
				</div>
				<div class="text">
					<h3><a href="/shop_management (1)/menu/index_meat.php" class="btn">MEAT</a></h3>
					
				</div>
				
			</div>
			
			<div class="box">
				<div class="imgBx">
					<img src="image/snack.jpg"   height="190" width="300">
					
				</div>
				<div class="text">
					<h3><a href="/shop_management (1)/menu/index_snacks.php" class="btn">SNACK</a></h3>
					
				</div>
				
			</div>
			
			<div class="box">
				<div class="imgBx">
					<img src="image/frozenfood.jpg"  height="190" width="300" >
					 
					
				</div>
				<div class="text">
					<h3><a href="/shop_management (1)/shop_management/grocery/frozenfood.php" class="btn">FROZEN FOOD</a></h3>
					
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