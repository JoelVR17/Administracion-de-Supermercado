//  SE ESPERA A QUE CARGUE TODO DE LA PAGINA
document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
})

//  ESPERA EL CLICK EN LAS BARRAS DEL MENU
function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive)
}

//  SE EKECUTA CUANDO HACEN EL CLICK EN LAS BARRAS
function navegacionResponsive() {
    const navegacion = document.querySelector('.contenedor__anclas ');
    const columnas = document.querySelector('.contenido__columnas ');

    // QUITA O BORRA CLASE EN CONTENEDOR ANCLAS
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');

    } else {
        navegacion.classList.add('mostrar');
    }

    // QUITA O BORRA CLASE EN CONTENIDO COLUMNA
    if (columnas.classList.contains('desplegar')) {
        columnas.classList.remove('desplegar');

    } else {
        columnas.classList.add('desplegar');
    }
}