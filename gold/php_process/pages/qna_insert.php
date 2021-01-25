<?php

$qna_id=$_GET['id'];
$qna_title=nl2br($_POST['qnaTitle']);
// nl2br - enter치면 br태그로 바꿔줘
$qna_title=addslashes($qna_title);

$qna_txt=nl2br($_POST['qnaTxt']);
$qna_txt=addslashes($qna_txt);

$qna_reg=date("Y-m-d");
$qna_hit=0;


// echo $qna_id, $qna_title, $qna_txt, $qna_reg, $qna_hit

// database connect
include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

$sql="insert into gold_qna(gold_qna_id, gold_qna_tit, gold_qna_con, gold_qna_reg, gold_qna_hit)   values('$qna_id','$qna_title','$qna_txt','$qna_reg','$qna_hit')";

mysqli_query($dbConn, $sql);
  
  echo "
    <script>
      location.href='/gold/pages/qna/qna.php';
    </script>
  "

?>