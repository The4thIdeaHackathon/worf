<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/matching.css">
    </head>
    <body>
        <div id=modal class=modal style="display:none;">
            <center>
                <div class=modal_content>
                    <img style="position: relative;top: 15px;" width=120 src="icon/KakaoTalk_20180512_005424422.gif">
                    <div class=modal_text>Waiting for a minit</div>
                </div>
            </center>
        </div>
        <center>
            <div style="width:100%;<height:3>\</height:3>0px;"></div>
            <div style="width:80%;margin-bottom: 10px;">
                <div class=tag>Intro</div>
                <div class=cont id=intro >닭갈비 먹고 싶어요!</div>
            </div>
            <div style="width:80%;">
                <div class=half_box>
                    <div class=tag>Name</div>
                    <div class=cont id=name>David</div>
                </div>
                <div class=half_box>
                    <div class=tag>Available language</div>
                    <div class=cont id=language>English</div>
                </div>
                <input type=hidden id=id>
            </div>
            <div class=button-container>
                <div class=button onclick="move_chatroom()">Send Message</div>
                <div class=button style="background:none;background-color:#494563 !important;" onclick="matching_process()">Re matching</div>
            </div>
        </center>
        <script src="./js/matching.js"></script>
    </body>
</html>