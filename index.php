<?php
include 'includes/layout/header.php';
?>

<div class="contenedor-barra">
    <h1>Agenda de contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto">
        <legend class="title">Añada un contacto aquí <span>Todos los campos son obligatorios</span> </legend>

        <?php
            include 'includes/layout/formulario.php';
        ?>   

    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" class="buscador sombra" name="buscar" id="buscar" placeholder="Buscar Contactos">
        <p class="total-contactos"> <span>3</span> contactos</p>

        <div class="contenedor-tabla">
            <table id="listado-contactos" class="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono 1</th>
                        <th>Teléfono 2</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>David Corrales</td>
                        <td>Intel</td>
                        <td>22607721</td>
                        <td>71866664</td>
                        <td>
                            <a class="btn btn-editar" href="editar.php?id=1">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>David Corrales</td>
                        <td>Intel</td>
                        <td>22607721</td>
                        <td>71866664</td>
                        <td>
                            <a class="btn btn-editar" href="#">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>David Corrales</td>
                        <td>Intel</td>
                        <td>22607721</td>
                        <td>71866664</td>
                        <td>
                            <a class="btn btn-editar" href="#">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/layout/footer.php';
?>

