<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Boostrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--Boostrap Table-->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.js"></script>

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="assets/logo_UCASAL_vertical_color.png" alt="UCASAL" width="50">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary"></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#preguntasModal">Nueva Encuesta</button>
                <!-- <a type="button" class="btn btn-outline-primary me-2" href="nueva-encuesta.php">Nueva Encuesta</a>-->

                <!--Form de preguntas-->
                <div class="modal fade" id="preguntasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Encuesta</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <label for="tituloEncuesta" class="form-label">Título</label>
                                    <input id="tituloEncuesta" type="text" class="form-control" placeholder="Título de Encuesta">
                                    <label for="descripcionEncuesta" class="form-label">Descripción</label>
                                    <input id="descripcionEncuesta" type="text" class="form-control" placeholder="Descripción">
                                    <label for="fechaEncuesta" class="form-label">Fecha</label>
                                    <input id="fechaEncuesta" type="date" class="form-control" placeholder="Fecha">

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Fin del form-->

                <button type="button" class="btn btn-danger">Salir</button>
            </div>
        </header>
    </div>
    <div class="container-fluid">
        <h1>Encuesta</h1>
        <!--Tabla de preguntas-->
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Respuestas</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Nueva Pregunta</th>
                        <th scope="col">Editar </th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Encuesta 1</td>
                        <td>541</td>
                        <td>Cerrada</td>
                        <td><a  class="btn btn-success" href="nueva-encuesta.php">Agregar Preguntas</a></td>
                        <td><a href="">Editar</a> </td>
                        <td> <a href="">Borrar</a> </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Encuesta 2</td>
                        <td>862</td>
                        <td>Abierta</td>
                        <td><a  class="btn btn-success " href="nueva-encuesta.php">Agregar Preguntas</a></td>
                        <td><a href="">Editar</a> </td>
                        <td> <a href="">Borrar</a> </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Encuesta 3</td>
                        <td>87</td>
                        <td>Abierta</td>
                        <td><a class="btn btn-success" href="nueva-encuesta.php">Agregar Preguntas</a></td>
                        <td><a href="">Editar</a> </td>
                        <td> <a href="">Borrar</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Fin de tabla de preguntas-->
    </div>

</body>

<script>
    function nuevaPregunta() {

    }
</script>

</html>