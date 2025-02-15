<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Handwritten Heart</title>
    <!-- seo -->
    <meta name="keywords" content="데이터베이스, 관리자 기능, 게시판 기능, 캘리그라피">
    <meta name="title" content="데이터베이스 활용 캘리그라피 작업물 업로드 사이트">
    <meta name="subject" content="DB">
    <meta name="description" content="관리자 기능, 게시판 기능 등 전반적인 데이터베이스의 입력 및 출력을 활용한 사이트로, 개인 캘리그라피 작업물을 올리는 용도로 리디자인중입니다.">
    <meta name="author" content="eunallaco@gmail.com, 이중은">
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">

    <!-- open graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://middleun.dothome.co.kr/gold">
    <meta property="og:title" content="Handwritten Heart">
    <meta property="og:description" content="관리자 기능, 게시판 기능 등 전반적인 데이터베이스의 입력 및 출력을 활용한 사이트로, 개인 캘리그라피 작업물을 올리는 용도로 리디자인중입니다.">
    <meta property="og:image" content="http://middleun.dothome.co.kr/gold/img/db_og_img.png">
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

       <section class="contents upload hasTitle">
         <div class="center">
            <!-- contact title -->
            <div class="title">
               <h2>Artwork</h2>
               <div class="subTit">
                 <span class="subLine"></span>
                 <!-- <a href="#" class="subLink">View More Details</a> -->
               </div>
            </div>
            <!-- end of contact title -->


            <div class="designBoxes deWeBoxes">

              <?php
                include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                $sql="select * from gold_de order by gold_de_num desc";

                $result=mysqli_query($dbConn,$sql);

                while($row=mysqli_fetch_array($result)){
                  $design_num=$row['gold_de_num'];
                  $thumb_path=$row['gold_de_thumb'];
                  $design_title=$row['gold_de_tit'];
                  $design_desc=$row['gold_de_des'];              
              ?>

              <div class="designBox deWeBox">
                <div>
                  <p class="designImg deWeImg">
                    <img src="/gold/data/design_page/thumb/<?=$thumb_path?>" alt="">
                  </p>
                  <div class="designTxt deWeTxt ">
                    <h2><?=$design_title?></h2>
                    <em class="cutTxt"><?=$design_desc?></em>
                  </div>      
                  <div class="boxOverlay">
                    <a href="/gold/pages/design/design_detail.php?num=<?=$design_num?>"><i class="fa fa-search"></i></a>
                  </div>         
                </div>                             
              </div>
              <!-- end of designBox -->

              <?php
                }
              ?>
            
            </div>     
            <!-- end of design boxes -->           
            
            
            <div class="btns">     
              <?php
                if($userlevel == 1){
              
              ?>        
              <a href="#" class="commonBtn designLoadMore">Load More</a>
              <a href="#" class="commonBtn toTop">Go To Top</a>
              <a href="/gold/pages/design/design_input_form.php" class="commonBtn">Upload Contents</a>
            </div>
            
              <?php
                } else{
                
              ?>
                <a href="#" class="commonBtn designLoadMore">Load More</a>
                <a href="#" class="commonBtn toTop">Go To Top</a>
  
              <?php
              }
              ?>                      
            </div>
         <!-- end of center -->
       </section>
      
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/about.php" ?>       
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/footer.php" ?> 
    
    </div>

    <!-- jquery frame work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- main jqeury link -->
    <script src="/gold/js/custom.js"></script>
    <script src="/gold/js/web_design_page.js"></script>

      
    
  </body>
</html>
