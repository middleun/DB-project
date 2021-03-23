          <div class="detailApp">
              <div class="appTit">
                <h2>Recent Application</h2>
                <a href="/gold/pages/app/app.php">View All</a>
              </div>

              <?php
                   include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                   $sql="select * from gold_app order by gold_app_num desc limit 3";
   
                   $app_side_result=mysqli_query($dbConn,$sql);
   
                   while($app_side_row=mysqli_fetch_array($app_side_result)){
                     $app_side_num=$app_side_row['gold_app_num'];
                     $app_side_thumb=$app_side_row['gold_app_thumb'];
                     $app_side_title=$app_side_row['gold_app_tit'];
                     $app_side_desc=$app_side_row['gold_app_des'];  
                    //  $web_side_domain=$web_side_row['gold_web_dom'];              

              ?>

              <div class="appLinks">
                <div class="subAppImg">
                   <img src="/gold/data/app_page/app_thumb/<?=$app_side_thumb?>" alt="">           
                 
                </div>
                <div class="subAppTxt">
                  <a href="/gold/pages/app/app_detail.php?num=<?=$app_side_num?>"><?=$app_side_title?></a>
                  <em><?=$app_side_desc?></em>                 
                       
                </div>
              </div>   
              <!--end of looped APP links  -->

              <?php
                   }
              
              ?>              

          </div>     
          <!-- <!-end of detail App-  -->