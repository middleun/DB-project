<?php

  $design_detail_num=$_GET['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql="select * from gold_de where gold_de_num=$design_detail_num";

  $result=mysqli_query($dbConn, $sql);
  $row=mysqli_fetch_array($result);


 
  $design_detail_tit=$row['gold_de_tit'];
  $design_detail_ser=$row['gold_de_ser'];
  $design_detail_des=$row['gold_de_des'];
  $design_detail_img1=$row['gold_de_img1'];
  $design_detail_img2=$row['gold_de_img2'];
  $design_detail_thumb=$row['gold_de_thumb'];
  $design_detail_cli=$row['gold_de_cli'];
  $design_detail_reg=$row['gold_de_reg'];



?>


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

            <section class="contents designDetail deWeDetail">
                <div class="center clear">
                    <div class="designLeft deWeLeft">
                        <!-- title with common style -->
                        <div class="title">
                            <h2><?=$design_detail_tit?></h2>
                            <div class="linkBox">
                                <span class="line"></span>
                                <a href="#"> View all products</a>
                            </div>
                        </div>
                        <!-- end of common title -->

                        <div class="detailCon">
                            <div class="detailImg1 clear">
                                <div class="imgBox">
                                    <img src="/gold/data/design_page/<?=$design_detail_img1?>" alt="">
                                </div>
                                <div class="imgBox">
                                    <img src="/gold/data/design_page/<?=$design_detail_img2?>" alt="">
                                </div>
                                <div class="imgNav">
                                    <a href="#" class="active">
                                        <img src="/gold/data/design_page/<?=$design_detail_img1?>" alt="">
                                        <span class="dotOverlay"></span>
                                    </a>                      
                                    <a href="#">
                                        <img src="/gold/data/design_page/<?=$design_detail_img2?>" alt="">
                                        <span class="dotOverlay"></span>                      
                                    </a>
                                </div>
                            </div>
                            <p class="detailInfo">
                                Handwritten By LeeJungEun / <?=$design_detail_ser?> / Used in <?=$design_detail_cli?> / 
                                <?=$design_detail_reg?>
                            </p>

                            <div class="detailDesc">
                                <p><?=$design_detail_des?></p>
                                
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
                                <button type="button" onclick="location.href='/gold/pages/admin/update_product.php?key=design_update_form&num=<?=$design_detail_num?>'">수정</button>
                                <button type="button" onclick="confirmDel()">삭제</button>

                            </div>

                            <?php
                            }
                            ?>
                        
                        </div>
                        <!-- end of designContents -->
                        

                    </div>
                    <!-- end of left box -->
        
                    <div class="designRight deWeRight">   
                        
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
        <!-- end of wrap -->

        <!-- jquery frame work -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- main jqeury link -->
        <script src="/gold/js/custom.js"></script>
        


        <script>
            $(function(){      
                //confirm alert when delete button click
                confirmDel(){            
                    let confirmCheck=confirm('정말로 삭제하시겠습니까?')
                    if(confirmCheck==false){
                        return false;
                    }else{                 
                        location.href='/gold/php_process/pages/design_detail_delete.php?num=<?=$design_detail_num?>';
                    }
                };           

                // image navigation click
                $(".imgNav>a").click(function(e){
                    e.preventDefault();
                    var index=$(this).index();
                    $(".imgNav>a").removeClass("active");
                    $(this).addClass("active"); 
                    $(".imgBox").hide();
                    $(".imgBox").eq(index).show();
                });

                $(".imgNav>a").eq(0).trigger("click");

                // cut right side text
                const cutTxtBox=$(".webLinks, .appLinks");
                for(let i=0; i<cutTxtBox.length; i++){
                    let allTxt=cutTxtBox.eq(i).find("em").text();        
                    cutTxtBox.eq(i).find("em").text(allTxt.substr(0, 60));
                };

                                 
                

            });
        </script>
    
        
        
    </body>
</html>
