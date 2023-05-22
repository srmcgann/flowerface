<?php
  chdir("../flowerface/tracks");
  echo shell_exec("unzip -P PW tracks.zip & 2>&1") . "<br>";
  echo shell_exec("chmod 777 . -R 2>&1") . "<br>";
  echo str_replace("\n", "<br>", shell_exec("ls")) . "<br>";
  echo "<br>finished expaning archive.<br>";
?>
