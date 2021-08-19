<?php
	
	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');
	if($_POST['save'])
	{
		$name = $_POST['name'];
		$bPrice = $_POST['buyingPrice'];
		$sPrice = $_POST['sellingPrice'];

		if($name == '' || $bPrice == '' || $sPrice == '')
		{
			echo "Null Submission";
		}
		else
		{
			$displayable = "No";
			if(isset($_POST['check']))
			{
				global $displayable;
				$displayable = "Yes";
			}	
			$productDetails = array('name' => $name, 'buyingPrice' => $bPrice, 'sellingPrice' => $sPrice, 'displayable' => $displayable);
			$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Product added successfully!!!";
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>