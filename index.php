<!DOCTYPE html>
<html lang="it">

    <head>
        <title>File Sharing + Text Chat using WebRTC DataChannel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        
         <link rel="stylesheet" href="css/style_calc.css">
        
    
        <!-- for HTML5 el styling -->
        <script>
            document.createElement('article');
            document.createElement('footer');
            channel.direction = 'one-to-many';
        </script>
        <script src="js/Link.js"></script>
        <script src="vendor/webrtc/DataChannel.js"> </script>
        <script src="vendor/socket.io/socket.io.js"> </script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/function.js"></script>
        <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/qTransform.js"></script>
        <script type="text/javascript"> 
  
    
    
    </script>
    
 
        
    </head>

    <body>
   

<div id="messages" style="white-space:pre;"></div>
      <body onload="submit()">
      <div class = "container" > 

     <!-- <div id="records"></div>--> 
        <!--<div id="records2"></div>--> 
        <article>
            
        
             <!--   <h2>Open Data Channel</h2>-->
              <p hidden>  <input type="text" id="channel" value="channel" style="font-size: 1.1em; text-align: right; width: 4em;"
                       title="channel name - use your own channel name"></p>
                  <p hidden> <button id="init-RTCMultiConnection">Open</button></p>
               
                   <p hidden><button id="join-RTCMultiConnection">Join</button></p>

            <p hidden>   <table style="border-left: 1px solid black; width: 100%;">
                <tr>
                    <td>
                      <!--  <h2 style="display: block; font-size: 1em; text-align: center;">Text Chat</h2>-->

                         <p hidden><div id="chat-output"></div></p>
                         <p hidden><input type="text" id="chat-input" style="font-size: 1.2em;" placeholder="chat message" disabled></p>
                    </td>
                     <!--<p hidden><td style="background: white; border-left: 1px solid black;"></p>-->
                        <p hidden> <!--<h2 style="display: block; font-size: 1em; text-align: center;">Share Files</h2></p>-->
                         <p hidden><input type="file" id="file" disabled></p>

                       <p hidden> <div id="file-progress"></div></p>
                    </td>
                </tr>
            </table></p>

        

            <script>
     
         // $("#getusers").on('click', function(){ 
         $('document').ready(function () {
         $("#getusers").submit();
       getRealData();FirstSynk(); // Send(10,11,12);//ReSynk();
         });
//$('document').ready(function () {
 
 //setInterval(function () {getRealData()}, 10000);//request every x seconds

 //}); 
 
                var chatInput = document.getElementById('chat-input');
                chatInput.onkeypress = function(e) {
                    if (e.keyCode !== 13 || !this.value) return;
                    appendDIV(this.value);
                    channel.send(this.value);
                    this.value = '';
                    this.focus();
                };

    /* users presence detection */
                channel.onleave = function(userid) {
                    var message = 'A user whose id is ' + userid + ' left you!';
                    appendDIV(message);
                    console.warn(message);
                };
                channel.connect(document.getElementById('channel').value);
                 // };
     
            </script>
            
            <div id="channels"></div>
            <div style="width: 100%; height:600px;" id="cine"></div>
            <br/>

    <script src="js/get_switch.js"></script>
<script src="js/ajax_synk.js"></script>
<script src="js/channels_loader.js"></script>
</body>
</html>
