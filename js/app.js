const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners(){

    //cuando el form de editar o crear se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);


}

function leerFormulario(e){
    e.preventDefault();

    //leer datos de los inputs
    const nombre = document.querySelector('#nombre').value;
    const email = document.querySelector('#email').value;
    const telefono = document.querySelector('#telefono').value;
    const telefono2 = document.querySelector('#telefono2').value;
    const accion = document.querySelector('#accion').value;

    if(nombre === "" || email === "" || telefono === ""){
        //2 parametros, texto y clase
        mostrarNotificacion('Todos los campos son obligatorios', 'Error');
    }else{
        //validacion, crear llamado AJAX
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('email', email);
        infoContacto.append('telefono', telefono);
        infoContacto.append('telefono2', telefono2);
        infoContacto.append('accion', accion);

        if(accion === 'crear'){
            //crear contacto
            insertarDB(infoContacto)
        }else{
            //editar contacto 
        }
    }

}

//inserta a la base de datos
function insertarDB(data){
    //llamado ajax

    //crear el objeto
    const xhr = new XMLHttpRequest();

    //abrir la conexion 
    xhr.open('POST', 'includes/models/modelo-contacto.php', true);

    //pasar los datos 
    xhr.onload = function(){
        if(this.status === 200){
            console.log(JSON.parse(xhr.responseText));

            const response = JSON.parse(xhr.responseText);

            console.log(response.telefono2)
        }
    }
    
    // enviar los datos 
    xhr.send(data);
}

//Notificacion en la pantalla 
function mostrarNotificacion(mensaje, clase){
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    //formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    //ocultar y mostrar la notificacion 
    setTimeout(() => {
        notificacion.classList.add('visible')

        setTimeout(() => {
            notificacion.classList.remove('visible');
            notificacion.remove();
        }, 3000);
    }, 100);

}
