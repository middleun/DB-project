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
                <h2>Your Inquiry</h2>
                <div class="subTit">
                    <span class="subLine"></span>
                    <a href="#" class="subLink">View More Details</a>
                </div>
                </div>
                <!-- end of contact title -->

                <div class="qnaBoxes deWeBoxes">
                    <div class="qnaTable">
                        <ul class="qnaList">
                            <li class="qnaTitle">
                                <span class="qnaNum">번호</span>
                                <span class="qnaId">아이디</span>
                                <span class="qnaTit">제목</span>
                                <span class="qnaReg">등록일</span>
                                <span class="qnaHit">조회수</span>
                            </li>
                            
                        </ul>
                    </div>

                


                    
                
                </div>
                <!-- end of webBoxes -->
                
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
