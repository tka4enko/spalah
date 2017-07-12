<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Product</title>
	<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<?php
/**
 * @param Home Work
 *
 *
 * @author Alexander Tkachenko
 */
//require_once 'data.php';
require_once 'src/object.php';
$product = new ProductController();
$product = $product->action();
?>
<div class="container">
	<?php require_once 'headerzphp'; ?>

	<main class="main">
		<div class="product">
			<?php foreach ($product as $item){?>
						<div class="product-image">
							<img src="../<?php echo $item['3'] ?>" alt="">
						</div>
						<div class="product-body">
							<h1 class="product-name"><?php echo $item[2];?></h1>
							<div class="product-category"><?php echo $item[5];?></div>
							<div class="product-price"><?php echo $item['1'] ?>$</div>
							<div class="product-description">
								<p><?php echo $item['4'] ?></p>
							</div>
						</div>
					<?php
				}
			;?>
		</div>

	</main>
</div>
</body>
</html>
