<meta charset="UTF-8" />


<?php
   $mem_num=$_GET['num'];
   $mem_level=$_POST['level'];
   $mem_point=$_POST['point'];
   
   include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php'; 


   $sql="UPDATE gold_mem 
   SET gold_mem_level='$mem_level', gold_mem_point='$mem_point'  WHERE gold_mem_num = '$mem_num'";

   mysqli_query($dbConn, $sql);

   
    echo "
    <script>
    alert('수정이 완료되었습니다');
    location.href='/gold/pages/admin/admin.php';
    </script>
    ";



?>