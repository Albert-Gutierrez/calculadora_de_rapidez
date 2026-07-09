<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Rapidez</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container mt-5">

        <h1 class="text-center mb-4">
            Calculadora de Rapidez
        </h1>

        <div class="card p-4">

            <label class="form-label">
                Distancia (metros)
            </label>

            <input
                type="number"
                id="distancia"
                class="form-control mb-3">

            <label class="form-label">
                Tiempo (segundos)
            </label>

            <input
                type="number"
                id="tiempo"
                class="form-control mb-3">

            <button
                class="btn btn-primary"
                onclick="calcularRapidez()">
                Calcular
            </button>

            <h3 id="resultado" class="mt-4"></h3>

        </div>

    </div>

    <script src="js/app.js"></script>

</body>

</html>