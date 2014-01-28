<ul class="slides">
  <?php

  if ($handle = opendir('photo/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<li><img src=\"photo/",$entry,"\"/></li>\n";
        }
    }
    closedir($handle);
}
/*    $files = glob("photo/*.jpg");
    foreach($files as $jpg){
      echo "<li><img src=\"",$jpg,"\"/></li>\n";
    }*/
  ?>
</ul>
