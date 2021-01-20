<?php

    $app_detail_num=$_GET['num'];

    //   include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    //   $sql="select * from gold_web where gold_web_num=$web_detail_num";

    //   $web_detail_result=mysqli_query($dbConn, $sql);
    //   $web_detail_row=mysqli_fetch_array($web_detail_result);


    
    //   $web_detail_tit=$web_detail_row['gold_web_tit'];
    //   $web_detail_ser=$web_detail_row['gold_web_ser'];
    //   $web_detail_des=$web_detail_row['gold_web_des'];
    //   $web_detail_img=$web_detail_row['gold_web_img'];
    //   $web_detail_mimg=$web_detail_row['gold_web_mimg'];
    // //   $web_detail_thumb=$row['gold_de_thumb'];
    //   $web_detail_cli=$web_detail_row['gold_web_cli'];
    //   $web_detail_reg=$web_detail_row['gold_web_reg'];

    // //   echo $design_detail_tit, $design_detail_ser, $design_detail_des, 
    // //   $design_detail_img1, $design_detail_img2, $design_detail_thumb, 
    // //   $design_detail_cli, $design_detail_reg;


?>


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

    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />

    <!-- media query style css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    
  </head>
  <body>
    <div class="wrap">     
      <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?> 

      <section class="contents appDetail deWeDetail">
        <div class="center clear">
          <div class="appLeft deWeLeft">
            <!-- title with common style -->
            <div class="title">
              <h2>Applications</h2>
              <div class="linkBox">
                <span class="line"></span>
                <a href="/gold/pages/app/app.php"> View all website</a>
              </div>
            </div>
            <!-- end of common title -->

            <div class="detailCon">             
                                     
            </div>           
            <!-- end of web designContents -->
          </div>
          <!-- end of left box -->
 
          <div class="appRight deWeRight">   
            
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/web_side_detail.php" ?> 
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/app_side_detail.php" ?>  
          

          </div>
          <!-- end of design Right box  -->          
          

        </div>  
        <!-- end of center      -->
            
      </section>
      
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/about.php" ?>       
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/footer.php" ?> 
    
    </div>

    <!-- jquery frame work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- main jqeury link -->
    <script src="/gold/js/custom.js"></script>
    
    <script src=/gold/js/web_detail.js></script>
    
    
    
  </body>
</html>
