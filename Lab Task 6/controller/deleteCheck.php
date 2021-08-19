<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');  
	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];
		$connection = getConnection();
		$check = deleteProduct($id);
		if($check)
		{
			echo "Product deleted!";
			header('location: ../view/displayProduct.php');
		}
		else
		{
			echo "Error occured!";
		}
	}
?>