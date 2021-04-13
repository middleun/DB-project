<?php

  $web_detail_num=$_GET['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql="select * from gold_web where gold_web_num=$web_detail_num";

  $web_detail_result=mysqli_query($dbConn, $sql);
  $web_detail_row=mysqli_fetch_array($web_detail_result);


 
  $web_detail_tit=$web_detail_row['gold_web_tit'];
  $web_detail_ser=$web_detail_row['gold_web_ser'];
  $web_detail_des=$web_detail_row['gold_web_des'];
  $web_detail_img=$web_detail_row['gold_web_img'];
  $web_detail_mimg=$web_detail_row['gold_web_mimg'];
//   $web_detail_thumb=$row['gold_de_thumb'];
  $web_detail_cli=$web_detail_row['gold_web_cli'];
  $web_detail_reg=$web_detail_row['gold_web_reg'];


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

      <section class="contents webDetail deWeDetail">
        <div class="center clear">
          <div class="webLeft deWeLeft">
            <!-- title with common style -->
            <div class="title">
              <h2><?=$web_detail_tit?></h2>
              <div class="linkBox">
                <span class="line"></span>
                <a href="/gold/pages/web/web.php"> View all website</a>
              </div>
            </div>
            <!-- end of common title -->

            <div class="detailCon">
              <div class="webTabBtns">
                <button type="button">PC</button> 
                <button type="button">MOBILE</button> 

              </div>   


              <div class="webBox webTab">
                <div class="webPcFrame">
                  <div class="webMainImg">
                    <img src="/gold/data/web_page/pc/<?=$web_detail_img?>" alt="" class="scrollUp">
                  </div>
                  <img src="/gold/img/mac_frame.png" alt="">
                  
                </div>
              </div>

           
             <!-- end of pc web box -->

          
             <div class="webBox_m webTab">
                <div class="webMobileFrame">
                  <div class="webMainImg_m">
                    <img src="/gold/data/web_page/mobile/<?=$web_detail_mimg?>" alt="" class="scrollUp_m">
                  </div>
                  <img src="/gold/img/iphone_frame.png" alt="">
                  
                </div>
              </div>
              <!-- end of mobile web box -->
              <p class="detailInfo">
                  Projected By Gold Dev. Team / <?=$web_detail_ser?> / Used in <?=$web_detail_cli?> / 
                  <?=$web_detail_reg?>
                </p>

                <div class="detailDesc">
                    <p><?=$web_detail_des?></p>                    
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
                  <button type="button" onclick="location.href='/gold/pages/admin/update_product.php?key=web_update_form&num=<?=$web_detail_num?>'">수정</button>
                  <button type="button" onclick="confirmDel()">삭제</button>
                  
                </div>

                <?php
                    }
                ?>

             
            </div>
           
            <!-- end of web designContents -->
            


          </div>
          <!-- end of left box -->
 
          <div class="webRight deWeRight">   
            
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
    <!-- main jqeury link -->
    <script src="/gold/js/custom.js"></script>
    
    <script src=/gold/js/web_detail.js></script>

    <script>
      function confirmDel(){
      
        let confirmCheck=confirm('정말로 삭제하시겠습니까?')
        if(confirmCheck==false){
          return false;
        }else{                 
          location.href='/gold/php_process/pages/web_detail_delete.php?num=<?=$web_detail_num?>';
        }
      }
    </script>
    
    
    
  </body>
</html>
