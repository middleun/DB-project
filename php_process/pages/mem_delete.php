<meta charset="UTF-8" />


<?php
    $mem_num=$_GET['num'];

    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    $sql="delete from gold_mem where gold_mem_num=$mem_num ";

    mysqli_query($dbConn, $sql);
   
    echo "
    <script>
      alert('삭제가 완료되었습니다');
      location.href='/gold/pages/admin/admin.php';
    </script>
    "

    //   history.go(-1) : 이전페이지로 돌아가기
?>