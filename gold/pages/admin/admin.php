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
                            <button type="button">WEB 관리</button>
                            <button type="button">APP 관리</button>
                            <button type="button">Q&A 관리</button>
                        </div>
                      
                        <div class="msgTab adminPanel">
                            <div class="msgTable">
                                <ul class="msgList">
                                    <li class="msgTitle clear">
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



                                    <li class="msgContents clear">
                                        <span class="msgNum"><?=$msg_num?></span>
                                        <span class="msgName"><?=$msg_name?></span>
                                        <span class="msgTit"><a href="#"><?=$msg_tit?></a></span>
                                        <span class="msgReg"><?=$msg_reg?></span>
                                        <span class="msgEmail"><?=$msg_email?></span>
                                        <span class="msgDelete"><a href="#">삭제</a></span>
                                    </li>    
                                    
                                    <?php
                                    }
                                    ?>
                                                                                      
                                </ul>
                            </div>                                           
                        
                        </div>
                        <!-- end of msg tab -->

                        <div class="memberTab adminPanel">
                        member tab</div>
                        <div class="webTab adminPanel">web Tab</div>
                        <div class="appTab adminPanel">app Tab</div>
                        <div class="qnaTab adminPanel">qna Tab</div>

                        
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
