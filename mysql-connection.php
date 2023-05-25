<?php
$link = mysqli_connect('localhost', $MYSQL_USERNAME, $MYSQL_PASSWORD );
if (!$link) {
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
