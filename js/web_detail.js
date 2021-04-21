$(function () {
    // cut right side text
    const cutTxtBox = $(".webLinks, .appLinks");
    for (let i = 0; i < cutTxtBox.length; i++) {
        let allTxt = cutTxtBox.eq(i).find("em").text();
        cutTxtBox.eq(i).find("em").text(allTxt.substr(0, 60));

    }

    // cf. 자바스크립트 파라미터정리 
    const fitPcFrame={
        we_fe: ".webPcFrame", 
        we_img:".webMainImg",
        we_box:".webBox",
        img_h:0.60,
        box_h_1:0.65, 
        box_h_2:0.92

    }

    const fitMobileFrame={
        we_fe: ".webMobileFrame", 
        we_img:".webMainImg_m",
        we_box:".webBox_m",
        img_h:0.92,
        box_h_1:0.8, 
        box_h_2:1.1
    }   

    // fit height display frame function
    // 프레임 값과 그 안에 들어가는 컨텐츠 값을 계산한 것
    function fitDisplay(fitFrame) {
        let frameWidth = $(fitFrame.we_fe).outerWidth();
        let contentWidth = $(".detailCon").outerWidth();
        let winWidth = $(window).width();
        $(fitFrame.we_img).outerHeight(frameWidth * fitFrame.img_h);

        if (winWidth > 800) {
            $(fitFrame.we_box).outerHeight(contentWidth * fitFrame.box_h_1);
        } else {
            $(fitFrame.we_box).outerHeight(contentWidth * fitFrame.box_h_2);
        }
    }


    $(window).resize(function () {
        fitDisplay(fitPcFrame);
        fitDisplay(fitMobileFrame);

    });

    fitDisplay(fitPcFrame);
    fitDisplay(fitMobileFrame);

    // portfolio display scroll up 
    function pfScrollUp(wf, img_h, fr_h, duration) {
        $(wf).on("mouseenter", function () {
            const imgHeight = $(img_h).height();
            const frameHeight = $(fr_h).height();
            $(img_h).stop().animate({ top: -imgHeight + frameHeight }, duration);
            // stop()은 이벤트 반복 실행 방지


        });

        $(wf).on("mouseleave", function () {
            $(img_h).stop().animate({ top: 0 }, 2500);
        });

    }

    // pc display scroll up
    pfScrollUp(".webPcFrame", "img.scrollUp", ".webMainImg", 2500);
    // mobile display scroll up
    pfScrollUp(".webMobileFrame", "img.scrollUp_m", ".webMainImg_m", 5000);


    // pc mobile tab
    $(".webTabBtns button").click(function () {
        let tabIndex = $(this).index();

        $(".webTab").hide();
        $(".webTab").eq(tabIndex).show();
        $(".webTabBtns button").removeClass("active");
        $(".webTabBtns button").eq(tabIndex).addClass("active");

        let frameWidth = $(".webPcFrame").outerWidth();
        let frameWidth_m = $(".webMobileFrame").outerWidth();
        $(".webPcFrame .webMainImg").outerHeight(frameWidth * 0.60);
        $(".webMobileFrame .webMainImg_m").outerHeight(frameWidth_m * 0.92);

    });

    $(".webTabBtns button").eq(0).trigger("click");

});