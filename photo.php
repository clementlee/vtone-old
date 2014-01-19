<ul class="slides">
  <?php
    $files = glob("photo/*.jpg");
    foreach($files as $jpg){
      echo "<li><img src=\"",$jpg,"\"/></li>\n";
    }
  ?>
</ul>
