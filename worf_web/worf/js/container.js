var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

var navi=0;
var id='';
window.onload=()=>{
    var url=window.location.href;
    id=url.split("=")[1];
    document.getElementById('iframe').src="http://222.105.33.162/worf/matching.php?id="+id;
}
window.onmessage=(r)=>{
    console.log("[container.js]"+r.data);
    var data=r.data;
    if(data==""){

    }else{
      var object=JSON.parse(data);
      if(object.title=="talk"){
          request_other_url("http://222.105.33.162/worf/chat.php?src="+object.from+"?dest="+object.to);
      }  
    }
}
function request_other_url(url){
    var json='{"title":"url","url":"'+url+'"}';
    window.parent.postMessage(json,"*");
  }
function navi_swap(next_){
    console.log("navi_swap!"+next_);
    var post_navi=navi;
    navi=navi+next_;
    if(navi<0){
        navi=0;
    }else if(navi>2){
        navi=2;
    }
    if(navi==0 && post_navi!=0){
        document.getElementById('iframe').src="http://222.105.33.162/worf/matching.php";
    }else if(navi==1 && post_navi!=1){
        document.getElementById('iframe').src="http://222.105.33.162/worf/talking.php";
    }else if(navi==2 && post_navi!=2){
        document.getElementById('iframe').src="http://222.105.33.162/worf/myinfo.php"
    }
}