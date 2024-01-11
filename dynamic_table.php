<html>
<body>
<form>
start value:<input type="number" name="v1"/>
End value:<input type="number" name="v2"/> 
<input type="submit" value="calculate"/>
</form>
</body>
</html>

<?php
$a=$_REQUEST['v1'];
$a1=$_REQUEST['v2'];

for($k=$a;$k<=$a1;$k++)
{
echo "<table border=1>";
for($i=1;$i<=10;$i++)
{
  $j=$i*$k;
  echo "<tr><td>$k</td><td>X</td><td>$i</td><td>=</td><td>$j</td></tr>";
}
echo "</table><style>table{float:left;}</style>";
}
?>  