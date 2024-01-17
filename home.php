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
                <div class="content-wrapper text-center">
                    <div class="container">
                        <!-- Intro -->
                        <div class="extended-intro max-w-85 mb-35">
                            <div class="wrapper">
                                <div class="left-column">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="image-wrapper">
                    <video class="video vh-100 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted"
                        loop="loop">
                        <source src="assets/videos/video-puerto-taino.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Dynamic slider -->
        <?php include("include/dynamic-slider-home.php"); ?>

        <!-- Scrolling text -->
        <section class="shock-section">
            <div class="scrolling-text  has-image">
                <!-- Image -->
                <div class="image-wrapper max-w-25 mb-5">
                    <img src="assets/images/media/Taino-Bay.jpg" alt="<?php echo FRASE[0];  ?>"
                        class="image floating-item" />
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
                                    <span class="text-2 text-style-8 text-italic"><mark
                                            class="animated-underline primary"> <?php echo  WELCOME_TEXT[1]; ?>
                                        </mark>.</span>
                                </h2>
                                <div class="description gray">
                                    <?php echo  WELCOME_TEXT[2]; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5" data-aos="zoom-in-up" data-aos-delay="600">

                        <div class="gallery swiper slider has-navigation has-scrollbar scheme-1 primary"
                            data-columns="1,1,1,1" data-autoplay="10000" data-loop="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-1.jpg"
                                        class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-1.jpg" class="image"
                                                alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-2.jpg"
                                        class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-2.jpg" class="image"
                                                alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-3.jpg"
                                        class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-3.jpg" class="image"
                                                alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-4.jpg"
                                        class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-4.jpg" class="image"
                                                alt="<?php echo SITIO; ?>" />
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
                                    <a href="#collapse-1" class="collapse-toggle parent" aria-expanded="false"
                                        aria-controls="collapse-1" data-bs-toggle="collapse">
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
                                    <a href="#collapse-2" class="collapse-toggle parent" aria-expanded="false"
                                        aria-controls="collapse-2" data-bs-toggle="collapse">
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
                                    <a href="#collapse-3" class="collapse-toggle parent" aria-expanded="false"
                                        aria-controls="collapse-3" data-bs-toggle="collapse">
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