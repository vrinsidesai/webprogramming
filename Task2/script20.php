<html>
<body>
<form>
input starting number:<input type="text" name="num"/></br>
input ending number:<input type="text" name="num2"/></br>
<input type="submit"/>
</form>
</body>
</html>

<?php

$a=$_REQUEST['num'];
$b=$_REQUEST['num2'];
$fact=1;
for($i=$a;$i<=$b;$i++)
{
	$fact=$fact*$i;
}
echo $fact;
?>