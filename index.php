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
    <link href="css/responsive.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/logo/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <a id="button"><i class="fas fa-chevron-up"></i></a>

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


    <!-- Header Start -->
    <?php include 'header.php'; ?>
    <!-- Header End -->


    <!-- Hero Section Start -->
    <div class="hero hero-video bg-radius-section">
        <div class="hero-bg-video">
            <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myVideo">
                <source src="images/video/dna-prana.mp4" type="video/mp4">
            </video>
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Not Just a Longer Life. A Better One.
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At Prana, we apply clinically backed oxygen
                                therapy and cellular science to slow biological aging and extend healthspan. Our
                                personalized approach enhances energy, cognition, and overall vitality—so you don’t just
                                live longer, you live more.</p>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="about.php" class="btn-default"><span>Learn More</span></a>
                            <!-- <a href="appointment.php" class="btn-default btn-highlighted"><span>book
                                    appointment</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Prana-Appointment Secton Start -->
    <div class="prana-appointment-form bg-radius-section">
        <div class="container">
            <form id="appointmentForm" method="post">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-0">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control AlphaOnly"
                            placeholder="Your full name">
                        <small class="text-danger1" id="nameError" style="color: #ffff;"></small>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-0">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-control NumberOnly" maxlength="10"
                            placeholder="+91 98765 43210">
                        <small class="text-danger1" id="phoneError" style="color: #ffff;"></small>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-0">
                        <label for="slot" class="form-label">Preferred Date & Time</label>
                        <input type="datetime-local" id="slot" name="slot" class="form-control" min="09:00" max="21:59">
                        <small class="text-danger1" id="slotError" style="color: #ffff;"></small>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <button type="submit" class="btn-default"><span>Click here to live longer </span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Prana-Appointment Secton End -->


    <!-- longevity Secton Start -->
    <div class="longevity-section bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Longevity Redefined: Extending Healthspan
                            Through Science
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At Prana, longevity isn’t just about adding
                            years—it’s
                            about optimizing the biological processes that sustain energy, cognition, and resilience.
                            Through clinically proven therapies, we slow cellular aging and support a longer, healthier,
                            more vital life.
                        </p>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="longevity-left-section">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="section-title text-center mb-0">
                                    <h3 class="text-anime-style-2" data-cursor="-opaque">Slowing & Reversing Biological
                                        Aging
                                    </h3>
                                    <p class="wow fadeInUp text-justify mt-0" data-wow-delay="0.25s">Aging is driven by
                                        oxidative stress,
                                        mitochondrial decline, and chronic inflammation. Our evidence-based
                                        protocols—including
                                        hyperbaric oxygen therapy & advanced cellular nutrition—target these mechanisms
                                        at
                                        their source. By restoring cellular energy (ATP production), reducing senescent
                                        cell
                                        load, & improving systemic circulation, we promote measurable reductions in
                                        biological
                                        age markers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ratio ratio-16x9">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/VH-q7hue06U?si=D83iyFKZ0SL0YZEP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="longevity-right-section">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/N2oCXDF9TJU?si=maGQsVuTzgb47Lhw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title text-center mb-0">
                                    <h3 class="text-anime-style-2" data-cursor="-opaque">Activating Cellular Repair and
                                        Genetic
                                        Resilience
                                    </h3>
                                    <p class="wow fadeInUp mt-0" data-wow-delay="0.25s">Longevity science now focuses on
                                        epigenetic
                                        repair—the ability to influence gene expression for optimal health. Our
                                        therapies
                                        stimulate angiogenesis, DNA repair pathways, and stem cell activity, while
                                        modulating
                                        methylation patterns linked to aging. This results in enhanced tissue
                                        regeneration,
                                        improved cognitive function, and long-term resilience—transforming the way your
                                        body
                                        adapts and heals.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- longevity Secton End -->


    <!-- About Us Section Start -->
    <div class="prana-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="prana-about-content">
                        <div class="section-title">
                            <!-- <h3 class="wow fadeInUp">about us</h3> -->
                            <h2 class="text-anime-style-2" data-cursor="-opaque">The HBOT Difference</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At Prana, we believe oxygen is the foundation
                                of true health - and Hyperbaric Oxygen Therapy is for anyone, not just elite athletes or
                                critical care patients. Whether you're seeking faster recovery, sharper focus, enhanced
                                energy, or long-term vitality, our science-backed approach helps you unlock your body's
                                full potential - one breath at a time.
                            </p>
                        </div>
                        <div class="prana-about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="prana-about-content-list">
                                        <div class="prana-about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="icon-box">
                                                <img src="images/home/icon/expert.png" alt="">
                                            </div>
                                            <div class="prana-about-list-content">
                                                <p>expert therapist</p>
                                            </div>
                                        </div>
                                        <div class="prana-about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="icon-box">
                                                <img src="images/home/icon/advanced-technique.png" alt="">
                                            </div>
                                            <div class="prana-about-list-content">
                                                <p>advanced techniques</p>
                                            </div>
                                        </div>
                                        <div class="prana-about-list-item wow fadeInUp" data-wow-delay="1s">
                                            <div class="icon-box">
                                                <img src="images/home/icon/personalized.png" alt="">
                                            </div>
                                            <div class="prana-about-list-content">
                                                <p>personalized care</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 d-none">
                                    <div class="prana-about-trusted-customer wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="prana-trusted-customer-image">
                                            <img src="images/about-trusted-customer-img.png" alt="">
                                        </div>
                                        <div class="prana-trusted-customer-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="prana-trusted-customer-content">
                                            <p>trusted by <span class="counter">4</span>k+ customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prana-about-content-footer wow fadeInUp" data-wow-delay="1.25s">
                            <a href="appointment.php" class="btn-default"><span>book appointment</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="prana-about-us-images">
                        <div class="prana-about-image img-box-1">
                            <figure class="image-anime">
                                <img src="images/home/hbot-difference/1.webp" alt="">
                            </figure>
                        </div>

                        <div class="prana-about-image img-box-2">
                            <figure class="image-anime">
                                <img src="images/home/hbot-difference/2.webp" alt="">
                            </figure>
                        </div>

                        <div class="prana-about-image img-box-3">
                            <figure class="image-anime">
                                <img src="images/home/hbot-difference/3.webp" alt="">
                            </figure>
                        </div>

                        <div class="prana-about-image img-box-4">
                            <figure class="image-anime">
                                <img src="images/home/hbot-difference/4.webp" alt="">
                            </figure>
                        </div>

                        <div class="prana-about-circle-logo">
                            <img src="images/logo/prana1.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->


    <!-- HBOT Application Section Start -->
    <div class="hbot-services bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 order-lg-1 order-md-2 order-3">
                    <div class="hbot-services-list">
                        <div class="hbot-services-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-service-list-dot.svg" alt="">
                            </div>
                            <div class="hbot-services-content">
                                <div class="hbot-services-content-body">
                                    <div class="hbot-services-title">
                                        <h3>Wellness</h3>
                                    </div>
                                    <div class="hbot-services-btn">
                                        <a href="wellness.php"><img src="images/arrow-long-white.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="hbot-services-footer">
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                                        <span class="read-more-box">
                                            <strong>Cryotherapy:</strong> Controlled cold exposure that reduces
                                            inflammation, speeds up recovery, and boosts vitality—ideal for pain relief,
                                            athletic recovery, and everyday wellness. <br><br>

                                            <strong>Photobiomodulation:</strong> Non-invasive light therapy that
                                            stimulates cellular repair, reduces inflammation, and enhances
                                            energy—perfect for healing, performance, and cognitive support.
                                            <br><br>

                                            <strong>PEMF Negative Ion Therapy:</strong> A blend of electromagnetic
                                            fields, infrared heat, and negative ions that detoxifies, restores balance,
                                            and deeply relaxes the body—ideal for full-body rejuvenation.
                                        </span>
                                        <span class="read-more-toggle">Read more</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hbot-services-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-service-list-dot.svg" alt="">
                            </div>
                            <div class="hbot-services-content">
                                <div class="hbot-services-content-body">
                                    <div class="hbot-services-title">
                                        <h3>Curative Hyperbaric</h3>
                                    </div>
                                    <div class="hbot-services-btn">
                                        <a href="curative-hyperbaric.php"><img src="images/arrow-long-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="hbot-services-footer">
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                                        <span class="read-more-box">
                                            A targeted approach to healing—reduce inflammation, boost cellular repair,
                                            and promote faster rehabilitation from injuries and chronic conditions. <br>
                                            Perfect for patients managing chronic pain, post-surgical recovery,
                                            autoimmune conditions, or musculoskeletal injuries.
                                        </span>
                                        <span class="read-more-toggle">Read more</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hbot-services-list-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon-box">
                                <img src="images/icon-service-list-dot.svg" alt="">
                            </div>
                            <div class="hbot-services-content">
                                <div class="hbot-services-content-body">
                                    <div class="hbot-services-title">
                                        <h3>NeuroRehab
                                        </h3>
                                    </div>
                                    <div class="hbot-services-btn">
                                        <a href="neurorehab.php"><img src="images/arrow-long-white.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="hbot-services-footer">
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                                        <span class="read-more-box">
                                            Enhance cognitive function, treat strokes, cerebral palsy and PTSD,
                                            accelerate recovery, and support neurological resilience with
                                            precision-focused oxygen therapy. <br>
                                            Ideal for those recovering from neurological conditions, brain injuries,
                                            developmental disorders, or mental health challenges.
                                        </span>
                                        <span class="read-more-toggle">Read more</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hbot-services-list-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-service-list-dot.svg" alt="">
                            </div>
                            <div class="hbot-services-content">
                                <div class="hbot-services-content-body">
                                    <div class="hbot-services-title">
                                        <h3>Transformative Hyperbaric
                                        </h3>
                                    </div>
                                    <div class="hbot-services-btn">
                                        <a href="transformative-hyperbaric.php"><img src="images/arrow-long-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="hbot-services-footer">
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                                        <span class="read-more-box">
                                            Restore, rejuvenate, and optimize your well-being with oxygen therapy
                                            designed for longevity, energy, and peak performance. <br>
                                            Best suited for individuals seeking to improve vitality, enhance physical
                                            performance, and support overall wellness and healthy aging.

                                        </span>
                                        <span class="read-more-toggle">Read more</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-lg-2 order-md-3 order-2">

                    <div class="swiper mySwiper hbot-services-img">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <figure class="image-anime reveal">
                                    <img src="images/home/hbot-application/2.webp" alt="">
                                </figure>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <figure class="image-anime reveal">
                                    <img src="images/home/hbot-application/1.webp" alt="">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="image-anime reveal">
                                    <img src="images/home/hbot-application/3.webp" alt="">
                                </figure>
                            </div>
                             <div class="swiper-slide">
                                <figure class="image-anime reveal">
                                    <img src="images/home/hbot-application/4.webp" alt="">
                                </figure>
                            </div>


                            <!-- Add more slides as needed -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 order-lg-3 order-md-1 order-1">
                    <div class="hbot-services-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">HBOT Applications
                            </h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our Selections
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our personalized, expert-led treatments
                                revitalize your body, sharpen your mind, and accelerate recovery, so you can achieve
                                more, feel more, and ultimately, live more.
                            </p>
                        </div>
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="contact.php" class="btn-default"><span>make an appointment</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-container d-none">
                <div class="marquee-content">
                    <div class="item">Breath <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Heal <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Transform <img src="images/logo/prana1.svg" alt="star"></div>

                    <!-- Duplicate content for seamless loop -->
                    <div class="item">Breathe <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Heal <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Transform <img src="images/logo/prana1.svg" alt="star"></div>

                    <!-- Duplicate content for seamless loop -->
                    <div class="item">Breathe <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Heal <img src="images/logo/prana1.svg" alt="star"></div>
                    <div class="item">Transform <img src="images/logo/prana1.svg" alt="star"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- HBOT Application Section End -->



    <!-- Our Prana Experience Section Start -->
    <section class="our-prana-experience">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">The Prana Experience</h2>
                    </div>
                </div>
            </div>
            <div>
                <ul class="infoGraphic mt-5">
                    <li>
                        <div class="numberWrap">
                            <div class="number fontColor1">1</div>
                            <div class="coverWrap">
                                <div class="numberCover"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img class="" src="images/icon/consultation.png" alt="">
                            </div>
                            <h2>Book a <br class="remove-space-top"> Consultation</h2>
                            <p>Begin your journey with a one-on-one session with our Wellness Director (RMO),
                                scheduled by our Nutritionist or Floor Manager, to set the foundation for your
                                personalized wellness plan.</p>
                        </div>
                    </li>
                    <li>
                        <div class="numberWrap">
                            <div class="number fontColor2">2</div>
                            <div class="coverWrap">
                                <div class="numberCover"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img class="" src="images/icon/personalized.png" alt="">
                            </div>
                            <h2>Personalized Planning </h2>
                            <p>Take part in a detailed assessment to understand your unique body constitution,
                                health concerns, and goals. A comprehensive body analysis helps us design a fully
                                customized program—either tailored specifically for you or selected from our curated
                                wellness and hyperbaric packages.</p>
                        </div>
                    </li>
                    <li>
                        <div class="numberWrap">
                            <div class="number  fontColor3">3</div>
                            <div class="coverWrap">
                                <div class="numberCover"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img class="" src="images/icon/wellness.png" alt="">
                            </div>
                            <h2>Wellness Blueprint</h2>
                            <p>Receive a clear, structured guide with nutritional guidelines, methylation testing
                                (if required), at-home practices, lifestyle recommendations, approved supplements,
                                and any necessary precautions to support your progress.</p>
                        </div>
                    </li>
                    <li>
                        <div class="numberWrap">
                            <div class="number  fontColor4">4</div>
                            <div class="coverWrap">
                                <div class="numberCover"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img class="" src="images/icon/follow-up.png" alt="">
                            </div>
                            <h2>Follow-Up Support</h2>
                            <p>Stay connected with our care team for ongoing guidance, follow-up sessions, and
                                adjustments to your plan. We monitor your progress closely and provide post-care
                                recommendations to ensure long-term results.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="numberWrap">
                            <div class="number  fontColor5">5</div>
                            <div class="coverWrap">
                                <div class="numberCover"></div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img class="" src="images/icon/lifelong-wellness.png" alt="">
                            </div>
                            <h2>Lifelong Wellness <br class="remove-space-top"> Partnership</h2>
                            <p>Our goal is to be more than a service—we’re your long-term partner in health, helping
                                you sustain balance, vitality, and well-being at every stage of life.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </section>
    <!-- Our Prana Experience Section end -->


    <!-- Prana Approach Section Start -->
    <div class="prana-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="prana-approach-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">The Prana Approach</span></h2>
                        </div>

                        <div class="prana-approach-item-list">
                            <div class="prana-approach-item  wow fadeInUp" data-wow-delay="0.4s">
                                <div class="prana-approach-header">
                                    <div class="icon-box iconbox1">
                                        <img src="images/home/prana-approach/1.svg" alt="">
                                    </div>
                                    <div class="prana-approach-item-title">
                                        <h3>Science-Backed, Accredited Hyperbaric Therapy</h3>
                                    </div>
                                </div>
                                <div class="prana-approach-item-content">
                                    <p>Prana follows globally recognized standards in hyperbaric medicine, ensuring
                                        safe, clinically proven treatments. Our protocols align with Undersea and
                                        Hyperbaric Medical Society (UHMS) guidelines, guaranteeing expert-led,
                                        research-backed care.</p>
                                </div>
                            </div>
                            <div class="prana-approach-item  wow fadeInUp" data-wow-delay="0.6s">
                                <div class="prana-approach-header">
                                    <div class="icon-box">
                                        <img src="images/home/prana-approach/2.svg" alt="">
                                    </div>
                                    <div class="prana-approach-item-title">
                                        <h3>Expert-Led, Multidisciplinary Team</h3>
                                    </div>
                                </div>
                                <div class="prana-approach-item-content">
                                    <p>Unlike conventional wellness centers, Prana is led by board-certified hyperbaric
                                        specialists and a team of experts in integrative medicine, wound care, and
                                        rehabilitation, ensuring personalized, evidence-based treatment plans for every
                                        individual.</p>
                                </div>
                            </div>
                            <div class="prana-approach-item  wow fadeInUp" data-wow-delay="0.6s">
                                <div class="prana-approach-header">
                                    <div class="icon-box">
                                        <img src="images/home/prana-approach/3.svg" alt="">
                                    </div>
                                    <div class="prana-approach-item-title">
                                        <h3>Advanced Safety & Precision Protocols</h3>
                                    </div>
                                </div>
                                <div class="prana-approach-item-content">
                                    <p>We adhere to the highest medical-grade oxygen therapy standards, with certified
                                        hyperbaric chambers, real-time monitoring, and strict safety measures to
                                        maximize effectiveness while minimizing risks, following globally recognized
                                        best practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="prana-approach-image">
                        <figure class="image-anime">
                            <img src="images/home/prana-approach/approach.webp" alt="">
                        </figure>
                        <div class="contact-us-circle">
                            <a href="contact.php">
                                <img src="images/home/prana-approach/contact-us-circle.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Prana Approach Section End -->



    <!-- Our Packages Section Start -->
    <div class="our-prana-packages bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Exclusive Packages</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Explore Our Exclusive Packages</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Tailored wellness, designed for renewal.

                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-btn wow fadeInUp">
                        <a href="contact.php" class="btn-default"><span>Generate Offer Voucher</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-prana-service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/home/icon/vitality.png" alt="">
                        </div>
                        <div class="our-prana-service-body">
                            <div class="our-prana-service-content">
                                <h3>Vitality Suite</h3>
                                <p class="mb-3">(Endurance and Cellular Nourishment)</p>
                                <p>Advanced oxygen therapy for deep cellular rejuvenation, enhanced energy, and
                                    long-term wellness.
                                </p>
                            </div>
                            <div class="our-prana-service-btn">
                                <a href="transformative-hyperbaric.php#therapy1"><img
                                        src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-prana-service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/home/icon/wound-care.png" alt="">
                        </div>
                        <div class="our-prana-service-body">
                            <div class="our-prana-service-content">
                                <h3>Relief Suite
                                </h3>
                                <p class="mb-3">(Pain Management)</p>
                                <p>A targeted approach to relieve chronic pain, reduce inflammation, and restore
                                    comfort.
                                </p>
                            </div>
                            <div class="our-prana-service-btn">
                                <a href="transformative-hyperbaric.php#therapy2"><img
                                        src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-prana-service-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="images/home/icon/sports-suit.png" alt="">
                        </div>
                        <div class="our-prana-service-body">
                            <div class="our-prana-service-content">
                                <h3>Sports Suite</h3>
                                <p class="mb-3">(Performance & Recovery)</p>
                                <p>Optimized for movement and strength, supporting rehabilitation and peak physical
                                    function.
                                </p>
                            </div>
                            <div class="our-prana-service-btn">
                                <a href="transformative-hyperbaric.php#therapy3"><img
                                        src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-prana-service-item wow fadeInUp signature-suit" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="images/home/icon/signature-suit.png" alt="">
                        </div>
                        <div class="our-prana-service-body">
                            <div class="our-prana-service-content signature-suit-content">
                                <h3>Signature Suite</h3>
                                <p class="mb-3">(Ultimate Genetic Transformation)</p>
                                <p>Precision recovery designed for elite athletes—accelerate healing, prevent
                                    injuries,
                                    and sustain peak performance.</p>
                            </div>
                            <div class="our-prana-service-btn">
                                <a href="transformative-hyperbaric.php#therapy4"><img
                                        src="images/arrow-readmore-btn.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="our-prana-service-btns wow fadeInUp" data-wow-delay="1.5s">
                        <a href="transformative-hyperbaric.php">Find out more about our packages<img
                                src="images/arrow-long-green1.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-section bg-radius-section"></div>
    <!-- Our Our Packages Section End -->


    <!-- Our Video Section Start -->
    <div class="our-video bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-video-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">visit Center</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Healing, Recovery, and Renewal- For Every Journey
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Hyperbaric Oxygen Therapy (HBOT) is more
                                than
                                a treatment—it’s a path to enhanced well-being. Whether you seek recovery from
                                medical
                                conditions, relief from chronic pain, or a boost in vitality and longevity, HBOT
                                offers
                                a science-backed solution. From cellular repair to cognitive clarity, this
                                transformative therapy is designed for all who prioritize health, performance,
                                rejuvenation and help you <strong>Live More.</strong>
                            </p>
                        </div>
                        <!-- <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default"><span>Read More</span></a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="video-play-button">
                        <a href="images/video/tour.mp4" class="popup-video" data-cursor-text="Play">
                            <img src="images/video-play-button.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none">
                    <div class="video-play-button">
                        <!-- Button trigger modal -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <img src="images/video-play-button.svg" alt="Play">
                        </a>
                    </div>
                </div>

                <!-- Bootstrap Modal -->
                <div class="modal fade d-none" id="videoModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <video id="localVideo" controls>
                                        <source src="images/video/tour.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Video Section End -->



    <!-- Our Testimonials Section Start -->
    <div class="our-testimonial bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">client testimonials</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Voices of Our Clients</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Lorem ipsum odor amet, consectetuer
                                adipiscing elit. Sodales a tristique potenti nibh donec sodales. Per sollicitudin
                                turpis
                                tempus pharetra ad sagittis fermentum duis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>I had lost all hope and thought my life was over. I have now done 8 sessions of HBOT but after just the first session my eyes could see a little bit again. I wish for more people to come and experience HBOT, so that they too can live life normally again.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image d-none">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Rekha Modi
                                                </h3>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>I've had long COVID for almost 2 years now and I get tired very easily. I would play a lot of sports like basketball, football, and surfing but now I cannot even go jogging. HBOT helps me to manage my symptoms well. So please take it seriously, it's a real thing!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image d-none">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Byron Channon
                                                </h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>I have a relative who had a wound that was just not healing. My doctor recommended me to visit Dr. Manoj Gupta's Prana HBOT Centre. After experiencing this therapy, it was like that wound never even existed! The entire experience and staff was absolutely fantastic.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image d-none">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Tanmay Vekaria
                                                </h3>
                                                <p>(Actor - Taarak Mehta Ka Ooltah Chashmah)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>My father is battling stage 4 esophagus cancer. Since he’s too old for chemo and radiotherapy, our doctor suggested HBOT. It’s helping him live better and improve his quality of life</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image d-none">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Jignesh Parikh
                                                </h3>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide d-none">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>I believe prevention is better than cure. At Prana, I’ve found
                                                    therapies that not only make me feel younger but also give me
                                                    confidence about living longer, healthier.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image d-none">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Anil Deshmukh

                                                </h3>
                                                <p> Longevity Seeker</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->



    <!-- Our Blog Section End -->
    <div class="our-blog bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">news & blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our Latest Insights and updates</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section-btn wow fadeInUp">
                        <a href="#" class="btn-default"><span>view all blog</span></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="synergizing-hyperbaric-therapy-and-neurorehabilitation-for-optimal-healing.php"
                                    class="image-anime" data-cursor-text="View">
                                    <img src="https://img.freepik.com/free-photo/doctor-helping-patient-rehabilitation_23-2150321632.jpg?t=st=1739171094~exp=1739174694~hmac=15db3a40594ea1f9e5ee11585d9b26a0c381a126e0178e71a372205fbeafc4c2&w=740"
                                        alt="">
                                </a>
                            </figure>

                        </div>
                        <div class="post-item-content">

                            <div class="post-item-body">
                                <h2><a
                                        href="synergizing-hyperbaric-therapy-and-neurorehabilitation-for-optimal-healing.php">Synergizing
                                        Hyperbaric Therapy and Neurorehabilitation for Optimal Healing</a></h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="synergizing-hyperbaric-therapy-and-neurorehabilitation-for-optimal-healing.php"
                                    class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="revolutionizing-healing-with-hyperbaric-oxygen-therapy-for-everyone.php"
                                    class="image-anime" data-cursor-text="View">
                                    <img src="https://img.freepik.com/free-photo/nurse-putting-oxygen-mask-patient_23-2149372303.jpg?t=st=1739171540~exp=1739175140~hmac=93db6b64ae8b4e1f74a5c856b06c829fde9788ac9cbf82731ef5dc78d2d36241&w=740"
                                        alt="">
                                </a>
                            </figure>

                        </div>
                        <div class="post-item-content">

                            <div class="post-item-body">
                                <h2><a href="revolutionizing-healing-with-hyperbaric-oxygen-therapy-for-everyone.php">Revolutionizing
                                        Healing with Hyperbaric Oxygen Therapy for Everyone</a>
                                </h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="revolutionizing-healing-with-hyperbaric-oxygen-therapy-for-everyone.php"
                                    class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="neurorehabilitation-restoring-brain-health-enhancing-recovery.php"
                                    class="image-anime" data-cursor-text="View">
                                    <img src="https://img.freepik.com/free-photo/woman-rehabilitation-center-getting-treatment_23-2150356706.jpg?t=st=1739171684~exp=1739175284~hmac=5092ef0e8e72b643cf565a0c82e45223638f3da7b52e9f612d490d8d41887144&w=740"
                                        alt="">
                                </a>
                            </figure>

                        </div>
                        <div class="post-item-content">

                            <div class="post-item-body">
                                <h2><a href="neurorehabilitation-restoring-brain-health-enhancing-recovery.php">Neurorehabilitation:
                                        The Key to Restoring Brain Health and Enhancing Recovery</a></h2>
                            </div>
                            <div class="post-item-footer">
                                <a href="neurorehabilitation-restoring-brain-health-enhancing-recovery.php"
                                    class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog End -->



    <!-- Our-Milestonet Section Start -->
    <div class="our-milestone bg-radius-section">
        <div class="prana-milestone">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="prana-milestone-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Milestones of Glory</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque"> A Testament to Our Dedication
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="single-badge">
                                        <img src="images/home/certificate/logo2.webp"
                                            class="hmb aos-init aos-animate lazyloaded w-100">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="single-badge">
                                        <img src="images/home/certificate/logo1.webp" class="w-100">
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="single-badge">
                                        <img src="images/home/certificate/logo3.webp"
                                            class="hmb aos-init aos-animate lazyloaded w-100">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="single-badge">
                                        <img src="images/home/certificate/logo4.webp"
                                            class="hmb aos-init aos-animate lazyloaded w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">
                        <div class="prana-image">
                            <img src="images/prana.jpg">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quality Treatment Section End -->



    <!-- Page Contact Us Start -->
    <div class="page-contact-us bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-information">
                        <div class="contact-information-box row">
                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="0.75s">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Contact Us</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Get In Touch</h2>
                                </div>
                                <div class="contact-info-list wow fadeInUp" data-wow-delay="0.5s">
                                    <p><a href="mailto:contact@hbot.in" class="info">contact@hbot.in</a></p>
                                    <p><a href="tel:+9320065511" class="info">+91 9320065511</a></p>
                                    <a href="contact.php" class="support-btn">contact support</a>
                                </div>
                            </div>
                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Prana Center - Santacruz
                                    </h3>
                                    <p>
                                        Suite No.03, Ground Floor, Kamla Spaces, Near Khira Nagar, S.V. Road Santacruz
                                        West, Mumbai No. 400054., Mumbai, Maharashtra <br>
                                        Contact no :
                                        <a href="tel:+918591805511" class="info"><strong>+91 8591805511</strong></a>,
                                        <a href="tel:+918591405511" class="info"><strong>+91 8591405511</strong></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Prana Center - Wadala
                                    </h3>
                                    <p>G 10, Ground Floor, Plot no.297, 298, Vitthal Rukmani CHS Ltd., Katrak Road, Ram
                                        Mandir, Wadala, Mumbai-400031. <br>
                                        Contact no :
                                        <a href="tel:+919320065511" class="info"><strong>9320065511</strong></a>,
                                        <a href="tel:+917506000946 " class="info"><strong>7506000946 </strong></a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="1s">
                                <div class="icon-box">
                                    <img src="images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Prana Center - Kharghar
                                    </h3>
                                    <p>Garava Building, Plot no. E 27, 1st Floor, Opp. Kendriya Vihar, Prime Mall Lane,
                                        Sector 12, Kharghar - 410210. <br>
                                        Contact no :
                                        <a href="tel:+919320065511" class="info"><strong>9320065511</strong></a>,
                                        <a href="tel:+917506000946 " class="info"><strong>7506000946 </strong></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="1s">
                                <div class="icon-box">
                                    <img src="images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Prana Center - Surat
                                    </h3>
                                    <p>Kiran Multi Super speciality Hospital, Vasta Devdi Road, near Sumul Dairy Road,
                                        Katargam, Surat, Gujarat - 395004. <br>
                                         Contact no :
                                         <a href="tel:+919320065511" class="info"><strong>9320065511</strong></a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp col-lg-6 col-12 mb-5" data-wow-delay="1s">
                                <div class="icon-box">
                                    <img src="images/icon-location-blue.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Prana Center - Borivali
                                    </h3>
                                    <p>6 & 7, Prathmesh Leela Building, Ashtavinayak Nagar, Near Sailee Hospital, New
                                        MHB Colony, Boriwali (West), Mumbai - 400091. <br>
                                        
                                        Contact no :
                                         <a href="tel:+919320065511" class="info"><strong>9320065511</strong></a>,
                                        <a href="tel:+917506000946 " class="info"><strong>7506000946 </strong></a>
                                    </p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact Us Anytime</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">For inquiries, appointments, or more
                                information about our physiotherapy services, feel free to contact us.</p>
                        </div>
                        <form id="contactForms" method="POST" data-toggle="validator" class="wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control AlphaOnly" id="fname"
                                        placeholder="First Name">
                                    <div class="text-danger" id="error_fname"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control AlphaOnly" id="lname"
                                        placeholder="Last Name">
                                    <div class="text-danger" id="error_lname"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control " id="email"
                                        placeholder="Email">
                                    <div class="text-danger" id="error_email"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control NumberOnly" maxlength=10
                                        id="phone" placeholder="Phone No">
                                    <div class="text-danger" id="error_phone"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control" id="message" rows="5"
                                        placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>submit now</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <section class="call-buton"><a class="cc-calto-action-ripple" style="display:none" href="tel: +91 9320065511"><i
                class="fa fa-phone"></i>
        </a>
    </section>

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
    <script src="view_js/contact.js"></script>
    <script src="view_js/indexpage.js"></script>
    <script src="../../assets/js/theme-panel.js"></script>
    <script>
    const videoModal = document.getElementById('videoModal');
    const localVideo = document.getElementById('localVideo');

    videoModal.addEventListener('hidden.bs.modal', function() {
        localVideo.pause();
        localVideo.currentTime = 0; // reset video when modal closes
    });
    </script>

</body>

</html>