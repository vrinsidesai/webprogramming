<html>
    <body>
        <form method="post">
            num1:<input type="text" name="num1"/></br>
            num2:<input type="text" name="num2"/><br>
            num3:<input type="text" name="num3"/><br>
            <input type="submit"/>
        </form>
    </body>
</html>

<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$num3=$_REQUEST['num3'];
if($num1>$num2 && $num1>$num3)
{
    echo"$num1 is largest";
}
elseif($num2>$num1 && $num2>$num3)
{
    echo"$num2 is largest";
}
elseif($num3>$num1 && $num3>$num2)
{
    echo"$num3 is largest";
}
else{
    echo "invalid";
}

?>