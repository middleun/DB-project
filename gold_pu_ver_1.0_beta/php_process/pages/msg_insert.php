<?php

$msg_name=$_POST['msgName'];
$msg_email=$_POST['msgEmail'];
$msg_title=nl2br($_POST['msgTit']);
$msg_title=addslashes($msg_title);

$msg_txt=nl2br($_POST['msgTxt']);
$msg_txt=addslashes($msg_txt);

$msg_reg=date("Y-m-d H:i:s");

// echo $msg_name, $msg_email, $msg_title, $msg_txt, $msg_reg;

include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

$sql="insert into gold_msg(gold_msg_name, gold_msg_email, gold_msg_tit, gold_msg_con, gold_msg_reg) values ('$msg_name', '$msg_email', '$msg_title', '$msg_txt', '$msg_reg')";

mysqli_query($dbConn, $sql);

echo"
<script>
location.href='/gold/index.php';
</script>
"


?>