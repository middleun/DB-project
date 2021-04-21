<?php
 

  session_start();
  if(isset($_SESSION["userid"])){
    $userid=$_SESSION["userid"];


  }else{
    $userid='';

  }

  if(isset($_SESSION["userpoint"])){
    $userpoint=$_SESSION["userpoint"];

  }else{
    $userpoint='';
  }

  if(isset($_SESSION["userlevel"])){
    $userlevel=$_SESSION["userlevel"];


  }else{
    $userlevel='';
  }

  // echo $userlevel;

?>

<!-- top main section -->
<div class="topMain clear">
    <div class="bannerBox">
        <div class="slogan">
            <h2>Handwritten<b><br>--Heart<i class="fas fa-pen-fancy"></i></b></h2>
            <!-- <hr /> -->
            <p>마음을 모아 글씨에 담다 </p>
        </div>
    </div>

    <div class="headerBox"></div>
    <div class="loginWrap">
        <div class="logBox">
            <?php
                if(!$userid){        
            
            ?>

            <a href="/gold/pages/login/login_form.php">LOGIN</a>
            <a href="/gold/pages/login/join_form.php">JOIN US</a>
            
            <!-- <a href="#">ADMIN</a> -->
            <?php
                }else {
                if($userlevel==1){
            ?>
                <a href="/gold/php_process/login/logout.php">LOGOUT</a>
                <a href="#"><?=$userid?>[<?=$userpoint?>]</a>
                <a href="/gold/pages/admin/admin.php">ADMIN</a>

                <?php
                } else{     
                ?>

                <a href="/gold/php_process/login/logout.php">LOGOUT</a>
                <a href="#"><?=$userid?>[<?=$userpoint?>]</a>
            
            <?php
                }
                } 
            ?>  

        </div>
    </div>
    <div class="gnb">
        <ul class="clear">
            <li class="active"><a href="/gold/index.php?key=0">HOME</a></li>
            <li><a href="/gold/pages/design/design.php">Artwork</a></li>
            <li><a href="/gold/pages/web/web.php">Brush</a></li>
            <li><a href="/gold/pages/app/app.php">Pen</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="/gold/pages/qna/qna.php">Q&A</a></li>
        </ul>
        <div class="mobileMenu">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</div>
<!-- end of top main -->

<script>

  const pathname=window.location.pathname;
  const gnbLi=document.querySelectorAll('.gnb li');
  
  for(let i=0; i<gnbLi.length; i++){
    gnbLi[i].classList.remove('active');
  }

  if(pathname.includes('index')){
    gnbLi[0].classList.add('active');
  }else if(pathname.includes('design')){
    gnbLi[1].classList.add('active');
  }else if(pathname.includes('web')){
    gnbLi[2].classList.add('active');
  }else if(pathname.includes('app')){
    gnbLi[3].classList.add('active');
  }else if(pathname.includes('qna')){
    gnbLi[5].classList.add('active');
  }
    // console.log(gnbLi);
   
</script>
