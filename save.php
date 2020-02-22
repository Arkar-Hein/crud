<!DOCTYPE html>
<html>
<head>
	<title>saving data</title>
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php
	
		$conn=new mysqli("localhost","root","","electro");
	
			echo "REGISTERED USER DETAILS:</br>";
			$productname = $_POST["product_name"];
			$brandname = $_POST["brand_name"];
			$quantitypercarton = $_POST["quantity_per_carton"];
			$price = $_POST["price"];
			$moq = $_POST["moq"];
			$payment = $_POST["payment"];
            
			
    $image=$_FILES["image"]["name"];
	$tmp=$_FILES["image"]["tmp_name"];
	$type=$_FILES["image"]["type"];
	
	if($type=="image/jpeg" || $type=="image/png" || $type=="image/gif" || $type=="image/jpg")
{
move_uploaded_file($tmp, "product_photo/photo" . $image);
echo "File upload complete successfully!";
}
else
{echo "fail Upload";}
	


			$sql = "insert into product (product_name,brand_name,quantity_per_carton,price,moq,payment,image) values ('$productname','$brandname','$quantitypercarton','$price','$moq','$payment','$image')";
    
		  if ($conn->query($sql) === TRUE) {
       header ("location:customer_order.php");
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);
    }


	

	?>
	
</body>
</html>
