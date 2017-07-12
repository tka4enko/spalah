<?php

/**
 * Class ProductModelIndex
 */
class ProductModelIndex
{
	public function getProductById($id)
	{
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
SQL;
		$r = new DatabaseHandler();
		$result = $r->mysqlRun( $mysql);
		return $result;
	}
}
?>