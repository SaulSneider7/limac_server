<!DOCTYPE html>
<html lang="es" dir="">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Inscripción | LIMAC</title>

    <?php include('componentes/head.php');?>

</head>

<body>
    <!-- ========== HEADER ========== -->
    <?php include('componentes/header_dark.php');?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="bg-primary content-space-t-2 position-relative">
            <div class="container content-space-t-1 position-relative z-2 mt-2">
                <div class="row justify-content-lg-between mb-10">
                    <div class="col-lg-12 mt-10 mb-10">
                        <div class="container py-5 ">
                            <div class="wizard-card card shadow border-0 rounded-4 p-4">
                                <h2 class="mb-4 text-primary text-center">Bolsa de Trabajo</h2>
                                <!-- Barra de progreso -->
                                <div class="card zi-2">
                                    <div class="card-body">
                                        <!-- Step Form -->
                                        <form class="js-step-form" data-hs-step-form-options='{
                                                "progressSelector": "#basicStepFormProgress",
                                                "stepsSelector": "#basicStepFormContent",
                                                "endSelector": "#createProjectFinishBtn"
                                            }'>
                                            <!-- Step -->
                                            <ul id="basicStepFormProgress"
                                                class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
                                                <li class="step-item">
                                                    <a class="step-content-wrapper" href="javascript:;"
                                                        data-hs-step-form-next-options='{
                                                            "targetSelector": "#basicStepDetails"
                                                            }'>
                                                        <span class="step-icon step-icon-soft-dark">1</span>
                                                        <div class="step-content">
                                                            <span class="step-title">Registro</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="step-item">
                                                    <a class="step-content-wrapper" href="javascript:;"
                                                        data-hs-step-form-next-options='{
                                                            "targetSelector": "#basicStepTerms"
                                                            }'>
                                                        <span class="step-icon step-icon-soft-dark">2</span>
                                                        <div class="step-content">
                                                            <span class="step-title">Estudios</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="step-item">
                                                    <a class="step-content-wrapper" href="javascript:;"
                                                        data-hs-step-form-next-options='{
                                                            "targetSelector": "#basicStepMembers"
                                                            }'>
                                                        <span class="step-icon step-icon-soft-dark">3</span>
                                                        <div class="step-content">
                                                            <span class="step-title">Detalle</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End Step -->

                                            <!-- Content Step Form -->
                                            <div id="basicStepFormContent">
                                                <div id="basicStepDetails" class="active">
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Información Personal</h3>
                                                    </div>
                                                    <div class="row g-3 mb-4">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="nombre"
                                                                placeholder="Nombre*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="direccion"
                                                                placeholder="Dirección*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="apellidos"
                                                                placeholder="Apellidos*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="distrito"
                                                                placeholder="Distrito*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="email" class="form-control" name="correo"
                                                                placeholder="Correo Electrónico*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select" name="discapacidad" required>
                                                                <option value="">¿Posee alguna discapacidad?*</option>
                                                                <option value="No">No</option>
                                                                <option value="Sí">Sí</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="telefono"
                                                                placeholder="Teléfono*" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" name="detalle_discapacidad"
                                                                rows="1"
                                                                placeholder="De ser afirmativo, indique su discapacidad"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="celular"
                                                                placeholder="Celular*" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Idiomas</h3>
                                                    </div>
                                                    <div class="row g-3 mb-4">
                                                        <!-- Idioma 1 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="idioma_1"
                                                                placeholder="Idioma 01*">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select" name="fluidez_1" required>
                                                                <option value="">Nivel de Fluidez*</option>
                                                                <option>Básico</option>
                                                                <option>Intermedio</option>
                                                                <option>Avanzado</option>
                                                            </select>
                                                        </div>
                                                        <!-- Idioma 2 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="idioma_2"
                                                                placeholder="Idioma 02">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select" name="fluidez_2">
                                                                <option value="">Nivel de Fluidez</option>
                                                                <option>Básico</option>
                                                                <option>Intermedio</option>
                                                                <option>Avanzado</option>
                                                            </select>
                                                        </div>
                                                        <!-- Idioma 3 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="idioma_3"
                                                                placeholder="Idioma 03">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select" name="fluidez_3">
                                                                <option value="">Nivel de Fluidez</option>
                                                                <option>Básico</option>
                                                                <option>Intermedio</option>
                                                                <option>Avanzado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Footer -->
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-auto">
                                                            <button type="button" class="btn btn-primary"
                                                                data-hs-step-form-next-options='{
                                                                        "targetSelector": "#basicStepTerms"
                                                                    }'>
                                                                Siguiente <i class="bi-chevron-right small"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- End Footer -->
                                                </div>

                                                <div id="basicStepTerms" style="display: none;">
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Estudios</h3>
                                                    </div>
                                                    <div class="row g-3 mb-4">
                                                        <!-- Institución 1 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="institucion_1"
                                                                placeholder="Institución*" required>
                                                        </div>
                                                        <!-- Institución 2 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="institucion_2"
                                                                placeholder="Institución*">
                                                        </div>
                                                        <!-- Fechas 1 -->
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_1"
                                                                placeholder="Desde (Mes-Añ)*" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_1"
                                                                placeholder="Hasta (Mes-Añ)">
                                                        </div>
                                                        <!-- Fechas 2 -->
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_2"
                                                                placeholder="Desde (Mes-Añ)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_2"
                                                                placeholder="Hasta (Mes-Añ)">
                                                        </div>
                                                        <!-- Nivel alcanzado 1 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="nivel_1"
                                                                placeholder="Nivel alcanzado*" required>
                                                        </div>
                                                        <!-- Nivel alcanzado 2 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="nivel_2"
                                                                placeholder="Nivel alcanzado*">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Experiencia Laboral</h3>
                                                    </div>
                                                    <div class="row g-3 mb-4">
                                                        <!-- Empresa 1 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="empresa_1"
                                                                placeholder="Empresa*" required>
                                                        </div>
                                                        <!-- Empresa 2 (opcional) -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="empresa_2"
                                                                placeholder="Empresa (opcional)">
                                                        </div>
                                                        <!-- Cargo 1 -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="cargo_1"
                                                                placeholder="Cargo*" required>
                                                        </div>
                                                        <!-- Cargo 2 (opcional) -->
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="cargo_2"
                                                                placeholder="Cargo (opcional)">
                                                        </div>
                                                        <!-- Desde/Hasta Mes/Año 1 -->
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_mes_1"
                                                                placeholder="Desde (Mes)*" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_anio_1"
                                                                placeholder="Desde (Año)*" required>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_mes_1"
                                                                placeholder="Hasta (Mes)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_anio_1"
                                                                placeholder="Hasta (Año)">
                                                        </div>
                                                        <!-- Desde/Hasta Mes/Año 2 (opcional) -->
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_mes_2"
                                                                placeholder="Desde (Mes)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="desde_anio_2"
                                                                placeholder="Desde (Año)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_mes_2"
                                                                placeholder="Hasta (Mes)">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="hasta_anio_2"
                                                                placeholder="Hasta (Año)">
                                                        </div>
                                                        <!-- Funciones en el cargo 1 -->
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" name="funciones_1" rows="2"
                                                                placeholder="¿Cuáles fueron sus funciones en el cargo?*"
                                                                required></textarea>
                                                        </div>
                                                        <!-- Funciones en el cargo 2 (opcional) -->
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" name="funciones_2" rows="2"
                                                                placeholder="¿Cuáles fueron sus funciones en el cargo? (opcional)"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- Footer -->
                                                    <div class="d-flex align-items-center">
                                                        <button type="button" class="btn btn-ghost-secondary me-2"
                                                            data-hs-step-form-prev-options='{
                                                                    "targetSelector": "#basicStepDetails"
                                                                }'>
                                                            <i class="bi-chevron-left small"></i> Anterior
                                                        </button>

                                                        <div class="ms-auto">
                                                            <button type="button" class="btn btn-primary"
                                                                data-hs-step-form-next-options='{
                                                                        "targetSelector": "#basicStepMembers"
                                                                    }'>
                                                                Siguiente <i class="bi-chevron-right small"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- End Footer -->
                                                </div>

                                                <div id="basicStepMembers" style="display: none;">
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Puesto a postular</h3>
                                                    </div>
                                                    <div class="row justify-content-center mb-3">
                                                        <div class="col-auto">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="Traductor">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="Traductor">
                                                                    <span class="">Traductor</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="Intérprete">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="Intérprete">
                                                                    <span class="">Intérprete</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="Docente">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="Docente">
                                                                    <span class="">Docente</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <h3 class="text-center">Disponibilidad de trabajo</h3>
                                                    </div>
                                                    <div class="row justify-content-center mb-3">
                                                        <div class="col-auto">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="1er Turno">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="1er Turno">
                                                                    <span class="">1er. Turno(8:00 am - 6:00 pm)</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="2do Turno">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="2do Turno">
                                                                    <span class="">2do. Turno(2:00 pm - 12:00 am)</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check form-switch" for="3er Turno">
                                                                    <input class="form-check-input mt-0" type="checkbox"
                                                                        id="3er Turno">
                                                                    <span class="">3er. Turno(10:00 pm - 08:00
                                                                        am)</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row mb-4">
                                                        <!-- Radios ocupan toda la fila arriba -->
                                                        <div class="col-12 mb-2">
                                                            <label class="form-label mb-1">¿Es Ud. un Traductor
                                                                Profesional?</label>
                                                            <div>
                                                                <!-- Radio Button Group -->
                                                                <div class="text-center mb-5">
                                                                    <div class="btn-group btn-group-segment btn-group-pills"
                                                                        role="group"
                                                                        aria-label="Pricing radio button group">
                                                                        <input type="radio"
                                                                            class="js-switch-text btn-check"
                                                                            name="btnradio" id="btnradio1"
                                                                            autocomplete="off" checked>
                                                                        <label class="js-toggle-switch btn btn-sm"
                                                                            for="btnradio1">
                                                                            Sí
                                                                        </label>

                                                                        <input type="radio"
                                                                            class="js-switch-text btn-check"
                                                                            name="btnradio" id="btnradio2"
                                                                            autocomplete="off">
                                                                        <label class="js-toggle-switch btn btn-sm"
                                                                            for="btnradio2">
                                                                            <span class="form-switch-promotion">
                                                                                No
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Ahora dos columnas iguales para los textareas -->
                                                        <div class="col-md-6">
                                                            <textarea class="form-control mb-3"
                                                                name="estudios_traductor" rows="2"
                                                                placeholder="Háblenos un poco acerca de sus estudios como traductor"></textarea>
                                                            <textarea class="form-control"
                                                                name="info_adicional_traductor" rows="2"
                                                                placeholder="Información adicional acerca de Ud."></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control mb-3"
                                                                name="diferencia_traductor" rows="2"
                                                                placeholder="¿Qué le diferencia de otros traductores?*"></textarea>
                                                            <textarea class="form-control" name="cualidades_defectos"
                                                                rows="2"
                                                                placeholder="¿Cuáles son sus cualidades y defectos?"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Adjunte su CV: (*)</label>
                                                        <input type="file" class="form-control" name="cv"
                                                            accept=".pdf,.doc,.docx" required>
                                                    </div>
                                                    <!-- Footer -->
                                                    <div class="d-sm-flex align-items-center">
                                                        <button type="button"
                                                            class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                                                            data-hs-step-form-prev-options='{
                                                                    "targetSelector": "#basicStepTerms"
                                                                }'>
                                                            <i class="bi-chevron-left small"></i> Anterior
                                                        </button>

                                                        <div class="d-flex justify-content-end ms-auto">
                                                            <button type="button" class="btn btn-white me-2"
                                                                data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            <button id="createProjectFinishBtn" type="button"
                                                                class="btn btn-primary">Enviar</button>
                                                        </div>
                                                    </div>
                                                    <!-- End Footer -->
                                                </div>
                                            </div>
                                            <!-- End Content Step Form -->

                                            <!-- Message Body -->
                                            <div id="basicStepSuccessMessage" class="js-success-message"
                                                style="display:none;">
                                                <div class="text-center">
                                                    <img class="img-fluid mb-3"
                                                        src="./assets/svg/illustrations/oc-hi-five.svg"
                                                        alt="Image Description" style="max-width: 15rem;">

                                                    <div class="mb-4">
                                                        <h2>Successful!</h2>
                                                        <p>New project has been successfully created.</p>
                                                    </div>

                                                    <div class="d-flex justify-content-center gap-3">
                                                        <a class="btn btn-white" href="#">
                                                            <i class="bi-chevron-left small ms-1"></i> Back to projects
                                                        </a>
                                                        <a class="btn btn-primary" href="#">
                                                            <i class="tio-city me-1"></i> Add new project
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Message Body -->
                                        </form>
                                        <!-- End Step Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- SVG Background Shape -->
            <div class="position-absolute bottom-0 start-0 end-0">
                <img class="img-fluid" src="./assets/svg/components/isometric-squares-light.svg"
                    alt="Image Description">
            </div>
            <!-- End SVG Background Shape -->
        </div>

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include('componentes/footer.php');?>
    <!-- ========== END FOOTER ========== -->
    <!-- JS Global Compulsory  -->
    <?php include('componentes/js.php');?>


    <!-- JS Plugins Init. -->
    <script>
    (function() {

        // INITIALIZATION OF HEADER
        // =======================================================
        new HSHeader('#header').init()


        // INITIALIZATION OF MEGA MENU
        // =======================================================
        new HSMegaMenu('.js-mega-menu', {
            desktop: {
                position: 'left'
            }
        })

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.js-typedjs').forEach(function(el) {
                try {
                    const options = JSON.parse(el.getAttribute('data-hs-typed-options'));
                    new Typed(el, options);
                } catch (e) {
                    console.error('Typed.js: JSON inválido en data-hs-typed-options', e);
                }
            });
        });
        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
            onSubmit: data => {
                data.event.preventDefault()
                alert('Submited')
            }
        })


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
            duration: 650,
            once: true
        });

        // INITIALIZATION OF SWIPER
        // =======================================================
        let activeIndex = 0
        var sliderThumbs = new Swiper('.js-swiper-thumbs', {
            slidesPerView: 1,
            autoplay: false,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            followFinger: false,
            loop: true,
            on: {
                'slideChangeTransitionEnd': function(event) {
                    if (sliderMain === undefined) return
                    sliderMain.slideTo(event.activeIndex)
                }
            }
        });

        var sliderMain = new Swiper('.js-swiper-main', {
            effect: 'fade',
            autoplay: false,
            disableOnInteraction: true,
            loop: true,
            navigation: {
                nextEl: '.js-swiper-main-button-next',
                prevEl: '.js-swiper-main-button-prev',
            },
            thumbs: {
                swiper: sliderThumbs
            },
            on: {
                'slideChangeTransitionEnd': function(event) {
                    if (sliderThumbs === undefined) return
                    sliderThumbs.slideTo(event.activeIndex)
                }
            }
        })

        //menu-espaciado 
        document.addEventListener("DOMContentLoaded", function() {
            const menu = document.getElementById("miMenu");

            // Verifica si la pantalla es >= 992px
            if (window.matchMedia("(min-width: 992px)").matches) {
                if (menu.classList.contains("mt-n4")) {
                    menu.classList.remove("mt-n4");
                    menu.classList.add("mt-n2");
                }
            }

            // Si quieres que también responda al redimensionamiento:
            window.addEventListener("resize", function() {
                if (window.matchMedia("(max-width: 992px)").matches) {
                    if (menu.classList.contains("mt-n4")) {
                        menu.classList.remove("mt-n4");
                        menu.classList.add("mt-n2");
                    }
                } else {
                    // Vuelve a mt-n4 si el ancho baja de 992px
                    if (menu.classList.contains("mt-n2")) {
                        menu.classList.remove("mt-n2");
                        menu.classList.add("mt-n4");
                    }
                }
            });
        });


        // Clients
        var swiper = new Swiper('.js-swiper-clients', {
            slidesPerView: 2,
            breakpoints: {
                380: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },
            },
        });

        // Card Grid
        var swiper = new Swiper('.js-swiper-card-blocks', {
            slidesPerView: 1,
            pagination: {
                el: '.js-swiper-card-blocks-pagination',
                dynamicBullets: true,
                clickable: true,
            },
            breakpoints: {
                620: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
            },
        });

        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
            finish($el) {
                const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

                $successMessageTempalte.style.display = 'block'

                $el.style.display = 'none'
                $el.parentElement.appendChild($successMessageTempalte)
            }
        })

        // INITIALIZATION OF TOGGLE STATE
        // =======================================================
        new HSToggleState('.js-toggle-state')

        // INITIALIZATION OF SWITCH TEXT
        // =======================================================
        new HSSwitchText('.js-switch-text', {
            afterChange() {
                document.querySelector('.js-nouislider').noUiSlider.set([this.target[0].text])
            }
        })


    })()
    </script>
</body>

</html>