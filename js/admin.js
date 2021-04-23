$(function(){

    // admin page main tabs
    // 익명함수 (함수 이름이 따로 없고 변수에 저장했을 뿐)
    const adminTab=function(){
        $(".adminTabs button").click(function(){
            let tabIndex=$(this).index();

            $(".adminTabs button").removeClass("active");
            // 내가 클릭한 부분에만 active 추가
            $(this).addClass("active");

            $(".adminPanel").hide();
            $(".adminPanel").eq(tabIndex).show();
        });
        $(".adminTabs button").eq(0).trigger("click");
    };
    adminTab();
    
           
});