let fecha = document.querySelector("#fecha");
fecha.addEventListener('input', deshabilitar);
let horaReservacion = document.querySelector('#hora_entrada');
let botonEnviar = document.querySelector('#bt_enviar');
botonEnviar.addEventListener('click', comprobacion);

deshabilitar();
horaIngresada();
horaInicio();
horaSalida();







//--------------------------------Funciones-----------------------------------------------

function deshabilitar() {
    let inputFecha = document.querySelector('#fecha');
    let fechaAhora = new Date();
    let year = fechaAhora.getFullYear();
    let mes = fechaAhora.getMonth() + 1;
    if (mes < 10) {
        mes = '0' + mes;
    }
    let dia = fechaAhora.getDate();
    let fechaDes = `${year}-${mes}-${dia}`;
    console.log(fechaDes);
    inputFecha.min = fechaDes;
    document.querySelector('#fecha').min = fechaDes;
}

//Retornara la primera hora
let hora_in = 0; //almacenara la hora de ingreso
let hora_fin = 0; //almacenara la hora de salida

function horaIngresada() {
    let inputHora = document.querySelector('#hora_entrada');
    let hora_ini = inputHora.addEventListener('input', e => {
        let horaCita = e.target.value;
        let hora = horaCita.split(':');
        hora_in = hora[0];
    });
}

function horaSalida() {
    let inputHora = document.querySelector('#hora_salida');
    inputHora.addEventListener('input', e => {
        let horaCita = e.target.value;
        let hora = horaCita.split(':');
        hora_fin = hora[0];
    })
}

function comprobacion() {
    if (hora_in > hora_fin) {
        document.querySelector('#mensaje').classList.remove('ocultarBoton');
        document.querySelector('#mensaje').innerHTML = "<div class='alert alert-danger alert-dismissable'>Ingrese la Hora Correctamente" +
            "<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";



        setTimeout(() => {
            document.querySelector('.boton').classList.remove('ocultarBoton');
            document.querySelector('.alert').classList.add('ocultarBoton');

        }, 4000);

    } else {
        document.querySelector('.boton').classList.remove('ocultarBoton');

    }

}


//-----------------------------


function horaInicio() {
    let inputHora = document.querySelector('#hora_entrada');
    let output_hora = document.querySelector('#hora_salida');
    let valor_hora1 = 0;
    let valor_hora2 = 0;

    inputHora.addEventListener('input', e => {
        let horaCita = e.target.value;
        let hora = horaCita.split(':');


        if (hora[0] < 9 || hora[0] > 17) {
            document.querySelector('#mensaje').classList.remove('ocultarBoton');
            document.querySelector('#mensaje').innerHTML = "<div class='alert alert-danger alert-dismissable'>Hora fuera de Servicio" +
                "<button type='button' class='close' data-dismiss='alert'>&times;</button></div>"
        } else {
            document.querySelector('#mensaje').classList.add('ocultarBoton');
        }
    })

    output_hora.addEventListener('input', e => {
        let finHora = e.target.value;
        let hora_salida = finHora.split(':');

        if (hora_salida[0] > 17 || hora_salida[0] < 9) {
            document.querySelector('#mensaje').classList.remove('ocultarBoton');
            document.querySelector('#mensaje').innerHTML = "<div class='alert alert-danger alert-dismissable'>Hora fuera de Servicio" +
                "<button type='button' class='close' data-dismiss='alert'>&times;</button></div>"
        } else {
            document.querySelector('#mensaje').classList.add('ocultarBoton');
        }
    })


}