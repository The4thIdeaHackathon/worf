<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/chat.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        
        <div class=header>
            <div class=backbutton onclick="backbutton()"><img width=20 src="icon/KakaoTalk_20180512_023417978.png"></div>
            <!-- <div class=surveybutton onclick="survey()"><img width=25 src="icon/iconmonstr-warning-12-240.png"></div> -->
            <img style="width: 40px;margin-top: 10px;" src="icon/KakaoTalk_20180513_114002970.png">
        </div>
        <center>
            <center>
                <div class=content id=content>
                    <div style="height:80px"></div>
                    <!-- <div class=line>
                        <div class="left-chat bubble">안녕하세요 누구세용<div class="left date">2018/01/29</div></div>
                    </div>
                    <div class=line>
                        <div class="right-chat bubble">방가용<div class="right date">2018/01/29</div></div>
                    </div> -->
                </div>
                <div style="width:100%;height:80px;"></div>
            </center>
            <div id=key_input class=key_input>
                <div class=input_space>
                    <input type=text id=key_input_text> 
                </div>
                <div class=input_btn onclick="send_message()">
                    SEND
                </div>
            </div>

        </center>
        

        <script type="text/javascript" src="js/chat.js"></script>
    </body>
</html>