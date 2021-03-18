<?php
    include('db.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLUB | Inicio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="admin/static/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="admin/static/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header id="home" class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="admin/static/img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="../indice.php">Inicio</a></li>
                        <li><a href="admin/about-us.php">Nosotros</a></li>
                        <li><a href="admin/gallery.php">Galería</a></li>
                        <li><a href="admin/reserve.php">Reservas</a></li>
                        <li><a href="admin/blog.php">Blog</a></li>
                        <li><a href="#contact">Contactos</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="admin/static/img/slider-bg-1.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>Mejora tu calidad de vida</h4>
                        <h1>Cuida tu <span>Salud</span></h1>
                        <a href="#contact" class="primary-btn">Inscribete ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="admin/static/img/slider-bg-2.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>Ven a disfrutar de un momento de esparcimiento</h4>
                        <h1>Ponte en <span>Forma</span></h1>
                        <a href="#contact" class="primary-btn">Inscribete ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="admin/static/img/slider-bg-3.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>Adquiera sus reservaciones hoy</h4>
                        <h1>Bienvenido</h1>
                        <a href="#contact" class="primary-btn">Inscribete ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Nuestros Servicios</h2>
                        <p>Nuestros ascesores, podrán darle un recorrido completo por nuestro club,
                            al igual que les detallarán cada uno de los precios y ofertas que tenemos.
                        </p>
                    </div>
                    <div class="servicios">
                        <div class="servicio-item">
                            <div class="servicio-item-hover">
                                <img src="admin/static/img/tc.png" alt="">
                                <h5>Quieres ser parte de nosotros</h5>
                                <h4>Adquiere tu menbresia ahora para que puedas acceder a los beneficios y promociones que ofrece este club.</h4>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Canchas sinteticas, turco, saunas, gimnasio</p>
						        <p><i class="fa fa-check" aria-hidden="true"></i>Con todas las medidas de bioseguridad</p>
                                <hr>
                                <img src="admin/static/img/restaurante.png" alt="">
                                <h5>Restaurante</h5>
                                <h4>Servicio de bufé.</h4>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Variedad de platos</p>
						        <p><i class="fa fa-check" aria-hidden="true"></i> Comida vegetarina</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="admin/static/img/video-bg.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section set-bg spad" data-setbg="admin/static/img/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>¿Qué esperas para ser parte de este club?</h2>
                    <p>Envia tu solicitud de membresía o contactate con nosotros.</p>
                    <a href="#contact" class="primary-btn">Inscribete Ahora</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->

    <!-- Class Section Begin-->
    <section class="class-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2>Nuestras Áreas Deportivas</h2>
                                <p>En nuestras instalaciones podrás encontrar todo lo que necesitas, para un sano entretenimiento.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-item">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="class-1" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Canchas de Fútbol</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                            <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-2" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-2.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Canchas de Básquetbol</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                        <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-3" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-3.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Campo de Golf</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                        <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-4" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-4.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Gimnasio</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                        <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-5" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-5.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Piscinas</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                        <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-6" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="admin/static/img/class/author-6.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>Canchas de Tenis</h3>
                                                        <p>Body Building, the original LES MILLS barbell class, will
                                                            sculpt, tone and strengthen your entire body, fast! Focusing
                                                            on low weight loads and high repetition movements, you'll
                                                            burn fat, gain strength and quickly produce lean body muscle
                                                            conditioning. All the benefits of working with weighs in one
                                                            action packed, highly physical class. The world’s fastest
                                                            way to get in shape. Find your Lessmills Bodypump class
                                                            here.</p>
                                                        <a href="admin/reserve.php" class="schedule-btn">Reserva ya <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-author">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a data-toggle="tab" class="active" href="#class-1" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-1.jpg" alt="">
                                                <h5>Canchas de Fútbol</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-2" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-2.jpg" alt="">
                                                <h5>Canchas Básquetbol</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-3" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-3.jpg" alt="">
                                                <h5>Campo de Golf</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-4" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-4.jpg" alt="">
                                                <h5>Gimnasio</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-5" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-5.jpg" alt="">
                                                <h5>Pisicinas</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-6" role="tab">
                                            <div class="author-text">
                                                <img src="admin/static/img/class/author-6.jpg" alt="">
                                                <h5>Canchas de Tenis</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Section End -->

    <!-- Footer Section Begin -->
    <footer id="contact" class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-form set-bg" data-setbg="admin/static/img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Contáctenos</h2>
                                    <p>Envia tu solicitud de Inscripción</p>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Nombre completo" name="name" id="name" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="email" placeholder="E-mail" name="email" id="email" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="tel" placeholder="Teléfono" name="phone" id="phone" required>
                                            <button type="submit" name="sub">Enviar <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST['sub']))
                                    {
                                        $name =$_POST['name'];
                                        $phone = $_POST['phone'];
                                        $email = $_POST['email'];
                                        $approval = "Not Allowed";
                                        $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
                                        
                                        
                                        if(mysqli_query($con,$sql))
                                        echo"Listo";
                                        
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-form set-bg" data-setbg="admin/static/img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Contactate con nosotros</h2>
                                    <p class="contact-agile1"><strong>Teléfono :</strong>02-3200-510</p>
                                    <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:tusolutionweb@gmail.com">contacto@hotmail.com</a></p>
                                    <p class="contact-agile1"><strong>Dirección :</strong> Sangolqui Ecuador</p>
                                </div>
                            </div>
                        </div>
                        <div class="map-location">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.8969284459588!2d-78.50229274214416!3d-0.20064121776870184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a408f830399%3A0x9f4a9f45ac1fe13d!2sCuidadela%20Universitaria%2C%20Quito%20170129!5e0!3m2!1ses-419!2sec!4v1615952762704!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li>Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 0;"></span>
            <span id="toTopHover" style="opacity: 1;"></span>
        </a>
	</div>

    <!-- Js Plugins -->
    <script src="admin/static/js/jquery-3.3.1.min.js"></script>
    <script src="admin/static/js/bootstrap.min.js"></script>
    <script src="admin/static/js/jquery.magnific-popup.min.js"></script>
    <script src="admin/static/js/mixitup.min.js"></script>
    <script src="admin/static/js/jquery.slicknav.js"></script>
    <script src="admin/static/js/owl.carousel.min.js"></script>
    <script src="admin/static/js/main.js"></script>
</body>

</html>