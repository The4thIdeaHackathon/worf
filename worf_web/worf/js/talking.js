var id;
window.onload=()=>{
    var url=window.location.href;
    id=url.split("=")[1];
    get_talking_list();
}
var datas=[];
function add_chatting_list(id_,name,text){
    var html="<div class=line onclick='move_chatroom("+id_+")'>";
    html+="<div class=name>"+name+"</div>";
    html+="<div class=text>"+text+"</div>";
    html+="</div>";
    document.getElementById('content').innerHTML+=html;
}
function move_chatroom(toid){
    var json='{"title":"talk","from":"'+id+'","to":"'+toid+'"}';
    //console.log(json);
    window.parent.postMessage(json,"*");
}
function get_talking_list(){
    $.post("db/selectChatList.php?id="+id,{}).done((r)=>{
        console.log(r);
        var object=JSON.parse(r);
        var names=[];
        var flag=0;

        var max_ind=0;
        for(var i=0;i<object.length;i++){
            for(var j=0;j<object.length;j++){
            
                if(object[i][1]==object[j][1] && i != j){
                    console.log(object[i][1]);
                    object[i][1]=-1;
                }
            }
        }
        for(var i=0;i<object.length;i++){
            if(object[i][1]==-1){
                continue;
            }
            datas.push(object[i]);
        }

        // for(var i=max_ind;i>=0;i--){
            
        // }
        // for(var i=object.length-1;i>=0;i--){
        //     for(var j=0;j<names.length;j++){
        //         if(object[i][1]==names[j]){
        //             flag=1;
        //             break;
        //         }
        //     }
        //     if(flag==1){
        //         console.log(object[i][1]);
        //         console.log(names);
        //         flat=0;
        //         continue;
        //     }else{
        //         names.push(object[i][1]);
        //         datas.push(object[i]);
        //     }
        // }
        for(var i=0;i<datas.length;i++){
            add_chatting_list(datas[i][1],datas[i][0],datas[i][2]);
        }
    });
}