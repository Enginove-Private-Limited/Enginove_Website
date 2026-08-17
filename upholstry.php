<?php
$pageTitle = "Upholstery & Interior Finishing";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Enginove | Upholstery & Interior Finishing
    </title>

    <meta
        name="description"
        content="Enginove provides professional upholstery, furniture refurbishment, seating finishes and interior finishing solutions."
    >

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <style>

        :root {

            --green:#1f8b4c;
            --green-dark:#096b38;
            --green-deep:#063d25;
            --green-light:#eaf7ef;

            --dark:#17221d;
            --text:#34433b;
            --muted:#718078;
            --border:#dfe9e3;

        }


        * {
            box-sizing:border-box;
        }


        html {
            scroll-behavior:smooth;
        }


        body {

            margin:0;

            font-family:
                "Inter",
                Arial,
                sans-serif;

            color:
                var(--text);

            background:
                #fff;

        }


        a {
            text-decoration:none;
        }



        /* =====================================================
           HERO
        ====================================================== */

        .upholstery-hero {

            position:
                relative;

            min-height:
                540px;

            display:
                flex;

            align-items:
                center;

            overflow:
                hidden;

        }


        .upholstery-hero-bg {

            position:
                absolute;

            inset:
                0;

            background-image:

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.98),
                    rgba(255,255,255,.92),
                    rgba(255,255,255,.30)
                ),

                url(
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=2200&q=85"
                );

            background-size:
                cover;

            background-position:
                center;

        }


        .upholstery-hero-content {

            position:
                relative;

            z-index:
                2;

            padding:
                95px 0;

        }


        .eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                9px;

            margin-bottom:
                17px;

            color:
                var(--green);

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1px;

        }


        .eyebrow::before {

            content:
                "";

            width:
                34px;

            height:
                2px;

            background:
                var(--green);

        }


        .upholstery-hero h1 {

            max-width:
                800px;

            margin:
                0 0 20px;

            color:
                var(--dark);

            font-size:
                clamp(43px,6vw,70px);

            line-height:
                1.02;

            font-weight:
                300;

            letter-spacing:
                -3px;

        }


        .upholstery-hero h1 strong {

            color:
                var(--green);

            font-weight:
                800;

        }


        .upholstery-hero p {

            max-width:
                650px;

            margin:
                0;

            color:
                #4a5951;

            font-size:
                14px;

            line-height:
                1.85;

        }


        .hero-actions {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                10px;

            margin-top:
                30px;

        }


        .btn-main,
        .btn-outline {

            min-height:
                47px;

            padding:
                0 20px;

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                8px;

            border-radius:
                7px;

            font-size:
                9px;

            font-weight:
                800;

            transition:
                .25s ease;

        }


        .btn-main {

            color:
                #fff;

            background:
                var(--green);

        }


        .btn-main:hover {

            color:
                #fff;

            background:
                var(--green-dark);

            transform:
                translateY(-2px);

        }


        .btn-outline {

            color:
                var(--green);

            background:
                #fff;

            border:
                1px solid
                var(--green);

        }


        .btn-outline:hover {

            color:
                #fff;

            background:
                var(--green);

        }



        /* =====================================================
           INTRO
        ====================================================== */

        .service-intro {

            padding:
                90px 0;

        }


        .section-eyebrow {

            color:
                var(--green);

            font-size:
                9px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1px;

        }


        .section-title {

            margin:
                10px 0 0;

            color:
                var(--dark);

            font-size:
                39px;

            line-height:
                1.15;

            font-weight:
                300;

            letter-spacing:
                -1.5px;

        }


        .section-title strong {

            color:
                var(--green);

            font-weight:
                800;

        }


        .section-description {

            margin-top:
                17px;

            color:
                var(--muted);

            font-size:
                11px;

            line-height:
                1.9;

        }


        .service-image {

            overflow:
                hidden;

            border-radius:
                18px;

            box-shadow:
                0 20px 45px
                rgba(0,50,25,.10);

        }


        .service-image img {

            width:
                100%;

            height:
                450px;

            display:
                block;

            object-fit:
                cover;

            transition:
                .7s ease;

        }


        .service-image:hover img {

            transform:
                scale(1.04);

        }



        /* =====================================================
           UPHOLSTERY SERVICES
        ====================================================== */

        .upholstery-services {

            padding:
                90px 0;

            background:
                #f1f8f4;

        }


        .upholstery-card {

            height:
                100%;

            padding:
                28px;

            background:
                #fff;

            border:
                1px solid
                var(--border);

            border-radius:
                14px;

            transition:
                .3s ease;

        }


        .upholstery-card:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 18px 42px
                rgba(0,50,25,.09);

        }


        .upholstery-icon {

            width:
                50px;

            height:
                50px;

            margin-bottom:
                18px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                #fff;

            background:
                var(--green);

            border-radius:
                11px;

            font-size:
                20px;

        }


        .upholstery-card h3 {

            margin:
                0 0 9px;

            color:
                var(--dark);

            font-size:
                16px;

            font-weight:
                800;

        }


        .upholstery-card p {

            margin:
                0;

            color:
                var(--muted);

            font-size:
                10px;

            line-height:
                1.8;

        }



        /* =====================================================
           APPLICATIONS
        ====================================================== */

        .applications-section {

            padding:
                90px 0;

        }


        .application-box {

            height:
                100%;

            padding:
                27px;

            background:
                #fff;

            border:
                1px solid
                var(--border);

            border-radius:
                13px;

        }


        .application-box h3 {

            margin:
                0 0 9px;

            color:
                var(--dark);

            font-size:
                15px;

            font-weight:
                800;

        }


        .application-box p {

            margin:
                0;

            color:
                var(--muted);

            font-size:
                10px;

            line-height:
                1.8;

        }


        .application-icon {

            color:
                var(--green);

            font-size:
                23px;

            margin-bottom:
                15px;

        }



        /* =====================================================
           CTA
        ====================================================== */

        .service-cta {

            padding:
                75px 0;

            color:
                #fff;

            background:
                linear-gradient(
                    120deg,
                    #063d25,
                    #0b5d34
                );

        }


        .service-cta h2 {

            margin:
                0 0 10px;

            font-size:
                34px;

            font-weight:
                300;

        }


        .service-cta h2 strong {

            color:
                #a8e1bb;

            font-weight:
                800;

        }


        .service-cta p {

            max-width:
                650px;

            margin:
                0;

            color:
                #c8dfd1;

            font-size:
                11px;

            line-height:
                1.8;

        }


        .cta-button {

            min-height:
                48px;

            padding:
                0 21px;

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                8px;

            color:
                var(--green-deep);

            background:
                #fff;

            border-radius:
                7px;

            font-size:
                9px;

            font-weight:
                800;

            transition:
                .25s ease;

        }


        .cta-button:hover {

            color:
                var(--green-deep);

            transform:
                translateY(-2px);

        }



        /* =====================================================
           MOBILE
        ====================================================== */

        @media(max-width:767px) {

            .upholstery-hero {

                min-height:
                    480px;

            }

            .upholstery-hero-content {

                padding:
                    65px 15px;

            }

            .upholstery-hero h1 {

                font-size:
                    44px;

            }

            .service-intro,
            .upholstery-services,
            .applications-section {

                padding:
                    65px 15px;

            }

            .section-title {

                font-size:
                    30px;

            }

            .service-image img {

                height:
                    300px;

            }

            .service-cta {

                padding:
                    55px 15px;

            }

        }

    </style>

