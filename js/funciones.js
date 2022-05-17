function prueba(){
    $.ajax({
        type :"POST",
        url : "../procesos.php",
        data : "",
        success : function(cont) {
            $("#pantalla").html(cont);
           
        }
      });
    
}