<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/signup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>SIGN UP</title>
</head>
<body>
  <center>
  <div class="myService">Sign up</div>
  <div class="subTitle">WHO YOU ARE?</div>
  <div class="content">
    <div class=foreign_check>
      
      <div id=girl class=img_one><img  onclick="check_foreign(0)" class=check_img src="icon/KakaoTalk_20180511_233701706.png">
        <div style="color:#e6a122;" class=img_tag>Korean</div>
      </div>
      <div  id=man class=img_one><img  onclick="check_foreign(1)" class=check_img src="icon/KakaoTalk_20180511_233659978.png">
        <div style="color:#195788;" class=img_tag>Foreigner</div>
      </div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_223626100.png"></div>
      <div class="input-form"><input id=id type=text placeholder="ID"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_221626269.png"></div>
      <div class="input-form"><input id=name type=text placeholder="Username"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_221835951.png"></div>
      <div class="input-form"><input id=email type=text placeholder="Email"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_221637618.png"></div>
      <div class="input-form"><input id=password type=text placeholder="Password"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_221637618.png"></div>
      <div class="input-form"><input id=password_confirm type=text placeholder="Confirm Password"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_223052502.png"></div>
      <div class="input-form"><input id=major type=text placeholder="Major"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_221957021.png"></div>
      <div class="input-form"><input id=language type=text placeholder="Language"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_222919444.png"></div>
      <div class="input-form"><input id=studID type=text placeholder="StudentNumber"></div>
    </div>
    <div class="line">
      <div class="icon"><img class=icon_img src="icon/KakaoTalk_20180511_223903330.png"></div>
      <div class="input-form"><input id=intro type=text placeholder="Intro"></div>
    </div>
  </div>
  <div class=signup-button onclick="signup()">
    Sign up
  </div>
</center>
<script src="./js/signup.js"></script>
</body>
</html>