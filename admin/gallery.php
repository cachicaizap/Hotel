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
    <link rel="icon" type="image/png" sizes="16x16" href="static/img/flaticon.png">
    <title>CLUB | Galería</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="static/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="static/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="static/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="static/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="static/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header id="home" class="header-section header-normal">
        <div class="container">
            <div style="padding-top:15px" class="logo">
                <a href="../indice.php">
                <img src="static/img/logo_castillo1.jpg" alt="">        
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="../indice.php">Inicio</a></li>
                        <li><a href="about-us.php">Nosotros</a></li>
                        <li class="active"><a href="gallery.php">Galería</a></li>
                        <li><a href="reserve.php">Reservas</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="#contact">Contactos</a></li>
                    </ul>
                </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Site Breadcrumb Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="static/img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">
                        <h2>GALERIA</h2>
                        <div class="site-breadcrumb">
                            <a href="../indice.php" class="sb-item">Inicio</a>
                            <span class="sb-item">Galería</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter=".all">Imagenes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gallery-filter">
                <div class="col-md-8 mix all fitness">
                    <div class="gallery-item">
                        <a id="open-popup" href="static/img/gallery/author-1.png">
                            <div class="gi-img">
                                <img src="static/img/gallery/author-1.png" height="500px" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Cancha de Fútbol</h5>
                                <span>Fútbol</span>
                            </div>
						</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-lg-12 mix all coaching event">
                            <div class="gallery-item">
                                <a id="open-popup1" href="static/img/gallery/p1.jpg">
                                    <div class="gi-img">
                                        <img src="static/img/gallery/p1.jpg" height="235px" alt="">
                                    </div>
                                    <div class="gi-text">
                                        <h5>Semi-Olimpica</h5>
                                        <span>Piscina</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 mix all other fitness">
                            <div class="gallery-item">
                                <a id="open-popup2" href="static/img/gallery/author-4.png">
                                    <div class="gi-img">
                                        <img src="static/img/gallery/author-4.png" height="235px" alt="">
                                    </div>
                                    <div class="gi-text">
                                        <h5>Cancha de Tenis</h5>
                                        <span>Tenis</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="row">
                        <div class="col-lg-12 mix all coaching">
                            <div class="gallery-item">
                                <a id="open-popup3" href="static/img/class/author-7.jpg">
                                    <div class="gi-img">
                                        <img src="static/img/class/author-7.jpg" height="220px" alt="">
                                    </div>
                                    <div class="gi-text">
                                        <h5>Cancha de Squash</h5>
                                        <span>Squash</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 mix all other event">
                            <div class="gallery-item">
                                <a id="open-popup4" href="static/img/class/author-2.png">
                                    <div class="gi-img">
                                        <img src="static/img/class/author-2.png" height="220px" alt="">
                                    </div>
                                    <div class="gi-text">
                                        <h5>Cancha de Basketball</h5>
                                        <span>Fitness, Event</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mix all coaching fitness">
                    <div class="gallery-item">
                        <a id="open-popup5" href="static/img/gallery/gallery-6.jpg">
                            <div class="gi-img">
                                <img src="static/img/gallery/gallery-6.jpg" height="470px" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Gimnasio</h5>
                                <span>Gym</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mix all event other">
                    <div class="gallery-item">
                        <a id="open-popup6" href="static/img/class/author-3.png">
                            <div class="gi-img">
                                <img src="static/img/class/author-3.png" height="470px" alt="">
                            </div>
                            <div class="gi-text">
                                <h5>Campo de Golf</h5>
                                <span>Golf</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Footer Section Begin -->
    <footer id="contact" class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-form set-bg" data-setbg="static/img/contact-form-bg.jpg">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="section-title">
                                    <h2>Inscripción</h2>
                                    <p>Envia tu solicitud de Inscripción</p>
                                </div>
                                <form method="post">
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
                    <div class="footer-form set-bg" data-setbg="static/img/contact-form-bg.jpg">
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
    <script src="static/js/jquery-3.3.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/jquery.magnific-popup.min.js"></script>
    <script src="static/js/mixitup.min.js"></script>
    <script src="static/js/jquery.slicknav.js"></script>
    <script src="static/js/owl.carousel.min.js"></script>
    <script src="static/js/main.js"></script>
</body>
<script>
    $('#open-popup').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup1').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup2').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup3').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup4').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup5').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

<script>
    $('#open-popup6').magnificPopup({
    src: "static/img/gallery/gallery-1.jpg",
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

</html>