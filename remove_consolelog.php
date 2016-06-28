<?php

	$count = 0;
	$file = '';
	function traversePath($dir, &$results = array()){
	    global $file;
	    $files = scandir($dir);
	
	    foreach($files as $key => $value){
	        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
	        $file = $path;
	        if(!is_dir($path)) {
	            $ext = pathinfo($path, PATHINFO_EXTENSION);
	            $file = $path;
	            if ($ext == "js") {
					$file_contents = file_get_contents($path);
					$pattern = '~((?://)?\s*console\.[A-Z]+\(.*?$)~sim';
					$file_contents = preg_replace_callback($pattern,'rep_count',$file_contents);
					file_put_contents($path, $file_contents);
	            }
	            $results[] = $ext;
	        } else if($value != "." && $value != "..") {
	            traversePath($path, $results);
	            $results[] = $path;
	        }
	    }
	
	    return $results;
	}
	
	function rep_count($matches) {
		global $count, 
			    $file;
		echo 'Removed an instance in ' . $file . PHP_EOL;
		return '';
	}
	
	traversePath($argv[1]);

?>