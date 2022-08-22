let cartel = document.getElementById('cartel');
let carrusel = document.getElementById('carrusel');

function mostrarScroll() {
    cartel.classList.add('no');
    cartel.classList.add('animacion');
    
    carrusel.classList.remove('no');
    carrusel.classList.add('animacion');
}

window.addEventListener('scroll', mostrarScroll);