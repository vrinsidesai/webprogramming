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
$k=strrev($a);
if($k==$a)
{
	echo "num is palindrome";
}
else
{
	echo "num is not palindrome";
}

?>