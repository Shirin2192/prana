<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <title>Prana HBOT (Hyperbaric oxygen therapy) treatment Centre India</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Sora:wght@100..800&amp;display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="css/all.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/mousecursor.css">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12 ">
                    <div class="topbar-contact-info d-none">
                        <ul>
                            <li><a href="tel: +91 9320065511"><img src="images/icon-phone.svg" alt=""> +91
                                    9320065511</a></li>
                            <li><a href="mailto:info@hbot.in"><img src="images/icon-mail.svg" alt=""> info@hbot.in</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-0">
                    <div class="topbar-contact-info">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                            <!-- <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <a id="button"><i class="fas fa-chevron-up"></i></a>

    <!-- Header Start -->
    <?php include 'header.php'; ?>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="appointment-page-header appointment-page-header bg-radius-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="appointment-page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Make An Appointment</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">make an appointment</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Book Appointment Section Start -->
    <div class="page-book-appointment page-service-single bg-radius-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">appointment</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Make an appointment</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Appointment Form Start -->
                    <div class="contact-us-form appointment-form">
                        <form id="appointmentForm" method="POST" data-toggle="validator" class="wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control AlphaOnly" id="name"
                                        placeholder="Enter Your Name">
                                    <div class="help-block text-danger" id="error_name"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Your Email">
                                    <div class="help-block text-danger" id="error_email"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" maxlength=10 class="form-control NumberOnly"
                                        id="phone" placeholder="Phone Number">
                                    <div class="help-block text-danger" id="error_phone"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" id="services">
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="HBOT">HBOT</option>
                                        <option value="Cryotherapy">Cryotherapy</option>
                                        <option value="Photobiomodulation">Photobiomodulation</option>
                                        <option value="PEMF Negative Ion Therapy">PEMF Negative Ion Therapy</option>
                                        <option value="Curative Hyperbaric">Curative Hyperbaric</option>
                                        <option value="NeuroRehab">NeuroRehab</option>
                                        <option value="Transformative Hyperbaric">Transformative Hyperbaric</option>
                                    </select>
                                    <div class="help-block text-danger" id="error_services"></div>
                                </div>

                                <div class="form-group col-md-6 mb-5">
                                    <input type="date" name="date" class="form-control" id="date">
                                    <div class="help-block text-danger" id="error_date"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="time" name="time" class="form-control" id="time">
                                    <div class="help-block text-danger" id="error_time"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default btn-highlighted"><span>book
                                                appointment</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Appointment Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Book Appointment Section End -->


    <!-- Booking Process Section Start -->
    <div class="booking-process bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">process</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Easy Steps To Get Our Services</h2>
                        <p>we strive to make accessing our services as straightforward and convenient as possible.
                            Here’s a simple guide to help you get started with our expert care.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Booking Process Box Start -->
                    <div class="booking-process-box wow fadeInUp">
                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>01.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-1.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>Select your Services</h3>
                                <p>services is the first step towards effective mental health support.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>02.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-2.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>make appointment</h3>
                                <p>Follow these easy steps to schedule your appointment at Physiocare.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>03.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-3.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>completed payment</h3>
                                <p>You will receive a payment confirmation of your appointment.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->

                        <!-- Booking Process Item Start -->
                        <div class="booking-process-item">
                            <div class="booking-process-no">
                                <h3>04.</h3>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-booking-process-4.svg" alt="">
                            </div>
                            <div class="booking-process-content">
                                <h3>enjoy your therapy</h3>
                                <p>Your journey is an important step towards better health.</p>
                            </div>
                        </div>
                        <!-- Booking Process Item End -->
                    </div>
                    <!-- Booking Process Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Process Section End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/function.js"></script>
    <script src="view_js/appointment.js"></script>
    <script src="../../assets/js/theme-panel.js"></script>
</body>

</html>