let form =document.getElementById("formulario");
form.addEventListener('submit', comprobarEmail);

function comprobarEmail(evt){
    //paramos el submit
    evt.preventDefault();
   let email= document.querySelector('#email').value;

    cadena="email=" + email;
   $.ajax({
       type:"POST",
       url:"/Peluqueria/controlador/ctCompruebaLogin.php",
       data:cadena
   }).done(function(respuesta){
    if (respuesta){
        alert('usuario NO registrado');
        //enviamos el submit
        form.submit();
    }else {
        alert('usuario registrado');
        document.getElementById('error').innerHTML="credenciales erróneas";
    }
   });

}
