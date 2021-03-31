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

    <!-- join form css link -->
    <link rel="stylesheet" href="/gold/css/join_form.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />

    <!-- media query style css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />

    <script src="/gold/js/join_check.js" defer></script>
  </head>
  <body>
   <div class="wrap">
     
    <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/header.php" ?>

    <section class="contents join hasTitle">
      <div class="center">
        <!-- contact title -->
        <div class="title">
            <h2>Join Us</h2>
            <div class="subTit">
              <span class="subLine"></span>
              
            </div>
        </div>
        <!-- end of contact title -->
        <div class="joinBox">
          <form action="/gold/php_process/login/insertMembers.php" method="post" name="memberForm">
            <p class="idInputBox inputBox">
              <label for="id">ID</label>
              <input type="text" name="id" class="columnTitle" id="id" 
              placeholder="Your ID">
              <button type="button" name="button" class="columnTitle" 
              id="idCheck">  Check</button>
            </p>
            <p class="nameInputBox inputBox">
              <label for="name">NAME</label>
              <input type="text" name="name" class="columnTitle" id="name" 
              placeholder="Your Name">              
            </p>        
            <p class="passInputBox inputBox">
              <label for="pass">PASSWORD</label>
              <input type="password" name="pass" class="columnTitle" id="pass" 
              placeholder="Your Password">   
                  
            </p>     
            <p class="checkInputBox inputBox">
              <label for="pass">PASSWORD CHECK</label>
              <input type="password" name="check" class="columnTitle" id="check" 
              placeholder="Check Your Password">   
                  
            </p>
            <p class="emailInputBox inputBox">
              <label for="email">EMAIL</label>
              <input type="text" name="email1" class="email1" id="email1" 
              placeholder="your Email ID">   
              <span>@</span>
              <input type="text" name="email2" class="email2" id="email2" 
              placeholder="your Email Address">   
                  
            </p>     

            <div class="formBtns">
              <button type="button" class="sendBtn">SEND</button>
              <button type="button" class="resetBtn">RESET</button>
              
            </div>
          </form>
        </div> 
        <!--end of joinBox  -->
      </div>
      <!-- end of center -->

        
    </section>
      
    <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/about.php" ?>    
    <?php include $_SERVER["DOCUMENT_ROOT"]. "/gold/include/footer.php" ?>
    


    <!-- jquery frame work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- main jqeury link -->
    <script src="/gold/js/custom.js"></script>

    <script src="/gold/js/join_check.js"></script>
    <script>
      $(function(){
        $("#idCheck").click(function(){
          const url='/gold/php_process/login/member_check_id.php?id=' 
          + $("#id").val();
          $.get(url, function(data){
            alert(data);
          })

        });

      });
    </script>
    
  </body>
</html>
