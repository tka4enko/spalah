<?php

/**
 * Class SingleProductModel
 */
class SingleProductModel{
	public function getProductById(){
		$id = $_GET['page'];
		$mysql = <<<SQL
			 SELECT
			  product.id,price,title,image,description,name
			FROM product
			INNER JOIN productcategory ON product.cat_id = productcategory.id
			WHERE product.id = $id
SQL;
		$r = new DatabaseHandler();
		$result = $r->mysqlRun( $mysql);
		return $result;
	}
}
?>