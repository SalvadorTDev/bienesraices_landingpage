document.addEventListener("DOMContentLoaded", function () {
    eventListeners();
    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector(".mobile-menu");
    if (mobileMenu) {
        mobileMenu.addEventListener("click", navegacionResponsive);
    }
}

function darkMode() {
    const prefiereDarkMode = window.matchMedia("(prefers-color-scheme-dark)");
    if (prefiereDarkMode.matches) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }

    prefiereDarkMode.addEventListener("change", function () {
        if (prefiereDarkMode.matches) {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
        }
    });

    const botonDarkMode = document.querySelector(".dark-mode-button");
    botonDarkMode.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");

        //Para que el modo elegido se quede guardado en local-storage
        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("modo-oscuro", "true");
        } else {
            localStorage.setItem("modo-oscuro", "false");
        }
    });

    //Obtenemos el modo del color actual
    if (localStorage.getItem("modo-oscuro") === "true") {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }
}
function navegacionResponsive() {
    const navegacion = document.querySelector(".navegacion");
    navegacion.classList.toggle("mostrar");
}
