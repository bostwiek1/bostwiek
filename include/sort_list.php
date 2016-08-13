<?php

	// $dir is declared in each index

	$dh = opendir($dir);

	while (false !== ($filename = readdir($dh))) {
		$files[] = $filename;
	}

	// sorts returned by date (last modified)
		// default is sort($files);
	usort($files, function($a, $b) {
	    return filemtime($a) < filemtime($b);
	});

	foreach ($files as $key => $val) {

		if (($val == '.') or ($val == '..') or ($val == 'error_log') or ($val == 'index.php')) {} else {
	    echo '<ul><li>';
	    	echo '<a class="project_list_item list_item_idle dumper_item" href="' . $files[$key] . '" id="'. $val .'" onclick="return false;">' . $val . '</a>';
		echo '</li></ul>';
		}
		
	}

?>