</head>


<body>


<?php include "header.php"; ?>


<!-- HERO -->

<section class="upholstery-hero">

    <div class="upholstery-hero-bg"></div>

    <div class="container upholstery-hero-content">

        <div class="row">

            <div class="col-lg-8">

                <div class="eyebrow">

                    Upholstery & Interior Finishing

                </div>


                <h1>

                    Restore.
                    Refresh.
                    <strong>Refine.</strong>

                </h1>


                <p>

                    Enginove provides upholstery and interior
                    finishing solutions that restore, improve
                    and refresh furniture, seating and selected
                    interior elements.

                </p>


                <div class="hero-actions">

                    <a
                        href="contact.php"
                        class="btn-main"
                    >

                        REQUEST A QUOTE

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <a
                        href="#services"
                        class="btn-outline"
                    >

                        OUR SERVICES

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- INTRO -->

<section class="service-intro">

    <div class="container">

        <div class="row align-items-center g-5">


            <div class="col-lg-6">

                <div class="section-eyebrow">

                    Upholstery Services

                </div>


                <h2 class="section-title">

                    Giving interiors a
                    <strong>new life.</strong>

                </h2>


                <p class="section-description">

                    Upholstery can transform the appearance,
                    comfort and presentation of furniture and
                    interior spaces.

                </p>


                <p class="section-description">

                    Enginove provides upholstery and refurbishment
                    solutions for selected furniture and seating
                    requirements, with attention to finish,
                    presentation and client specifications.

                </p>


                <p class="section-description">

                    Our service can support office, institutional,
                    hospitality and residential environments where
                    furniture requires restoration or a refreshed
                    appearance.

                </p>


                <div class="mt-4">

                    <a
                        href="contact.php"
                        class="btn-main"
                    >

                        DISCUSS YOUR PROJECT

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="service-image">

                    <img
                        src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1200&q=85"
                        alt="Upholstery and interior finishing"
                        loading="lazy"
                    >

                </div>

            </div>


        </div>

    </div>

