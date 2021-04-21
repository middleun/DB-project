<!-- msg tab of admin panel -->
<div class="msgTab deWeBoxes adminPanel">
    <div class="adminTable">
        <ul class="adminList">
            <li class="adminTitle clear">
                <span class="msgNum">번호</span>
                <span class="msgName">이름</span>
                <span class="msgTit">제목</span>
                <span class="msgReg">등록일</span>
                <span class="msgEmail">이메일</span>
                <span class="msgDelete">삭제</span>
            </li>      

            <?php
            $msg_search_select=$_POST['searchSelect'];
            $msg_search_input=$_POST['adminSearchInput'];

            // echo $search_select, $search_input;

            include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

            if($msg_search_select == 'adminSearchId'){
                $sql="select * from gold_msg where gold_msg_name LIKE '%$msg_search_input%' order by gold_msg_num desc";
            }else{
                $sql="select * from gold_msg where gold_msg_tit LIKE '%$msg_search_input%' order by gold_msg_num desc";


            }
            $msg_search_result=mysqli_query($dbConn, $sql);
            $msg_search_result_num=mysqli_num_rows($msg_search_result);

            if(!$msg_search_result_num){
                echo "<li style='padding:10px 0; width:100%; text-align:center;'>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요</li>";
            } else{
                while($msg_search_result_row=mysqli_fetch_array($msg_search_result)){
                    $msg_result_num=$msg_search_result_row['gold_msg_num'];
                    $msg_result_name=$msg_search_result_row['gold_msg_name'];
                    $msg_result_tit=$msg_search_result_row['gold_msg_tit'];
                    $msg_result_reg=$msg_search_result_row['gold_msg_reg'];
                    $msg_result_email=$msg_search_result_row['gold_msg_email'];                                         

            ?>

            <li class="adminContents clear">
                <span class="msgNum"><?=$msg_result_num?></span>
                <span class="msgName"><?=$msg_result_name?></span> 
                <span class="msgTit"><a href="/gold/pages/admin/admin_view.php?num=<?=$msg_result_num?>"><?=$msg_result_tit?></a></span>                                              
                <span class="msgReg"><?=$msg_result_reg?></span>
                <span class="msgEmail"><?=$msg_result_email?></span>
                <span class="msgDelete"><a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_result_num?>">삭제</a></span>

            </li>                                                                      

            <?php
                }
            }
            
            ?>       
                        
        </ul>
        <!-- end of admin list -->
    </div>
    <!-- end of admin table -->
    <div class="adminViewBtns">
        
        <a href="/gold/pages/admin/admin.php">뒤로가기</a>

    </div>
    <!-- end of adminViewBtns -->
</div>
<!-- end of msg tab -->