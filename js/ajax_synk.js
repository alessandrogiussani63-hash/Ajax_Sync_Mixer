$(function(){ 
                $(document).ready(function(){
                $("#getusers").submit();
         //});
         // $("#getusers").on('click', function(){ 

          $.ajax({ 

            method: "GET", 
            
            url: "get_synk.php",
             error: function(er) {		
                var status = er.status;
                var text = er.statusText;			
                var message = status + ': ' + text;
                          
                alert(message);		
            }, 
                       
            
          }).done(function( data ) { 

            var result= $.parseJSON(data); 
          
            var string='<table width="100%"><tr> <th>#</th><th>Name</th> <th>Email</th><tr>';
     
           /* from result create a string of data and append to the div */
          
            $.each( result, function( key, value ) { 
               channel_synk = value['synk']; 
              string += "<tr> <td>"+value['id'] + "</td><td>"+value['synk']+' '+value['user_status']+'</td>  \
                        <td>'+value['user_email']+"</td> </tr>"; 
                  }); 

                 string += '</table>'; 
              
            $("#records").html(string); 
            // channel= result[1].value['synk'];
            //channel='merda';
            $("#records2").html("Streaming Channel " + channel_synk + "  www.streamfast.it" ); 
            ;
            appendDIV(channel_synk, parent);
           // $.ajaxComplete j; 
       // online(channel_synk);
         // return leggi(j);
           }); 
        }); 
    });