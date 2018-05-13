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
                    <div class=modal_text>Waiting for a minute</div>
                </div>
            </center>
        </div>
        <center>
            <div class=intere_box>
                <div style="width:80%;">
                    <div class=tag>My Interesting</div>
                    <div class=tag_box>
                        <div class=hash_box onclick="add_hastag('#닭갈비')">#닭갈비</div>
                        <div class=hash_box onclick="add_hastag('#치킨')">#치킨</div>
                        <div class=hash_box onclick="add_hastag('#덕진공원')">#덕진공원</div>
                        <div class=hash_box onclick="add_hastag('#한옥마을')">#한옥마을</div>
                        <div class=hash_box onclick="add_hastag('#양궁')">#양궁</div>
                        <div class=hash_box onclick="add_hastag('#짜장면')">#짜장면</div>
                        <div class=hash_box onclick="add_hastag('#냉면')">#냉면</div>
                        <div class=hash_box onclick="add_hastag('#짬뽕')">#짬뽕</div>
                        <div class=hash_box onclick="add_hastag('#한식')">#한식</div>
                        <div class=hash_box onclick="add_hastag('#중식')">#중식</div>
                        <div class=hash_box onclick="add_hastag('#햄버거')">#햄버거</div>
                        <div class=hash_box onclick="add_hastag('#피자')">#피자</div>
                        <div class=hash_box onclick="add_hastag('#삼겹살')">#삽겹살</div>
                        <div class=hash_box onclick="add_hastag('#갈비')">#갈비</div>
                        <div class=hash_box onclick="add_hastag('#갈매기')">#갈매기</div>
                        <div class=hash_box onclick="add_hastag('#언어교류')">#언어교류</div>
                        <div class=hash_box onclick="add_hastag('#파스타')">#파스타</div>
                        <div class=hash_box onclick="add_hastag('#영화')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                        <div class=hash_box onclick="add_hastag('')">#영화</div>
                    </div>
                </div>
                <div class=button-container>
                    <div class="button find" onclick="matching_process()">상대 찾기!</div>
                 </div>
            </div>
            <div style="width:100%;height:100%;">
                <div style="width:100%;height:30px;">
                    <div style="width:80%;margin-bottom: 10px;">
                        <div id=match_status class=tag_title>성공적으로 매칭되었습니다!</div>
                        <div class=tag style="margin-top:30px;">Intro</div>
                        <div class=cont id=intro >　</div>
                    </div>
                    <div style="width:80%;">
                        <div class=tag style="margin-top:30px;">Interesting</div>
                        <div id=target_hashtag class=tag_box>
                        </div>
                        <div class=half_box>
                            <div class=tag style="margin-top:30px;">Name</div>
                            <div class=cont id=name>　</div>
                        </div>
                        <div class=half_box>
                            <div class=tag style="margin-top:30px;">Available language</div>
                            <div class=cont id=language>　</div>
                        </div>
                        <input type=hidden id=id>
                    </div>
                    <div class=button-container>
                        <div class=button onclick="move_chatroom()">Send Message</div>
                        <div class=button style="background:none;background-color:#494563 !important;" onclick="matching_process()">Re matching</div>
                    </div>
                </div>
            </div>
            
            
        </center>
        <script src="./js/matching.js"></script>
    </body>
</html>