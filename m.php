#!/usr/bin/php
<?php

  include "config.php";

  $args = trim($GLOBALS['argv'][2]);

  if($ircUser == null){
    echo "/debug 8,1 Please set your user and pass in config.php\n";
  }else if($args == "here"){
      echo "/nick $ircUser";
  }else if($args == "semi"){
    echo "/nick $ircUser|SemiHere";
  }else if($args == "afk" || $args == "away"){
    echo "/nick $ircUser|AFK";
  }else if($args == "semi"){
    echo "/msg nickserv IDENTIFY $ircPass";
  }else{
    echo "/debug 8,1 Usage:/s [here|semi|afk|away]";
  }

  exit();

?>
