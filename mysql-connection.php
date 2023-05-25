<?php
$link = mysqli_connect('localhost', getenv("MYSQL_USERNAME"), getenv("MYSQL_PASSWORD") );
if (!$link) {
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
