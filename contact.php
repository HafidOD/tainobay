<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-contact.php");

?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

  <?php include("include/head.php"); ?>

</head>

<body class="shock-body">

  <?php include("include/header.php"); ?>

  <!-- Main -->
  <main id="main" class="shock-main">

    <!-- banner -->
    <section class="shock-section has-overlay">
      <div class="banner d-flex align-items-center">
        <div class="content-wrapper top-zero ">
          <!-- Intro -->
          <div class="basic-intro text-center">
            <h1 class="title white text-1 banner-title text-uppercase fw-bold">
              <?= TITULOS_CONTACT[0]; ?>
            </h1>
            <p class="text-white banner-subtitle"><?= TITULOS_CONTACT[1]; ?></p>
          </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
          <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." />
        </div>
        <!-- Overlay -->
        <div class="overlay-blue"></div>
      </div>
    </section>

    <!-- Title -->
    <section class="shock-section has-holder pt-5 pb-2">
      <!-- <div class="container max-w-75">
        
        <div class="basic-intro text-center">
          <h1 class="title black">
            <span class="text-1 text-style-3">homa </span>
            <span class="text-2 text-style-4 text-italic">mundo <mark class="animated-underline accent">
                Hola</mark></span>
          </h1>
        </div>
        <hr class="gray-25">
      </div> -->
    </section>

    <!-- Menu -->
    <section class="shock-section pb-5">
      <div class="container max-w-85">

        <!-- Image -->
        <div class="stretched-section wrapper-canva text-center">
          <p>Hola mundo</p>
        </div>
      </div>
    </section>
  </main>

  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>

</body>

</html>