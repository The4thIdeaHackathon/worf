var isforeign=-1;
function signup(){
    var id=document.getElementById('id').value;
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    //var depart=document.getElementById('depart').value;
    var depart='';
    var password=document.getElementById('password').value;
    var password_confirm=document.getElementById('password_confirm').value;
    var major=document.getElementById('major').value;
    var language=document.getElementById('language').value;
    var studID=document.getElementById('studID').value;
    var intro=document.getElementById('intro').value;

    //password 검출
    if(password!=password_confirm){
        console.log("password not correct");
        alert("비밀번호가 일치하지 않습니다.");
        return;
    }
    if(isforeign==-1){
        console.log("isforeign is empty");
        alert("내외국인 정보를 입력 해주세요.");
        return;
    }
    
    $.post("db/insertUser.php",{id:id,email:email,depart:depart,major:major,language:language,studID:studID,intro:intro,name:name,password:password,isforeigner:isforeign}).done((r)=>{
        console.log(r);
    });
    request_other_url("http://222.105.33.162/WORF/login.php");   
}
function request_other_url(url){
    var json='{"title":"url","url":"'+url+'"}';
    window.parent.postMessage(json,"*");
}
function check_foreign(f){
    if(f==0){
        isforeign=0;
        document.getElementById('man').style.backgroundColor="#39364d";
        document.getElementById('girl').style.backgroundColor="#ffffff";
    }else{
        isforeign=1;
        document.getElementById('man').style.backgroundColor="#ffffff";
        document.getElementById('girl').style.backgroundColor="#39364d";
    }
}