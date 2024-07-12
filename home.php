<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-home.php");
include_once("include/lang/{$idioma}-points-of-interest.php");

?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <style>
        @media only screen (max-width: 768px) {

            video.vh-100,
            .vh-100 {
                height: 100% !important;
            }
        }

        @media (max-width: 768px) {

            video.vh-100,
            .vh-100 {
                height: 100% !important;
            }
        }
    </style>
</head>

<body class="shock-body">

    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="main" class="shock-main">


        <!-- Banner -->
        <section id="home" class="shock-section has-overlay">
            <div class="banner">
                <div class="content-wrapper text-center top-50 start-50 translate-middle">
                    <div class="container">
                        <!-- Intro -->
                        <div class="extended-intro max-w-85">
                            <div class="wrapper">
                                <div class="left-column">
                                    <h1 class="text-white banner-title mb-0"><?= HOME_TEXT_BANNER[0] ?></h1>
                                    <h2 class="text-white mb-0 banner-subtitle"><?= HOME_TEXT_BANNER[1] ?></h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="image-wrapper over-gradient">
                    <video class="video vh-100 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="assets/videos/video-puerto-taino.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Welcome Text -->
        <section class="shock-section pt-2 pb-4">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-uppercase text-blue"><span class="d-block text-start"><?= HOME_TEXT_WELCOME[0] ?></span>
                        <span class="d-flex justify-content-end gap-3">
                            <span class="text-style-3 lh-1 text-orange"><?= HOME_TEXT_WELCOME[1] ?></span> <?= HOME_TEXT_WELCOME[2] ?>
                        </span>
                    </h2>
                </div>
                <div class="container-text mx-auto px-5">

                    <p class="text-black black text-style-13"><?= HOME_TEXT_WELCOME[3] ?></p>
                    <p class="text-black black text-style-13"><?= HOME_TEXT_WELCOME[4] ?></p>
                </div>
            </div>
        </section>

        <!-- New Carousel -->
        <section id="port-experience" class="shock-section pt-2 pb-4">

            <div class="carousel-content bg-orange d-flex flex-column justify-content-evenly align-items-center">
                <h2 class="text-uppercase text-center text-style-3"><strong>Port experience</strong></h2>
                <div class="d-flex align-items-center gap-3 w-75">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M17.488 4.43a.75.75 0 0 1 .081 1.058L11.988 12l5.581 6.512a.75.75 0 1 1-1.139.976l-6-7a.75.75 0 0 1 0-.976l6-7a.75.75 0 0 1 1.058-.081m-4 0a.75.75 0 0 1 .081 1.058L7.988 12l5.581 6.512a.75.75 0 1 1-1.138.976l-6-7a.75.75 0 0 1 0-.976l6-7a.75.75 0 0 1 1.057-.081" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1">
                        <p class="text-style-6" style="line-height: 55px;"><span class="d-block">Discover</span><span class="text-end ml-4 d-block">things to do</span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M6.512 4.43a.75.75 0 0 1 1.057.082l6 7a.75.75 0 0 1 0 .976l-6 7a.75.75 0 0 1-1.138-.976L12.012 12L6.431 5.488a.75.75 0 0 1 .08-1.057m4 0a.75.75 0 0 1 1.058.082l6 7a.75.75 0 0 1 0 .976l-6 7a.75.75 0 0 1-1.14-.976L16.013 12l-5.581-6.512a.75.75 0 0 1 .081-1.057" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="text-uppercase button-transparent button-blue text-center"><strong>Explore more</strong></a>
            </div>
            <div class="carousel-image-wrapper">
                <!-- share -->
                <div class="position-absolute top-0 end-0 p-1 button-share">
                    <button class="border-0 text-white bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                        </svg>
                    </button>
                </div>
                <!-- carousel info -->
                <div class="content-wrapper-carousel">
                    <h2 class="mb-0 text-style-2">01</h2>
                    <h3 class="mb-0 text-style-15">Blue Parrot</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.</p>
                </div>
                <picture>
                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" alt="">
                </picture>
            </div>

        </section>

        <!-- New Scrolling text -->
        <section class="shock-section pt-2 pb-4">
            <div class="scrolling-text">
                <!-- Text -->
                <div class="text-wrapper mix-blend-lighter">
                    <h2 class=" text-style-1 text-outline text-blue text-uppercase mb-0 text-center" style="line-height: 75px;" data-lax="h-left">
                        <?php echo SCROLLING_TEXT[0];  ?>
                    </h2>
                    <h3 class="text-style-5 text-blue text-uppercase font-weight-bold text-center" data-lax="h-right">
                        <?php echo SCROLLING_TEXT[1];  ?>
                    </h3>
                </div>
            </div>
        </section>

        <!-- New Second Carousel -->
        <section id="discover-beyond-cruise" class="shock-section pt-2 pb-4 dynamic-carousel">
            <div class="carousel-image-wrapper">
                <!-- share -->
                <div class="position-absolute top-0 end-0 p-1 button-share">
                    <button class="border-0 text-white bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                        </svg>
                    </button>
                </div>
                <!-- carousel info -->
                <div class="content-wrapper-carousel">
                    <h2 class="mb-0 text-style-2">01</h2>
                    <h3 class="mb-0 text-style-15">Blue Parrot</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.</p>
                </div>
                <picture>
                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" alt="">
                </picture>
            </div>

            <div class="carousel-content bg-blue d-flex flex-column justify-content-evenly align-items-center">
                <h2 class="text-uppercase text-center text-style-3"><strong>Discover Beyond The Cruise</strong></h2>
                <div class="d-flex align-items-center gap-3 w-75">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-block text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M17.488 4.43a.75.75 0 0 1 .081 1.058L11.988 12l5.581 6.512a.75.75 0 1 1-1.139.976l-6-7a.75.75 0 0 1 0-.976l6-7a.75.75 0 0 1 1.058-.081m-4 0a.75.75 0 0 1 .081 1.058L7.988 12l5.581 6.512a.75.75 0 1 1-1.138.976l-6-7a.75.75 0 0 1 0-.976l6-7a.75.75 0 0 1 1.057-.081" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1">
                        <p class="text-style-6" style="line-height: 55px;"><span class="d-block">Discover</span><span class="text-end ml-4 d-block">things to do</span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-block text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M6.512 4.43a.75.75 0 0 1 1.057.082l6 7a.75.75 0 0 1 0 .976l-6 7a.75.75 0 0 1-1.138-.976L12.012 12L6.431 5.488a.75.75 0 0 1 .08-1.057m4 0a.75.75 0 0 1 1.058.082l6 7a.75.75 0 0 1 0 .976l-6 7a.75.75 0 0 1-1.14-.976L16.013 12l-5.581-6.512a.75.75 0 0 1 .081-1.057" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="text-uppercase button-transparent button-orange text-center"><strong>Explore more</strong></a>
            </div>


        </section>

        <!-- Dynamic slider -->
        <?php include("include/dynamic-slider-home.php"); ?>

        <!-- Scrolling text -->
        <section class="shock-section">
            <div class="scrolling-text  has-image">
                <!-- Image -->
                <div class="image-wrapper max-w-25 mb-5">
                    <img src="assets/images/media/Taino-Bay.jpg" alt="<?php echo FRASE[0];  ?>" class="image floating-item" />
                </div>
                <!-- Text -->
                <div class="text-wrapper mix-blend-lighter">
                    <h2 class="text text-style-1 text-outline gray-75" data-lax="h-left">
                        <?php echo FRASE[0];  ?>
                    </h2>
                    <h3 class="text text-style-8 text-italic gray-75" data-lax="h-right">
                        <?php echo FRASE[1];  ?>
                    </h3>
                </div>
            </div>
        </section>

        <!-- Progress bar / Carousel -->
        <section class="shock-section pt-2 pb-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-lg-7 align-v-center" data-aos="zoom-in-up" data-aos-delay="300">
                        <div class="holder">
                            <!-- Intro -->
                            <div class="basic-intro mb-35">
                                <h2 class="title black">
                                    <span class="text-1 text-style-7"><?php echo  WELCOME_TEXT[0]; ?> </span>
                                    <span class="text-2 text-style-8 text-italic"><mark class="animated-underline primary"> <?php echo  WELCOME_TEXT[1]; ?>
                                        </mark>.</span>
                                </h2>
                                <div class="description gray">
                                    <?php echo  WELCOME_TEXT[2]; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5" data-aos="zoom-in-up" data-aos-delay="600">

                        <div class="gallery swiper slider has-navigation has-scrollbar scheme-1 primary" data-columns="1,1,1,1" data-autoplay="10000" data-loop="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-1.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-1.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-2.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-2.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-3.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-3.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-4.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-4.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video / Collapse -->
        <section class="shock-section pt-2 pb-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <!-- Video -->
                        <div class="gallery">
                            <a href="javascript:void(0);" class="item active   hover-zoom-rotate">

                                <div class="image-wrapper">
                                    <img src="assets/images/media/video.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 align-v-center">

                        <div class="basic-intro mb-35">
                            <h2 class="title black pb-2">
                                <span class="text-1 text-style-7">
                                    <?php echo FAQS; ?> </span>
                            </h2>
                            <!-- Collapse -->
                            <div class="collapsible">
                                <div class="collapse-group">
                                    <a href="#collapse-1" class="collapse-toggle parent" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">
                                        <div class="collapse-button rounded-circle black">
                                            <span class="arrow-button cross scheme-2 primary">
                                                <span class="arrow">
                                                    <span class="item"></span>
                                                    <span class="item"></span>
                                                </span>
                                                <span class="line"></span>
                                            </span>
                                        </div>
                                        <h3 class="title text-style-11 black">
                                            <?php echo FAQS_1[0];  ?>
                                        </h3>
                                    </a>
                                    <div id="collapse-1" class="collapse-content collapse">
                                        <?php echo FAQS_1[1];  ?>
                                    </div>
                                </div>
                                <div class="collapse-group">
                                    <a href="#collapse-2" class="collapse-toggle parent" aria-expanded="false" aria-controls="collapse-2" data-bs-toggle="collapse">
                                        <div class="collapse-button rounded-circle black">
                                            <span class="arrow-button cross scheme-2 primary">
                                                <span class="arrow">
                                                    <span class="item"></span>
                                                    <span class="item"></span>
                                                </span>
                                                <span class="line"></span>
                                            </span>
                                        </div>
                                        <h3 class="title text-style-11 black">
                                            <?php echo FAQS_2[0];  ?>
                                        </h3>
                                    </a>
                                    <div id="collapse-2" class="collapse-content collapse">
                                        <?php echo FAQS_2[1];  ?>
                                    </div>
                                </div>
                                <div class="collapse-group">
                                    <a href="#collapse-3" class="collapse-toggle parent" aria-expanded="false" aria-controls="collapse-3" data-bs-toggle="collapse">
                                        <div class="collapse-button rounded-circle black">
                                            <span class="arrow-button cross scheme-2 primary">
                                                <span class="arrow">
                                                    <span class="item"></span>
                                                    <span class="item"></span>
                                                </span>
                                                <span class="line"></span>
                                            </span>
                                        </div>
                                        <h3 class="title text-style-11 black">
                                            <?php echo FAQS_3[0];  ?>
                                        </h3>
                                    </a>
                                    <div id="collapse-3" class="collapse-content collapse">
                                        <?php echo FAQS_3[1];  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>

    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

</html>