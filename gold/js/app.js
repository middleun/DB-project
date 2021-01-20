$(function () {
    $('.appBoxes').masonry({
        // options
        itemSelector: '.appBox',
        columnWidth: '.appBox-sizer',
        percentPosition: true
    });

    $.getJSON("/gold/data/json/app.json", function (data) {
        // console.log(data[0].appcli); 
        let items = [];  // 비어있는 배열 하나 만들기
        $.each(data, function (i, item) {

            // console.log(item);
            let itemHTML = `<div class="appBox">
                            <div>
                                <img src="/gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                                    <h2>${item.apptit}</h2>
                                    <a href="#">View Detail</a>
                            </div>
                        </div>`;
            items.push($(itemHTML).get(0));

        });

        $(".appBoxes").append(items);
        // appended:뒤에 것을 가져옴

        $(".appBoxes").imagesLoaded(function () {
            // $(items).removeClass("is-loading");
            // 데이터가 다 들어오면 is-loading이 없어짐
            $(".appBoxes").masonry('appended', items);
            // appended해서 items가 들어왔을 때 masonry가 인식을 하는 것


        });

    });


});
