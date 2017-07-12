<?php


/**
 * Class AboutModel
 */
class AboutModel
{
	public function getContent()
	{
		$mysql = <<<SQL
SELECT
title,
description
FROM about_us;
SQL;
		$r = new DatabaseHandler();
		$result = $r->mysqlRun( $mysql);
		$about = array();
		foreach ($result as $item){
			$about = array(
				'title' => $item[0],
				'description' => $item[1]
			);
		}
		return $about;
	}
}
?>