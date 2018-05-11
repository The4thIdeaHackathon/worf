<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="./css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <body>
        <center>
            <div class=header>
            <div class=login-title>Login</div>
            
            </div>
            <div class=content>
                
                <div class=logo><img class="logo_img" src="icon/KakaoTalk_20180511_231558893.png"></div>
                <div class=login-form>
                    <div class=login-line>
                        <div class=tag>ID</div>
                        <div class=input_form><input id=id type=text></div>
                    </div>
                    <div class=login-line>
                        <div class=tag>PW</div>
                        <div class=input_form><input id=pw type=text></div>
                    </div>
                </div>
                <div class=button-container>
                    <div class=button onclick="check_login()">Sign in</div>
                    <div class=button style="background:none;background-color:#494563 !important;" onclick="request_other_url('http://222.105.33.162/WORF/signup.php')">Sign up</div>
                </div>
            </div>
        </center>
    <script src="./js/login.js"></script>
    </body>
</html>