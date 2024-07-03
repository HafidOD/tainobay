<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-map.php");
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
        <!-- Banner -->
        <section class="shock-section has-holder">
            <div class="container max-w-85">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h1 class="title black">
                        <span class="text-1 text-style-3"><?php echo TITULOS_MAP[0]; ?>
                        </span>
                        <span class="text-2 text-style-4 text-italic"><?php echo TITULOS_MAP[1]; ?> <mark class="animated-underline primary">
                                <?php echo TITULOS_MAP[2]; ?> </mark></span>
                    </h1>
                    <hr class="gray-25">
                </div>
            </div>
        </section>
        <!-- Content -->
        <section class="shock-section pb-5">
            <div class="container max-w-85">

                <!-- Image -->
                <div class="stretched-section">
                    <figure class="figure">
                        <img src="assets/images/media/Mapa-Taino-Bay.jpg" class="image shadow rounded" alt="<?php echo SITIO; ?>">
                    </figure>
                </div>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

</html>