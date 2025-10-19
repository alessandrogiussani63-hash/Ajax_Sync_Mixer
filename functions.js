 var channel_synk='0';
    var Screen='0';
    var Switch=0;
    
  function Send(a,b,c){
              Synk   = a;
              Screen = b;
              Switch = c;
             $.ajax({
              method: "POST",
              url:    "write_synk.php",
              data: { "synk": Synk, "screen": Screen, "switch": Switch},
              success: $("#message").show(3000).html("Canale iviato ai client").addClass('success').hide(5000),
             });
       };  
 
 
function getRealData() {
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
     
           /* from result create a string of data and append to the div */
           
            $.each( result, function( key, value ) { 
              
              channel_synk = value['synk']; 
              Screen = value['screen']; 
              Switch = value['switch']; 
              
              switch (Switch) {
                                    case '1':
                                    {Send(channel_synk,Screen,2);
                                            FirstSynk();getRealData();
                                    }    
                                        break;
                                    case '2':
                                        getRealData();
                                         break;
                                          default:
                                        text = "No value found";
              }
              
              
                  }); 

              
         }); 
          
            }; 
          
              

function ReSynk() {
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
                       
            
          }).done(function( data ) { 

            var result= $.parseJSON(data); 
          
            var string='';
     
           /* from result create a string of data and append to the div */
           
            $.each( result, function( key, value ) { 
              //var s="off";
              channel_synk = value['synk']; 
              Screen = value['screen']; 
            var s=2;   
        appendDIV(channel_synk, parent);
        Send(channel_synk,Screen,s);
          getRealData(); 
              
              
                  }); 

                 
              
            $("#records").html(string); 
            $("#records2").html("Streaming Channel " + channel_synk + "  www.streamfast.it" ); 
      
        
         });
           }; 
           
           
        function FirstSynk() {
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
                       
            
          }).done(function( data ) { 

            var result= $.parseJSON(data); 
          
            var string='';
     
           /* from result create a string of data and append to the div */
           
            $.each( result, function( key, value ) { 
              //var s="off";
              channel_synk = value['synk']; 
              Screen = value['screen']; 
             // Switch = value['switch']; 
              // if (Switch = 'on'){Send(channel_synk,Screen,s)};
             // string += "<tr> <td>"+value['id'] + "</td><td>"+value['synk']+' '+value['user_status']+'</td>  
                     //   <td>'+value['user_email']+"</td> </tr>"; 
                  }); 

                 //string += '</table>'; 
              
            $("#records").html(string); 
            // channel= result[1].value['synk'];
            //channel='merda';
            $("#records2").html("Streaming Channel " + channel_synk + "  www.streamfast.it" ); 
      
        
        appendDIV(channel_synk, parent);
        getRealData();
         });
           }; 

                
           // Using multiple unit types within one animation.
 
$( "#go1" ).click(function() {
  $( "#block1" )
    .animate({
      width: "90%"
    }, {
      queue: false,
      duration: 3000
    })
    .animate({ fontSize: "24px" }, 1500 )
    .animate({ borderRightWidth: "15px" }, 1500 );
});
 
$( "#go2" ).click(function() {
  $( "#block2" )
    .animate({ width: "90%" }, 1000 )
    .animate({ fontSize: "24px" }, 1000 )
    .animate({ borderLeftWidth: "15px" }, 1000 );
});
 
$( "#go3" ).click(function() {
  $( "#go1" ).add( "#go2" ).click();
});
 
$( "#go4" ).click(function() {
  $( "div" ).css({
    width: "",
    fontSize: "",
    borderWidth: ""
  });
});

 $(function() {
    var $elie = $("img"), degree = 0, timer;
    rotate();
    function rotate() {
        
        $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});  
        $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});                      
        timer = setTimeout(function() {
            ++degree; rotate();
        },5);
    }
    
    $("input").toggle(function() {
        clearTimeout(timer);
    }, function() {
        rotate();
    });
});            
       
  function rotateInCircle(video) {
                    video.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(0deg)';
                    setTimeout(function() {
                        video.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(360deg)';
                    }, 1000); };
 
 
  function appendDIV(data, parent) {
        var div = document.createElement('div');
        var channels = document.createElement('channels');
                        
                             channel_synk=data;//utile
                             document.getElementById("channels").innerHTML=("Streaming Channel" + "  " + data + "  www.streamfast.it");
                             switch (channel_synk) {
                                    case '1':
                                         $("#cine").html(Links_1);
                                         
                                        break;
                                    case '2':
                                         $("#cine").html(Links_2);
                                         break;
                                    case '3':
                                         $("#cine").html(Links_3);
                                        break;
                                    case '4':
                                         $("#cine").html(Links_4);
                                        break;
                                    case '5':
                                         $("#cine").html(Links_5);
                                        break;
                                    case '6':
                                         $("#cine").html(Links_6);
                                        break;
                                    case '7':
                                         $("#cine").html(Links_7);
                                        break;
                                    case '8':
                                         $("#cine").html(Links_8);
                                        break;
                                    case '9':
                                         $("#cine").html(Links_9);
                                        break;
                                    case '10':
                                         $("#cine").animate({
                                                height: '10%',
                                                width: '10%'
                                            }, 100).animate({
                                                height: '100%',
                                                width: '100%'
                                            }, 3000).html(Links_10);
                                        break;
                                    case '11':
                                         $("#cine").delay(300).animate({rotate: '720deg'}, 2000).html(Links_11).requestFullscreen();
                                        break;
                                    case '12':
                                     $("#cine").animate({
                                                            opacity: 0.25,
                                                            
                                                            rigth: "+=50",
                                                               height: [ "10%", "swing" ],
                                                                width: [ "10%", "swing" ]
                                                        }, function() {
                                                            // Animation complete.
                                                                     }).animate({
                                                            opacity: 1,
                                                            
                                                            rigth: "+=50",
                                                            height: [ "100%", "swing" ],
                                                                width: [ "100%", "swing" ]
                                                        }, 3000, function() {
                                                            // Animation complete.
                                                                     }).html(Links_12); 
                                            break;
                                    case '13':
                                        $("#cine").html(Links_13);
                                        break;  
                                    case '14':
                                        $("#cine").html(Links_14);
                                        break;
                                    case '15':
                                        $("#cine").html(Links_15);
                                        break; 
                                    case '16':
                                        $("#cine").html(Links_16);
                                        break;
                                    case '17':
                                        $("#cine").html(Links_17);
                                        break;
                                    case '18':
                                        $("#cine").html(Links_18);
                                        break;
                                    case '19':
                                        $("#cine").html(Links_19);
                                        break;
                                    case '20':
                                        $("#cine").html(Links_20);
                                        break;
                                        
                                           
                                        
                                    default:
                                        text = "No value found";
                                }     
                      
                    div.tabIndex = 0;
                    div.focus();

                    chatInput.focus();
                    if (chatOutput.firstChild === "alert")   alert(chatOutput.firstChild);
                };
 

