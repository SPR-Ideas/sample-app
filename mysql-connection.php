<?php
$link = mysqli_connect('localhost', 'username', 'passwrord');
if (!$link) {
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
