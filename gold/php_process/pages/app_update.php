<!-- 앱 페이지 컨텐츠 수정 후 넘어가는 위치! cf.app_insert.php -->

<?php

    $app_update_num=$_GET['num'];

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
