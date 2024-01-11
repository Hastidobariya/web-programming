<?php

$a= strlen(" Hello, World!");
echo $a,'<br>';


$a= strpos(" Hello, World!","World");
echo $a,'<br>';


$a= str_replace(" Hello","universe","Hello World!");
echo $a,'<br>';


$a=substr(" Hello, World!",0.5);
echo $a,'<br>';


$a= strtolower(" Hello, World!");
echo $a,'<br>';


$a= strtoupper(" hello, World!");
echo $a,'<br>';


$a= ucfirst(" hello, World!");
echo $a,'<br>';


$a= strrev(" Hello, World!");
echo $a,'<br>';


$a= trim(" Hello, World!");
echo $a,'<br>';

$a= date("Y-m-d H:i:s");
echo $a,'<br>';

$a= time();
echo $a,'<br>';

$a= gmdate("Y-m-d H:i:s");
echo $a,'<br>';

$a= mktime(12,0,0,8,1,2023);
echo $a,'<br>';

$a= date_default_timezone_set("America/New_york");
echo $a,'<br>';



?>