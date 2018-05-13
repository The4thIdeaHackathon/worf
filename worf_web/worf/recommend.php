<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/swiper.css">
        <link rel="stylesheet" href="./css/recommend.css">
    </head>
    <body>
        <center>
            <div style="width:80%;">
                <div class=title>한국 문화에 익숙하지 않은 외국인들과 <br>이런 것을 해보는 것은 어떠신가요?</div>
                <div class=tag_box>
                <div class=hash_box onclick="search_map('전주 닭갈비')">#닭갈비</div>
                        <div class=hash_box onclick="search_map('전주 치킨')">#치킨</div>
                        <div class=hash_box onclick="search_map('덕진공원')">#덕진공원</div>
                        <div class=hash_box  onclick="search_map('전주 한옥마을')">#한옥마을</div>
                        <div class=hash_box  onclick="search_map('전주 양궁')">#양궁</div>
                        <div class=hash_box  onclick="search_map('전주 짜장면')">#짜장면</div>
                        <div class=hash_box  onclick="search_map('전주 냉면')">#냉면</div>
                        <div class=hash_box  onclick="search_map('전주 양궁')">#양궁</div>
                        <div class=hash_box  onclick="search_map('전주 짜장면')">#짜장면</div>
                        <div class=hash_box  onclick="search_map('전주 치킨')">#냉면</div>
                </div>
            </div>
            
        </center>
        <div id="map" style="width:100%;height:350px;"></div>
        <div class=ad>
            <div class=ad_text1>외국인 대학원 원서접수</div>
            <div class=ad_text2>Applying for Graduate Admission</div>
            <div class=ad_text2>기간:2018. 4. 9.(월) ~6 .1.(금)</div>
            <div class=ad_button>바로가기</div>
        </div>
        <script src="./js/swiper.js"></script>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=1f21032f6cba9f83445af17af392233e&libraries=services"></script>
        <script>
            function search_map(str){
                console.log("Search"+str);
                ps.keywordSearch(str,placesSearchCB);
            }
            // 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
            var infowindow = new daum.maps.InfoWindow({zIndex:1});

            var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                mapOption = {
                    center: new daum.maps.LatLng(35.846776,127.129390), // 지도의 중심좌표
                    level: 5 // 지도의 확대 레벨
                };  

            // 지도를 생성합니다    
            var map = new daum.maps.Map(mapContainer, mapOption); 

            // 장소 검색 객체를 생성합니다
            var ps = new daum.maps.services.Places(); 


            var makers=[]
            // 키워드 검색 완료 시 호출되는 콜백함수 입니다
            function placesSearchCB (data, status, pagination) {
                if (status === daum.maps.services.Status.OK) {

                    // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
                    // LatLngBounds 객체에 좌표를 추가합니다
                    var bounds = new daum.maps.LatLngBounds();
                    deleteAllMakers();
                    for (var i=0; i<data.length; i++) {
                        displayMarker(data[i]);    
                        bounds.extend(new daum.maps.LatLng(data[i].y, data[i].x));
                    }       

                    // // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
                    map.setBounds(bounds);
                } 
            }
            function deleteAllMakers(){
                for(var i=0;i<makers.length;i++){
                    makers[i].setMap(null);
                }
            }
            // 지도에 마커를 표시하는 함수입니다
            function displayMarker(place) {
                
                // 마커를 생성하고 지도에 표시합니다
                var marker = new daum.maps.Marker({
                    map: map,
                    position: new daum.maps.LatLng(place.y, place.x) 
                });
                makers.push(marker);
                // 마커에 클릭이벤트를 등록합니다
                daum.maps.event.addListener(marker, 'click', function() {
                    // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
                    infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.place_name + '</div>');
                    infowindow.open(map, marker);
                });
            }
            
            </script>
    </body>
</html>