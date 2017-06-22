<?php

function connect(){
	$link = new mysqli('spalah', 'root', '123456','spalah');
	if (!$link) {
		die('Ошибка соединения: ' . mysql_error());
	}
	return $link;
}

/**
 * @param $productId
 *	 Functions get product by id on page single product
 * @return mixed
 * @author Alexander Tkachenko
 */
function getProduct($productId){
	$link = connect();
	$mysql = <<<SQL
 SELECT
  product.id,price,title,image,description,name
FROM product
INNER JOIN productcategory ON product.cat_id = productcategory.id
WHERE product.id = '%productID%'
SQL;
	$mysql = str_replace( '%productID%', $productId,$mysql);
	$res = mysqli_query($link,$mysql);

	$result = $res->fetch_all();
	return $result;
}

/**
 * @param $page
 * @param $perPage
 *	Functions get all products on page productlist vai LIMIT MYSQL
 * @return mixed
 * @author Alexander Tkachenko
 */
function getProductList($page,$perPage){
	$link = connect();
	$mysql = <<<SQL
SELECT  *
FROM product
INNER JOIN productcategory ON product.cat_id = productcategory.id
LIMIT $page,$perPage;
SQL;
	$mysql = str_replace( '%p%', $page, $mysql);
	$mysql = str_replace( '%l%', $perPage, $mysql);
	$res = mysqli_query($link,$mysql);
	$result = $res->fetch_all();
	return $result;
}
function getTopProduct(){
	$link = connect();
	$mysql = <<<SQL
SELECT
  product_id,
  title,
  description,
  image,
  price,
  name
FROM `order`
  INNER JOIN product ON `order`.product_id = product.id
  INNER JOIN productcategory ON product.cat_id = productcategory.id
GROUP BY product_id
ORDER BY sum(count) DESC
LIMIT 4;
;
SQL;
	$res = mysqli_query($link,$mysql);
	$result = $res->fetch_all();
	return $result;
}

/**
 * @return mixed
 *
 * Function get count all products
 * @author Alexander Tkachenko
 */
function getCountProduct(){
	$link = connect();
	$mysql = <<<SQL
SELECT
count(id)
FROM product;
SQL;
	$res = mysqli_query($link,$mysql);
	$result = $res->fetch_all();
	return $result;
}
	$about = array(
		'title' => 'Title About US',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda excepturi fuga fugiat nihil officiis perspiciatis quam quasi, saepe veniam. Assumenda aut commodi consequatur deserunt dignissimos esse fuga harum in, maiores modi, molestias mollitia non numquam quae quas reiciendis, repudiandae sed. Delectus itaque magnam optio perspiciatis ratione sequi similique, vel veniam!',
	);
//;?>