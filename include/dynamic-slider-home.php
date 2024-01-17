        <section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="10000">
            <!-- Index -->
            <div id="slide-index" class="slide-index">
                <span class="slide-index-current">
                    <span class="slide-index-inner"></span>
                </span>
                <span class="slide-index-total"></span>
            </div>
            <!-- Navigation -->
            <nav class="slide-navigation pt-5">
                <a href="#home" class="slide-navigation-item-prev">
                    <span class="arrow-button prev scheme-1 primary">
                        <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                        </span>
                        <span class="line"></span>
                        <span class="text">PREV</span>
                    </span>
                </a>
                <a href="#home" class="slide-navigation-item-next">
                    <span class="arrow-button next scheme-1 primary">
                        <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                        </span>
                        <span class="line"></span>
                        <span class="text">NEXT</span>
                    </span>
                </a>
            </nav>
            <!-- Info toggle -->
            <div class="slide-info-menu parent">
                <div id="slide-info-toggle" class="slide-info-toggle">
                    <span class="arrow-button cross scheme-2 primary">
                        <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                        </span>
                        <span class="line"></span>
                        <a href="#home" id="slide-info-toggle-text" class="text"
                            data-toggle="VIEW LESS"><?php echo HOME_TEXTOS[0] ?></a>
                    </span>
                </div>
                <span class="slide-info-menu-close"></span>
            </div>

            <!-- Slide 1 -->
            <div class="slide-item side-intro current-slide">
                <!-- Intro -->
                <div class="slide-content">
                    <span class="slide-title text-1 text-style-1 black">Explore</span>
                    <div class="slide-description">
                        <span class="text-2 text-style-4 text-italic black">Puerto <mark
                                class="animated-underline primary">Plata</mark> !</span>
                        <div class="description gray">
                            <?php echo HOME_TEXTOS_1; ?>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <img src="assets/images/points-of-interest/BlancaAlley.jpg" alt="<?php echo BLANCAALLEY[0]; ?>"
                            class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">
                        <span class="slide-action-title"><?php echo HOME_TEXTOS[1] ?></span>
                        <a href="javascript:void(0);"
                            onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')"
                            class="slide-action-link animated-text scheme-1 primary"><?php echo BLANCAALLEY[0]; ?></a>
                    </div>
                </div>
                <!-- Info menu -->
                <div class="slide-info">
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo BLANCAALLEY[0]; ?> <i
                                class="fas fa-chevron-right icon"></i>
                        </h3>
                        <span class="slide-info-detail"><?php echo  BLANCAALLEY[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo PARQUECENTRAL[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo PARQUECENTRAL[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo UMBRELLASTREET[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo UMBRELLASTREET[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                        <h3 class="slide-info-title"><?php echo MUSEOAMBAR[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo MUSEOAMBAR[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                        <h3 class="slide-info-title"><?php echo FORTALEZASANFELIPE[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo FORTALEZASANFELIPE[1] ?></span>
                    </a>

                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>
            </div>

            <!-- Slide 2 -->
            <div class="slide-item side-intro">
                <!-- Intro -->
                <div class="slide-content">
                    <span class="slide-title text-1 text-style-1 black">Explore</span>
                    <div class="slide-description">
                        <span class="text-2 text-style-4 text-italic black">Puerto <mark
                                class="animated-underline primary">Plata</mark> !</span>
                        <div class="description gray">
                            <?php echo HOME_TEXTOS_1; ?>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <img src="assets/images/points-of-interest/ParqueCentral.jpg"
                            alt="<?php echo PARQUECENTRAL[0]; ?>" class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">
                        <span class="slide-action-title"><?php echo HOME_TEXTOS[1] ?></span>
                        <a href="javascript:void(0);" class="slide-action-link animated-text scheme-1 primary"
                            onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')"><?php echo PARQUECENTRAL[0]; ?></a>
                    </div>
                </div>
                <!-- Info menu -->
                <div class="slide-info">
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo PARQUECENTRAL[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo PARQUECENTRAL[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo UMBRELLASTREET[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo UMBRELLASTREET[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                        <h3 class="slide-info-title"><?php echo MUSEOAMBAR[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo MUSEOAMBAR[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                        <h3 class="slide-info-title"><?php echo FORTALEZASANFELIPE[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo FORTALEZASANFELIPE[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo BLANCAALLEY[0]; ?> <i
                                class="fas fa-chevron-right icon"></i>
                        </h3>
                        <span class="slide-info-detail"><?php echo  BLANCAALLEY[1]; ?></span>
                    </a>
                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>
            </div>

            <!-- Slide 3 -->
            <div class="slide-item side-intro ">
                <!-- Intro -->
                <div class="slide-content">
                    <span class="slide-title text-1 text-style-1 black">Explore</span>
                    <div class="slide-description">
                        <span class="text-2 text-style-4 text-italic black">Puerto <mark
                                class="animated-underline primary">Plata</mark> !</span>
                        <div class="description gray">
                            <?php echo HOME_TEXTOS_1; ?>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <img src="assets/images/points-of-interest/UmbrellaStreet.jpg"
                            alt="<?php echo UMBRELLASTREET[0]; ?>" class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">
                        <span class="slide-action-title"><?php echo HOME_TEXTOS[1] ?></span>
                        <a href="javascript:void(0);" class="slide-action-link animated-text scheme-1 primary"
                            onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')"><?php echo UMBRELLASTREET[0]; ?></a>
                    </div>
                </div>
                <!-- Info menu -->
                <div class="slide-info">

                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo UMBRELLASTREET[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo UMBRELLASTREET[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                        <h3 class="slide-info-title"><?php echo MUSEOAMBAR[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo MUSEOAMBAR[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                        <h3 class="slide-info-title"><?php echo FORTALEZASANFELIPE[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo FORTALEZASANFELIPE[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo BLANCAALLEY[0]; ?> <i
                                class="fas fa-chevron-right icon"></i>
                        </h3>
                        <span class="slide-info-detail"><?php echo  BLANCAALLEY[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo PARQUECENTRAL[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo PARQUECENTRAL[1]; ?></span>
                    </a>
                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>
            </div>

            <!-- Slide 4 -->
            <div class="slide-item side-intro ">
                <!-- Intro -->
                <div class="slide-content">
                    <span class="slide-title text-1 text-style-1 black">Explore</span>
                    <div class="slide-description">
                        <span class="text-2 text-style-4 text-italic black"> <mark
                                class="animated-underline primary">Plata</mark> !</span>
                        <div class="description gray">
                            <?php echo HOME_TEXTOS_1; ?>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <img src="assets/images/points-of-interest/MuseoAmbar.jpg" alt="<?php echo MUSEOAMBAR[0] ?>"
                            class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">
                        <span class="slide-action-title"><?php echo HOME_TEXTOS[1] ?></span>
                        <a href="javascript:void(0);" class="slide-action-link animated-text scheme-1 primary"
                            onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')"><?php echo MUSEOAMBAR[0] ?></a>
                    </div>
                </div>
                <!-- Info menu -->
                <div class="slide-info">

                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                        <h3 class="slide-info-title"><?php echo MUSEOAMBAR[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo MUSEOAMBAR[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                        <h3 class="slide-info-title"><?php echo FORTALEZASANFELIPE[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo FORTALEZASANFELIPE[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo BLANCAALLEY[0]; ?> <i
                                class="fas fa-chevron-right icon"></i>
                        </h3>
                        <span class="slide-info-detail"><?php echo  BLANCAALLEY[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo PARQUECENTRAL[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo PARQUECENTRAL[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo UMBRELLASTREET[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo UMBRELLASTREET[1]; ?></span>
                    </a>
                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>
            </div>

            <!-- Slide 5 -->
            <div class="slide-item side-intro ">
                <!-- Intro -->
                <div class="slide-content">
                    <span class="slide-title text-1 text-style-1 black">Explore</span>
                    <div class="slide-description">
                        <span class="text-2 text-style-4 text-italic black">Puerto <mark
                                class="animated-underline primary">Plata</mark> !</span>
                        <div class="description gray">
                            <?php echo HOME_TEXTOS_1; ?>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <img src="assets/images/points-of-interest/FortalezaSanFelipe.jpg"
                            alt="<?php echo FORTALEZASANFELIPE[0] ?>" class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">
                        <span class="slide-action-title"><?php echo HOME_TEXTOS[1] ?></span>
                        <a href="javascript:void(0);" class="slide-action-link animated-text scheme-1 primary"
                            onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')"><?php echo FORTALEZASANFELIPE[0] ?></a>
                    </div>
                </div>
                <!-- Info menu -->
                <div class="slide-info">

                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                        <h3 class="slide-info-title"><?php echo FORTALEZASANFELIPE[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo FORTALEZASANFELIPE[1] ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo BLANCAALLEY[0]; ?> <i
                                class="fas fa-chevron-right icon"></i>
                        </h3>
                        <span class="slide-info-detail"><?php echo  BLANCAALLEY[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo PARQUECENTRAL[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo PARQUECENTRAL[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                        <h3 class="slide-info-title"><?php echo UMBRELLASTREET[0]; ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo UMBRELLASTREET[1]; ?></span>
                    </a>
                    <a href="javascript:void(0);" class="slide-info-item"
                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                        <h3 class="slide-info-title"><?php echo MUSEOAMBAR[0] ?> <i
                                class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail"><?php echo MUSEOAMBAR[1] ?></span>
                    </a>
                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>
            </div>

        </section>