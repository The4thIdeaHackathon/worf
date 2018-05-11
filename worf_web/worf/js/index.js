var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
    },
  });

function request_other_url(url){
  var json='{"title":"url","url":"'+url+'"}';
  window.parent.postMessage(json,"*");
}