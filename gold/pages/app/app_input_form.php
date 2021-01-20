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
            <div class="designInputForm webDesignInput">
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
