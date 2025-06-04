<!DOCTYPE html>
<html lang="es" dir="">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Limac | Pagos</title>

    <?php include('componentes/head.php');?>

</head>

<body>
    <!-- ========== HEADER ========== -->
    <?php 
    include('componentes/header_light.php');
  ?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Thumbs Slider -->
        <div class="position-relative overflow-hidden content-space-t-md-4">
            <div class="container">
                <div
                    class="position-relative content-space-t-3 content-space-t-md-0 content-space-t-lg-3 content-space-b-2 content-space-b-md-3 content-space-b-xl-5">
                    <div class="row position-relative zi-2 mt-md-n5">
                        <div class="col-md-6 mb-7 mb-md-0">
                            <!-- Heading -->
                            <div class="w-md-75 mb-7">
                                <h2 class="display-4 text-primary">Pague en línea con su número de
                                    <span class="text-primary text-highlight-warning">
                                        <span class="js-typedjs" data-hs-typed-options='{
                              "strings": ["cotización", "factura"],
                              "typeSpeed": 90,
                              "loop": true,
                              "backSpeed": 30,
                              "backDelay": 2500
                            }'></span>
                                    </span>
                                </h2>
                            </div>
                            <!-- End Heading -->

                            <form>
                                <!-- Input Card -->
                                <div class="input-card">
                                    <div class="input-card-form">
                                        <label for="searchLocationForm" class="form-label visually-hidden"></label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-prepend input-group-text">
                                                <i class="bi-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-lg"
                                                id="searchLocationForm" placeholder="# Cotización"
                                                aria-label="# Cotización">
                                        </div>
                                    </div>
                                    <button type="button lead" class="btn btn-primary btn-lg">Buscar</button>
                                </div>
                                <!-- End Input Card -->
                            </form>

                            <p class="py-4">Ante cualquier consulta no dude en escribirnos a ventas@limac.com.pe o
                                llamarnos al (01) 700 9040</p>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <div class="col-md-6 position-md-absolute top-0 end-0">
                        <img class="img-fluid rounded-4" src="./assets/img/pagos/bkg0171.jpg" alt="Image Description">

                        <!-- SVG Shape -->
                        <div class="position-absolute bottom-0 end-0 zi-n1 mb-n10 me-n7" style="width: 12rem;">
                            <img class="img-fluid" src="./assets/svg/components/dots-lg.svg" alt="Image Description">
                        </div>
                        <!-- End SVG Shape -->
                    </div>
                </div>
            </div>
            <!-- End Hero -->

            <div class="bg-light">
                <div class="">
                    <!-- Slide -->
                    <div class="sbg-img-start bg-img-start">
                        <div class="d-flex align-items-center position-relative">
                            <div class="container content-space-2">
                                <h3 class="text-primary pt-3 pb-4 text-center display-6">Instrucciones para pagos sin
                                    comisión</h3>
                                <div class="row justify-content-center align-items-center text-center payment-steps">
                                    <ul class="step step-md step-centered">
                                        <li class="step-item" data-aos="fade-right" data-aos-offset="300"
                                            data-aos-duration="500" data-aos-easing="ease-in-sine">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-soft-primary">1</span>
                                                <div class="step-content">
                                                    <img src="./assets/img/pagos/04.png" alt="Paso 1"
                                                        class="img-fluid step-img">
                                                    <p class="py-3">Ir al banco y realizar el depósito a la cuenta
                                                        indicada en la cotización.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="step-item" data-aos="fade-right" data-aos-offset="300"
                                            data-aos-duration="600" data-aos-easing="ease-in-sine">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-soft-primary">2</span>
                                                <div class="step-content">
                                                    <img src="./assets/img/pagos/05.png" alt="Paso 2"
                                                        class="img-fluid step-img">
                                                    <p class="py-3">Enviar adjunto el voucher del depósito a
                                                        ventas@limac.com.pe.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="step-item" data-aos="fade-right" data-aos-offset="300"
                                            data-aos-duration="700" data-aos-easing="ease-in-sine">
                                            <div class="step-content-wrapper">
                                                <span class="step-icon step-icon-soft-primary">3</span>
                                                <div class="step-content">
                                                    <img src="./assets/img/pagos/03.png" alt="Paso 3"
                                                        class="img-fluid step-img">
                                                    <p class="py-3">Empezamos con el proceso de traducción de sus
                                                        documentos.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Slide -->
                </div>
            </div>
            <!-- End Thumbs Slider -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <?php 
    include('componentes/footer.php');
  ?>
    <!-- ========== END FOOTER ========== -->

    <!-- Go To -->
    <?php include('componentes/go-to.php');?>
    <!-- End Go To -->

    <!-- Cookie Alert -->

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
</body>

</html>