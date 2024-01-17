<html>
    <body>
        <form method="post">
            input radius:<input type="text" name="rad"/><br>
            <input type="submit"/>
  
      </form>
    </body>
</html>
<?php
$a=$_REQUEST['rad'];
$cir=3.14*$a*$a;

echo "area of circle is == ".$cir;

?>
