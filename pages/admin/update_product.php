<!-- 디자인, 웹, 앱 컨텐츠 수정 공통 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Handwritten Heart</title>

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
               <h2>update projects</h2>
               <div class="subTit">
                 <span class="subLine"></span>
                 <!-- <a href="#" class="subLink">View More Details</a> -->
               </div>
            </div>
            <!-- end of contact title -->
            <?php
                $include_path=$_GET['key']; 
                include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/$include_path.php" ;
            ?>               
            
                      
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

  
  </body>
</html>
