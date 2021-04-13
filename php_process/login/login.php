<?php
  
 //    입력 데이터 전달 받아 저장
  $login_id=$_POST['loginId'];
  $login_pass=$_POST['loginPass'];


  echo $login_id, $login_pass;

 //   데이터베이스 접속 후 조회결과 회수
 include $_SERVER['DOCUMENT_ROOT']."/gold/php_process/connect/db_connect.php";

 //GOLD_mem_id 컬럼 데이터와 $login_id 입력 데이터 비교하여 같은 값 조회  
 $sql="select * from gold_mem where gold_mem_id='$login_id'";

 $result=mysqli_query($dbConn, $sql);
 // mysquli_num_rows : 일치하는 갯수를 조회  
 $num_match=mysqli_num_rows($result);
 
 //  mysqli_fetch_array : 데이터 추출. 배열로 뽑아옴

 if(!$num_match){
     echo"
     <script>
       alert('등록되지 않은 아이디입니다.');
       history.go(-1);     
     </script>
    ";
 } else{
    $row=mysqli_fetch_array($result);
    $db_pass=$row['gold_mem_pass'];

    if($login_pass != $db_pass){

        echo"
     <script>
       alert('비밀번호를 확인해주세요.');
       history.go(-1);     
     </script>
    ";
    } else{
      session_start();
      $_SESSION["userid"]=$row['gold_mem_id'];
      $_SESSION["userpoint"]=$row['gold_mem_point'];
      $_SESSION["userlevel"]=$row['gold_mem_level'];


      echo"
        <script>
          location.href='/gold/index.php';
        </script>
      ";  
    }
 }

?>