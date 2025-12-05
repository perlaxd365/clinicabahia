<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Clinica Bahia - Chimbote</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta property="og:title" content="Clínica Bahía - Atención Médica de Calidad">
    <meta property="og:description"
        content="Cuidamos tu salud con profesionales de confianza. Visítanos en clinicabahia.pe.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta property="og:url" content="https://clinicabahia.pe">
    <meta property="og:type" content="website">

    <!-- Twitter (también funciona en WhatsApp a veces) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">


    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">






    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- Modal -->
<div class="modal-overlay" id="anuncioModal">
    <div class="modal-content">
        <h2>✨ Oferta Laboral ✨</h2>
        <img src="{{ asset('img/promociones/admisionista.png') }}" alt="">
        <hr>
        <p>Déjanos tu CV al correo: <b style="color: blue;">administracion@clinicabahia.pe</b></p>
        <button id="cerrarModal">Cerrar</button>
    </div>
</div>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">adm.clinicabahia@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+51 905 431 945</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div class="bloque-texto">
                        <h3 class="mb-1">Clinica Bahía</h3>
                        <div class="linea"></div>
                        <p>Nuevo Chimbote</p>
                    </div>

                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Inicio<br></a></li>
                        <li><a href="#about">Quienes Somos</a></li>
                        <li><a href="#redes">Videos Redes</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#departments">Especialidades</a></li>
                        <li><a href="#doctors">Staff Médico</a></li>
                        <li><a href="#testimonio">Testimonios</a></li>
                        <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="#appointment">Acceso a pacientes</a>

            </div>

        </div>

    </header>

    <main class="main">

        <script>
            var myCarousel = document.querySelector('#myCarousel')
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000,
                wrap: false
            })
        </script>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="{{ asset('img/portada/portada1.png') }}" class="img-fluid"
                        style="height: auto; background-size: cover" alt="" data-aos="fade-in">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Profesionales</h5>
                        <p>Cuidamos tu salud con compromiso y experiencia.</p>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="3000">
                    <img src="{{ asset('img/portada/portada2.jpg') }}" class="img-fluid"
                        style="height: auto; background-size: cover" alt="" data-aos="fade-in">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Diagnóstico preciso</h5>
                        <p>Chequeos completos, atención confiable.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/portada/portada3.jpg') }}" class="img-fluid"
                        style="height: auto; background-size: cover" alt="" data-aos="fade-in">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Innovación y humanidad</h5>
                        <p>Salud para hoy, bienestar para siempre.</p>
                    </div>
                </div> <!-- Hero Section -->
                <section id="hero" class="hero section light-background">


                    <div class="container position-relative">

                        <div class="welcome position-relative blur-bg col-sm-6" data-aos="fade-down"
                            data-aos-delay="500">
                            <h4>Bienvenidos a la Cínica Bahía</h4>
                            <p style="color: #3f3939ff;">Tu bienestar es nuestra labor.</p>

                        </div><!-- End Welcome -->

                        <div class="content row gy-4">
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="why-box" data-aos="zoom-out" data-aos-delay="1000">
                                    <h3>Bienvenidos</h3>
                                    <p>
                                        Contamos con más de 20 especialidades médicas a cargo de un staff de
                                        especialistas con trayectoria internacional, dedicados a brindarte una atención
                                        médica de la más alta calidad y calidez.
                                    </p>
                                    <div class="text-center">
                                        <a href="#about" class="more-btn"><span>Learn More</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Why Box -->

                            <div class="col-lg-8 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="row gy-4">

                                        <div class="col-xl-4 d-flex align-items-stretch">
                                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="1500">
                                                <i class="bi bi-capsule"></i>
                                                <h4>Diagnóstico Profesional</h4>
                                                <p>La medicina que ofrecemos se llama: ciencia, experiencia y trato
                                                    humano.</p>
                                            </div>
                                        </div><!-- End Icon Box -->

                                        <div class="col-xl-4 d-flex align-items-stretch">
                                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="1700">
                                                <i class="bi bi-heart-pulse-fill"></i>
                                                <h4>Curar es un arte</h4>
                                                <p>Ciencia en la mente, corazón en cada consulta. La medicina que te
                                                    entiende.</p>
                                            </div>
                                        </div><!-- End Icon Box -->

                                        <div class="col-xl-4 d-flex align-items-stretch">
                                            <div class="icon-box" data-aos="fade-left" data-aos-delay="1800">
                                                <i class="bi bi-clipboard2-pulse-fill"></i>
                                                <h4>Tratamientos Especializados</h4>
                                                <p>Más que una consulta, es el inicio de tu bienestar.</p>
                                            </div>
                                        </div><!-- End Icon Box -->

                                    </div>
                                </div>
                            </div>
                        </div><!-- End  Content-->

                    </div>

                </section><!-- /Hero Section -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/quienes_somos.png') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=4buLv46f2to&feature=youtu.be"
                            class="glightbox pulsating-play-btn"></a>
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Quienes somos</h3>
                        <p>
                            En <b>Clínica Bahía</b> brindamos atención médica integral con un equipo de profesionales
                            comprometidos con la salud y el bienestar de nuestros pacientes.
                            Nuestro objetivo es ofrecer servicios de calidad, diagnósticos precisos y tratamientos
                            oportunos en un ambiente seguro, humano y confiable.
                        </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-house-medical"></i>
                                <div>
                                    <h5>Brindamos atención médica y de enfermería a domicilio</h5>
                                    <p>
                                        🩺 Atención médica y de enfermería en casa.<br>
                                        🏠 Comodidad, confianza y cuidado profesional.<br>
                                        💻 Seguimiento digital de tus atenciones.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>Laboratorios de ultima generación</h5>
                                    <p>
                                        🩸 Atención sin cita previa. <br>
                                        🔬 Resultados disponibles en línea. <br>
                                        👩‍⚕️ Personal altamente calificado.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-truck-medical"></i>
                                <div>
                                    <h5>Servicio de movilidad especializado</h5>
                                    <p>
                                        🚐 Traslados médicos seguros y cómodos.<br>
                                        🏥 Movilidad con asistencia profesional.<br>
                                        ⏱️ Puntualidad, seguridad y confianza en cada viaje.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->
        <section id="redes" class="redes section light-background">
            <!-- Sección para mostrar últimos videos de redes sociales -->
            <section class="videos-section" style="padding: 40px 0; background: #f8f9fa;">
                <div class="container" style="max-width: 1200px; margin: auto;">
                    <h2 style="text-align:center; margin-bottom:30px; font-size:28px; font-weight:700;">Conoce nuestros videos en Redes
                    </h2>

                    <!-- Grid de videos -->
                    <div id="videos-grid"
                        style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:20px;">
                    </div>
                </div>
            </section>

            <script>
                // ⚡ Cargar videos usando URLs incrustadas manualmente
                // Puedes reemplazar estas URLs por las de TikTok, Facebook o Instagram

                const videos = [
                    // TikTok
                    {
                        url: "https://www.tiktok.com/embed/v2/7579712512019483924",
                        title: "Video de TikTok"
                    },
                    // Instagram Reels
                    {
                        url: "https://www.instagram.com/p/DRnR-8Hjefg/embed",
                        title: "Reel de Instagram"
                    },
                    // Facebook Videos
                    {
                        url: "https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/reel/1499549357824042",
                        title: "Video de Facebook"
                    }
                ];

                const grid = document.getElementById('videos-grid');

                videos.forEach(video => {
                    const card = document.createElement('div');
                    card.style.background = "#fff";
                    card.style.borderRadius = "12px";
                    card.style.boxShadow = "0 2px 10px rgba(0,0,0,0.1)";
                    card.style.overflow = "hidden";

                    card.innerHTML = `    <div style="padding:15px; font-weight:600;">${video.title}</div>
                        <iframe width="100%" height="670" src="${video.url}?autoplay=1&muted=1" frameborder="0" allow="autoplay; encrypted-media" muted playsinline></iframe>
                    
                    `;

                    grid.appendChild(card);
                });
                // Script de Instagram
                (function(d, s, id) {
                    var js;
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://www.instagram.com/embed.js";
                    d.body.appendChild(js);
                }(document, 'script', 'instagram-embed'));

                // Script de Facebook
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v17.0";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

        </section>
        <!-- Stats Section -->
        <section id="stats" class="stats section ">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctores</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-regular fa-hospital"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departmentos</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-flask"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Laboratorios</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Testimonios</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Servicios</h2>
                <p>En Clínica Bahía cuidamos cada detalle para que te sientas cómodo y seguro.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative service-bg bg-quirurgico">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Centro quirúrgico (cirugía laparoscópica)</h3>
                            </a>
                            <p>Centro quirúrgico <b>equipado para cirugías laparoscópicas modernas</b>, con mínima
                                invasión, rápida recuperación y atención personalizada por especialistas.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative service-bg bg-gastroenterologo">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Servicio de gastroenterología (endoscopias y colonoscopias)</h3>
                            </a>
                            <p>Atención especializada en enfermedades del sistema digestivo, <b>con endoscopías y
                                    colonoscopías realizadas con tecnología moderna</b> y personal médico altamente
                                capacitado.</p>
                        </div>
                    </div><!-- End Service Item -->


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative service-bg bg-tomografia">
                            <div class="icon">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Tomografías</h3>
                            </a>
                            <p>Realizamos <b>tomografías con equipos modernos y personal altamente capacitado</b>.
                                Nuestras imágenes de alta calidad permiten a los médicos obtener diagnósticos rápidos y
                                precisos para tu mejor atención.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative service-bg bg-rayosx">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Rayos X</h3>
                            </a>
                            <p>Contamos con un moderno sistema de radiografía digital que proporciona imágenes nítidas y
                                detalladas, <b>optimizando la evaluación de estructuras óseas y tejidos blandos.</b></b>
                            </p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative service-bg bg-ecografia">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Ecografía</h3>
                            </a>
                            <p>El servicio de Ecografía ofrece estudiosb
                                <b> diagnósticos precisos mediante equipos de ultrasonido de alta resolución</b>,
                                permitiendo evaluar órganos internos, tejidos blandos y embarazos de forma segura, no
                                invasiva y sin radiación.</b>
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative service-bg bg-examenes">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Examenes de laboratorio</h3>
                            </a>
                            <p>Nuestro servicio de Laboratorio Clínico ofrece una amplia gama de exámenes con tecnología
                                moderna y personal altamente calificado.
                                <b> Garantizamos resultados confiables y oportunos</b>
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative service-bg bg-hospitalizacion">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Hospitalización</h3>
                            </a>
                            <p>Nuestro servicio de Hospitalización dispone de ambientes confortables, equipados con
                                tecnología médica actualizada, <b>oxígeno central</b>, monitoreo y asistencia continua
                                de enfermería.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative service-bg bg-enfermeria">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Servicio de Enfermería</h3>
                            </a>
                            <p>Atención de enfermería las <b>24 horas</b>, con personal profesional, amable y
                                comprometido con tu bienestar.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative service-bg bg-domicilio">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="javascript:void(0)" class="stretched-link">
                                <h3>Servicio a Domicilio</h3>
                            </a>
                            <p>Pensando en tu comodidad, en Clínica Bahía te atendemos en casa las <b>24 horas</b>.
                                Nuestro equipo médico y de enfermería se traslada hasta tu domicilio para brindarte los
                                cuidados que necesitas, con la misma calidad y calidez que en nuestras instalaciones.
                            </p>

                        </div>
                    </div><!-- End Service Item -->

                    <style>
                        /* 🎨 Efecto general */
                        .service-bg {
                            position: relative;
                            overflow: hidden;
                            color: white;
                            z-index: 1;
                        }

                        .service-bg h3 {
                            color: white;
                        }

                        .service-bg::before {
                            content: "";
                            position: absolute;
                            inset: 0;
                            background-position: center;
                            background-size: cover;
                            background-repeat: no-repeat;
                            filter: blur(6px) brightness(0.6);
                            transition: filter 0.4s ease, transform 0.4s ease;
                            z-index: -1;
                        }

                        .service-bg:hover::before {
                            filter: blur(0) brightness(0.8);
                            transform: scale(1.05);
                        }

                        .bg-quirurgico::before {
                            background: url("{{ asset('img/servicios/laparoscopia.jpg') }}") center/cover no-repeat;
                        }

                        .bg-gastroenterologo::before {
                            background: url("{{ asset('img/servicios/endoscopia.png') }}") center/cover no-repeat;
                        }

                        .bg-tomografia::before {
                            background: url("{{ asset('img/servicios/tomografia.png') }}") center/cover no-repeat;
                        }

                        .bg-rayosx::before {
                            background: url("{{ asset('img/servicios/rayos_x.png') }}") center/cover no-repeat;
                        }

                        .bg-ecografia::before {
                            background: url("{{ asset('img/servicios/ecografia.png') }}") center/cover no-repeat;
                        }

                        .bg-examenes::before {
                            background: url("{{ asset('img/servicios/examenes_laboratorio.jpeg') }}") center/cover no-repeat;
                        }

                        .bg-hospitalizacion::before {
                            background: url("{{ asset('img/servicios/hospitalizacion.jpg') }}") center/cover no-repeat;
                        }

                        .bg-enfermeria::before {
                            background: url("{{ asset('img/servicios/enfermeria.png') }}") center/cover no-repeat;
                        }

                        .bg-domicilio::before {
                            background: url("{{ asset('img/servicios/domicilio.jpeg') }}") center/cover no-repeat;
                        }
                    </style>
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Appointment Section -->

        <!-- /Appointment Section -->

        <!-- Departments Section -->
        <section id="departments" class="departments section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Departamentos</h2>
                <p>En <b>Clínica Bahía</b> contamos con diferentes departamentos especializados, diseñados para ofrecer
                    una <b>atención integral y coordinada a cada paciente</b>.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab"
                                    href="#departments-tab-1">Cardiología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#departments-tab-3">Gastroenterología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Traumatología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Ginecología</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiología</h3>
                                        <p class="fst-italic">Evaluaciones y tratamientos cardiovasculares con
                                            especialistas en cardiología y equipos modernos para el cuidado integral de
                                            tu corazón.</p>
                                        <p>En Clínica Bahía cuidamos tu corazón con dedicación y tecnología moderna.
                                            Nuestro equipo de cardiología realiza evaluaciones completas para detectar y
                                            prevenir enfermedades cardíacas, ayudándote a mantener una vida saludable y
                                            tranquila.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('img/departments-1.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Neurología</h3>
                                        <p class="fst-italic">Evaluación y tratamiento de enfermedades neurológicas con
                                            especialistas y equipos modernos para tu diagnóstico y bienestar.</p>
                                        <p>El servicio de Neurología de Clínica Bahía se dedica al diagnóstico,
                                            tratamiento y seguimiento de enfermedades que afectan el sistema nervioso
                                            central y periférico.
                                            Contamos con especialistas en neurología y tecnología avanzada para evaluar
                                            trastornos neurológicos como cefaleas, epilepsia, enfermedades
                                            cerebrovasculares, entre otros, brindando una atención segura y
                                            personalizada.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('img/departments-2.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Gastroenterología</h3>
                                        <p class="fst-italic">Diagnóstico y tratamiento de enfermedades digestivas con
                                            especialistas en gastroenterología y equipos modernos.</p>
                                        <p>El servicio de Gastroenterología de Clínica Bahía está orientado al
                                            diagnóstico, tratamiento y prevención de enfermedades del sistema
                                            digestivo.Contamos con especialistas altamente capacitados y equipos
                                            modernos para la evaluación de afecciones gástricas, hepáticas e
                                            intestinales, brindando una atención segura, oportuna y personalizada para
                                            cada paciente.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('img/departments-3.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Traumatología</h3>
                                        <p class="fst-italic">Diagnóstico y tratamiento de lesiones óseas, musculares y
                                            articulares con especialistas en traumatología y ortopedia.</p>
                                        <p>El servicio de Traumatología y Ortopedia de Clínica Bahía se especializa en
                                            el diagnóstico, tratamiento y rehabilitación de lesiones del sistema
                                            músculo-esquelético.En Clínica Bahía cuidamos de tus huesos, músculos y
                                            articulaciones con experiencia y dedicación.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('img/departments-4.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Ginecología</h3>
                                        <p class="fst-italic">Atención integral en salud femenina con especialistas en
                                            ginecología y obstetricia, tecnología moderna y trato cálido.</p>
                                        <p>El servicio de Ginecología y Obstetricia de Clínica Bahía está orientado a la
                                            prevención, diagnóstico y tratamiento de enfermedades del sistema
                                            reproductor femenino.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('img/departments-5.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Departments Section -->

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Staff Médico</h2>
                <p>Staff médico especializado, comprometido con tu bienestar y con brindar atención profesional, humana
                    y de calidad.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <!-- inicio de transisicion -->
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="row gy-4">

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic ">
                                                <img src="{{ asset('img/doctors/ronald_huerta.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt="">
                                            </div>
                                            <div class="member-info">
                                                <h4>Ronald Huerta</h4>
                                                <b>Doctor - Anestesiólogo</b>
                                                <span>CMP <b>037276</b> - RNE <b>022680</b></span>
                                                <p>Especialista en anestesiología, encargado de brindar seguridad y
                                                    confort al paciente durante los procedimientos médicos y
                                                    quirúrgicos.
                                                    <br>
                                                    <b>Especialista en manejo del dolor.</b>
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic ">
                                                <img src="{{ asset('img/doctors/puente.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt="">
                                            </div>
                                            <div class="member-info">
                                                <h4>Jeancarlo Puente</h4>
                                                <b>Doctor - Cirujano General</b>
                                                <span>CMP <b>058691</b> - RNE <b>044008</b></span>
                                                <p>Es un Cirujano General con sólida formación académica y amplia
                                                    experiencia en el diagnóstico, tratamiento y manejo quirúrgico de
                                                    diversas enfermedades que afectan al sistema digestivo, la pared
                                                    abdominal, la piel, los tejidos blandos y otras áreas del cuerpo.
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic ">
                                                <img src="{{ asset('img/doctors/uribe.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt="">
                                            </div>
                                            <div class="member-info">
                                                <h4>Jonnathan Uribe</h4>
                                                <b>Doctor - Cirujano General</b>
                                                <span>CMP <b>067817</b> - RNE <b>040824</b></span>
                                                <p>Cirujano General dedicado a ofrecer una atención médica segura,
                                                    moderna y de alta calidad. Brinda soluciones eficaces para
                                                    enfermedades del sistema digestivo, patologías abdominales, hernias,
                                                    problemas de la vesícula biliar, tiroides, piel y tejidos blandos.
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img src="{{ asset('img/doctors/cruz_medina.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Cruz Medina</h4>
                                                <b>Doctor - Traumatología</b>
                                                <span>CMP <b>083739</b> - RNE <b>036062</b></span>
                                                <p>Especialista en Traumatología, atención especializada en lesiones
                                                    óseas, musculares y articulares, con tratamientos orientados a una
                                                    recuperación rápida y segura.
                                                    <br> <b>Con sub-especialidad en cirugía de mano y pie diabético.</b>
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->




                                </div>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="row gy-4">



                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img src="{{ asset('img/doctors/neurologo.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Winston Teodoro Rodriguez</h4>
                                                <b>Doctor - Neurología</b>
                                                <span>CMP <b>028752</b> - RNE <b>027614</b></span>
                                                <p>El servicio de Neurología ofrece diagnóstico, tratamiento y
                                                    seguimiento de enfermedades del sistema nervioso central y
                                                    periférico.
                                                    Atención integral a pacientes con migrañas, epilepsia, trastornos
                                                    del sueño, neuropatías, Parkinson y otras afecciones neurológicas.
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->


                                </div>

                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <br><br>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- fin de transiscion -->



            </div>

        </section><!-- /Doctors Section -->


        <!-- Doctors Section -->
        <section id="doctors" class="doctors section ">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Staff de Hospitalización y Asistencial</h2>
                <p>Contamos con un equipo de profesionales altamente capacitados en el cuidado y atención integral del
                    paciente. Nuestro staff de hospitalización y asistencial está conformado por médicos, enfermeras y
                    técnicos especializados, comprometidos con brindar un servicio humano, seguro y de calidad durante
                    todo el proceso de recuperación.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <!-- inicio de transisicion -->
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="row gy-4">
                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img
                                                    src="{{ asset('img/doctors/aracely_huerta.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Aracely Huerta </h4>
                                                <b>Doctor - Medicina General</b>
                                                <span>CMP <b>077622</b> </span>
                                                <p>Atención médica donde evalúa de manera completa el estado de salud
                                                    del paciente, con enfoque humano y profesional.</p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->

                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img
                                                    src="{{ asset('img/doctors/claudia_uriol.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Claudia Uriol</h4>
                                                <b>Doctor - Medicina General</b>
                                                <span>CMP <b>091342</b> </span>
                                                <p>Atención médica integral para la prevención, diagnóstico y
                                                    tratamiento de enfermedades.</p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img
                                                    src="{{ asset('img/doctors/ysabel_torres.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Ysabel Torres</h4>
                                                <span>Lic - Enfermería</span>
                                                <p>Nuestra Licenciada en Enfermería brinda atención integral y
                                                    personalizada a cada paciente.
                                                    Contamos con experiencia en procedimientos clínicos, hospitalarios y
                                                    domiciliarios, garantizando un servicio humano, seguro y de calidad.
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img src="{{ asset('img/doctors/almendra.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Almendra Dejanira Medina</h4>
                                                <span>Lic - Enfermería</span>
                                                <p>Profesional en Enfermería comprometida con brindar cuidados
                                                    integrales, humanizados y basados en evidencia científica. Se dedica
                                                    a garantizar la seguridad, el bienestar y la recuperación de cada
                                                    paciente,</p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="row gy-4">
                                    <!-- End Team Member -->
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic "><img src="{{ asset('img/doctors/natalia.png') }}"
                                                    class="img-fluid glightbox"
                                                    style="width: 200px; height: 150px; object-fit: cover;"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Natalia Bravo Macedo</h4>
                                                <span>Lic - Enfermería</span>
                                                <p>Nuestra Licenciada en Enfermería brinda atención integral y
                                                    personalizada a cada paciente.
                                                    Contamos con experiencia en procedimientos clínicos, hospitalarios y
                                                    domiciliarios, garantizando un servicio humano, seguro y de calidad.
                                                </p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- fin de transiscion -->



            </div>

        </section><!-- /Doctors Section -->
        <!-- Testimonials Section -->
        <section id="testimonio" class="testimonio section light-background">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Testimonios</h3>
                        <p>
                            Nada nos motiva más que ver a nuestros pacientes satisfechos.
                            Aquí compartimos algunas de sus historias y opiniones sobre la atención que recibieron en
                            nuestra clínica.
                        </p>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    }
                                }
                            </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">

                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10 position-relative align-self-start about section"
                                                target="_blank" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ asset('img/testimonials/testimonio6.png') }}"
                                                    target="_blank" class="img-fluid " alt="">
                                                <a href="https://www.facebook.com/clinicabahiachimbote/videos/930972815916145"
                                                    href="#" target="_blank" class=" pulsating-play-btn"></a>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <p>
                                        <h3>SALVAN LA VIDA A NIÑO QUE SE TRAGÓ MONEDA</h3>
                                        <h4>Fuente: Facebook</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Nuevamente el equipo médico de la clínica Bahía actuó rápido y con éxito
                                            ante un caso de atragantamiento. Esta vez salvaron la vida a un niño de ocho
                                            años que se tragó accidentalmente una moneda de un sol.
                                            El personal de salud de la clínica, liderado por el Dr. Ronald Huerta
                                            Ávalos, extrajo el objeto de metal poniendo a salvo al menor de iniciales
                                            S.D.D. quien había sido llevado inicialmente por sus familiares al hospital
                                            regional Eleazar Guzmán Barrón donde le sacaron una placa.
                                            La familia, proveniente del A.H. Las Begonias, en Nuevo Chimbote, se mostró
                                            agradecida con la clínica.</span>

                                        <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">

                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10 position-relative align-self-start about section"
                                                target="_blank" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ asset('img/testimonials/testimonio7.png') }}"
                                                    target="_blank" class="img-fluid " alt="">
                                                <a href="https://www.tiktok.com/@liaafailtorres/video/7577390042692193556?is_from_webapp=1&sender_device=pc"
                                                    href="#" target="_blank" class=" pulsating-play-btn"></a>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <p>
                                        <h3>APENDICECTOMÍA LAPAROSCÓPICA</h3>
                                        <h4>Fuente: TikTok</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>En nuestra clínica atendimos recientemente un caso de apendicitis aguda,
                                            en el cual realizamos una apendicectomía laparoscópica con excelentes
                                            resultados. El paciente ingresó con dolor abdominal intenso y, tras una
                                            evaluación clínica y estudios de imagen, se confirmó el diagnóstico.

                                            Gracias a nuestro equipo especializado en cirugía mínimamente invasiva, el
                                            procedimiento se realizó de manera rápida y segura. La técnica laparoscópica
                                            permitió realizar pequeñas incisiones, reduciendo el dolor postoperatorio,
                                            el riesgo de complicaciones y acelerando significativamente la recuperación.

                                            El paciente evolucionó favorablemente y pudo retomar sus actividades en
                                            pocos días. Este caso refleja nuestro compromiso con brindar atención
                                            oportuna, tecnología moderna y un trato humano, asegurando resultados
                                            exitosos y una experiencia positiva en cada intervención
                                            quirúrgica.<br></span>

                                        <i class="bi bi-quote quote-icon-right"></i>
                                        <hr>
                                        👨‍⚕️ Equipo Médico Interviniente
                                        <ul>
                                            <li> <b>Dr. Ronald Huerta</b></li>
                                            <li> <b>Dr. Beto Miranda</b></li>
                                            <li> <b>Dr. Gerardo Yamunaque</b></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galería</h2>
                <p>En nuestra Galería encontrarás una muestra del trabajo y compromiso que nos caracteriza.
                    Conoce nuestras instalaciones, equipo médico y los momentos que reflejan nuestra dedicación a
                    brindar atención de calidad.</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <style>
                    .img-vineta {
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }

                    .img-vineta:hover {
                        transform: scale(1.05);
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                    }
                </style>
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/1.png') }}" class="glightbox "
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/1.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/2.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/2.jpg') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/3.jpg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/3.jpg') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/4.png') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/4.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/5.png') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/5.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/6.png') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/6.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/7.png') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/7.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>

                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/8.png') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('img/gallery/8.png') }}" alt="" class="img-fluid "
                                    style="width: 500px; height: 350px; object-fit: cover;">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <p>Tu salud y bienestar son nuestra prioridad.
                    Comunícate con nosotros para resolver tus dudas, agendar una cita o recibir orientación
                    personalizada.
                    Estamos listos para atenderte con amabilidad y compromiso.</p>
            </div><!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJDTMHD0uEq5ERixObeflFMZc&key=AIzaSyAYWHoI7YpznDze_nChj5PyRxEhh4fdI9Y
                    &q=Space+Needle,Seattle+WA"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Localización</h3>
                                <p>Urb. Santa Rosa MZ F LT 24 - Av. Anchoveta, Chimbote, Peru</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Llámanos </h3>
                                <p>+51 905 431 945</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Correo Corporativo</h3>
                                <p>administracion@clinicabahia.pe</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="https://formspree.io/f/xpwkqvjd" id="my-form" method="post"
                            class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Te llamamos enseguida !</h3>
                                        <p>Llena el formulario y te llamamos lo mas antes posible para ayudarte.</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Nombres completos" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Tu correo" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Asunto"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Teléfono"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Mensaje " required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="alert alert-success sent-message" role="alert">
                                        Se envió al correo correctamente, gracias.
                                    </div>
                                    <button type="submit">Solcitar una llamada</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Clíanica Bahía</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Urb. Santa Rosa MZ F LT 24</p>
                        <p>Av. Anchoveta, Chimbote, Peru</p>
                        <p class="mt-3"><strong>Teléfono:</strong> <span>+51 905 431 945</span></p>
                        <p><strong>Email:</strong> <span>administracion@clinicabahia.pe</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Links Directos</h4>
                    <ul>
                        <li><a href="#hero" class="active">Inicio<br></a></li>
                        <li><a href="#about">Quienes Somos</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#departments">Especialidades</a></li>
                        <li><a href="#doctors">Staff Médico</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon
            </div>
        </div>

    </footer>

    <a href="https://wa.me/51905431945" class="whatsapp" target="_blank"> <i
            class="fa fa-whatsapp whatsapp-icon"></i></a>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
