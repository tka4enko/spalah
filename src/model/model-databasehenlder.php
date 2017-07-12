<?php

/**
 * Class DatabaseHandler
 */
class DatabaseHandler{
	private function connect(){
		$link = new mysqli('spalah', 'root', '123456','spalah');
		if (!$link) {
			die('Ошибка соединения: ' . mysql_error());
		}
		return $link;
	}

	public function mysqlRun($query){
		$link = $this->connect();
		$res = mysqli_query($link,$query);
		$result = $res->fetch_all();
		return $result;
	}
}
?>