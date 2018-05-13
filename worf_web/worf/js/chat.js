var src;
var dest;
var message_no=0;
window.onload=()=>{
    var url=window.location.href;
    src=url.split("?")[1].split("=")[1].split("&")[0];
    dest=url.split("&")[1].split("=")[1]
    console.log("[chat.js]"+src+","+dest);
    setInterval(read_message,500);
}
function send_message(){
    var message=document.getElementById('key_input_text').value;
    $.post("db/insertMessage.php",{src_id:src,dest_id:dest,text:message}).done((r)=>{
        
    });
}
function dest_message(text,time){
    var html="<div class=line>";
    html+='<div class="left-chat bubble">'+text+'<div class="left date">'+time+'</div></div>';
    html+="</div>";
    document.getElementById('content').innerHTML+=html;
}
function my_message(text,time){
    var html="<div class=line>";
    html+='<div class="right-chat bubble">'+text+'<div class="right date">'+time+'</div></div>';
    html+='</div>';
    document.getElementById('content').innerHTML+=html;
}

    
function read_message(){
    $.post("db/selectMessage.php",{src:src,dest:dest,message_no:message_no}).done((r)=>{
        console.log(r);
        var object=JSON.parse(r);
        for(var i=0;i<object.length;i++){
            message_no=object[i][0];
            if(object[i][1]==src){
                //내가보낸거
                my_message(object[i][3],object[i][4]);
            }else{
                //남이보낸거
                dest_message(object[i][3],object[i][4]);
            }
        }
    });
}
function backbutton(){
    request_other_url("http://222.105.33.162/WORF/container.php?id="+src);
}
function request_other_url(url){
    var json='{"title":"url","url":"'+url+'"}';
    window.parent.postMessage(json,"*");
  }