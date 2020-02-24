  $(document).ready(function() {
  
     
  	
 

    $('#key').on('keyup', function() {
          var key = $(this).val();

        if (key.length == 0) {
             $('#suggestions').fadeOut(1000).html('');
             return;
        } else {		
          var dataString = 'key='+key;
  	      $.ajax({
              type: "POST",
              url: "ajax.php",
              data: dataString,
              success: function(data) {
                  //Escribimos las sugerencias que nos manda la consulta
                  $('#suggestions').fadeIn(1000).html(data);
                 
              }
          });
        }
      });

   
});   

