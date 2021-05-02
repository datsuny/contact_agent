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

    if(nombre === "" || email === "" || telefono === ""){
        console.log('No tiene nada')
    }else{
        console.log('Tiene algo')
    }

}
