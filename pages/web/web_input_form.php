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
        <link rel="stylesheet" href="/gold/css/design_web_app_input.css">

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
                        <h2>upload projects</h2>
                        <div class="subTit">
                            <span class="subLine"></span>
                        </div>
                    </div>
                    <!-- end of contact title -->

                    <!-- design input contents form -->
                    <div class="webInputForm webDesignInput">
                        <form action="/gold/php_process/pages/web_insert.php" method="post" name="web_form" enctype="multipart/form-data" class="clear">
                            <div class="titleSer clear">
                                <p class="title_input">
                                    <label for="title">Title</label>
                                    <input type="text" placeholder="Title Here" id="title" name="web_title">
                                </p>      
                                <p class="serial_input">
                                    <label for="serial">SerialNo.</label>
                                    <input type="text" placeholder="SerialNo. Here" id="serial"     name="web_serial">
                                </p>     
                                <p class="client_input">
                                    <label for="client">Client</label>
                                    <input type="text" placeholder="Client Here" id="client" name="web_client">
                                </p>       
                                <p class="domain_input">
                                    <label for="domain">Domain</label>
                                    <input type="text" placeholder="Domain Here" id="domain" name="web_domain">
                                </p>                   
                            </div>
                            <!-- end of title, serial, client input -->
                            <div class="web_desc uploadDesc">
                                <textarea name="web_desc" placeholder="Website Description Here"></textarea>
                            </div>
                            <!-- end of text description -->

                            <div class="uploadImgs clear">
                                <div class="uploadBox img1">
                                    <div class="inputControll">
                                        <input class="uploadName" placeholder="Main Image">
                                        <label for="mainImage">SELECT IMAGE</label>
                                        <input type="file" id="mainImage" class="uploadHidden" name="main" accept="image/*" 
                                        value=1>
                                    </div>
                                    <div class="img1_box imgWrap">
                                        <img id="img1">
                                    </div>
                                </div>
                                <div class="uploadBox img2">
                                    <div class="inputControll">
                                        <input class="uploadName" placeholder="Mobile Image">
                                        <label for="subImage">SELECT IMAGE</label>
                                        <input type="file" id="subImage" class="uploadHidden" name="mobile" accept="image/*" 
                                        value=1>
                                    </div>
                                    <div class="img2_box imgWrap">
                                        <img id="img2">
                                    </div>
                                
                                </div>
                                <div class="uploadBox img3">
                                    <div class="inputControll">
                                        <input class="uploadName" placeholder="Thumbnail Image(400 * 400)">
                                        <label for="thumbImage">SELECT IMAGE</label>
                                        <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail" accept="image/*" 
                                        value=1>
                                    </div>
                                    <div class="thumb_box imgWrap">
                                        <img id="thumb">
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- end of image upload box -->
                                        
                        </form>                      

                    </div>
                    <!-- end of design input form -->
                            
                    <div class="btns">
                        <button type="button" class="commonBtn" id="submitBtn">UPLOAD</button>                    
                    </div>
                    
                            
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
        <script src="/gold/js/design_upload.js"></script>

        <script>
            const submitBtn=document.querySelector("#submitBtn");

            submitBtn.addEventListener('click',function(){
                if(!document.web_form.web_title.value){
                alert('상품명을 입력해 주세요!');
                document.web_form.design_title.focus();
                return;
                }

                if(!document.web_form.web_serial.value){
                alert('시리얼 넘버를 입력해 주세요!');
                document.web_form.web_serial.focus();
                return;
                }

                if(!document.web_form.web_client.value){
                alert('납품 업체명을 입력해 주세요!');
                document.web_form.web_client.focus();
                return;
                }

                if(!document.web_form.web_domain.value){
                alert('도메인을 입력해 주세요!');
                document.web_form.web_domain.focus();
                return;
                }

                if(!document.web_form.web_desc.value){
                alert('상품 설명을 입력해 주세요!');
                document.web_form.web_desc.focus();
                return;
                }

                if(!document.web_form.main.value){
                alert('pc 사진을 입력해 주세요!');          
                return;
                }

                if(!document.web_form.mobile.value){
                alert('모바일 사진을 입력해 주세요!');          
                return;
                }

                if(!document.web_form.thumbnail.value){
                alert('썸네일 사진을 입력해 주세요!');         
                return;
                }

                document.web_form.submit();
                
            });
        </script>      
        
        
    </body>
</html>
