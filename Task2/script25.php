<html>
    <body>
        <form method="post">
            input num1:<input type="text" name="num1"/><br>
            input num2:<input type="text" name="num2"/><br>
            <input type="submit"/>
        </form>
    </body>
</html>
<?php
$a=$_REQUEST['num1'];
$b=$_REQUEST['num2'];

echo "a==".$a."</br>";
echo "b==".$b."</br>";

//9 5
$a=$a+$b;//14
$b=$a-$b;//9
$a=$a-$b;//5

echo "a==".$a."</br>";
echo "b==".$b."</br>";

?>