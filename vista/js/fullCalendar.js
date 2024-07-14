document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });

  $(document).ready(function() {
    $.ajax({
        type:"POST",
        url:"/Peluqueria/controlador/ctMisCitas.php",
        // dataType:json
    }).done(function(respuesta){
     if (respuesta){
        $('#calendar').fullCalendar({
            //seleccciona en casillas
            selectable:true,
            selectHelper: true,
            //funcion que se ejecuta al hacer click en cualquier casilla
            select: function () {
                $('#myModal').modal('toggle'); 
            },
            // botonera
            header:
            {
            left: 'month, agendaWeek, agendaDay, list',
            center: 'title',
            right: 'prev, today, next'
            },
            footer:
            {
            left: 'month, agendaWeek, agendaDay, list',
            center: 'title',
            right: 'prev, today, next'
            },
            buttonText:
            {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day',
            list: 'List'
            },
            // array de eventos personalizables
            events:respuesta
           
 });
     }else {
      alert('no hay citas');
     }
    });

 });
