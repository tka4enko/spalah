<?php


/**
 * Class ProductList
 */
class ProductList{

	public function getProductList(){
		$productPage = $_GET['page'];
		$perPage = 4;
		$page = ($productPage-1) * $perPage;

		$mysql = <<<SQL
SELECT  *
FROM product
INNER JOIN productcategory ON product.cat_id = productcategory.id
LIMIT $page,$perPage;
SQL;
		$r = new DatabaseHandler();

		$result = $r->mysqlRun( $mysql);

		return  $result ;
	}
	public 	function getCountProduct(){
		$mysql = <<<SQL
SELECT
count(id)
FROM product;
SQL;
		$r = new DatabaseHandler();

		$result = $r->mysqlRun( $mysql);
		return $result;
	}
}
?>