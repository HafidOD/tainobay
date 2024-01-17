<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-faqs.php");
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
        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <h1 class="title white">
                            <span class="text-1 text-style-3"><?php echo TITULOS_FAQS[0];  ?></span>
                            <span class="text-2 text-style-4 text-italic"><?php echo TITULOS_FAQS[1];  ?> <mark
                                    class="animated-underline primary"><?php echo TITULOS_FAQS[2];  ?></mark></span>
                        </h1>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover"
                        alt="This is an example description for this item." />
                </div>
                <!-- Overlay -->
                <div class="overlay black-65"></div>
            </div>
        </section>

        <!-- Vertical tab -->
        <section class="shock-section py-5 bg-color gray-10">
            <div class="container max-w-85">
                <div class="vertical-tab scheme-1 primary">
                    <!-- Tab navigation -->
                    <ul id="v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical" data-sticky="30">
                        <li class="nav-item" role="presentation">
                            <button id="v-1-tab" class="nav-link active" aria-selected="true" aria-controls="v-1"
                                data-bs-target="#location" data-bs-toggle="tab" role="tab">
                                <?php echo MENU_FAQS[0]; ?>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="v-2-tab" class="nav-link" aria-selected="false" aria-controls="v-2"
                                data-bs-target="#tours" data-bs-toggle="tab" role="tab">
                                <?php echo MENU_FAQS[1]; ?>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" aria-controls="v-1"
                                data-bs-target="#activities" data-bs-toggle="tab" role="tab">
                                <?php echo MENU_FAQS[2]; ?>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" aria-controls="v-2"
                                data-bs-target="#facilities" data-bs-toggle="tab" role="tab">
                                <?php echo MENU_FAQS[3]; ?>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" aria-controls="v-1" data-bs-target="#all"
                                data-bs-toggle="tab" role="tab">
                                <?php echo MENU_FAQS[4]; ?>
                            </button>
                        </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content pt-0">
                        <div id="location" class="tab-pane fade show active" role="tabpanel">
                            <!-- Projects -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_LOCATION_1[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_LOCATION_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_LOCATION_2[0]; ?> </h3>
                                            <p class="description"><?php echo FAQS_LOCATION_2[1]; ?></p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="tours" class="tab-pane fade" role="tabpanel">
                            <!-- Projects -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_1[0]; ?>
                                            </h3>
                                            <p class="description"><?php echo FAQS_TOURS_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_2[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_TOURS_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_3[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_TOURS_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="activities" class="tab-pane fade" role="tabpanel">
                            <!-- Projects -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_1[0]; ?>
                                            </h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_2[0]; ?></h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_3[0]; ?></h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="facilities" class="tab-pane fade" role="tabpanel">
                            <!-- Projects -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_1[0]; ?>
                                            </h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_2[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_3[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_4[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_4[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="all" class="tab-pane fade" role="tabpanel">
                            <!-- Projects -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_LOCATION_1[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_LOCATION_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_LOCATION_2[0]; ?> </h3>
                                            <p class="description"><?php echo FAQS_LOCATION_2[1]; ?></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_1[0]; ?>
                                            </h3>
                                            <p class="description"><?php echo FAQS_TOURS_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_2[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_TOURS_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_TOURS_3[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_TOURS_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_1[0]; ?>
                                            </h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_2[0]; ?></h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_ACTIVITIES_3[0]; ?></h3>
                                            <p class="description"> <?php echo FAQS_ACTIVITIES_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_1[0]; ?>
                                            </h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_1[1]; ?></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_2[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_2[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_3[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_3[1]; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card parent small-shadow rounded bg-color white">

                                        <div class="card-body">
                                            <h3 class="title text-style-11 black">
                                                <?php echo FAQS_FACILITIES_4[0]; ?></h3>
                                            <p class="description"><?php echo FAQS_FACILITIES_4[1]; ?>
                                            </p>

                                        </div>
                                    </div>
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