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
<!--1Как добавить группу данных в таблицу при помощи консоли-->
<!--2 Как сделать дамп бызы с консоли-->
<!--3Почему не удаляется ров в phpstorm -->
<!--4Как добавить данные из массива в таблицу-->
<!--5как добавить текст если он больше 255-->
<!--!6 как обновить таблицу(колонку новыми данными с (255,240,230,400))-->
<?php
/**
 * @param Home Work
 *
 * @author Alexander Tkachenko
 */
require_once 'data.php';
?>
<div class="container">
	<?php require_once 'header.php'; ?>
	<?php
	$a = 10;
	echo ++$a;
	echo $a++;
	echo ++$a;
	?>
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
							<a href="product?key=<?php echo $item['id']; ?>" class="btn product-link">
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
