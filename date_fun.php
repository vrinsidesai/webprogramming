

<?php

$a=date("Y-m-d H:i:s");

echo $a,'<br>';


?>

<?php

$a=time();

echo $a,'<br>';

?>

<?php

$a=strtotime("2024-08-05");

echo $a,'<br>';

?>

<?php

$a=gmdate("Y-m-d H:i:s");

echo $a,'<br>';

?>

<?php

$a=mktime(12,0,0,8,1,2023);

echo $a,'<br>';

?>


<?php


$a=date_default_timezone_set("america/new_york");

echo $a,'<br>';
?>