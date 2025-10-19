<!DOCTYPE html>
<html lang="it">

    <head>
        <title>File Sharing + Text Chat using WebRTC DataChannel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="author" type="text/html" href="https://plus.google.com/+MuazKhan">
        <meta name="author" content="Muaz Khan">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!--<link rel="stylesheet" href="vendor/webrtc/style.css">-->
         <link rel="stylesheet" href="css/style_calc.css">
        <style>
        body{
       font-family: "Arial Black", Gadget, sans-serif;
    }
     #container{
       text-align: center;
     }
    #container table{
      margin: 0 auto;
      text-align: left;
    }

    .btn {
      background-color: #008CBA;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type='text'], input[type='email'] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

  .success, .error{
    width: 20%;
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    display: inline-block;
  }
.success {
  color: #4F8A10;
  background-color: #DFF2BF;
}

.error {
  color: #D8000C;
  background-color: #FFBABA;
  }
            td { vertical-align: top; }

            #chat-output div, #file-progress div {
                border: 1px solid black;
                border-bottom: 0;
                padding: .1em .4em;
            }

            input {
                border: 1px solid black;
                font-family: inherit;
                margin: .1em .3em;
                outline: none;
                padding: .1em .2em;
                width: 97%;
            }

            #chat-output, #file-progress {
                margin: 0 0 0 .4em;
                max-height: 12em;
                overflow: auto;
            }

            pre {
                border-left: 2px solid red;
                margin-left: 2em;
                padding-left: 1em;
            }
        </style>
        <!-- for HTML5 el styling -->
        <script>
            document.createElement('article');
            document.createElement('footer');
      
            
        </script>
    <script><?php require  "write_synk.php" ;?></script>
        <script src="vendor/webrtc/DataChannel.js"> </script>
        <script src="vendor/socket.io/socket.io.js"> </script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/Link.js"></script>
        
        <!--<script src="js/function.js"></script>-->
    </head>

    <body>
     <body onload="Synk();submit();">
        <article>
            
        
         
         
       
                <form name="MioForm">



<table border=1>


<tr>
<td><input Size="16" type="button" name="n10" value="10" onClick="return Put(this.value)">
<td><input Size="16" type="button" name="n11" value="11" onClick="return Put(this.value)">  
<td><input Size="16" type="button" name="n12" value="12" onClick="return Put(this.value)"> 
<td><input Size="16" type="button" name="n13" value="13" onClick="return Put(this.value)">  
<td><input Size="16" type="button" name="n14" value="14" onClick="return Put(this.value)"> 

<tr>
<td><input Size="16" type="button" name="n7" value="7" onClick="Put(this.value)">  
<td><input Size="16" type="button" name="n8" value="8" onClick="Put(this.value)">  
<td><input Size="16" type="button" name="n9" value="9" onClick="Put(this.value)"> 
<td><input Size="16" type="button" name="A"  value="A" onClick="Put(this.value)"> 
<td><input Size="16" type="button" name="B"  value="B" onClick="Put(this.value)"> 

<tr>
<td><input type="button" name="n4" value="4" onClick="Put(this.value)"> 
<td><input type="button" name="n5" value="5" onClick="Put(this.value)">  
<td><input type="button" name="n6" value="6" onClick="Put(this.value)"> 
<td><input type="button" name="C"  value="C" onClick="Put(this.value)"> 
<td><input type="button" name="D"  value="D" onClick="Put(this.value)"> 

<tr>  
<td><input type="button" name="n1" value="1" onClick="Put(this.value)"> 
<td><input type="button" name="n2" value="2" onClick="Put(this.value)"> 
<td><input type="button" name="n3" value="3" onClick="Put(this.value)"> 
<td><input type="button" name="E"  value="E" onClick="Put(this.value)"> 
<td><input type="button" name="F"  value="F" onClick="Put(this.value)"> 
 

<tr> 
<td><input type="button" name="n0" value="0" onClick="Put(this.value)"> 
<td><input type="button" name="P"  value="." onClick="Put(this.value)"> 
</td></tr>
</table> 
 

</center>
 
</form>
<table border="1" align="center">
<div id="resynk"></div>
<div id="monitor1"></div>
    
   
  
