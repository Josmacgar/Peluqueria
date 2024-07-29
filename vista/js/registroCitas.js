let form =document.getElementById("formulario");
form.addEventListener('submit', comprobarEmail);

function comprobarEmail(evt){
    //paramos el submit
    evt.preventDefault();
   let fecha= document.querySelector('#fecha').value;

    cadena="fecha=" + fecha;
   $.ajax({
       type:"POST",
       url:"/Peluqueria/controlador/ctCompruebaCitas.php",
       data:cadena
   }).done(function(respuesta){
    if (!respuesta){
        //enviamos el submit
        form.submit();
    }else {
        document.getElementById('error').innerHTML="Fecha ocupada";
    }
   });

}
