let lastScrollTop = 0;
const header = document.getElementById("header");
const logo = document.getElementById("logo");
const btn_login = document.getElementById("btn_login");

const path = window.location.pathname;

// Detectar contacto
const isContactoPage = path.includes("contacto.php");

// Detectar index aunque esté en subcarpetas
const isIndexPage = path.endsWith("/") || path.includes("index.php");


console.log('mi url es: ' + window.location.pathname);
console.log(`isContactoPage: ${isContactoPage}, isIndexPage: ${isIndexPage}`);


window.addEventListener("scroll", function () {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll === 0) {
        // Parte superior: mostrar header sin fondo blanco
        header.style.transform = "translateY(0)";
        header.classList.remove("bg-white");

        if (isContactoPage || isIndexPage) {
            updateHeaderStyle({
                dark: true,
                logoWhite: true,
                btnWhite: true
            });
        }

    } else if (currentScroll > lastScrollTop) {
        // Scroll hacia abajo: ocultar header
        header.style.transform = "translateY(-100%)";

    } else {
        // Scroll hacia arriba: mostrar header con fondo blanco
        header.style.transform = "translateY(0)";
        header.classList.add("bg-white");

        if (isContactoPage || isIndexPage) {
            updateHeaderStyle({
                dark: false,
                logoWhite: false,
                btnWhite: false
            });
        }
    }

    lastScrollTop = Math.max(currentScroll, 0);
});

// Utilidad para actualizar clases según el estado
function updateHeaderStyle({ dark, logoWhite, btnWhite }) {
    // header.classList.toggle("navbar-dark", dark);
    // header.classList.toggle("navbar-light", !dark);

    // logo.classList.toggle("text-white", logoWhite);

    // btn_login.classList.toggle("btn-white", btnWhite);
    // btn_login.classList.toggle("btn-primary", !btnWhite);
}
