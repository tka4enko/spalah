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
 * @author Alexander Tkachenko
 */
require_once 'data.php';
$product = getTopProduct();
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
							<img src="<?php echo $item[3] ?>" alt="">
						</div>
						<div class="product-body">
							<div class="product-name">
								<?php echo $item[1];?>
							</div>
							<div class="product-subtitle">
								<?php echo $item[2];?>
							</div>
							<div class="product-category">
								<?php echo $item[5];?>
							</div>
							<div class="product-price">
								<?php echo $item[4];?>$
							</div>
							<a href="product?page=<?php echo $item[0]; ?>" class="btn product-link">
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