</section>


<!-- SERVICES -->

<section
    class="upholstery-services"
    id="services"
>

    <div class="container">


        <div class="text-center mb-5">

            <div class="section-eyebrow">

                What We Do

            </div>


            <h2 class="section-title">

                Upholstery &
                <strong>refurbishment.</strong>

            </h2>

        </div>


        <div class="row g-4">


            <?php

            $services = [

                [
                    "icon"=>"bi-lamp",
                    "title"=>"Furniture Upholstery",
                    "text"=>"Refurbishment and re-covering of selected furniture according to client requirements."
                ],

                [
                    "icon"=>"bi-chair",
                    "title"=>"Seating",
                    "text"=>"Upholstery solutions for chairs, seating areas and other suitable furniture."
                ],

                [
                    "icon"=>"bi-building",
                    "title"=>"Office Furniture",
                    "text"=>"Refresh and refurbishment solutions for office furniture and seating environments."
                ],

                [
                    "icon"=>"bi-house",
                    "title"=>"Residential Furniture",
                    "text"=>"Upholstery and furniture refresh solutions for residential interiors."
                ],

                [
                    "icon"=>"bi-shop",
                    "title"=>"Hospitality Interiors",
                    "text"=>"Furniture and seating refurbishment support for hospitality environments."
                ],

                [
                    "icon"=>"bi-stars",
                    "title"=>"Interior Refresh",
                    "text"=>"Selected upholstery improvements designed to enhance the presentation of interior spaces."
                ]

            ];


            foreach($services as $service):

            ?>

                <div class="col-md-6 col-lg-4">

                    <div class="upholstery-card">

                        <div class="upholstery-icon">

                            <i
                                class="bi <?= htmlspecialchars($service["icon"]) ?>"
                            ></i>

                        </div>


                        <h3>

                            <?= htmlspecialchars($service["title"]) ?>

                        </h3>


                        <p>

                            <?= htmlspecialchars($service["text"]) ?>

                        </p>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>

    </div>

</section>


<!-- APPLICATIONS -->

<section class="applications-section">

    <div class="container">


        <div class="text-center mb-5">

            <div class="section-eyebrow">

                Applications

            </div>


            <h2 class="section-title">

                Suitable for
                <strong>different environments.</strong>

            </h2>

        </div>


        <div class="row g-4">


            <div class="col-md-6 col-lg-3">

                <div class="application-box">

                    <div class="application-icon">

                        <i class="bi bi-building"></i>

                    </div>

                    <h3>
                        Offices
                    </h3>

                    <p>
                        Refreshing office seating and selected
                        furniture for a more professional environment.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="application-box">

                    <div class="application-icon">

                        <i class="bi bi-hospital"></i>

                    </div>

                    <h3>
                        Institutions
                    </h3>

                    <p>
                        Furniture refurbishment requirements
                        within institutional facilities.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="application-box">

                    <div class="application-icon">

                        <i class="bi bi-house"></i>

                    </div>

                    <h3>
                        Homes
                    </h3>

                    <p>
                        Furniture and interior refresh solutions
                        for residential environments.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="application-box">

                    <div class="application-icon">

                        <i class="bi bi-cup-hot"></i>

                    </div>

                    <h3>
                        Hospitality
                    </h3>

                    <p>
                        Upholstery support for selected
                        hospitality furniture and seating.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- CTA -->

<section class="service-cta">

    <div class="container">

        <div class="row align-items-center g-4">


            <div class="col-lg-8">

                <h2>

                    Give your furniture a
                    <strong>fresh finish.</strong>

                </h2>


                <p>

                    Contact Enginove with your upholstery,
                    furniture refurbishment or interior
                    finishing requirements.

                </p>

            </div>


            <div class="col-lg-4 text-lg-end">

                <a
                    href="contact.php"
                    class="cta-button"
                >

                    CONTACT ENGINOVE

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>


        </div>

    </div>

</section>


<?php include "footer.php"; ?>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>