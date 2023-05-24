<?php
$link = mysqli_connect('localhost', 'root', 'sprspr123');
if (!$link) {
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
