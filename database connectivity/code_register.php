<?php

$User=$_REQUEST['uname'];
$Pass=$_REQUEST['pass'];
$Country=$_REQUEST['country'];
$Email=$_REQUEST['mail'];
$Gender=$_REQUEST['m'];
$Launguage=$_REQUEST['e'];

$connect=mysqli_connect("localhost","root","","b1");
//print_r($connect);
$query="INSERT INTO `register`(`user`, `password`, `country`, `email`, `gender`, `launguage`) 
         VALUES ('$User','$Pass','$Country','$Email','$Gender','$Launguage')";
		 
echo $exe_query=mysqli_query($connect,$query);
if($exe_query>=1)
{	
	echo "data inserted";
}
else
{
    echo "error";
}
?>

	
