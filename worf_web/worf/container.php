<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/swiper.css">
        <link rel="stylesheet" href="./css/container.css">
    </head>
    <body>
        <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-color:#39364d;color:white;">Matching</div>
            <div class="swiper-slide" style="background-color:#7A66FF;color:white;">Talking</div>
            <div class="swiper-slide" style="background-color:#4A3E99;color:white;">My Info</div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next" onclick="navi_swap(1)"><img class=next_button src="icon/KakaoTalk_20180512_023425342.png"></div>
        <div class="swiper-button-prev" onclick="navi_swap(-1)"><img  class=next_button src="icon/KakaoTalk_20180512_023417978.png"></div>
        </div>

        <div class="bottom">
          <iframe id='iframe' frameborder=0 framespacing=0 marginheight=0 marginwidth=0 vspace=0></iframe>
        </div>

        <script src="./js/swiper.js"></script>
        <script src="./js/container.js"></script>
    </body>
    
</html>
