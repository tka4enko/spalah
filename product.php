<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Product</title>
	<link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<?php
/**
 * @param Home Work
 *
 *
 * @author Alexsander Tkachenko
 */
require_once 'data.php';
$idPage = $_GET['key'];
?>
<div class="container">
	<?php require_once 'header.php'; ?>
	<main class="main">
		<div class="product">
			<?php foreach ($product as $item){
				if($idPage == $item['id']){
					;?>
						<div class="product-image">
							<img src="../<?php echo $item['product_img'] ?>" alt="">
						</div>
						<div class="product-body">
							<h1 class="product-name"><?php echo $item['product_name'];?></h1>
							<div class="product-price"><?php echo $item['product_price'] ?>$</div>
							<div class="product-description">
								<p><?php echo $item['product_description'] ?></p>
							</div>
						</div>
					<?php
				}
			};?>
		</div>

	</main>
</div>
</body>
</html>
