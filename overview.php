<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| COMPANY OVERVIEW
|--------------------------------------------------------------------------
*/

$pageTitle = "Company Overview";

// Define that header assets are already loaded
$header_assets_loaded = true;

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
        Enginove (Pvt) Ltd | Company Overview
    </title>


    <meta
        name="description"
        content="Learn more about Enginove (Pvt) Ltd, our construction and civil engineering capabilities, values, mission and commitment to quality."
    >


    <!-- =============================================
         PAGE-SPECIFIC STYLES ONLY
         All header/core styles are in header.php
    ============================================= -->

    <style>

        /* =========================================================
           PAGE-SPECIFIC STYLES FOR OVERVIEW PAGE
        ========================================================= */

        :root {

            --eng-green: #1f8b4c;
            --eng-green-dark: #096b38;
            --eng-green-deep: #063d25;
            --eng-green-light: #eaf7ef;

            --eng-dark: #18231f;
            --eng-text: #293831;
            --eng-muted: #6d7973;

            --eng-border: #dfe9e3;

            --eng-light: #f6faf8;

            --eng-white: #ffffff;

        }


        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            font-family:
                "Inter",
                Arial,
                sans-serif;

            color:
                var(--eng-text);

            background:
                #f7faf8;

            overflow-x:
                hidden;

        }


        a {
            text-decoration:
                none;
        }



        /* =====================================================
           HERO
        ====================================================== */

        .overview-hero {

            position:
                relative;

            min-height:
                480px;

            display:
                flex;

            align-items:
                center;

            overflow:
                hidden;

        }


        .overview-hero-background {

            position:
                absolute;

            inset:
                0;

            background-image:

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.98) 0%,
                    rgba(255,255,255,.91) 43%,
                    rgba(255,255,255,.38) 100%
                ),

                url(
                    "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=2200&q=85"
                );

            background-size:
                cover;

            background-position:
                center;

        }


        .overview-hero-content {

            position:
                relative;

            z-index:
                2;

            padding:
                85px 0;

        }


        .overview-eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                10px;

            margin-bottom:
                18px;

            color:
                var(--eng-green);

            font-size:
                11px;

            font-weight:
                800;

            letter-spacing:
                1px;

            text-transform:
                uppercase;

        }


        .overview-eyebrow::before {

            content:
                "";

            width:
                34px;

            height:
                2px;

            background:
                var(--eng-green);

        }


        .overview-hero h1 {

            margin:
                0 0 20px;

            color:
                var(--eng-dark);

            font-size:
                clamp(
                    45px,
                    6vw,
                    70px
                );

            font-weight:
                300;

            line-height:
                1;

            letter-spacing:
                -3px;

        }


        .overview-hero h1 strong {

            color:
                var(--eng-green);

            font-weight:
                800;

        }


        .overview-hero p {

            max-width:
                650px;

            margin:
                0;

            color:
                #43534b;

            font-size:
                15px;

            line-height:
                1.8;

        }


        .hero-actions {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                12px;

            margin-top:
                28px;

        }


        .hero-btn {

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
                9px;

            border-radius:
                7px;

            font-size:
                10px;

            font-weight:
                800;

            transition:
                .25s ease;

        }


        .hero-btn-primary {

            color:
                #fff;

            background:
                var(--eng-green);

            box-shadow:
                0 10px 25px
                rgba(31,139,76,.20);

        }


        .hero-btn-primary:hover {

            color:
                #fff;

            background:
                var(--eng-green-dark);

            transform:
                translateY(-2px);

        }


        .hero-btn-outline {

            color:
                var(--eng-green);

            background:
                rgba(255,255,255,.86);

            border:
                1px solid
                var(--eng-green);

        }


        .hero-btn-outline:hover {

            color:
                #fff;

            background:
                var(--eng-green);

        }



        /* =====================================================
           COMPANY STATS
        ====================================================== */

        .overview-stats {

            position:
                relative;

            z-index:
                5;

            margin-top:
                -55px;

            padding-bottom:
                75px;

        }


        .stats-card {

            overflow:
                hidden;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                17px;

            box-shadow:
                0 20px 50px
                rgba(0,50,25,.09);

        }


        .stat-item {

            position:
                relative;

            padding:
                28px 15px;

            text-align:
                center;

        }


        .stat-item:not(:last-child)::after {

            content:
                "";

            position:
                absolute;

            top:
                20%;

            right:
                0;

            width:
                1px;

            height:
                60%;

            background:
                var(--eng-border);

        }


        .stat-icon {

            width:
                42px;

            height:
                42px;

            margin:
                0 auto 10px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                var(--eng-green);

            background:
                var(--eng-green-light);

            border-radius:
                11px;

            font-size:
                17px;

        }


        .stat-number {

            display:
                block;

            color:
                var(--eng-dark);

            font-size:
                29px;

            font-weight:
                800;

            line-height:
                1;

            margin-bottom:
                6px;

        }


        .stat-label {

            color:
                var(--eng-muted);

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                .5px;

            text-transform:
                uppercase;

        }



        /* =====================================================
           COMMON SECTION
        ====================================================== */

        .overview-section {

            padding:
                0 0 90px;

        }


        .section-eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                9px;

            margin-bottom:
                10px;

            color:
                var(--eng-green);

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .8px;

            text-transform:
                uppercase;

        }


        .section-eyebrow::before {

            content:
                "";

            width:
                28px;

            height:
                2px;

            background:
                var(--eng-green);

        }


        .section-title {

            margin:
                0;

            color:
                var(--eng-dark);

            font-size:
                39px;

            font-weight:
                300;

            line-height:
                1.15;

            letter-spacing:
                -1.5px;

        }


        .section-title strong {

            color:
                var(--eng-green);

            font-weight:
                800;

        }


        .section-description {

            max-width:
                650px;

            margin:
                12px 0 0;

            color:
                var(--eng-muted);

            font-size:
                12px;

            line-height:
                1.8;

        }



        /* =====================================================
           WHO WE ARE
        ====================================================== */

        .who-we-are {

            padding-bottom:
                95px;

        }


        .about-content {

            padding-right:
                25px;

        }


        .about-content p {

            margin:
                0 0 17px;

            color:
                #53635b;

            font-size:
                12px;

            line-height:
                1.9;

        }


        .about-highlight {

            display:
                flex;

            align-items:
                flex-start;

            gap:
                13px;

            margin-top:
                25px;

            padding:
                18px;

            background:
                var(--eng-green-light);

            border-left:
                3px solid
                var(--eng-green);

            border-radius:
                0 10px 10px 0;

        }


        .about-highlight i {

            flex-shrink:
                0;

            color:
                var(--eng-green);

            font-size:
                20px;

        }


        .about-highlight p {

            margin:
                0;

            color:
                var(--eng-green-deep);

            font-size:
                11px;

            font-weight:
                600;

            line-height:
                1.7;

        }


        .about-image-wrapper {

            position:
                relative;

            overflow:
                hidden;

            min-height:
                450px;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                18px;

            box-shadow:
                0 20px 45px
                rgba(0,50,25,.10);

        }


        .about-image-wrapper img {

            width:
                100%;

            height:
                450px;

            display:
                block;

            object-fit:
                cover;

            transition:
                transform .7s ease;

        }


        .about-image-wrapper:hover img {

            transform:
                scale(1.04);

        }


        .image-caption {

            position:
                absolute;

            left:
                20px;

            right:
                20px;

            bottom:
                20px;

            padding:
                17px;

            color:
                #fff;

            background:
                rgba(6,61,37,.88);

            backdrop-filter:
                blur(10px);

            border-radius:
                10px;

        }


        .image-caption strong {

            display:
                block;

            margin-bottom:
                4px;

            font-size:
                14px;

        }


        .image-caption span {

            color:
                #c8dfd1;

            font-size:
                9px;

        }



        /* =====================================================
           MISSION / VISION
        ====================================================== */

        .purpose-section {

            padding:
                80px 0;

            background:
                #eef7f1;

        }


        .purpose-card {

            height:
                100%;

            padding:
                30px;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                15px;

            transition:
                .3s ease;

        }


        .purpose-card:hover {

            transform:
                translateY(-5px);

            box-shadow:
                0 18px 40px
                rgba(0,50,25,.09);

        }


        .purpose-icon {

            width:
                50px;

            height:
                50px;

            margin-bottom:
                20px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                13px;

            font-size:
                20px;

        }


        .purpose-card h3 {

            margin:
                0 0 10px;

            color:
                var(--eng-dark);

            font-size:
                21px;

            font-weight:
                800;

        }


        .purpose-card p {

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                11px;

            line-height:
                1.8;

        }



        /* =====================================================
           VALUES
        ====================================================== */

        .values-section {

            padding:
                90px 0;

        }


        .values-heading {

            margin-bottom:
                35px;

        }


        .value-card {

            height:
                100%;

            padding:
                27px 24px;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                14px;

            box-shadow:
                0 8px 25px
                rgba(0,50,25,.04);

            transition:
                .3s ease;

        }


        .value-card:hover {

            transform:
                translateY(-6px);

            border-color:
                #cde5d6;

            box-shadow:
                0 18px 40px
                rgba(31,139,76,.10);

        }


        .value-icon {

            width:
                48px;

            height:
                48px;

            margin-bottom:
                18px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                var(--eng-green);

            background:
                var(--eng-green-light);

            border-radius:
                12px;

            font-size:
                19px;

            transition:
                .25s ease;

        }


        .value-card:hover .value-icon {

            color:
                #fff;

            background:
                var(--eng-green);

        }


        .value-card h3 {

            margin:
                0 0 8px;

            color:
                var(--eng-dark);

            font-size:
                16px;

            font-weight:
                800;

        }


        .value-card p {

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                10px;

            line-height:
                1.75;

        }



        /* =====================================================
           WHY ENGINOVE
        ====================================================== */

        .why-section {

            padding:
                85px 0;

            background:
                #fff;

            border-top:
                1px solid
                var(--eng-border);

            border-bottom:
                1px solid
                var(--eng-border);

        }


        .why-image {

            overflow:
                hidden;

            border-radius:
                17px;

            box-shadow:
                0 20px 45px
                rgba(0,50,25,.10);

        }


        .why-image img {

            width:
                100%;

            height:
                460px;

            display:
                block;

            object-fit:
                cover;

            transition:
                transform .7s ease;

        }


        .why-image:hover img {

            transform:
                scale(1.04);

        }


        .benefit-list {

            margin-top:
                25px;

        }


        .benefit-item {

            display:
                flex;

            align-items:
                flex-start;

            gap:
                13px;

            padding:
                15px 0;

            border-bottom:
                1px solid
                #edf2ef;

        }


        .benefit-item:last-child {

            border-bottom:
                none;

        }


        .benefit-icon {

            width:
                35px;

            height:
                35px;

            flex-shrink:
                0;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                var(--eng-green);

            background:
                var(--eng-green-light);

            border-radius:
                9px;

            font-size:
                13px;

        }


        .benefit-item h4 {

            margin:
                0 0 3px;

            color:
                var(--eng-dark);

            font-size:
                12px;

            font-weight:
                800;

        }


        .benefit-item p {

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                10px;

            line-height:
                1.6;

        }



        /* =====================================================
           SERVICES
        ====================================================== */

        .services-section {

            padding:
                90px 0;

        }


        .service-card {

            position:
                relative;

            height:
                100%;

            padding:
                25px;

            overflow:
                hidden;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                14px;

            transition:
                .3s ease;

        }


        .service-card::after {

            content:
                "";

            position:
                absolute;

            right:
                -25px;

            bottom:
                -25px;

            width:
                90px;

            height:
                90px;

            background:
                var(--eng-green-light);

            border-radius:
                50%;

            transition:
                .3s ease;

        }


        .service-card:hover {

            transform:
                translateY(-5px);

            box-shadow:
                0 18px 40px
                rgba(0,50,25,.08);

        }


        .service-card:hover::after {

            transform:
                scale(1.5);

        }


        .service-icon {

            position:
                relative;

            z-index:
                2;

            width:
                45px;

            height:
                45px;

            margin-bottom:
                17px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                10px;

            font-size:
                17px;

        }


        .service-card h3 {

            position:
                relative;

            z-index:
                2;

            margin:
                0 0 8px;

            color:
                var(--eng-dark);

            font-size:
                15px;

            font-weight:
                800;

        }


        .service-card p {

            position:
                relative;

            z-index:
                2;

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                10px;

            line-height:
                1.7;

        }



        /* =====================================================
           CTA
        ====================================================== */

        .overview-cta {

            padding:
                75px 0;

            background:
                linear-gradient(
                    120deg,
                    #063d25,
                    #0b5d34
                );

        }


        .overview-cta h2 {

            margin:
                0 0 10px;

            color:
                #fff;

            font-size:
                36px;

            font-weight:
                300;

            letter-spacing:
                -1px;

        }


        .overview-cta h2 strong {

            color:
                #a8e1bb;

            font-weight:
                800;

        }


        .overview-cta p {

            max-width:
                610px;

            margin:
                0;

            color:
                #c8dfd1;

            font-size:
                11px;

            line-height:
                1.8;

        }


        .cta-buttons {

            display:
                flex;

            justify-content:
                flex-end;

            flex-wrap:
                wrap;

            gap:
                10px;

        }


        .cta-button {

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
                10px;

            font-weight:
                800;

            transition:
                .25s ease;

        }


        .cta-primary {

            color:
                var(--eng-green-deep);

            background:
                #fff;

        }


        .cta-primary:hover {

            color:
                var(--eng-green-deep);

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(0,0,0,.15);

        }


        .cta-outline {

            color:
                #fff;

            background:
                transparent;

            border:
                1px solid
                rgba(255,255,255,.5);

        }


        .cta-outline:hover {

            color:
                var(--eng-green-deep);

            background:
                #fff;

            border-color:
                #fff;

        }



        /* =====================================================
           FLOATING AI
        ====================================================== */

        .overview-ai-button {

            position:
                fixed;

            right:
                25px;

            bottom:
                22px;

            z-index:
                99990;

            width:
                58px;

            height:
                58px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                50%;

            box-shadow:
                0 10px 30px
                rgba(0,70,35,.28);

            font-size:
                21px;

            cursor:
                pointer;

            transition:
                .25s ease;

        }


        .overview-ai-button:hover {

            color:
                #fff;

            background:
                var(--eng-green-dark);

            transform:
                translateY(-4px)
                scale(1.04);

        }


        .overview-ai-label {

            position:
                absolute;

            right:
                69px;

            white-space:
                nowrap;

            padding:
                8px 13px;

            color:
                var(--eng-dark);

            background:
                #fff;

            border-radius:
                20px;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.10);

            font-size:
                10px;

            font-weight:
                700;

        }



        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 991.98px) {


            .overview-hero {

                min-height:
                    440px;

            }


            .overview-stats {

                margin-top:
                    -35px;

            }


            .about-content {

                padding-right:
                    0;

            }


            .about-image-wrapper,
            .about-image-wrapper img {

                min-height:
                    400px;

                height:
                    400px;

            }


            .why-image img {

                height:
                    400px;

            }


            .cta-buttons {

                justify-content:
                    flex-start;

            }

        }



        @media (max-width: 767.98px) {


            .overview-hero {

                min-height:
                    450px;

            }


            .overview-hero-background {

                background-image:

                    linear-gradient(
                        90deg,
                        rgba(255,255,255,.96),
                        rgba(255,255,255,.83)
                    ),

                    url(
                        "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1400&q=85"
                    );

            }


            .overview-hero-content {

                padding:
                    55px 15px;

            }


            .overview-hero h1 {

                font-size:
                    45px;

                letter-spacing:
                    -2px;

            }


            .hero-actions {

                flex-direction:
                    column;

                align-items:
                    stretch;

            }


            .hero-btn {

                width:
                    100%;

            }


            .overview-stats {

                margin-top:
                    0;

                padding:
                    35px 15px 65px;

            }


            .stat-item {

                padding:
                    20px 10px;

            }


            .stat-item:nth-child(2)::after {

                display:
                    none;

            }


            .stat-number {

                font-size:
                    25px;

            }


            .overview-section {

                padding:
                    0 15px 70px;

            }


            .who-we-are {

                padding-bottom:
                    70px;

            }


            .section-title {

                font-size:
                    30px;

            }


            .about-image-wrapper,
            .about-image-wrapper img {

                min-height:
                    300px;

                height:
                    300px;

            }


            .purpose-section,
            .values-section,
            .why-section,
            .services-section {

                padding:
                    65px 15px;

            }


            .why-image img {

                height:
                    300px;

            }


            .overview-cta {

                padding:
                    60px 15px;

            }


            .overview-cta h2 {

                font-size:
                    29px;

            }


            .cta-buttons {

                flex-direction:
                    column;

                align-items:
                    stretch;

            }


            .cta-button {

                width:
                    100%;

            }


            .overview-ai-label {

                display:
                    none;

            }


            .overview-ai-button {

                right:
                    17px;

                bottom:
                    17px;

                width:
                    53px;

                height:
                    53px;

            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     ENGINOVE HEADER
====================================================== -->

<?php include "header.php"; ?>



<!-- =====================================================
     HERO
====================================================== -->

<section class="overview-hero">


    <div class="overview-hero-background"></div>


    <div class="container overview-hero-content">


        <div class="row">


            <div class="col-lg-8">


                <div class="overview-eyebrow">

                    About Enginove

                </div>


                <h1>

                    Company

                    <strong>
                        Overview
                    </strong>

                </h1>


                <p>

                    Discover who we are, what we stand for
                    and how Enginove delivers construction,
                    renovation and civil engineering solutions
                    with quality, innovation and reliability.

                </p>


                <div class="hero-actions">


                    <a
                        href="projects.php"
                        class="hero-btn hero-btn-primary"
                    >

                        EXPLORE OUR PROJECTS

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <a
                        href="contact.php"
                        class="hero-btn hero-btn-outline"
                    >

                        CONTACT US

                        <i class="bi bi-chat-square-text"></i>

                    </a>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     COMPANY STATISTICS
====================================================== -->

<section class="overview-stats">


    <div class="container">


        <div class="stats-card">


            <div class="row g-0">


                <div class="col-6 col-md-3">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-buildings"></i>

                        </div>


                        <span class="stat-number">
                            500+
                        </span>


                        <span class="stat-label">
                            Projects Completed
                        </span>


                    </div>


                </div>



                <div class="col-6 col-md-3">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-emoji-smile"></i>

                        </div>


                        <span class="stat-number">
                            98%
                        </span>


                        <span class="stat-label">
                            Client Satisfaction
                        </span>


                    </div>


                </div>



                <div class="col-6 col-md-3">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-award"></i>

                        </div>


                        <span class="stat-number">
                            15+
                        </span>


                        <span class="stat-label">
                            Years Experience
                        </span>


                    </div>


                </div>



                <div class="col-6 col-md-3">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-headset"></i>

                        </div>


                        <span class="stat-number">
                            24/7
                        </span>


                        <span class="stat-label">
                            Support Available
                        </span>


                    </div>


                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     WHO WE ARE
====================================================== -->

<section class="overview-section who-we-are">


    <div class="container">


        <div class="row align-items-center g-5">


            <!-- CONTENT -->

            <div class="col-lg-6">


                <div class="about-content">


                    <div class="section-eyebrow">

                        About Us

                    </div>


                    <h2 class="section-title mb-4">

                        Who We

                        <strong>
                            Are
                        </strong>

                    </h2>


                    <p>

                        Enginove (Pvt) Ltd is a tech-driven
                        construction company based in Zimbabwe.
                        We specialize in delivering quality
                        construction, renovation and civil
                        engineering services across the nation.

                    </p>


                    <p>

                        With a team of industry experts and a
                        commitment to innovation, we streamline
                        construction processes while building
                        lifelong relationships with our clients.

                    </p>


                    <p>

                        Our mission is to establish a worldwide
                        presence of quality, affordable
                        construction services that exceed
                        expectations.

                    </p>


                    <div class="about-highlight">


                        <i class="bi bi-check-circle-fill"></i>


                        <p>

                            We combine professional expertise,
                            modern construction methods and a
                            strong commitment to client satisfaction
                            to deliver dependable project outcomes.

                        </p>


                    </div>


                    <div class="mt-4">


                        <a
                            href="our_history.php"
                            class="hero-btn hero-btn-primary"
                        >

                            OUR HISTORY

                            <i class="bi bi-arrow-right"></i>

                        </a>


                    </div>


                </div>


            </div>



            <!-- IMAGE -->

            <div class="col-lg-6">


                <div class="about-image-wrapper">


                    <img
                        src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1000&q=85"
                        alt="Enginove construction and engineering team"
                        loading="lazy"
                    >


                    <div class="image-caption">


                        <strong>
                            Building with purpose.
                        </strong>


                        <span>
                            Construction • Civil Engineering • Renovation
                        </span>


                    </div>


                </div>


            </div>


        </div>


    </div>

</section>



<!-- =====================================================
     MISSION & VISION
====================================================== -->

<section class="purpose-section">


    <div class="container">


        <div class="text-center mb-5">


            <div class="section-eyebrow">

                Our Direction

            </div>


            <h2 class="section-title">

                Mission &

                <strong>
                    Vision
                </strong>

            </h2>


            <p class="section-description mx-auto">

                The principles that guide our growth and
                influence how we approach every project.

            </p>


        </div>



        <div class="row g-4">


            <!-- MISSION -->

            <div class="col-md-6">


                <div class="purpose-card">


                    <div class="purpose-icon">

                        <i class="bi bi-bullseye"></i>

                    </div>


                    <h3>
                        Our Mission
                    </h3>


                    <p>

                        To establish a worldwide presence of
                        quality, affordable construction services
                        that exceed expectations while delivering
                        dependable solutions to our clients.

                    </p>


                </div>


            </div>



            <!-- VISION -->

            <div class="col-md-6">


                <div class="purpose-card">


                    <div class="purpose-icon">

                        <i class="bi bi-eye"></i>

                    </div>


                    <h3>
                        Our Vision
                    </h3>


                    <p>

                        To grow as a trusted and innovative
                        construction and engineering partner,
                        using technology, professional expertise
                        and modern methods to create lasting
                        value.

                    </p>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     OUR VALUES
====================================================== -->

<section class="values-section">


    <div class="container">


        <div class="values-heading">


            <div class="section-eyebrow">

                Our Values

            </div>


            <h2 class="section-title">

                What We

                <strong>
                    Stand For
                </strong>

            </h2>


            <p class="section-description">

                These principles shape the way we work,
                communicate and deliver projects.

            </p>


        </div>



        <div class="row g-4">


            <!-- QUALITY -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-award"></i>

                    </div>


                    <h3>
                        Quality
                    </h3>


                    <p>

                        We deliver excellence in every project,
                        using quality materials and skilled
                        craftsmanship.

                    </p>


                </div>


            </div>



            <!-- RELIABILITY -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-hand-thumbs-up"></i>

                    </div>


                    <h3>
                        Reliability
                    </h3>


                    <p>

                        We keep our commitments and work toward
                        dependable project delivery, timelines
                        and professional service.

                    </p>


                </div>


            </div>



            <!-- INNOVATION -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-lightbulb"></i>

                    </div>


                    <h3>
                        Innovation
                    </h3>


                    <p>

                        We embrace technology and modern methods
                        to develop smarter and more efficient
                        construction solutions.

                    </p>


                </div>


            </div>



            <!-- SUSTAINABILITY -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-leaf"></i>

                    </div>


                    <h3>
                        Sustainability
                    </h3>


                    <p>

                        We build with the future in mind and
                        support responsible construction practices
                        wherever practical.

                    </p>


                </div>


            </div>



            <!-- TRUST -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-people"></i>

                    </div>


                    <h3>
                        Trust
                    </h3>


                    <p>

                        We build lasting relationships with
                        clients, partners and communities through
                        transparency and professionalism.

                    </p>


                </div>


            </div>



            <!-- EXCELLENCE -->

            <div class="col-md-6 col-lg-4">


                <div class="value-card">


                    <div class="value-icon">

                        <i class="bi bi-stars"></i>

                    </div>


                    <h3>
                        Excellence
                    </h3>


                    <p>

                        We strive for high standards throughout
                        planning, execution, supervision and
                        project completion.

                    </p>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     WHY ENGINOVE
====================================================== -->

<section class="why-section">


    <div class="container">


        <div class="row align-items-center g-5">


            <!-- IMAGE -->

            <div class="col-lg-6">


                <div class="why-image">


                    <img
                        src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1100&q=85"
                        alt="Enginove construction project"
                        loading="lazy"
                    >


                </div>


            </div>



            <!-- CONTENT -->

            <div class="col-lg-6">


                <div class="section-eyebrow">

                    Why Enginove

                </div>


                <h2 class="section-title">

                    A partner you can

                    <strong>
                        build with.
                    </strong>
