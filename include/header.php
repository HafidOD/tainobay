   <?php
    if ($page == 'points-of-interest.php' or $page == 'what-to-do.php' or $page == 'map.php') {
        $logo = "logo-dark.svg";
        $menu = "scheme-2";
    } else {
        $logo = "logo.svg";
        $menu = "scheme-1";
    }

    ?>
   <!-- Preloader -->
   <div id="preloader" class="preloader black" data-bg-image="assets/images/media/precarga.png"></div>

   <!-- Header -->
   <header id="header" class="shock-header">
       <!-- Navbar -->
       <nav id="navbar" class="navbar navbar-expand-lg absolute">
           <div class="container-fluid">
               <!-- Brand -->
               <a class="navbar-brand" href="<?php echo $path; ?><?php echo $idioma; ?>/home">
                   <!-- <div class="site-title">Site Title</div> -->
                   <img src="assets/images/<?php echo $logo ?>" data-logo-alt="assets/images/<?php echo $logo ?>"
                       data-logo-mobile="assets/images/<?php echo $logo ?>" alt="Shock Theme" class="logo"
                       width="150px" />
               </a>
               <!-- Menu toggle -->
               <div id="menu-toggle" class="menu-toggle is-inactive magnetic-effect <?php echo $menu; ?> accent">
                   <div class="menu-toggle-icon">
                       <div class="menu-toggle-container">
                           <span class="menu-toggle-line-top"></span>
                           <span class="menu-toggle-line-middle"></span>
                           <span class="menu-toggle-line-bottom"></span>
                       </div>
                   </div>
                   <div class="menu-toggle-circle">
                       <svg class="menu-toggle-menu-toggle-svg-circle">
                           <path class="menu-toggle-path-circle" fill="none" stroke-miterlimit="10" stroke-width="4"
                               d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                       </svg>
                   </div>
                   <svg width="0" height="0">
                       <mask id="menu-toggle-mask">
                           <path class="path-mask" fill="none" stroke-miterlimit="10" stroke-width="4"
                               d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                       </mask>
                   </svg>
                   <div class="menu-toggle-path">
                       <div class="path-animation">
                           <div class="path-rotation"></div>
                       </div>
                   </div>
               </div>
               <!-- Menu grid -->
               <nav id="menu-grid" class="menu-grid scheme-1 accent">
                   <div class="menu-grid-item item-1" data-direction="bt">
                       <div class="menu-grid-item-inner">

                           <!-- Main menu -->
                           <div class="menu-grid-main">
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/home"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[0]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/what-to-do"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[1]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/points-of-interest"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[2]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/map"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[3]; ?></a>
                               <!--<a href="<?php //echo $path; ?><?php //echo $idioma; ?>/arrivals"
                                   class="menu-grid-main-item menu-item"><?php //echo MENU[4]; ?></a>-->
                               <a href="javascript:void(0)"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[5]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/faqs"
                                   class="menu-grid-main-item menu-item"><?php echo MENU[6]; ?></a>
                               <div class="language">
                                   <?php $_lang = explode('.',$page) ?>
                                   <a href="<?php echo $path; ?>es/<?php echo $_lang [0] ?>" class="">Español</a> |
                                   <a href="<?php echo $path; ?>en/<?php echo $_lang [0] ?>" class="">English</a>
                               </div>
                           </div>

                       </div>
                   </div>
                   <div class="menu-grid-item item-2" data-direction="lr">
                       <div class="menu-grid-item-inner">
                           <!-- Image -->
                           <a href="javascript:void(0)" class="menu-grid-item-image">
                               <img src="assets/images/media/img-menu-1.jpg" alt="Image name" class="image" />
                           </a>
                       </div>
                   </div>
                   <div class="menu-grid-item item-3" data-direction="bt">
                       <div class="menu-grid-item-inner">

                           <!-- Links -->
                           <div class="menu-grid-minor">

                               <h5 class="text-white">
                                   <?php echo TEXT_MENU[0];  ?>
                               </h5>
                               <div class="list-wrapper">
                                   <ul class="icon-h-list">
                                       <li class="ms-0 item">
                                           <a href="https://www.facebook.com/TainobayPuertoPlata/?mibextid=ZbWKwL"
                                               class="link white primary-hover hover-rotate" target="_blank"><i
                                                   class="icon fab fa-facebook-f"></i></a>
                                       </li>
                                       <li class="item">
                                           <a href="https://instagram.com/porttainobay?igshid=OGQ2MjdiOTE="
                                               class="link white primary-hover hover-rotate" target="_blank"><i
                                                   class="icon fab fa-instagram"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="menu-grid-item item-4" data-direction="rl">
                       <div class="menu-grid-item-inner">
                           <!-- Image -->
                           <a href="javascript:void(0)" class="menu-grid-item-image">
                               <img src="assets/images/media/img-menu-2.jpg" alt="Image name" class="image" />
                           </a>
                       </div>
                   </div>
                   <div class="menu-grid-item item-5" data-direction="tb">
                       <div class="menu-grid-item-inner">
                           <!-- Contacts -->
                           <div class="menu-grid-minor text-white">
                               <div class="m-4">

                                   <h5>
                                       <?php echo TEXT_MENU[1];  ?>
                                   </h5>

                                   <p class="text-center"> info@porttainobay.com <br> Av. Antigua Via Férrea, Muelle
                                       Turístico entre Av.
                                       Penetración
                                       Portuaria y Prolongación Duarte. Puerto Plata 57000 República Dominicana.</p>

                               </div>

                           </div>
                       </div>
                   </div>
           </div>
       </nav>
       </div>
       </nav>
   </header>