<!DOCTYPE html>
<html lang="es" dir="">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Contacto | LIMAC</title>

    <?php include('componentes/head.php');?>

</head>

<body>
    <!-- ========== HEADER ========== -->
    <?php include('componentes/header_dark.php');?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="bg-primary position-relative">
            <div class="container content-space-t-2 content-space-t-3 position-relative z-2">
                <div class="row justify-content-lg-between pb-10">
                    <div class="col-lg-5 content-space-t-2 content-space-t-lg-3 mb-7 mb-lg-0">
                        <!-- Heading -->
                        <div class="mb-7">
                            <h2 class="h1 text-white">Comuníquese con nosotros</h2>
                            <p class="text-white-70">Llene el formulario y nos pondremos en contácto o comuníquese al:
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="row">
                            <div class="col-sm-6 mb-5">
                                <span class="icon icon-soft-light icon-circle mb-3">
                                    <i class="bi-envelope-open-fill"></i>
                                </span>
                                <h4 class="text-white mb-0">Consultas generales</h4>
                                <a class="text-white-70 small" href="#">ventas@limac.com.pe</a>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6 mb-5">
                                <span class="icon icon-soft-light icon-circle mb-3">
                                    <i class="bi-telephone-inbound-fill"></i>
                                </span>
                                <h4 class="text-white mb-0">Número</h4>
                                <a class="text-white-70 small" href="#">(01) 700 9040</a>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6">
                                <span class="icon icon-soft-light icon-circle mb-3">
                                    <i class="bi-geo-alt-fill"></i>
                                </span>
                                <h4 class="text-white mb-0">Dirección</h4>
                                <a class="text-white-70 small" href="#">Calle German Schreiber 210 Oficina 302, San
                                    Isidro</a>
                            </div>
                            <!-- End Col -->
                            <div class="col-sm-6">
                                <span class="icon icon-soft-light icon-circle mb-3">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <h4 class="text-white mb-0">Horarió de Atención</h4>
                                <a class="text-white-70 small" href="#">Lunes a Viernes de 08:00 a 18:00<br>Sábados de
                                    08:00 a 13:00</a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>

                    <div class="col-lg-6 mt-10">
                        <!-- Card -->
                        <div class="card zi-2">
                            <div class="card-body">

                                <!-- Form -->
                                <form>
                                    <div class="mb-4">
                                        <h3>Datos del servicio</h3>
                                    </div>
                                    <!-- Servicio -->
                                    <!-- Servicio -->
                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="selectServicio">Servicio</label>
                                        <select id="selectServicio" class="form-select form-select-lg" name="servicio">
                                            <option value="" selected disabled>Seleccione un servicio</option>
                                            <option value="Traducción">Traducción</option>
                                            <option value="Interpretación">Interpretación</option>
                                        </select>
                                    </div>

                                    <!-- =================== CAMPOS PARA TRADUCCIÓN =================== -->
                                    <div id="camposTraduccion" style="display: none;">

                                        <!-- Tipo de entrega -->
                                        <div class="mb-3">
                                            <label class="form-label visually-hidden" for="selectEntrega">Tipo de
                                                entrega</label>
                                            <select id="selectEntrega" class="form-select form-select-lg"
                                                name="tipo_entrega">
                                                <option value="" selected disabled>Seleccione el tipo de entrega
                                                </option>
                                                <option value="MS Word - versión digital">MS Word - versión digital
                                                </option>
                                                <option value="Certificada - versión digital">Certificada - versión
                                                    digital</option>
                                                <option value="Certificada - versión impresa">Certificada - versión
                                                    impresa</option>
                                                <option value="Oficial - versión impresa">Oficial - versión impresa
                                                </option>
                                            </select>
                                        </div>

                                        <!-- Idioma de origen -->
                                        <div class="mb-3">
                                            <label class="form-label visually-hidden" for="idiomaOrigen">Idioma de
                                                origen</label>
                                            <select id="idiomaOrigen" class="form-select form-select-lg"
                                                name="idioma_origen">
                                                <option value="" selected disabled>Idioma de origen</option>
                                                <option value="Español (Perú)">Español (Perú)</option>
                                                <option value="Español (España)">Español (España)</option>
                                                <option value="Inglés (EE.UU.)">Inglés (EE.UU.)</option>
                                                <option value="Inglés (Reino Unido)">Inglés (Reino Unido)</option>
                                                <option value="Francés (Francia)">Francés (Francia)</option>
                                                <option value="Francés (Canadá)">Francés (Canadá)</option>
                                                <option value="Alemán (Alemania)">Alemán (Alemania)</option>
                                                <option value="Italiano (Italia)">Italiano (Italia)</option>
                                                <option value="Portugués (Brasil)">Portugués (Brasil)</option>
                                                <option value="Portugués (Portugal)">Portugués (Portugal)</option>
                                                <option value="Quechua (Perú)">Quechua (Perú)</option>
                                            </select>
                                        </div>

                                        <!-- Idioma de destino -->
                                        <div class="mb-3">
                                            <label class="form-label visually-hidden" for="idiomaDestino">Idioma de
                                                destino</label>
                                            <select id="idiomaDestino" class="form-select form-select-lg"
                                                name="idioma_destino">
                                                <option value="" selected disabled>Idioma de destino</option>
                                                <option value="Español (Perú)">Español (Perú)</option>
                                                <option value="Español (España)">Español (España)</option>
                                                <option value="Inglés (EE.UU.)">Inglés (EE.UU.)</option>
                                                <option value="Inglés (Reino Unido)">Inglés (Reino Unido)</option>
                                                <option value="Francés (Francia)">Francés (Francia)</option>
                                                <option value="Francés (Canadá)">Francés (Canadá)</option>
                                                <option value="Alemán (Alemania)">Alemán (Alemania)</option>
                                                <option value="Italiano (Italia)">Italiano (Italia)</option>
                                                <option value="Portugués (Brasil)">Portugués (Brasil)</option>
                                                <option value="Portugués (Portugal)">Portugués (Portugal)</option>
                                                <option value="Quechua (Perú)">Quechua (Perú)</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="archivo">Adjuntar archivo</label>
                                            <input class="form-control" type="file" id="archivo" name="archivo">
                                        </div>

                                    </div>

                                    <!-- =================== CAMPOS PARA INTERPRETACIÓN =================== -->
                                    <div id="camposInterpretacion" style="display: none;">

                                        <!--Evento Nombre -->
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg"
                                                name="hireUsFormNameLastName" id="hireUsFormLasttName"
                                                placeholder="¿Cuál es el nombre de su evento?">
                                        </div>

                                        <!-- IDIOMA DE ORIGEN -->
                                        <div class="mb-3">
                                            <select id="idiomaDestino" class="form-select form-select-lg"
                                                name="idioma_destino">
                                                <option value="" selected disabled>Idioma de origen: Inglés, Español,
                                                    Francés... </option>
                                                <option value="Español (Perú)">Español</option>
                                                <option value="Inglés (EE.UU.)">Inglés</option>
                                                <option value="Francés (Francia)">Francés</option>
                                                <option value="Alemán (Alemania)">Alemán</option>
                                                <option value="Italiano (Italia)">Italiano</option>
                                                <option value="Portugués (Brasil)">Portugués</option>
                                                <option value="Quechua (Perú)">Japones</option>
                                                <option value="Quechua (Perú)">Quechua (Perú)</option>
                                            </select>
                                        </div>

                                        <!-- IDIOMA DESTINO -->
                                        <div class="mb-3">
                                            <select id="idiomaDestino" class="form-select form-select-lg"
                                                name="idioma_destino">
                                                <option value="" selected disabled>Idioma de destino: Inglés, Español,
                                                    Francés... </option>
                                                <option value="Español (Perú)">Español</option>
                                                <option value="Inglés (EE.UU.)">Inglés</option>
                                                <option value="Francés (Francia)">Francés</option>
                                                <option value="Alemán (Alemania)">Alemán</option>
                                                <option value="Italiano (Italia)">Italiano</option>
                                                <option value="Portugués (Brasil)">Portugués</option>
                                                <option value="Quechua (Perú)">Japones</option>
                                                <option value="Quechua (Perú)">Quechua (Perú)</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <!-- Fecha del evento -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">Fecha de
                                                    Inicio</label>
                                                <input type="date" class="form-control form-control-lg"
                                                    name="fecha_evento" id="fechaEvento" placeholder="Fecha del evento">
                                            </div>

                                            <!-- Hora del evento-->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">Hora de Inicio</label>
                                                <input type="time" class="form-control form-control-lg"
                                                    name="hora_evento" id="horaEvento"
                                                    placeholder="Seleccione una hora">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Fecha del evento -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">Fecha de Fin</label>
                                                <input type="date" class="form-control form-control-lg"
                                                    name="fecha_evento" id="fechaEvento" placeholder="Fecha del evento">
                                            </div>

                                            <!-- Hora del evento-->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">Fecha de
                                                    Término</label>
                                                <input type="time" class="form-control form-control-lg"
                                                    name="hora_evento" id="horaEvento"
                                                    placeholder="Seleccione una hora">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Lugar -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">Lugar de
                                                    Evento</label>
                                                <input type="text" class="form-control form-control-lg" name="lugar"
                                                    placeholder="">
                                            </div>

                                            <!-- Equipos-->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="hireUsFormDetails">¿Necesita
                                                    Equipos?</label>
                                                <select id="idiomaDestino" class="form-select" name="idioma_destino">
                                                    <option value="" selected disabled></option>
                                                    <option value="Sí">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg" name="lugar"
                                                placeholder="Cantidad de Asistentes">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="archivo">Adjuntar archivo</label>
                                            <input class="form-control" type="file" id="archivo" name="archivo">
                                        </div>
                                    </div>

                                    <!-- =================== CAMPOS DE INFORMACIÓN =================== -->
                                    <div class="mb-4">
                                        <h3>Su información</h3>
                                    </div>
                                    <!-- Nombre -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg" name="nombre"
                                            placeholder="Nombre / Razón social">
                                    </div>

                                    <!-- Correo -->
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg" name="correo"
                                            placeholder="Correo Electrónico">
                                    </div>

                                    <!-- Teléfono -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg" name="telefono"
                                            placeholder="Teléfono">
                                    </div>

                                    <!-- DNI / RUC -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg" name="documento"
                                            placeholder="DNI / RUC">
                                    </div>

                                    <div class="mb-4">
                                        <h3>Consulta</h3>
                                    </div>

                                    <!-- Consulta -->
                                    <div class="mb-3">
                                        <textarea class="form-control form-control-lg" name="mensaje"
                                            placeholder="Escríbanos su consulta" rows="4"></textarea>
                                    </div>

                                    <!-- Botón -->
                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Enviar solicitud</button>
                                    </div>
                                    <p>Al enviar este formulario, acepta la <a
                                            href="politica-de-privacidad.html">política de privacidad</a> y los <a
                                            href="terminos-y-condiciones.html">términos</a> de este sitio web.</p>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
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
    <?php 
        include('componentes/footer.php');
    ?>
    <!-- ========== END FOOTER ========== -->
    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Sign Up -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body">
                    <!-- Log in -->
                    <div id="signupModalFormLogin" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-2">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Log in with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
                        </div>
                    </div>
                    <!-- End Log in -->

                    <!-- Log in with Modal -->
                    <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate needs-validation" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormLoginEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                                </div>

                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormLoginPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required minlength="8">
                                <span class="invalid-feedback">Please enter a valid password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Log in with Modal -->

                    <!-- Sign up -->
                    <div id="signupModalFormSignup">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-3">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Sign up with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sign up -->

                    <!-- Sign up with Modal -->
                    <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate need-validate" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormSignupEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormSignupPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required>
                                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3" data-hs-validation-validate-class>
                                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm
                                    password</label>
                                <input type="password" class="form-control form-control-lg" name="confirmPassword"
                                    id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required
                                    data-hs-validation-equal-field="#signupModalFormSignupPassword">
                                <span class="invalid-feedback">Password does not match the confirm password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
                            </div>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </form>
                    </div>
                    <!-- End Sign up with Modal -->

                    <!-- Reset Password -->
                    <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Forgot password?</h2>
                            <p>Enter the email address you used when you joined and we'll send you instructions to reset
                                your password.</p>
                        </div>
                        <!-- En dHeading -->

                        <form class="js-validate need-validate" novalidate>
                            <div class="mb-3">
                                <!-- Form -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your
                                        email</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                                        <i class="bi-chevron-left small"></i> Back to Log in
                                    </a>
                                </div>

                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormResetPasswordEmail" tabindex="1"
                                    placeholder="Enter your email address" aria-label="Enter your email address"
                                    required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                <!-- End Form -->
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Reset Password -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer d-block text-center py-sm-5">
                    <small class="text-cap mb-4">Trusted by the world's best teams</small>

                    <div class="w-85 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>

    <!-- Go To -->
    <?php include('componentes/go_to.php');?>
    <!-- End Go To -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

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
    })()
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectServicio = document.getElementById('selectServicio');
        const camposTraduccion = document.getElementById('camposTraduccion');
        const camposInterpretacion = document.getElementById('camposInterpretacion');

        selectServicio.addEventListener('change', function() {
            const valor = selectServicio.value;
            camposTraduccion.style.display = (valor === 'Traducción') ? 'block' : 'none';
            camposInterpretacion.style.display = (valor === 'Interpretación') ? 'block' : 'none';
        });
    });
    </script>

</body>

</html>