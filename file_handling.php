<?php

//$myfile=fopen("b1_232801001.txt","r");
//echo fgets($myfile);

//$myfile=fopen("b1_232801001.txt","w");
//$txt="desai vrinsi";
//fwrite($myfile,$txt);

$new="hello world";
file_put_contents("b1_232801001.txt",$new,FILE_APPEND);

if(unlink("b1_232801001.txt"))
{
	echo "file delete";
}
else
{
	echo "not delete";
}
?>