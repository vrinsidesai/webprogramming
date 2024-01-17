<html>
<body>
    <form method="post">
        input number:<input type="text" name="num"/><br>
        <input type="submit"/>
    </form>
</body>
</html>
<?php
$str=$_REQUEST['num'];
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
  if (in_array(strtolower($str[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str is: $count";
