<!-- 앱 상세페이지 삭제 기능 -->
<meta charset="UTF-8" />

<?php
    $app_delete_num=$_REQUEST['num'];

    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    $sql="delete from gold_app where gold_app_num=$app_delete_num";

    mysqli_query($dbConn, $sql);



    $sql="select * from gold_app order by gold_app_num desc";

    $app_result= mysqli_query($dbConn, $sql);
    
    // 비어있는 배열을 하나 만들어서 
    $arr_result=array();

    // array push로 비어있는 배열에 값을 넣어줌 
    while($app_row=mysqli_fetch_array($app_result)){
        array_push($arr_result, array(
            'appnum' => $app_row['gold_app_num'],
            'apptit' => $app_row['gold_app_tit'],
            'appser' => $app_row['gold_app_ser'],
            'appdes' => $app_row['gold_app_des'],
            'appmain' => $app_row['gold_app_img'],
            'appthumb' => $app_row['gold_app_thumb'],
            'appcli' => $app_row['gold_app_cli'],
            'appreg' => $app_row['gold_app_reg']
        ));
    }

    
    //   make json file
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/gold/data/json/app.json',json_encode($arr_result, JSON_PRETTY_PRINT));


    echo"
    <script>
        alert('삭제가 완료되었습니다');
        location.href='/gold/pages/app/app.php';
    </script>
    ";    


?>