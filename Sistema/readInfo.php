<?php

  $var = $_GET["id"];
  
  $var2 = file("cadastros/$var");

  foreach($var2 as $var3){
     echo $var3."<br>";
  }