<?php

    $app_detail_num=$_GET['num'];

      include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
      $sql="select * from gold_app where gold_app_num=$app_detail_num";

      $app_detail_result=mysqli_query($dbConn, $sql);
      $app_detail_row=mysqli_fetch_array($app_detail_result);


    
      $app_detail_tit=$app_detail_row['gold_app_tit'];
      $app_detail_ser=$app_detail_row['gold_app_ser'];
      $app_detail_des=$app_detail_row['gold_app_des'];
      $app_detail_img=$app_detail_row['gold_app_img'];
    //   $web_detail_mimg=$web_detail_row['gold_web_mimg'];
    // //   $web_detail_thumb=$row['gold_de_thumb'];
      $app_detail_cli=$app_detail_row['gold_app_cli'];
      $app_detail_reg=$app_detail_row['gold_app_reg'];

    // //   echo $design_detail_tit, $design_detail_ser, $design_detail_des, 
    // //   $design_detail_img1, $design_detail_img2, $design_detail_thumb, 
    // //   $design_detail_cli, $design_detail_reg;


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Handwritten Heart</title>
    <meta name="keywords" content="데이터베이스, 관리자 기능, 게시판 기능, 캘리그라피">
    <meta name="title" content="데이터베이스 활용 캘리그라피 작업물 업로드 사이트">
    <meta name="subject" content="DB">
    <meta name="description" content="관리자 기능, 게시판 기능 등 전반적인 데이터베이스의 입력 및 출력을 활용한 사이트로, 개인 캘리그라피 작업물을 올리는 용도로 리디자인중입니다.">
    <meta name="author" content="eunallaco@gmail.com, 이중은">
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://middleun.dothome.co.kr/gold">
    <meta property="og:title" content="Handwritten Heart">
    <meta property="og:description" content="관리자 기능, 게시판 기능 등 전반적인 데이터베이스의 입력 및 출력을 활용한 사이트로, 개인 캘리그라피 작업물을 올리는 용도로 리디자인중입니다.">
    <meta property="og:image" content="http://middleun.dothome.co.kr/portfolio/img/db_og_img.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- favicon link -->
    <link rel="icon" href="/gold/img/favicon_96x96.png"/>

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">


    <!-- reset css style link -->
    <link rel="stylesheet" href="/gold/css/reset.css" />

    <!-- light slider plugin link -->
    <link rel="stylesheet" href="/gold/plugin/lightslider.css"/>
    
    <!-- main css link -->
    <link rel="stylesheet" href="/gold/css/style.css" />

    <!-- design css link -->
    <link rel="stylesheet" href="/gold/css/design_web_app.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />

    <!-- media query style css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    
  </head>
  <body>
    <div class="wrap">     
      <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?> 

      <section class="contents appDetail deWeDetail">
        <div class="center clear">
          <div class="appLeft deWeLeft">
            <!-- title with common style -->
            <div class="title">
              <h2><?=$app_detail_tit?></h2>
              <div class="linkBox">
                <span class="line"></span>
                <a href="/gold/pages/app/app.php"> View all website</a>
              </div>
            </div>
            <!-- end of common title -->
 
            <div class="detailCon">      
              <div class="appFrameBox">
                <ul id=appMain>
                  <li>
                    <img src="/gold/data/app_page/app_main/<?=$app_detail_img?>" alt="">
                  </li>
                  <li>
                    <img src="/gold/data/app_page/app_main/app_main_002.png" alt="">
                  </li>
                  <li>
                    <img src="/gold/data/app_page/app_main/app_main_003.png" alt="">
                  </li>
                </ul>
                <span class="frameTop"></span>
                <span class="frameLeft"></span>
                <span class="frameRight"></span>
                <span class="frameBottom"></span>

              </div>

              <div class="appStoreBtns">
                 <a href="#">
                   <img src="/gold/img/app_store.png" alt="">
                 </a>
                 <a href="#">
                   <img src="/gold/img/google_play.png" alt="">
                 </a>
              
              
              </div>
              <p class="detailInfo">
                  Projected By Gold Dev. Team / <?=$app_detail_ser?> / Used in <?=$app_detail_cli?> / 
                  <?=$app_detail_reg?>
              </p>

              <div class="detailDesc">
                <p><?=$app_detail_des?></p>
                    
                <a href="/gold/index.php#contact"><i class="fa fa-arrow-right"></i>Get In Touch With...</a>
              </div>
              <?php
                if($userlevel !=1){
                
                ?>
                <input type="hidden">

                <?php
                } else{
                ?>

                  <div class="productAdminBtns">
                  <button type="button" onclick="location.href='/gold/pages/admin/update_product.php?key=app_update_form&num=<?=$app_detail_num?>'">수정</button>
                  <button type="button" onclick="confirmDel()">삭제</button>

                </div>

              <?php
                }
              ?>             
            
            </div>  
             <!-- end of app Contents -->   
             <script>
              function confirmDel(){
             
                let confirmCheck=confirm('정말로 삭제하시겠습니까?')
                if(confirmCheck==false){
                  return false;
                }else{                 
                  location.href='/gold/php_process/pages/app_detail_delete.php?num=<?=$app_detail_num?>';
                }
              }
              </script>           

            
           
          </div>
          <!-- end of left box -->
 
          <div class="appRight deWeRight">   
            
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/web_side_detail.php" ?> 
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/app_side_detail.php" ?>  
          

          </div>
          <!-- end of design Right box  -->          
          

        </div>  
        <!-- end of center      -->
            
      </section>
      
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/about.php" ?>       
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/footer.php" ?> 
    
    </div>

    <!-- jquery frame work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/gold/plugin/lightslider.js"></script>
    <!-- main jqeury link -->
    <script src="/gold/js/custom.js"></script>
    <script src="/gold/js/web_detail.js"></script>

    
      
    <script>
      // 앱 상세페이지 안에서 슬라이더 기능 추가
      $(function(){
        // lightslider옵션 참조 : https://sseung-fire.tistory.com/18
        // lightslider documentation : http://sachinchoolur.github.io/lightslider/examples.html
        $("#appMain").lightSlider({
            loop:true,
            keyPress:true,
            item:1,
            auto:true,
            speed:500,
            controls:false
        });

      });
    </script>
    
    
    
  </body>
</html>
