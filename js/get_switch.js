
var kk=1;

 function getData(x) {
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
              
              //channel_synk = value['synk']; 
              //Screen = value['screen']; 
              x = value['switch']; 
              x=x++;
              kk=x+1;
             //else getRealData() ;
              return kk;
                  }); 

              
         }); 
          
            }; 

            
           
