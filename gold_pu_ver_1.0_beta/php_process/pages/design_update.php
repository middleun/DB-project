<!-- 디자인 페이지 컨텐츠 수정 후 넘어가는 위치 cf.design_insert.php -->
<meta charset="UTF-8" />



<?php

  $design_update_num=$_GET['num'];

  $design_title=nl2br($_REQUEST['design_title']);
  $design_title=addslashes($design_title);
  $design_serial=$_REQUEST['design_serial'];
  $design_client=$_REQUEST['design_client'];
  $design_desc=nl2br($_REQUEST['design_desc']);
  $design_desc=addslashes($design_desc);
  $regist_day=date("Y-m-d");

  $img_upload_dir=$_SERVER['DOCUMENT_ROOT'].'/gold/data/design_page/';
  $thumb_upload_dir=$_SERVER['DOCUMENT_ROOT'].'/gold/data/design_page/thumb/';

  //   main image
  $main_name=$_FILES['main']['name'];
  $main_tmp_name=$_FILES['main']['tmp_name'];
  $main_error=$_FILES['main']['error'];

  //   sub image
  $sub_name=$_FILES['sub']['name'];
  $sub_tmp_name=$_FILES['sub']['tmp_name'];
  $sub_error=$_FILES['sub']['error'];


  //   thumbnail image
  $thumbnail_name=$_FILES['thumbnail']['name'];
  $thumbnail_tmp_name=$_FILES['thumbnail']['tmp_name'];
  $thumbnail_error=$_FILES['thumbnail']['error'];

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
 
     $uploaded_sub_file= $img_upload_dir.$sub_name;
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


 // thumbnail image upload
 if($thumbnail_name && !$thumbnail_error){
 
     $uploaded_thumbnail_file= $thumb_upload_dir.$thumbnail_name;
     if(!move_uploaded_file($thumbnail_tmp_name, $uploaded_thumbnail_file)){
         echo"
           <script>
             alert('사진이 업로드 되지 않았습니다!');
 
           </script>
         ";
         exit;  
     }
 }else{
   $thumbnail_name='';
 }



 // database connect
 include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';


 $sql="UPDATE gold_de SET gold_de_tit='$design_title', gold_de_ser='$design_serial',  gold_de_des='$design_desc',
  gold_de_img1='$main_name', gold_de_img2='$sub_name', gold_de_thumb='$thumbnail_name', gold_de_cli='$design_client', gold_de_reg='$regist_day'   WHERE gold_de_num = '$design_update_num'";


  
  
  mysqli_query($dbConn, $sql);
  
  echo "
    <script>
      location.href='/gold/pages/design/design.php';
    </script>
  "

?>