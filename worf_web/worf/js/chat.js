var src;
var dest;
window.onload=()=>{
    var url=window.location.href;
    src=url.split("?")[1].split("=")[1];
    dest=url.split("?")[2].split("=")[1]
    console.log("[chat.js]"+src+","+dest);
}
function send_message(){
    var message=document.getElementById('key_input_text').value;
    $.post("db/insertMessage.php",{src_id:src,dest_id:dest,text:message}).done((r)=>{
        
    });
}