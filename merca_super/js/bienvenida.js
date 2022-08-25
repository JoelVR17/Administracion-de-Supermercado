//  SE ESPERA A QUE SE CARGUE LA PAGINA PARA AGREGAR LA CLASE A LA NOTIFICACION
$(document).ready(function () {

    let divNoti = document.getElementById('noti');
    let divFicacion = document.getElementById('ficacion');

    divNoti.classList.add('notificacion');
    divFicacion.classList.add('progress');

});