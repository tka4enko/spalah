<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Product List</title>
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
	<?php require_once 'header.php';?>
	<main class="main">
		<table class="table-product">
			<tr>
				<th>Images</th>
				<th>Название</th>
				<th>Краткое описание</th>
				<th>Цена</th>
				<th>Ссылка</th>
			</tr>
			<?php foreach ($product as $item){
				?>
				<tr>
					<td>
						<span class="image" style="background-image:url(<?php echo $item['product_img']?>);"></span>
					</td>
					<td><?php echo $item['product_name']?></td>
					<td><?php echo $item['product_subtitle']?></td>
					<td><?php echo $item['product_price']?>$</td>
					<td><a href="/product/?key=<?php echo $item['id']?>">Подробнее...</a></td>
				</tr>
				<?php
			}?>

		</table>
	</main>
</div>
</body>
</html>
