$(function () {

    let count = 4;
    let addData = 0;
    let allData = [];


    $('.appBoxes').masonry({
        // options
        itemSelector: '.appBox',
        columnWidth: '.appBox-sizer',
        percentPosition: true
    });

    $.getJSON("/gold/data/json/app.json", initAppData);

    function initAppData(data) {
        allData = data;
        // 파라미터를 특정 변수에 저장해준 다음 끌어내서 쓴다!
        addAppData();

        $(".appLoadMore").on("click", addAppData);
        // appLoadMore버튼을 클릭하면, 아래의 addAppData 함수가 실행
        // -> 네개씩 나오게 하는 함수 

    }


    function addAppData() {
        // console.log(data[0].appcli); 
        let items = [];
        // 비어있는 배열 하나 만들기
        // 비어있는 items에 밑에것들을 있는만큼 뿌려줌
        // but, 우리는 4개씩만 필요. -> 초기에 let변수 설정해줌 

        let slicedData = allData.slice(addData, addData + count);
        // 0(addData)부터 4개(addData + count)를 잘라서 slicedData에 저장

        $.each(slicedData, function (i, item) {

            // console.log(item);
            let itemHTML = `<div class="appBox">
                                <div>
                                    <img src="/gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                                    <h2>${item.apptit}</h2>
                                    <a href="/gold/pages/app/app_detail.php?num=${item.appnum}">View Detail</a>
                                </div>
                                </div>`;
            items.push($(itemHTML).get(0));

        });

        $(".appBoxes").append(items);
        // append:뒤에 것을 가져옴

        $(".appBoxes").imagesLoaded(function () {
            // $(items).removeClass("is-loading");
            // 데이터가 다 들어오면 is-loading이 없어짐
            $(".appBoxes").masonry('appended', items);
            // appended해서 items가 들어왔을 때 masonry가 인식을 하는 것

            addData += slicedData.length;
            // silcedData(초기값 4)의 개수를 누적 시켜줌
            // 초기 실행후 함수 나가고, 다음 함수 실행하면 8개, 다음함수 실행하면 12개 .....


        });

    }


});
