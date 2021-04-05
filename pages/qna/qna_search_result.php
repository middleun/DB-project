
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
                            <h2>Search Result</h2>
                            <div class="subTit">
                                <span class="subLine"></span>
                                
                            </div>
                        </div>
                        <!-- end of contact title -->

                        <div class="qnaBoxes deWeBoxes">
                            <div class="qnaTable">
                                <ul class="qnaList">

                                       <li class="qnaTitle clear">
                                        <span class="qnaNum">번호</span>
                                        <span class="qnaId">아이디</span>
                                        <span class="qnaTit">제목</span>
                                        <span class="qnaReg">등록일</span>
                                        <span class="qnaHit">조회수</span>
                                        </li>        

                                        <?php
                                        $search_select=$_POST['searchSelect'];
                                        $search_input=$_POST['qnaSearchInput'];

                                        // echo $search_select, $search_input;

                                        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

                                        if($search_select == 'qnaSearchId'){
                                            $sql="select * from gold_qna where gold_qna_id LIKE '%$search_input%' order by gold_qna_num desc";
                                        }else{
                                            $sql="select * from gold_qna where gold_qna_tit LIKE '%$search_input%' order by gold_qna_num desc";


                                        }
                                        $search_result=mysqli_query($dbConn, $sql);
                                        $search_result_num=mysqli_num_rows($search_result);

                                        if(!$search_result_num){
                                            echo "<li style='padding:10px 0; width:100%; text-align:center;'>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요</li>";
                                        } else{
                                           while($search_result_row=mysqli_fetch_array($search_result)){
                                               $result_num=$search_result_row['gold_qna_num'];
                                               $result_id=$search_result_row['gold_qna_id'];
                                               $result_tit=$search_result_row['gold_qna_tit'];
                                               $result_reg=$search_result_row['gold_qna_reg'];
                                               $result_hit=$search_result_row['gold_qna_hit'];                                         

                                        ?>

                                        <li class="qnaContent clear">
                                            <span class="qnaNum"><?=$result_num?></span>
                                            <span class="qnaId"><?=$result_id?></span>      

                                            <?php
                                                $sql="select * from gold_ans where gold_ans_qna_num=$result_num order by gold_ans_num desc";

                                                $ans_res=mysqli_query($dbConn, $sql);
                                                
                                                // ans_res값을 불러옴
                                                $is_ans_res=mysqli_num_rows($ans_res);

                                            
                                                
                                                if(!$is_ans_res){
                                                ?>


                                                <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$result_num?>"><?=$result_tit?></a></span>
                                                
                                                <?php
                                                // 답변이 있을 때는
                                                }else{
                                                ?>
                                                <!-- [답변완료] 표시 -->
                                                <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$result_num?>"><?=$result_tit?>[답변완료]</a></span>


                                                <?php
                                                }
                                                ?>

                                                <span class="qnaReg"><?=$result_reg?></span>
                                                <span class="qnaHit"><?=$result_hit?></span>
                                        </li>

                                                                                  

                                        <?php
                                             }
                                        }
                                        
                                        ?>

                                
                                                
                                </ul>
                            </div>
                            <!-- end of qna table -->
                            
                            
                                            
                        
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


    </body>
</html>
