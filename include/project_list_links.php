<?php

	foreach ($links as $key => $val) {

	    echo '<ul><li>';
	    	echo '<a class="project_list_item list_item_idle" href="' . $linksLocation[$key] . '">' . $val . '</a>';
		echo '</li></ul>';
	}

?>