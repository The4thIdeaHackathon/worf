var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },
    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function() {

      document.getElementById('iframe').src="http://222.105.33.162/worf/";
      window.onmessage=function(e){
        if(e.data=="exit_app"){
          navigator.app.exitApp();
        }else if(e.data=="sign_up"){

        }else{
          var jsondata=JSON.parse(e.data);
          if(jsondata.title=="url"){
            document.getElementById('iframe').src=jsondata.url;
          }
        }
      }
    }
};

app.initialize();