document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("form-rapidez");
    const distanciaInput = document.getElementById("distancia");
    const tiempoInput = document.getElementById("tiempo");
    const unidadTiempoSelect = document.getElementById("unidad-tiempo");
    const resultadoWrapper = document.getElementById("resultado-wrapper");
    const resultadoBox = document.getElementById("resultado");
    const procedimientoBox = document.getElementById("procedimiento");
    const btnProbar = document.getElementById("btn-probar");

    form.addEventListener("submit", (evento) => {
        evento.preventDefault();
        calcularRapidez();
    });

    btnProbar.addEventListener("click", () => {
        distanciaInput.value = 600;
        tiempoInput.value = 10;
        unidadTiempoSelect.value = "60";
        calcularRapidez();
        document.getElementById("distancia").closest(".card").scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
    });

    function calcularRapidez() {

        const distancia = parseFloat(distanciaInput.value);
        const tiempoIngresado = parseFloat(tiempoInput.value);
        const factorUnidad = parseFloat(unidadTiempoSelect.value);
        const unidadTexto = unidadTiempoSelect.options[unidadTiempoSelect.selectedIndex].text;

        resultadoWrapper.classList.remove("mostrar");

        if (isNaN(distancia) || isNaN(tiempoIngresado) || distancia < 0 || tiempoIngresado <= 0) {
            resultadoBox.innerHTML = `
                <i class="bi bi-exclamation-triangle-fill"></i>
                Ingresa una distancia y un tiempo válidos (el tiempo debe ser mayor que 0).
            `;
            resultadoBox.classList.add("error");
            procedimientoBox.innerHTML = "";
            requestAnimationFrame(() => resultadoWrapper.classList.add("mostrar"));
            return;
        }

        const tiempoSegundos = tiempoIngresado * factorUnidad;
        const rapidez = distancia / tiempoSegundos;

        resultadoBox.classList.remove("error");
        resultadoBox.innerHTML = `
            <i class="bi bi-speedometer2"></i>
            La rapidez es <strong>${rapidez.toFixed(2)} m/s</strong>
        `;

        let conversionHtml = "";
        if (factorUnidad !== 1) {
            conversionHtml = `
                <div class="paso-formula">t = ${tiempoIngresado} ${unidadTexto} &times; ${factorUnidad} = ${tiempoSegundos} s</div>
            `;
        }

        procedimientoBox.innerHTML = `
            <div class="procedimiento-titulo"><i class="bi bi-diagram-3"></i> Procedimiento</div>
            <div class="paso-formula">v = d / t</div>
            ${conversionHtml}
            <div class="paso-formula">v = ${distancia} m / ${tiempoSegundos} s = <strong>${rapidez.toFixed(2)} m/s</strong></div>
        `;

        requestAnimationFrame(() => resultadoWrapper.classList.add("mostrar"));
    }

});
