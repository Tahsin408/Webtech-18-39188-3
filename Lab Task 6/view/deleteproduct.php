<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$selectedProduct = getProductById($id);
	$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="POST" action="../controller/deleteCheck.php">
		<fieldset style="width: 20%">
			<legend>DELETE PRODUCT</legend>
			Name: <?php echo $selectedProduct['name']; ?> <br>
			Buying Price: <?php echo $selectedProduct['buyingPrice']; ?> <br>
			Selling Price: <?php echo $selectedProduct['sellingPrice']; ?> <br>
			Displayable: <?php  if($selectedProduct['displayable'] == 'Yes') { echo "Yes";} else { echo "No";} ?>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>