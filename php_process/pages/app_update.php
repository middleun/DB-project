<!-- 앱 페이지 컨텐츠 수정 후 넘어가는 위치! cf.app_insert.php -->
<meta charset="UTF-8" />


<?php

    $app_update_num=$_REQUEST['num'];

    $app_title=nl2br($_REQUEST['app_title']);
    $app_title=addslashes($app_title);
    $app_serial=$_REQUEST['app_serial'];
    $app_client=$_REQUEST['app_client'];
    $app_desc=nl2br($_REQUEST['app_desc']);
    $app_desc=addslashes($app_desc);
    $regist_day=date("Y-m-d");

    $img_upload_dir=$_SERVER['DOCUMENT_ROOT'].'/gold/data/app_page/app_main/';
    $thumb_upload_dir=$_SERVER['DOCUMENT_ROOT'].'/gold/data/app_page/app_thumb/';


    //   main image
   $main_name=$_FILES['app_main']['name'];
   $main_tmp_name=$_FILES['app_main']['tmp_name'];
   $main_error=$_FILES['app_main']['error'];

   //   sub image
   $sub_name=$_FILES['app_sub']['name'];
   $sub_tmp_name=$_FILES['app_sub']['tmp_name'];
   $sub_error=$_FILES['app_sub']['error'];

   //echo "$app_title, $app_serial, $app_client, $app_desc, $regist_day, $main_name, $sub_name; "


   // main image upload
  if($main_name && !$main_error){

    $uploaded_main_file= $img_upload_dir.$main_name;
    if(!move_uploaded_file($main_tmp_name, $uploaded_main_file)){
        echo"
          <script>
            alert('사진이 업로드 되지 않았습니다!');

          </script>
        ";
        exit;  
    }
    
  } else{
    $main_name='';
  }

  // sub image upload
  if($sub_name && !$sub_error){
  
      $uploaded_sub_file= $thumb_upload_dir.$sub_name;
      if(!move_uploaded_file($sub_tmp_name, $uploaded_sub_file)){
          echo"
            <script>
              alert('사진이 업로드 되지 않았습니다!');
  
            </script>
          ";
          exit;
      }
  }else{
      $sub_name='';
  }

  // database connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

  $sql="UPDATE gold_app SET gold_app_tit='$app_title', gold_app_ser='$app_serial', gold_app_des='$app_desc',    gold_app_img='$main_name', gold_app_thumb='$sub_name', gold_app_cli='$app_client',gold_app_reg='$regist_day'    
  WHERE gold_app_num = '$app_update_num'";

  mysqli_query($dbConn, $sql);
  // 여기까지는 디자인, 웹페이지랑 같은 순서
  // but, app페이지의 경우 json파일 연결했기 때문에 다음을 넣어줘야. 데이터 갱신 가능

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
        alert('수정이 완료되었습니다');
        location.href='/gold/pages/app/app.php';
    </script>
    ";   
    
 

?>