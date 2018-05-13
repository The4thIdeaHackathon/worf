var id;
window.onload=()=>{
    var url=window.location.href;
    id=url.split("=")[1];
    //matching_process();
}
function move_chatroom(){
    var toid=document.getElementById('id').value;
    var json='{"title":"talk","from":"'+id+'","to":"'+toid+'"}';
    //console.log(json);
    window.parent.postMessage(json,"*");
}
function update_hashtag(){
    $.post("db/updateHashtag.php",{id:id,hashtag:hashtag_string}).done((r)=>{

    });
}
function matching_process(){
    console.log("[matching.js]StartMatching");
    update_hashtag();
    matching();
    document.getElementById('modal').style.display="block";
    setTimeout(()=>{
        document.getElementById('modal').style.display="none";
    },2000);
}
function matching(){
    $.post("http://222.105.33.162/WORF/db/selectMatching.php?no="+id,{}).done((r)=>{
        console.log("[matching.js]"+r);
        if(r.length==6){
            document.getElementById('match_status').innerHTML="매칭 실패 ㅠㅠ 잠시후 다시 시도해주세요.";
            return;
        }else{
            document.getElementById('match_status').innerHTML="성공적으로 매칭되었습니다!";
        
        }
        var object=JSON.parse(r);
        document.getElementById('intro').innerHTML=object[7];
        document.getElementById('name').innerHTML=object[8];
        document.getElementById('language').innerHTML=object[5];
        document.getElementById('id').value=object[0];
        var lis=object[11].split("/");
        var html="";
        document.getElementById('target_hashtag').innerHTML="";
        for(var i=0;i<lis.length;i++){
            if(lis[i]==""){
                continue;
            }
            html+="<div class=hash_box>"+lis[i]+"</div>";
        }
        document.getElementById('target_hashtag').innerHTML+=html;
        //console.log(object);
    });
}
var hashtag_string="";       
function add_hastag(str){
    hashtag_string+=str+"/";
}  
$(function() {
    $('.find').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $(window).height()}, 500, 'linear');
    });
    $('.hash_box').on('click', function(e) {
        e.preventDefault();
        $(this).attr("style","background-color:white;color:#39364d;");
    });
});