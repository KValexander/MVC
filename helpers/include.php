<?php
	// Connect all files from a folder
	function include_files($path) {
		$files = scandir($path);
		unset($files[0]);
		unset($files[1]);
		foreach($files as $file) {
			if(preg_match("/\.php/", $file))
				include $path . $file;
			else include_files($path . $file. "/");
		}
	}
?>