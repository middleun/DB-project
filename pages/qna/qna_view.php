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

        <!-- qna css link -->
        <link rel="stylesheet" href="/gold/css/qna.css">


        <!-- animation css link -->
        <link rel="stylesheet" href="/gold/css/animation.css" />

        <!-- media query style css link -->
        <link rel="stylesheet" href="/gold/css/media.css" />
        
    </head>
    <body>
        <div class="wrap">
            
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?> 

            <section class="contents qna hasTitle">
                <div class="center">
                    <!-- contact title -->
                    <div class="title">
                        <h2>View Inquiry</h2>
                        <div class="subTit">
                            <span class="subLine"></span>
                            
                        </div>
                    </div>
                    <!-- end of contact title -->

                    <div class="qnaBoxes qnaView deWeBoxes">       
                        <?php

                            $ans_num=$_GET['num'];

                            include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                            $sql="select * from gold_qna where gold_qna_num=$ans_num";

                            $ans_result=mysqli_query($dbConn, $sql);
                            $ans_row=mysqli_fetch_array($ans_result);

                            $ans_id=$ans_row['gold_qna_id'];
                            $ans_tit=$ans_row['gold_qna_tit'];                   
                            $ans_con=$ans_row['gold_qna_con'];
                            $ans_reg=$ans_row['gold_qna_reg'];
                            $ans_hit=$ans_row['gold_qna_hit'];                 
                            
                            $new_hit=$ans_hit + 1;

                            $sql="update gold_qna set gold_qna_hit=$new_hit where 
                            gold_qna_num=$ans_num";

                            mysqli_query($dbConn, $sql);
                            

                        ?>

                        <div class="writerInfo">
                            <p>posted by <?=$ans_id?> No.<?=$ans_num?> / <?=$ans_reg?> /<?=$ans_hit?>Hits</p>
                        </div>                                      
                                                    
                        <div class="writeBox clear">
                                
                            <form action="/gold/php_process/pages/qna_update.php?num=<?=$ans_num?>" method="post" class="writeForm" name="ansForm">
                                <p class="qnaTitInput">
                                    <label for="ansTitle">제목</label>
                                    <input type="text" name="ansTitle" id="ansTitle" placeholder="제목을 입력해주세요" value="<?=$ans_tit?>">
                                </p>
                                <p class="qnaTxtInput">
                                    <textarea name="ansTxt" placeholder="내용을 입력해주세요"><?=$ans_con?></textarea>
                                </p>
                                
                            </form>
                            <?php
                            // 유저 레벨이 1이 아니면 무조건 돌아가기                                                                 
                            
                                if($userlevel !=1){
                            ?> 
                                <a href="/gold/pages/qna/qna.php" class="ansBack">돌아가기</a>
                                    
                            <?php
                            // 유저 레벨이 1이면 수정+돌아가기                                                                 

                                } else{
                            ?>        
                                <a href="/gold/pages/qna/qna.php" class="ansBack">돌아가기</a>                                
                            <button type="submit" class="ansUbdate" onclick="ansUpdate()"> 수정</button>                               
                            
                                                            
                            <?php
                                }
                            
                            ?>                             
                        
                        </div>                                            
                        <!-- end of writeBox -->
                        <?php
                        $ans_num=$_GET['num'];

                        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                        
                        $sql="select * from gold_ans where gold_ans_qna_num=$ans_num order by
                        gold_ans_num desc";

                        $rep_result=mysqli_query($dbConn, $sql);
                        
                        
                        while($rep_row=mysqli_fetch_array($rep_result)){
                        $rep_con=$rep_row['gold_ans_con'];
                        $rep_ans_num=$rep_row['gold_ans_num'];
                        
                        ?>

                        <div class="ansResult">
                            <p class="adminId">
                                <b>관리자 답글</b>
                                <?php
                                if($userlevel == 1){
                                                                        
                                ?>

                                <a href="/gold/php_process/pages/ans_delete.php?num=<?=$rep_ans_num?>" class="ansDelete">삭제</a>

                                <?php
                                }
                                ?>
                            </p>
                            <p class="ansResultTxt"><?=$rep_con?></p>
                            
                        </div>
                        <?php
                        }
                        ?>

                        <div class="answerBox">
                            <form action="/gold/php_process/pages/ans_insert.php?num=<?=$ans_num?>" method="post" name="ansInputForm"  class="ansInputForm">
                                <textarea name="ansInputTxt" placeholder="답글을 작성해주세요"></textarea>
                                <p class="ansBtnBox">
                                
                                <?php
                                    // 레벨이 1이 아닐 때
                                    if($userlevel !=1){                                        
                                ?>
                                <button type="button" class="ansBtn" onclick="plzLogin()">답글달기</button>
                                <?php
                                    // 레벨이 1일 때
                                        }else{
                                ?>        
                                
                                <button type="button" class="ansBtn" onclick="reply()"> 답글달기</button>                               
                                    
                                                            
                                <?php
                                }
                                ?>        
                                    
                                </p>    
                            </form>
                        </div>
                        <!-- end of answer Box -->
                    </div>
                    <!-- end of qnaBoxes -->
                    
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
        <script>
            //   const ansSubmit = document.querySelector(".ansBtn");
            
            // ansSubmit.addEventListener('click', insertAns);
            
            function plzLogin(){
                alert('답글 작성 권한이 없습니다');
            }
            
            // 수정하기 함수
            function ansUpdate(){
               
                if(!document.ansForm.ansTitle.value){
                    alert("제목을 입력해주세요");
                    document.ansForm.ansTitle.focus();
                    return;
                }
                
                if(!document.ansForm.ansTxt.value){
                    alert("내용을 입력해주세요");
                    document.ansForm.ansTxt.focus();
                    return;
                }
                document.ansForm.submit();
            }

            //답글달기 함수 
            function reply(){
               
            
               if(!document.ansInputForm.ansInputTxt.value){
                   alert("내용을 입력해주세요");
                   document.ansInputForm.ansInputTxt.focus();
                   return;
               }
               document.ansInputForm.submit();
           }
        
        </script>
      
        
        
    </body>
</html>
