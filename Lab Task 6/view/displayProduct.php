<?php

	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');

	$connection = getConnection();
	$productList = getAllProduct();
?>

<div id="main_content">
	<fieldset style="width: 20%">
		<legend><b>DISPLAY</b></legend>
		<?php
		echo "<table border = 1 cellspacing = 0>
			<tr>
				<td>Name</td>
				<td>Profit</td>
				<td>Operations</td>
			</tr>";

		for($i = 0; $i < count($productList); $i++)
		{
			$profit = $productList[$i]['sellingPrice'] - $productList[$i]['buyingPrice'];
			echo "<tr>
					 <td>{$productList[$i]['name']}</td>
					 <td>{$profit}</td>
					 <td> <a href='editProduct.php?id={$productList[$i]['id']}'> Edit</a> | <a href='deleteProduct.php?id={$productList[$i]['id']}'> Delete </a> </td>
				</tr>";
		}

		echo "</table>";
	?>
	</fieldset>
</div>