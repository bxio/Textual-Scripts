#!/usr/bin/php
<?php

  include "config.php";

  if($ircUser == null){
    echo "/debug 8,1 Please set your user and pass in config.php\n";
  }else{
    echo "/nick $ircUser";
  }

  exit();

?>
