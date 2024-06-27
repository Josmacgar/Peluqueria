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
    if (!respuesta){
        alert('si');
        //enviamos el submit
        form.submit();
    }else {
        alert('no');
        document.getElementById('error').innerHTML="El email ya existe";
    }
   });

}
