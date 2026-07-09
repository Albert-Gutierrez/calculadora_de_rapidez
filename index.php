<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Rapidez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Fira+Code:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="bg-shapes">
        <span class="shape shape-1"></span>
        <span class="shape shape-2"></span>
        <span class="shape shape-3"></span>
    </div>

    <div class="container py-5">

        <header class="text-center mb-5">
            <div class="badge-pill mb-3">
                <i class="bi bi-speedometer2"></i> Física · Movimiento Rectilíneo
            </div>
            <h1 class="titulo">Calculadora de Rapidez</h1>
            <p class="subtitulo">
                Calcula la rapidez media a partir de la distancia recorrida y el tiempo empleado
            </p>
        </header>

        <div class="row justify-content-center">

            <!-- Calculadora interactiva -->
            <div class="col-lg-8">
                <div class="card glass-card glass-card-principal p-4 p-md-5">

                    <h2 class="card-title-custom mb-4">
                        <i class="bi bi-calculator"></i> Calculadora interactiva
                    </h2>

                    <div class="formula-box mb-4">
                        <span class="formula-main">v = d / t</span>
                        <span class="formula-desc">rapidez = distancia &divide; tiempo</span>
                    </div>

                    <form id="form-rapidez" autocomplete="off">

                        <label class="form-label">Distancia recorrida</label>
                        <div class="input-group mb-3">
                            <input
                                type="number"
                                id="distancia"
                                class="form-control"
                                placeholder="Ej. 600"
                                step="any"
                                min="0"
                                required>
                            <span class="input-group-text">metros</span>
                        </div>

                        <label class="form-label">Tiempo empleado</label>
                        <div class="input-group mb-3">
                            <input
                                type="number"
                                id="tiempo"
                                class="form-control"
                                placeholder="Ej. 10"
                                step="any"
                                min="0"
                                required>
                            <select id="unidad-tiempo" class="form-select" style="max-width: 150px;">
                                <option value="1">segundos</option>
                                <option value="60">minutos</option>
                                <option value="3600">horas</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-calcular w-100 mt-2">
                            <i class="bi bi-lightning-charge-fill"></i> Calcular rapidez
                        </button>

                    </form>

                    <div id="resultado-wrapper" class="resultado-wrapper mt-4">
                        <div id="resultado" class="resultado-box"></div>
                        <div id="procedimiento" class="procedimiento-box"></div>
                    </div>

                </div>

                <!-- Botón para mostrar el ejercicio (opcional) -->
                <div class="ejercicio-cta mt-4">
                    <i class="bi bi-arrow-right-circle-fill neon-arrow neon-arrow-izq"></i>
                    <button
                        class="btn btn-toggle-ejercicio"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ejercicio-colapsable"
                        aria-expanded="false"
                        aria-controls="ejercicio-colapsable">
                        <i class="bi bi-journal-check"></i>
                        3 ejercicio resuelto guia de fisica
                        <i class="bi bi-chevron-down toggle-caret"></i>
                    </button>
                    <i class="bi bi-arrow-left-circle-fill neon-arrow neon-arrow-der"></i>
                </div>

                <!-- Ejercicio resuelto -->
                <div class="collapse mt-4" id="ejercicio-colapsable">
                    <div class="card glass-card glass-card-secundaria p-4 p-md-5">

                        <h2 class="card-title-custom mb-4">
                            <i class="bi bi-journal-check"></i> Ejercicio resuelto
                        </h2>

                        <p class="enunciado">
                            Una persona sale de la casa y camina una distancia de <strong>300 m</strong>.
                            Cuando regresa observa que, en el reloj han transcurrido <strong>10 minutos</strong>.
                            ¿Cuál fue su rapidez?
                        </p>

                        <div class="opciones mb-4">
                            <div class="opcion">a. 30 m/s</div>
                            <div class="opcion">b. 0,5 m/s</div>
                            <div class="opcion">c. 10 m/s</div>
                            <div class="opcion opcion-correcta">
                                d. 1 m/s <i class="bi bi-check-circle-fill"></i>
                            </div>
                        </div>

                        <h3 class="subtitulo-seccion"><i class="bi bi-diagram-3"></i> Procedimiento</h3>
                        <ol class="pasos">
                            <li>
                                La persona <strong>camina y regresa</strong> al mismo punto de partida,
                                por lo que recorre 300 m de ida y 300 m de vuelta.
                                <div class="paso-formula">d = 300 m + 300 m = 600 m</div>
                            </li>
                            <li>
                                Se convierte el tiempo de minutos a segundos, ya que la rapidez se
                                expresa en m/s.
                                <div class="paso-formula">t = 10 min &times; 60 = 600 s</div>
                            </li>
                            <li>
                                Se aplica la fórmula de la rapidez:
                                <div class="paso-formula">v = d / t</div>
                            </li>
                            <li>
                                Se sustituyen los valores y se resuelve:
                                <div class="paso-formula">v = 600 m / 600 s = <strong>1 m/s</strong></div>
                            </li>
                        </ol>

                        <div class="respuesta-final">
                            <i class="bi bi-award-fill"></i>
                            Respuesta correcta: <strong>d) 1 m/s</strong>
                        </div>

                        <button id="btn-probar" type="button" class="btn btn-outline-probar w-100 mt-4">
                            <i class="bi bi-arrow-repeat"></i> Probar estos datos en la calculadora
                        </button>

                    </div>
                </div>

            </div>

        </div>

        <footer class="text-center mt-5 footer-text">
            Hecho con <i class="bi bi-heart-fill text-danger"></i> para aprender Física
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/calculador.js"></script>

</body>

</html>