<!-- <table> <!– Inizia la tabella –>
<tr> <!– Inizia la prima riga –>
<td><div id="monitor1"></div></td> <!– Prima colonna –>
<td><div id="monitor2"></div></td> <!– Seconda colonna –>
<td><div id="monitor3"></div></td> <!– Terza colonna –>
<td><div id="monitor4"></div></td> <!– Quarta colonna –>
</tr> <!– Fine della prima riga –>
<tr> <!– Inizia la seconda riga –>
<td><div id="monitor5"></div></td> <!– Prima colonna –>
<td><div id="monitor6"></div></td> <!– Seconda colonna –>
<td><div id="monitor7"></div></td> <!– Terza colonna –>
<td><div id="monitor8"></div></td> <!– Quarta colonna –>
</tr> <!– Fine della seconda riga –>
</table> <!– Fine della tabella –>-->
  
  
  
  
                 <script>
                    var Sw=1;
                   
                   document.getElementById('resynk').innerHTML = '<object width="100%" height="500px" data="https://www.streamfast.it/ajax_synk_mixer" ></object>';
                  
                                
                    function Put(x)  {
                              
                              getData();
                              var k=x;
                              var y=x;
                              var z = 1;
                          Send(k,y,z);    
                       
                       
                     
                       
                       
                       
                       
           document.getElementById("chat-input").value = x;//FORSED INPUT
              appendDIV(document.getElementById("chat-input").value.click) ;
         
                             
                                    
                                 };
  
                               
                          function Send(a,b,c){
            var  Synk  = a;
            var  Screen   = b;
            var Switch    = c;
           
             $.ajax({
              method: "POST",
              url:    "write_synk.php",
              data: { "synk": Synk, "screen": Screen, "switch": Switch},
              success: $("#message").show(3000).html("Canale iviato ai client").addClass('success').hide(5000),
             });
       };      
                               
               


                        function Enter() {
                         
                       
                                                          
                                   
                                   document.Return.click();
                                };
               
               
               function submitForm() {
    var http = new XMLHttpRequest();
    http.open("POST", "consol8.php", true);
    http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var params = "search=" + document.getElementById('chat-input').value ; // probably use document.getElementById(...).value
    http.send(params);
   // http.onload = function() {
     //   alert(http.responseText);
    //}
};
               
    function getdata() {var k=22;return k;};           
             


 function getData() {
                             $.ajax({ 

            method: "GET", 
            
            url: "get_synk.php",
            cache: false,
             error: function(er) {		
                var status = er.status;
                var text = er.statusText;			
                var message = status + ': ' + text;
                          
                alert(message);		
            }, 
                       
            
          }).done(function( data )  { 

            var result= $.parseJSON(data); 
          
            var string='';
               
            $.each( result, function( key, value ) { 
   
             var channel_synk = value['synk']; 
             var  Screen = value['screen']; 
            Sw = value['switch'];
            Sw++ ;
            
              },500); 

              
         }); 
          
            };       

                    
                document.getElementById('channel').value = "dati";
             
                 
            </script>

            <table style="border-left: 1px solid black; width: 100%;">
                <tr>
                    <td>
                      

                     
                        </form>
                    </td>
           
            
                

                        
                    </td>
                </tr>
            </table>

               <script>
                   document.getElementById('resynk').innerHTML = '<object width="100%" height="500px" data="https://www.streamfast.it/ajax_mixer" ></object>';
                  
                  document.getElementById('monitor1').innerHTML = '<object width="100%" height="500px" data="https://www.streamfast.it/mixer/monitor.php" ></object>';
                //  document.getElementById('monitor2').innerHTML = Links_2 ;
                //  document.getElementById('monitor3').innerHTML = Links_3 ;
                //  document.getElementById('monitor4').innerHTML = Links_4 ;
                //  document.getElementById('monitor5').innerHTML = Links_5 ;
                //  document.getElementById('monitor6').innerHTML = Links_6 ;
                //  document.getElementById('monitor7').innerHTML = Links_7 ;
                //  document.getElementById('monitor8').innerHTML = Links_8 ;
                </script>

           <div id = "container" >
   
   <div id="message"></div>
     
   
  </div>
  
 

<script src="js/get_switch.js"></script>
<script src="js/ajax_synk.js"></script>
<script src="js/channels_loader.js"></script>
</body>
</html>

  

