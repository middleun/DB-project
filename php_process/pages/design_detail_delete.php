<!-- 디자인 상세페이지 삭제 기능 -->
<meta charset="UTF-8" />


<?php
    $delete_num=$_GET['num'];

    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    $sql="delete from gold_de where gold_de_num=$delete_num";

    mysqli_query($dbConn, $sql);


    echo"
    <script>
        alert('삭제가 완료되었습니다');
        location.href='/gold/pages/design/design.php';
    </script>
    ";    


?>