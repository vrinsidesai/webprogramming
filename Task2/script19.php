<html>
<body>
<form>
input number:<input type="text" name="num"/>
<input type="submit"/>
</form>
</body>
</html>

<?php

$a=$_REQUEST['num'];
$j=0;
for($i=1;$i<=$a;$i++)
{
	if(($a%$i)==0)
	{
		$j++;
	}
}
if($j==2)
{
	echo $a." is prime number";

}
else
{
	echo  $a." is not prime number";
}

?>