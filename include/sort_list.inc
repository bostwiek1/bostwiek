<?php
  $files = array();

  // open the cwd..also do an err check.
  $dir = opendir('./images/'.$currentdir.'/'); 


  while(false != ($file = readdir($dir))) {
          if(($file != "./images/'.$currentdir.'/") and ($file != "..") and ($file != "index.php")) {
                  $files[] = $file; // put in array.
          }   
  }

  // sort.
  natsort($files); 



  // print.
  foreach($files as $key => $val) {

    // check that the file name isnt blacklisted

    if (

      // doing this backwards for stupid reasons

      ($val == '.') or ($val == '..') or ($val == 'Thumbs.db')

    ) {} else {
      // looks good, boys

      // checks first letter of file name (for classname)
      $class = $val[0];

      echo '
        <li class="image '.$class.'">
          <a href="/images/'.$currentdir.'/'.$val.'" data-lightbox="image-1"><img src="/images/'.$currentdir.'/'.$val.'" width="250" /></a>
        </li>
      ';
    }
  }

?>