
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gold</title>

        <!-- favicon link -->
        <link rel="icon" href="/gold/img/favicon.ico"/>

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

            <section class="contents qna hasTitle">
                    <div class="center">
                        <!-- contact title -->
                        <div class="title">
                            <h2>Message Details</h2>
                            <div class="subTit">
                                <span class="subLine"></span>
                               
                            </div>
                        </div>
                        <!-- end of contact title -->

                        <?php

                        $msg_num=$_GET['num'];

                        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                        $sql="select * from gold_msg where gold_msg_num=$msg_num";

                        $msg_result=mysqli_query($dbConn, $sql);
                        $msg_row=mysqli_fetch_array($msg_result);

                        $msg_name=$msg_row['gold_msg_name'];
                        $msg_tit=$msg_row['gold_msg_tit'];                   
                        $msg_con=$msg_row['gold_msg_con'];
                        $msg_reg=$msg_row['gold_msg_reg'];
                        $msg_email=$msg_row['gold_msg_email'];                       

             

                        // $sql="update gold_msg set gold_qna_hit=$new_hit where 
                        // gold_qna_num=$ans_num";

                        mysqli_query($dbConn, $sql);


                        ?>


                        <!-- qna_view.php 페이지와 동일한 클래스로 작성 -->
                        <div class="qnaBoxes qnaView adminView deWeBoxes">       
                          

                            <div class="writerInfo">
                                <p>posted by <?=$msg_name?> No.<?=$msg_num?> / <?=$msg_reg?> /<?=$msg_email?></a></p>
                            </div>                                      
                                                      
                            <div class="writeBox clear"> 
                                <div class="writeForm">                                        
                                    <p class="adminTitInput">
                                        <label for="adminTitle">제목</label>
                                        <input type="text" name="adminTitle" id="adminTitle" placeholder="제목을 입력해주세요" value="<?=$msg_tit?>">
                                    </p>
                                    <p class="adminInput">
                                        <textarea name="adminTxt" placeholder="내용을 입력해주세요"><?=$msg_con?></textarea>
                                    </p>  
                                </div>
                                                      
                            
                            </div>                                            
                            <!-- end of writeBox -->
                            <div class="adminViewBtns">
                                <a href="mailto:<?=$msg_mail?>">메일보내기</a>
                                <a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_num?>">삭제</a>
                                <a href="/gold/pages/admin/admin.php">뒤로가기</a>

                            </div>
                          
                           
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
