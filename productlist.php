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
 * @author Alexander Tkachenko
 */
require_once 'data.php';
$productPage = $_GET['page'];
$perPage = 4;
$page = ($productPage-1) * $perPage;
$product = getProductList($page , $perPage);
$productCount = getCountProduct()[0][0]/$perPage;

?>
<div class="container">
	<?php require_once 'header.php';?>
	<main class="main">
		<table class="table-product">
			<tr>
				<th>Images</th>
				<th>Название</th>
				<th>Краткое описание</th>
				<th>Категория</th>
				<th>Цена</th>
				<th>Ссылка</th>
			</tr>
			<?php foreach ($product as $item){
				?>
				<tr>
					<td>
						<span class="image" style="background-image:url(<?php echo $item[2]?>);"></span>
					</td>
					<td><?php echo $item[1]?></td>
					<td><?php echo $item[4]?></td>
					<td><?php echo $item[8]?></td>
					<td><?php echo $item[3]?>$</td>
					<td><a href="/product?page=<?php echo $item[0]?>">Подробнее...</a></td>
				</tr>
				<?php
			}?>

		</table>
		<ul class="pagination">
			<?php for ($i =0;$i<$productCount;$i++) {?>
				<li><a href="?page=<?php echo $i+1; ?>"><?php echo $i+1; ?></a></li>
			<?php } ?>
		</ul>
	</main>
</div>
</body>
</html>
