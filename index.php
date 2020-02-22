<!DOCTYPE html>
<html>
<head>
	<title>Item Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	body{
		background-image: url("img/bg_img.jpg");
		width: 0 auto;
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.banner {
		height: 540px;
		max-width: 400px;
		margin: 60px auto 40px auto;
		background-color: rgba(20,25,40,0.5);
		display: flex;
		/*border-radius: 20px;*/
	}

	.center-me {
		color: #FFF;
		/*font-size: 50px;*/
		margin: auto;
	}
</style>
</head>
<body>

	<div class="container">
		<div class="banner rounded">
			<div class="center-me">
				<h3><center>Item Registration</center></h3>
				<form method="POST" action="save.php" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="username">Product Name</label>
						<input type="text" class="form-control" placeholder="Product Name" name="product_name" required>
					</div>
					<div class="form-group">
						<label for="email">Brand Name</label>
						<input type="text" class="form-control" placeholder="Enter Brand Name" name="brand_name" >
					</div>
					<div class="form-group">
						<label for="rollno">Quantity Per Carton</label>
						<input type="number" class="form-control" placeholder="" name="quantity_per_carton" required>
					</div>
					<div class="form-group">
						<label for="rollno">Price</label>
						<input type="text" class="form-control" placeholder="Price" name="price" required>
					</div>
					<div class="form-group">
						<label for="rollno">MOQ(In cartons)</label>
						<input type="number" class="form-control" min="1" placeholder="Minimum amount of Quatnity" name="moq" required>
					</div>
					<div class="form-group">
						<label for="event">Payment</label>
						<select class="form-control" name="payment" required>
							<option value="1">Cash</option>
							<option value="2">Credit</option>
						</select>
					</div>
					<div class="form-group">
						<label>Image of the product</label>
						<input type="file" class="form-control" placeholder="Image of the product" name="image" required>
					</div>
					<button type="submit" class="btn btn-primary btn-success" style="width:300px;">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
