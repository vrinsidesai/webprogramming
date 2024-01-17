<html>
    <body>
        <form method="post">
            input number:<input type="text" name="num"/><br>
            <input type="submit"/>
        </form>
    </body>
</html>
<?php
$input=$_REQUEST['num'];
if(($input%4)==0)
{
    echo"$input is leap year";
}
elseif(($input%400)==0)
{
    echo"$input is leap year";
}
elseif(($input%100)!=0)
{
    echo"not leap year";
}
else
{
    echo"invalid";
}
?>