function request_other_url(url){
    var json='{"title":"url","url":"'+url+'"}';
    window.parent.postMessage(json,"*");
}
function check_login(){
    var id=document.getElementById('id').value;
    var pw=document.getElementById('pw').value;
    $.post("db/selectCheckLogin.php",{id:id,pw:pw}).done((r)=>{
        alert(r);
        if(r=='0'){
            alert("로그인 실패!");
        }else{
            alert("로그인!");
            request_other_url("http://222.105.33.162/worf/container.php?id="+r);
        }
    });
}