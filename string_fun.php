<?php

$a=strlen("hello,world");
echo $a,'<br>';

$b=strpos("hello,world","world");
echo $b,'<br>';

$c=str_replace("world","universe","hello,world");
echo $c,'<br>';

$d=substr("hello,world",0,5);
echo $d,'<br>';

$e=strtolower("hello,world");
echo $e,'<br>';

$f=strtoupper("hello,world");
echo $f,'<br>';

$g=ucfirst("hello,world");
echo $g,'<br>';

$h=strrev("hello,world");
echo $h,'<br>';

$i=trim("hello,world");
echo $i,'<br>';


?>