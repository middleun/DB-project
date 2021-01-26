<li class="qnaTitle clear">
                                        <span class="qnaNum">번호</span>
                                        <span class="qnaId">아이디</span>
                                        <span class="qnaTit">제목</span>
                                        <span class="qnaReg">등록일</span>
                                        <span class="qnaHit">조회수</span>
</li>                    

<?php

  $page=$_REQUEST["page"];
 
  if($page==""){
    $page=1;
  }


  $from=($page-1)*5;


    include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
    $sql="select * from gold_qna order by gold_qna_num desc limit $from, 5";
    $qna_result=mysqli_query($dbConn, $sql);
    
    while($qna_row=mysqli_fetch_array($qna_result)){
    $qna_res_num=$qna_row['gold_qna_num'];
    $qna_res_id=$qna_row['gold_qna_id'];
    $qna_res_tit=$qna_row['gold_qna_tit'];
    $qna_res_reg=$qna_row['gold_qna_reg'];    
    $qna_res_hit=$qna_row['gold_qna_hit'];                                    
?>

<li class="qnaContent clear">
    <span class="qnaNum"><?=$qna_res_num?></span>
    <span class="qnaId"><?=$qna_res_id?></span>
    <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?></a></span>
    <span class="qnaReg"><?=$qna_res_reg?></span>
    <span class="qnaHit"><?=$qna_res_hit?></span>
</li>
<?php
  }
?>
                                