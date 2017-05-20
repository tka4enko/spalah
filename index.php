<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Main</title>
	<link rel="stylesheet" href="assets/css/main.css">

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
?>
<div class="container">
	<?php require_once 'header.php'; ?>

	<main class="main">
		<ul class="product-list">
			<?php foreach ($product as $item){
				?>
				<li>
					<div class="product-list-item">
						<div class="product-img">
							<img src="<?php echo $item['product_img'] ?>" alt="">
						</div>
						<div class="product-body">
							<div class="product-name">
								<?php echo $item['product_name'];?>
							</div>
							<div class="product-subtitle">
								<?php echo $item['product_subtitle'];?>
							</div>
							<div class="product-price">
								<?php echo $item['product_price'];?>$
							</div>
							<a href="product/?key=<?php echo $item['id']; ?>" class="btn product-link">
								Подробнее
							</a>
						</div>
					</div>
				</li>
				<?php
			} ;?>
		</ul>
	</main>
</div>
</body>
</html>
