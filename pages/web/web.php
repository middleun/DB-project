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
    <link rel="stylesheet" href="/gold/css/design_web_app.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />

    <!-- media query style css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    
  </head>
  <body>
   <div class="wrap">
     
       <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?> 

       <section class="contents web hasTitle">
         <div class="center">
            <!-- contact title -->
            <div class="title">
               <h2>Brush Lettering</h2>
               <div class="subTit">
                 <span class="subLine"></span>
                 <!-- <a href="#" class="subLink">View More Details</a> -->
               </div>
            </div>
            <!-- end of contact title -->

            <div class="webBoxes deWeBoxes">

                <?php
                   include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                   $sql="select * from gold_web order by gold_web_num desc";
   
                   $web_result=mysqli_query($dbConn,$sql);
   
                   while($web_row=mysqli_fetch_array($web_result)){
                     $web_num=$web_row['gold_web_num'];
                     $web_thumb_path=$web_row['gold_web_thumb'];
                     $web_title=$web_row['gold_web_tit'];
                     $web_desc=$web_row['gold_web_des'];  
                     $web_domain=$web_row['gold_web_dom'];              

                ?>


                <div class="webBox deWeBox">
                    <div>
                      <p class="webImg deWeImg">
                        <img src="/gold/data/web_page/thumb/<?=$web_thumb_path?>" alt="">                      
                      </p>                 
                    
                      <div class="webTxt deWeTxt">
                        <h2><?=$web_title?></h2>
                        <em class="cutTxt"><?=$web_desc?></em>
                      </div>
                      <div class="webBoxBtns">
                        <a href="/gold/pages/web/web_detail.php?num=<?=$web_num?>">View Details</a>
                        <a href="<?=$web_domain?>" target="_blank">View Website</a>
                      </div>  
                    </div>       
                
                </div>     
                <!-- end of looped webBox -->    
                
                <?php
                  }
                ?>
            
            </div>
            <!-- end of webBoxes -->
            
            <div class="btns">     
              <?php
                if($userlevel == 1){
              
              ?>        
              <a href="#" class="commonBtn webLoadMore">Load More</a>
              <a href="#" class="commonBtn toTop">Go To Top</a>
              <a href="/gold/pages/web/web_input_form.php" class="commonBtn">Upload Contents</a>
            </div>
            
              <?php
                } else{
                
              ?>
                <a href="#" class="commonBtn webLoadMore">Load More</a>
                <a href="#" class="commonBtn toTop">Go To Top</a>
  
              <?php
              }
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
    <script src="/gold/js/web_design_page.js"></script>

      
    
  </body>
</html>
