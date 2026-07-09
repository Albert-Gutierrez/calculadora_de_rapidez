function calcularRapidez() {

    let distancia = parseFloat(
        document.getElementById("distancia").value
    );

    let tiempo = parseFloat(
        document.getElementById("tiempo").value
    );

    let rapidez = distancia / tiempo;

    document.getElementById("resultado").innerHTML =
        "La rapidez es: " + rapidez.toFixed(2) + " m/s";
}