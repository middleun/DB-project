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
        <!-- admin css link -->
        <link rel="stylesheet" href="/gold/css/admin.css">
        <!-- animation css link -->
        <link rel="stylesheet" href="/gold/css/animation.css" />
        <!-- media query style css link -->
        <link rel="stylesheet" href="/gold/css/media.css" />

        
    </head>
    <body>
        <div class="wrap">
            
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?> 

            <?php
            
                if($userlevel !=1){
            ?>
            <div class="deny">
                <p>관리자 페이지입니다. 관리자로 로그인해주세요.</p>
                <a href="/gold/pages/login/login_form.php">로그인</a>
            </div>

            <?php    
                }else{
            ?>
            
            <section class="contents admin hasTitle">
                <div class="center">
                    <div class="adminTabs">
                        <button type="button" class="active">메세지 관리</button>
                        <button type="button">회원 관리</button>                            
                        <button type="button">Q&A 관리</button>
                    </div>
                    
                    <div class="msgTab deWeBoxes adminPanel">
                        <div class="adminTable">
                            <ul class="adminList">
                                <li class="adminTitle clear">
                                    <span class="msgNum">번호</span>
                                    <span class="msgName">이름</span>
                                    <span class="msgTit">제목</span>
                                    <span class="msgReg">등록일</span>
                                    <span class="msgEmail">이메일</span>
                                    <span class="msgDelete">삭제</span>

                                </li>      
                                <?php
                                include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                                $sql="select * from gold_msg order by gold_msg_num desc limit 5";

                                

                                $msg_result=mysqli_query($dbConn, $sql);
                                
                                while($msg_row=mysqli_fetch_array($msg_result)){
                                    $msg_num=$msg_row['gold_msg_num'];
                                    $msg_name=$msg_row['gold_msg_name'];
                                    $msg_tit=$msg_row['gold_msg_tit'];
                                    $msg_reg=$msg_row['gold_msg_reg'];
                                    $msg_email=$msg_row['gold_msg_email'];                                    
                                
                                ?>    



                                <li class="adminContents clear">
                                    <span class="msgNum"><?=$msg_num?></span>
                                    <span class="msgName"><?=$msg_name?></span>
                                    <span class="msgTit"><a href="/gold/pages/admin/admin_view.php?num=<?=$msg_num?>"><?=$msg_tit?></a></span>
                                    <span class="msgReg"><?=$msg_reg?></span>
                                    <span class="msgEmail"><?=$msg_email?></span>
                                    <span class="msgDelete"><a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_num?>"><i class="fa fa-remove"></i></a></span>
                                </li>    
                                
                                <?php
                                }
                                ?>
                                                                                    
                            </ul>
                        </div>  
                        <!--end of admin table  -->
                        <div class="searchPaging clear">
                            <div class="search">
                                <form action="/gold/pages/admin/search_result.php?key=msg_result" method="post" name="adminSearch" class="clear adminSearch">
                                    <select name="searchSelect" id="" class="searchSelect">
                                        <option value="adminSearchId">이름</option>
                                        <option value="adminSearchName">제목</option>
                                    </select>
                                    <input type="text" name="adminSearchInput" placeholder="검색어를 입력해주세요"
                                    class="adminSearchInput">
                                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="admin_search_check()"
                                    ></i></button>
                                    <script>
                                        function admin_search_check(){
                                                if(!document.adminSearch.adminSearchInput.value){
                                                alert('검색어를 입력해주세요');
                                                document.adminSearch.adminSearchInput.focus();
                                                return false;
                                            }
                                            document.adminSearch.submit();
                                        }                                        
                                    </script>
                                </form>

                            </div>
                            <!-- end of search -->
                        
                        </div>
                        <!-- end of search Page -->
                    </div>    
                    <!-- end of msg tab -->

                    <div class="memberTab deWeBoxes adminPanel">
                        <div class="adminTable">
                            <ul class="adminList">
                                <li class="adminTitle clear">
                                
                                    <span class="memNum">번호</span>
                                    <span class="memId">아이디</span>
                                    <span class="memName">이름</span>
                                    <span class="memLevel">레벨</span>
                                    <span class="memPoint">포인트</span>
                                    <span class="memUpdate">수정</span>
                                    <span class="memDelete">삭제</span>
                                    
                                </li>

                                <?php
                                // include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                                $sql="select * from gold_mem order by gold_mem_num desc limit 10";                     

                                $mem_result=mysqli_query($dbConn, $sql);
                                
                                while($mem_row=mysqli_fetch_array($mem_result)){
                                    $mem_num=$mem_row['gold_mem_num'];
                                    $mem_id=$mem_row['gold_mem_id'];
                                    $mem_name=$mem_row['gold_mem_name'];
                                    $mem_level=$mem_row['gold_mem_level'];
                                    $mem_point=$mem_row['gold_mem_point'];
                                    // $mem_reg=$mem_row['gold_mem_reg'];
                                
                                ?>    

                                <li class="adminContents clear">
                                    <form action="/gold/php_process/pages/mem_update.php?num=<?=$mem_num?>" method="post">
                                        <span class="memNum"><?=$mem_num?></span>
                                        <span class="memId"><?=$mem_id?></span>
                                        <span class="memName"><?=$mem_name?></span>
                                        <span class="memLevel"><input type="text" value="<?=$mem_level?>" name="level"></span>
                                        <span class="memPoint"><input type="text" value="<?=$mem_point?>" name="point"></span>
                                        <span class="memUpdate"><button type="submit">수정</button></span>
                                        <span class="memDelete"><button type="button" onclick="location.href='/gold/php_process/pages/mem_delete.php?num=<?=$mem_num?>'"><i class="fa fa-remove"></i></button></span>
                                    </form>                              

                                    
                                </li>
                                <?php
                                }
                                ?>
                                        
                            </ul>
                        </div>
                        <!-- end of admin table -->
                        <div class="searchPaging clear">
                            <div class="search">
                                <form action="/gold/pages/admin/search_result.php?key=mem_result" method="post" name="memberSearch" class="clear adminSearch">
                                    <select name="searchSelect" id="" class="searchSelect">
                                        <option value="memberSearchId">아이디</option>
                                        <option value="memberSearchName">이름</option>
                                    </select>
                                    <input type="text" name="memberSearchInput" placeholder="검색어를 입력해주세요"
                                    class="adminSearchInput">
                                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="member_search_check()"
                                    ></i></button>
                                    <script>
                                        function member_search_check(){
                                                if(!document.memberSearch.memberSearchInput.value){
                                                alert('검색어를 입력해주세요');
                                                document.memberSearch.memberSearchInput.focus();
                                                return false;;
                                            }
                                            document.memeberSearch.submit();
                                        }                                        
                                    </script>
                                </form>

                            </div>
                            <!-- end of search -->
                        
                        </div>
                        <!-- end of search Page -->
                
                    </div>
                    <!-- end of memberTab -->
                    
                    <div class="qnaTab deWeBoxes adminPanel">
                        <div class="adminTable">
                            <ul class="adminList">
                                <li class="adminTitle clear">         
                                    <span class="qnaCheck">선택</span>                                                              
                                    <span class="qnaNum">번호</span>
                                    <span class="qnaId">아이디</span>
                                    <span class="qnaTit">제목</span>
                                    <span class="qnaReg">등록일</span>
                                    <span class="qnaHit">조회수</span>
                                </li>


                                <form action="/gold/php_process/pages/qna_check_delete.php" method="post" name="adminQnaDelete">
                                <?php
                                    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                                    $sql="select * from gold_qna order by gold_qna_num desc limit 5";
                                    $qna_result=mysqli_query($dbConn, $sql);
                                    
                                    while($qna_row=mysqli_fetch_array($qna_result)){
                                    $qna_res_num=$qna_row['gold_qna_num'];
                                    $qna_res_id=$qna_row['gold_qna_id'];
                                    $qna_res_tit=$qna_row['gold_qna_tit'];
                                    $qna_res_reg=$qna_row['gold_qna_reg'];    
                                    $qna_res_hit=$qna_row['gold_qna_hit'];                                    
                                ?>

                                <li class="adminContents clear">
                                    <span class="qnaCheck"><input type="checkbox" name="item[]" value="<?=$qna_res_num?>"></span>
                                    <span class="qnaNum"><?=$qna_res_num?></span>
                                    <span class="qnaId"><?=$qna_res_id?></span>

                                    <?php
                                    $sql="select * from gold_ans where gold_ans_qna_num=$qna_res_num order by gold_ans_num desc";
                                    $ans_res=mysqli_query($dbConn, $sql);
                                    
                                    // ans_res값을 불러옴
                                    $is_ans_res=mysqli_num_rows($ans_res);

                                
                                    // 답변이 없을 때는
                                    if(!$is_ans_res){
                                    ?>
                                    <!-- 원래대로 보여주고 -->
                                    <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?></a></span>
                                    
                                    <?php
                                    // 답변이 있을 때는
                                    }else{
                                    ?>
                                    <!-- [답변완료] 표시 -->
                                    <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?>[답변완료]</a></span>


                                    <?php
                                    }
                                    ?>

                                    <span class="qnaReg"><?=$qna_res_reg?></span>
                                    <span class="qnaHit"><?=$qna_res_hit?></span>
                                </li>

                                <?php
                                    }
                                ?>
                                </form>
                            </ul>
                        </div>      
                        <!--end of admin Table  -->
                        

                        <div class="searchPaging clear">
                            <button type="button" onclick="qnaCheckDelete()" class="checkDeleteBtn">선택 삭제</button>
                            <div class="search">
                                <form action="/gold/pages/admin/search_result.php?key=qna_result" method="get" name="qnaSearch" class="clear adminSearch">
                                    <select name="searchSelect" id="" class="searchSelect">
                                        <option value="qnaSearchId">아이디</option>
                                        <option value="qnaSearchTit">제목</option>
                                    </select>
                                    <input type="hidden" name="key" value="qna_result">
                                    <input type="text" name="qnaSearchInput" placeholder="검색어를 입력해주세요"
                                    class="adminSearchInput">
                                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="qna_search_check()"
                                    ></i></button>
                                    <script>
                                        function qna_search_check(){
                                                if(!document.qnaSearch.qnaSearchInput.value){
                                                alert('검색어를 입력해주세요');
                                                document.qnaSearch.qnaSearchInput.focus();
                                                return;
                                            }
                                            document.qnaSearch.submit();
                                        }                                        
                                    </script>
                                </form>

                            </div>
                            <!-- end of search -->
                            
                        
                        </div>
                        <!-- end of search Page -->                        
                        
                    
                    </div>
                    <!-- end of Qna Tab -->
                    <script>
                        function qnaCheckDelete(){
                            document.adminQnaDelete.submit();
                        }
                    </script>

                    
                </div>  
                <!-- end of center -->
            </section>
            <?php
            }
            ?>
            
                <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/about.php" ?>       
                <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/footer.php" ?> 
            
        </div>

        <!-- jquery frame work -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- main jqeury link -->
        <script src="/gold/js/custom.js"></script>
        <script src="/gold/js/web_design_page.js"></script>
        <script src="/gold/js/admin.js"></script>



        

       
        
        
    </body>
</html>
