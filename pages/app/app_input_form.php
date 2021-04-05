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
                 <!-- <a href="#" class="subLink">View More Details</a> -->
               </div>
            </div>
            <!-- end of contact title -->

            <!-- app input contents form -->
            <div class="designInputForm appInputForm webDesignInput ">
                <form action="/gold/php_process/pages/app_insert.php" method="post" name="app_form" enctype="multipart/form-data">
                  <div class="titleSer clear">
                      <p class="title_input">
                         <label for="title">Title</label>
                         <input type="text" placeholder="Title Here" id="title" name="app_title">
                      </p>      
                      <p class="serial_input">
                         <label for="serial">SerialNo.</label>
                         <input type="text" placeholder="SerialNo. Here" id="serial"     name="app_serial">
                      </p>     
                      <p class="client_input">
                         <label for="client">Client</label>
                         <input type="text" placeholder="client Here" id="client" name="app_client">
                      </p>                    
                  </div>
                  <!-- end of title, serial, client input -->
                  <div class="app_desc uploadDesc">
                      <textarea name="app_desc" placeholder="App Description Here"></textarea>
                  </div>
                  <!-- end of text description -->

                  <div class="uploadImgs clear">
                      <div class="uploadBox appImg img1">
                         <div class="inputControll">
                           <input class="uploadName" placeholder="Main image">
                           <label for="mainImage">SELECT IMAGE</label>
                           <input type="file" id="mainImage" class="uploadHidden" name="app_main" accept="image/*" value=1>
                         </div>
                         <div class="img1_box imgWrap">
                             <img id="img1">
                         </div>
                      </div>
                      <div class="uploadBox appImg img2">
                        <div class="inputControll">
                           <input class="uploadName" placeholder="Sub image">
                           <label for="subImage">SELECT IMAGE</label>
                           <input type="file" id="subImage" class="uploadHidden" name="app_sub" accept="image/*" value=1>
                         </div>
                         <div class="img2_box imgWrap">
                             <img id="img2">
                         </div>
                      
                      </div>
                     
                  </div>
                  <!-- end of image upload box -->
                                   
                </form>                      

            </div>
            <!-- end of app input form -->
                      
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
        if(!document.app_form.app_title.value){
          alert('상품명을 입력해 주세요!');
          document.app_form.app_title.focus();
          return;
        }

        if(!document.app_form.app_serial.value){
          alert('시리얼 넘버를 입력해 주세요!');
          document.app_form.app_serial.focus();
          return;
        }

        if(!document.app_form.app_client.value){
          alert('납품 업체명을 입력해 주세요!');
          document.app_form.app_client.focus();
          return;
        }
        if(!document.app_form.app_desc.value){
          alert('상품 설명을 입력해 주세요!');
          document.app_form.app_desc.focus();
          return;
        }

        if(!document.app_form.app_main.value){
          alert('메인 사진을 입력해 주세요!');          
          return;
        }

        if(!document.app_form.app_sub.value){
          alert('서브 사진을 입력해 주세요!');          
          return;
        }

        document.app_form.submit();
        
      });
    </script>
       
    
    
  </body>
</html>
