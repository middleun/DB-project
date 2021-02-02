<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gold</title>

        <!-- font awesome link -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />

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
                                                    return;
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
                                                    return;
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
                       
                        <div class="qnaTab deWeBoxes adminPanel">qna Tab</div>

                        
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

        <!-- <script>
            let abc=confirm('삭제하시겠습니까?');
           
        </script> -->

        

       
        
        
    </body>
</html>
