<meta charset="UTF-8" />

<?php
    $ans_qna_num=$_GET['num'];
    $ans_con=$_POST['ansInputTxt'];
    $ans_con=addslashes($ans_con);
    $ans_reg=date("Y-m-d");

    // echo $ans_qna_num; echo $ans_con; echo $ans_reg;


    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    $sql="insert into gold_ans(gold_ans_qna_num, gold_ans_con, gold_ans_reg) 
    values('$ans_qna_num','$ans_con', '$ans_reg')" ;

    mysqli_query($dbConn, $sql);



    echo "
    <script>
      alert('답글 등록이 완료되었습니다');
      location.href='/gold/pages/qna/qna.php';
    </script>
  "


?>    