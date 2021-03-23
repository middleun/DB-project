<div class="detailWeb">
              <div class="webTit">
                <h2>Recent Web Services</h2>
                <a href="/gold/pages/web/web.php">View All</a>
              </div>

              <?php
                   include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                   $sql="select * from gold_web order by gold_web_num desc limit 3";
   
                   $web_side_result=mysqli_query($dbConn,$sql);
   
                   while($web_side_row=mysqli_fetch_array($web_side_result)){
                     $web_side_num=$web_side_row['gold_web_num'];
                     $web_side_thumb=$web_side_row['gold_web_thumb'];
                     $web_side_title=$web_side_row['gold_web_tit'];
                     $web_side_desc=$web_side_row['gold_web_des'];  
                    //  $web_side_domain=$web_side_row['gold_web_dom'];              

              ?>

              <div class="webLinks">
                <div class="subWebImg">
                  <img src="/gold/data/web_page/thumb/<?=$web_side_thumb?>" alt="">                
                </div>
                <div class="subWebTxt">
                  <a href="/gold/pages/web/web_detail.php?num=<?=$web_side_num?>"><?=$web_side_title?></a>
                  <em><?=$web_side_desc?></em>                 
                </div>
              </div>   
              <!--end of looped web links  -->

              <?php
                   }
              
              ?>
             

</div>     
<!-- <!-end of detail web-  -->