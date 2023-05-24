<?php
$link = mysqli_connect('localhost', 'username', 'password');
if (!$link) {
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
