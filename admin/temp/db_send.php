<?php
$db_link = new mysqli($mysql_host_A, $mysql_user_A, $mysql_pass_A,$mysql_db_A);
if (!$db_link) {
    die('接続失敗'.mysqli_error());
}

$db_link->set_charset('utf8');
?>