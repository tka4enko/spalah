<?php
	function call_to_dir(){
		$dir =  'dir';
		$files1= scandir($dir);
		$arr = array();
		foreach ( $files1 as $item ) {
			if($item != '.' && $item != '..'){
				$itemKey = new SplFileInfo($item);
				$arr[$itemKey->getExtension()]=$item;
			}
		}
		return $arr;
	}

;?>
