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

    <link rel="stylesheet" href="MyStyles.css">

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
                <!--<button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#preguntasModal">Nueva Encuesta</button>-->



                <button type="button" class="btn btn-danger">Salir</button>
            </div>
        </header>
    </div>
    <div class="container">
        <!-- <h1>Nueva Encuesta</h1>-->
        <form>
            <!--<div class="mb-3">
                <label for="tituloEncuesta" class="form-label">Título de la Encuesta</label>
                <input type="text" class="form-control" id="tituloEncuesta" placeholder="Título de la encuesta">
            </div>-->
            <section>
                <h2>Preguntas</h2>
                <div class="d-grid gap-3">
                    <!--COSA FEA MUY FEA PARA MOSTRAR LAS PREGUNTAS HECHAS PARA LA ENCUESTA-->
                    <?php
                    $data = file_get_contents('preguntas.json');
                    $json_data = json_decode($data, true);
                    foreach ($json_data as $valor) {
                        echo '
                         <div class = "p-3 bg-light border">
                            <h4>' . $valor['titulo'] . '</h4>';

                        foreach ($valor['respuestas'] as $opciones) {
                            echo
                            '<li>' . $opciones . '</li>';
                        }
                        echo '</div>';
                    } ?>
                </div>
                <br>
                <h2>Nueva Pregunta</h2>
                <div class="col-6">

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe aquí tu pregunta">
                </div>
                    </div>
                <div class="mb-3" id="containerRespuesta">
                    <label for="preguntaChoice" class="form-label">Respuestas</label>
                    <div class="row">

                        <div class="col-6">

                            <input type="text" class="form-control" id="preguntaChoice" placeholder="Escribe aquí una opción">
                        </div>
                        <div class="col-3">

                            <button type="button" class="btn btn-secondary" onclick="nuevaOpcion()">+</button>
                        </div>
                    </div>
                </div>
            </section>
            <button type="button" class="btn btn-primary azul-ucasal" onclick="nuevaOpcion()">Guardar</button>
            <a class="btn btn-secondary" href="preguntas.php">Salir</a>

        </form>
    </div>



    <script>
        function nuevaOpcion() {
            //recupero en input
            var opcionTexto = document.getElementById("preguntaChoice");
            //pregunto si el campo está vacio
            if (opcionTexto.value !== "") {
                //creo el elemento li
                let opcion = document.createElement('li');
                opcion.textContent = opcionTexto.value;
                //let texto = document.createTextNode(`${opcionTexto.value}`);

                //busco el container para añadirlo
                var container = document.getElementById('containerRespuesta');
                container.appendChild(opcion);
                //var newline = document.createElement('br');
                //container.appendChild(newline)

                //seteo el campo en vacio de nuevo
                opcionTexto.value = "";
            }

        }
    </script>
</body>


</html>