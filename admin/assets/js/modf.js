let botonEnviar = document.querySelector('#bt_enviar');
let botonImprimir = document.querySelector('.boton-print')
botonImprimir.addEventListener('click', imprimir);

function imprimir() {
    botonEnviar.style.display = 'none';
}