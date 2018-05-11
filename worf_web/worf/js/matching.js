var id;
window.onload=()=>{
    var url=window.location.href;
    id=url.split("=")[1];
    matching_process();
}
function move_chatroom(){
    var toid=document.getElementById('id').value;
    var json='{"title":"talk","from":"'+id+'","to":"'+toid+'"}';
    //console.log(json);
    window.parent.postMessage(json,"*");
}
function matching_process(){
    console.log("[matching.js]StartMatching");
    matching();
    document.getElementById('modal').style.display="block";
    setTimeout(()=>{
        document.getElementById('modal').style.display="none";
    },2000);
}
function matching(){
    $.post("http://222.105.33.162/WORF/db/selectMatching.php?no="+id,{}).done((r)=>{
        var object=JSON.parse(r);
        document.getElementById('intro').innerHTML=object[7];
        document.getElementById('name').innerHTML=object[8];
        document.getElementById('language').innerHTML=object[5];
        document.getElementById('id').value=object[0];
        //console.log(object);
    });
}