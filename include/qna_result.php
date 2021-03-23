<div class="qnaTab deWeBoxes adminPanel admin">
                            <div class="adminTable">
                                <ul class="adminList">
                                    <li class="adminTitle clear">         
                                        <span class="qnaCheck">선택</span>                                                              
                                        <span class="qnaNum">번호</span>
                                        <span class="qnaId">아이디</span>
                                        <span class="qnaTit">제목</span>
                                        <span class="qnaReg">등록일</span>
                                        <span class="qnaHit">조회수</span>
                                    </li>

                                    <form action="/gold/php_process/pages/qna_check_delete.php" method="post" name="adminQnaDelete">

                                  
                                    <?php
                                    $qna_search_select=$_POST['searchSelect'];
                                    $qna_search_input=$_POST['qnaSearchInput'];




                                        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                                        $sql="select * from gold_qna order by gold_qna_num desc limit 5";
                                       
                                        if($qna_search_select == 'qnaSearchId'){
                                            $sql="select * from gold_qna where gold_qna_id LIKE '%$qna_search_input%' order by gold_qna_num desc";
                                        }else{
                                            $sql="select * from gold_qna where gold_qna_tit LIKE '%$qna_search_input%' order by gold_qna_num desc";
                                        }
                                        $qna_search_result=mysqli_query($dbConn, $sql);
                                        $qna_search_result_num=mysqli_num_rows($qna_search_result);

                                        if(!$qna_search_result_num){
                                            echo "<li style='padding:10px 0; width:100%; text-align:center;'>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요</li>";
                                        } else{
                                           while($qna_search_result_row=mysqli_fetch_array($qna_search_result)){
                                               $qna_res_num=$qna_search_result_row['gold_qna_num'];
                                               $qna_res_id=$qna_search_result_row['gold_qna_id'];                                              
                                               $qna_res_tit=$qna_search_result_row['gold_qna_tit'];
                                               $qna_res_reg=$qna_search_result_row['gold_qna_reg'];
                                               $qna_res_hit=$qna_search_result_row['gold_qna_hit'];
                                                                         
                                    ?>

                                    <li class="adminContents clear">
                                        <span class="qnaCheck"><input type="checkbox" name="item[]" value="<?=$qna_res_num?>"></span>
                                        <span class="qnaNum"><?=$qna_res_num?></span>
                                        <span class="qnaId"><?=$qna_res_id?></span>

                                        <?php
                                        $sql="select * from gold_ans where gold_ans_qna_num=$qna_res_num order by gold_ans_num desc";
                                        $ans_res=mysqli_query($dbConn, $sql);
                                        
                                        // ans_res값을 불러옴
                                        $is_ans_res=mysqli_num_rows($ans_res);

                                    
                                        // 답변이 없을 때는
                                        if(!$is_ans_res){
                                        ?>
                                        <!-- 원래대로 보여주고 -->
                                        <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?></a></span>
                                        
                                        <?php
                                        // 답변이 있을 때는
                                        }else{
                                        ?>
                                        <!-- [답변완료] 표시 -->
                                        <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?>[답변완료]</a></span>


                                        <?php
                                        }
                                        ?>

                                        <span class="qnaReg"><?=$qna_res_reg?></span>
                                        <span class="qnaHit"><?=$qna_res_hit?></span>
                                    </li>

                                    <?php
                                        }
                                    }    
                                    ?>

                                    </form>
                                   
                                </ul>
                            </div>      
                            <!--end of admin Table  -->
                            <div class="qnaResultBtns adminViewBtns">
                                <button type="button" onclick="qnaCheckDelete()">선택 삭제</button>
                                <button type="button" onclick="history.go(-1)">뒤로가기</button>

                            </div>
                                                               
                            
                        
</div>
<!-- end of Qna Tab -->
<script>
    function qnaCheckDelete(){
        document.adminQnaDelete.submit();
    }
</script>