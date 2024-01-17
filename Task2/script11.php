<html>
    <body>
        <form method="post">
            input number:<input type="text" name="num"/><br>
            <input type="submit"/>
        </form>
    </body>
</html>
<?php
$a=$_REQUEST['num'];
$num1=$a%2;
if($num1==0)
{
echo "$a is even";
}
elseif($num1!=0)
{
echo "$a is odd";
}
else
{
echo "invalid";
}