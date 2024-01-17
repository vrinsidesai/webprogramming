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
echo "square root == ".sqrt($a);

?>
