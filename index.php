<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Modern Construction & Renovation Homepage
|--------------------------------------------------------------------------
*/
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
        Enginove (Pvt) Ltd | Construction & Renovation Experts
    </title>

    <meta
        name="description"
        content="Enginove (Pvt) Ltd provides professional construction, civil works, renovations, materials supply and equipment hire across Zimbabwe."
    >

    <!-- =====================================================
         BOOTSTRAP 5.3.8 CDN
    ====================================================== -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        crossorigin="anonymous"
    >

    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->
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


    <style>

        /* =====================================================
           ROOT
        ====================================================== */

        :root {

            --eng-green: #1f8b4c;
            --eng-green-dark: #096b38;
            --eng-green-deep: #063d25;
            --eng-green-light: #eaf7ef;

            --eng-dark: #18231f;
            --eng-text: #293831;
            --eng-muted: #6d7973;

            --eng-white: #ffffff;
            --eng-light: #f6faf8;

            --eng-border: #dfe9e3;

            --eng-shadow:
                0 20px 55px rgba(0, 55, 30, .10);

        }


        /* =====================================================
           GLOBAL
        ====================================================== */

        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            font-family:
                "Inter",
                Arial,
                sans-serif;

            color: var(--eng-text);

            background: #fff;

            overflow-x: hidden;
        }


        img {
            max-width: 100%;
        }


        a {
            text-decoration: none;
        }


        /* =====================================================
           HERO
        ====================================================== */

        .eng-hero {

            position: relative;

            min-height: 650px;

            overflow: hidden;

            background-color: #f6faf8;

        }


        .eng-hero-bg {

            position: absolute;

            inset: 0;

            background-image:

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.98) 0%,
                    rgba(255,255,255,.93) 35%,
                    rgba(255,255,255,.65) 65%,
                    rgba(255,255,255,.25) 100%
                ),

                url(
                    "construction.avif"
                );

            background-size: cover;

            background-position: center;

            opacity: .95;
        }


        .eng-hero-content {

            position: relative;

            z-index: 2;

            min-height: 650px;

            display: flex;

            align-items: center;

        }


        /* =====================================================
           HERO TEXT
        ====================================================== */

        .eng-eyebrow {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            color: var(--eng-green);

            font-size: 12px;

            font-weight: 800;

            letter-spacing: .8px;

            text-transform: uppercase;

            margin-bottom: 20px;
        }


        .eng-eyebrow::before {

            content: "";

            width: 32px;

            height: 2px;

            background: var(--eng-green);

        }


        .eng-hero-title {

            color: var(--eng-dark);

            font-size: clamp(
                48px,
                6vw,
                76px
            );

            font-weight: 300;

            line-height: .98;

            letter-spacing: -3px;

            margin-bottom: 25px;
        }


        .eng-hero-title strong {

            display: block;

            color: var(--eng-green);

            font-weight: 800;
        }


        .eng-hero-text {

            max-width: 570px;

            color: #394941;

            font-size: 16px;

            line-height: 1.8;

            margin-bottom: 30px;
        }


        /* =====================================================
           HERO BUTTONS
        ====================================================== */

        .eng-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            min-height: 52px;

            padding:
                0 28px;

            border-radius: 7px;

            font-size: 13px;

            font-weight: 800;

            transition: all .25s ease;

        }


        .eng-btn-green {

            color: #fff;

            background: var(--eng-green);

            box-shadow:
                0 12px 25px
                rgba(31,139,76,.22);
        }


        .eng-btn-green:hover {

            color: #fff;

            background: var(--eng-green-dark);

            transform: translateY(-3px);

        }


        .eng-btn-outline {

            color: var(--eng-green);

            background: rgba(255,255,255,.8);

            border:
                1px solid
                var(--eng-green);

        }


        .eng-btn-outline:hover {

            color: #fff;

            background: var(--eng-green);

            transform: translateY(-3px);

        }


        /* =====================================================
           HERO TRUST ITEMS
        ====================================================== */

        .eng-trust-row {

            display: flex;

            flex-wrap: wrap;

            gap: 0;

            margin-top: 35px;

        }


        .eng-trust-item {

            display: flex;

            align-items: center;

            gap: 10px;

            padding-right: 22px;

            margin-right: 22px;

            border-right:
                1px solid
                rgba(20,70,40,.15);

        }


        .eng-trust-item:last-child {

            border-right: none;

        }


        .eng-trust-icon {

            width: 42px;

            height: 42px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #fff;

            color: var(--eng-green);

            box-shadow:
                0 6px 20px
                rgba(0,40,20,.10);

        }


        .eng-trust-item strong {

            display: block;

            color: var(--eng-dark);

            font-size: 11px;

        }


        .eng-trust-item span {

            color: var(--eng-muted);

            font-size: 10px;

        }


        /* =====================================================
           PROJECT SHOWCASE
        ====================================================== */

        .eng-project-circle {

            position: relative;

            width: min(
                580px,
                100%
            );

            aspect-ratio: 1;

            margin-left: auto;

            overflow: hidden;

            border:
                5px solid
                var(--eng-green);

            border-radius: 50%;

            background: #fff;

            box-shadow:
                0 30px 65px
                rgba(0,50,25,.22);

        }


        .eng-project-top {

            position: absolute;

            top: 0;

            right: 0;

            width: 60%;

            height: 48%;

            object-fit: cover;

        }


        .eng-project-bottom {

            position: absolute;

            right: 0;

            bottom: 0;

            width: 60%;

            height: 52%;

            object-fit: cover;

        }


        .eng-project-content {

            position: absolute;

            top: 0;

            left: 0;

            bottom: 0;

            width: 45%;

            z-index: 5;

            padding:
                55px 25px 30px;

            background:
                linear-gradient(
                    150deg,
                    #fff,
                    #f4faf6
                );

        }


        .eng-project-content h2 {

            color: #101815;

            font-size: 27px;

            line-height: .95;

            font-weight: 900;

            text-transform: uppercase;

            margin-bottom: 12px;

        }


        .eng-project-content h2 span {

            color: var(--eng-green);

        }


        .eng-project-line {

            width: 38px;

            height: 3px;

            background: var(--eng-green);

            margin-bottom: 15px;

        }


        .eng-project-content > p {

            color: #48564f;

            font-size: 10px;

            line-height: 1.6;

            margin-bottom: 15px;

        }


        .eng-project-features {

            padding: 16px;

            color: #fff;

            border-radius: 12px;

            background:
                linear-gradient(
                    145deg,
                    #08723b,
                    #063c24
                );

        }


        .eng-project-features h6 {

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 12px;

        }


        .eng-project-feature {

            display: flex;

            align-items: center;

            gap: 8px;

            margin-bottom: 9px;

        }


        .eng-project-feature:last-child {

            margin-bottom: 0;

        }


        .eng-project-feature i {

            width: 26px;

            height: 26px;

            flex-shrink: 0;

            border:
                1px solid
                rgba(255,255,255,.4);

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 9px;

        }


        .eng-project-feature span {

            font-size: 8px;

            line-height: 1.3;

        }


        .eng-project-feature strong {

            display: block;

            font-size: 9px;

        }


        .eng-project-link {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-top: 12px;

            color: #fff;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

        }


        .eng-project-badge {

            position: absolute;

            z-index: 8;

            padding:
                6px 12px;

            border-radius: 30px;

            color: #fff;

            background: var(--eng-green);

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

        }


        .eng-before {

            top: 25px;

            right: 18px;

        }


        .eng-after {

            bottom: 22px;

            right: 18px;

        }


        /* =====================================================
           STATS
        ====================================================== */

        .eng-stats-wrap {

            position: relative;

            z-index: 20;

            margin-top: -35px;

        }


        .eng-stats {

            padding:
                20px 25px;

            border-radius: 15px;

            background:
                linear-gradient(
                    110deg,
                    #063d25,
                    #092d20
                );

            box-shadow:
                0 20px 45px
                rgba(0,45,25,.22);

        }


        .eng-stat {

            min-height: 55px;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 12px;

            border-right:
                1px solid
                rgba(255,255,255,.16);

        }


        .eng-stat:last-child {

            border-right: none;

        }


        .eng-stat i {

            color: #56c986;

            font-size: 22px;

        }


        .eng-stat strong {

            display: block;

            color: #fff;

            font-size: 21px;

            line-height: 1;

        }


        .eng-stat span {

            display: block;

            color: #bad1c4;

            font-size: 9px;

            margin-top: 5px;

        }


        /* =====================================================
           SERVICES
        ====================================================== */

        .eng-services {

            padding:
                115px 0
                95px;

            background: #fff;

        }


        .eng-section-label {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            color: var(--eng-green);

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 15px;

        }


        .eng-section-label::before {

            content: "";

            width: 30px;

            height: 2px;

            background: var(--eng-green);

        }


        .eng-services-heading {

            color: var(--eng-dark);

            font-size: 47px;

            font-weight: 300;

            line-height: 1.05;

            margin-bottom: 20px;

        }


        .eng-services-heading strong {

            color: var(--eng-green);

            font-weight: 800;

        }


        .eng-services-intro {

            color: var(--eng-muted);

            font-size: 14px;

            line-height: 1.75;

            max-width: 380px;

            margin-bottom: 28px;

        }


        /* =====================================================
           SERVICE CARD
        ====================================================== */

        .eng-service-card {

            overflow: hidden;

            height: 100%;

            border:
                1px solid
                var(--eng-border);

            border-radius: 14px;

            background: #fff;

            box-shadow:
                0 10px 30px
                rgba(0,45,25,.07);

            transition:
                transform .3s ease,
                box-shadow .3s ease;

        }


        .eng-service-card:hover {

            transform:
                translateY(-8px);

            box-shadow:
                0 25px 45px
                rgba(0,45,25,.14);

        }


        .eng-service-img {

            width: 100%;

            height: 135px;

            object-fit: cover;

        }


        .eng-service-body {

            padding: 18px;

        }


        .eng-service-icon {

            width: 44px;

            height: 44px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-top: -40px;

            margin-bottom: 13px;

            position: relative;

            border:
                4px solid
                #fff;

            border-radius: 50%;

            color: #fff;

            background:
                var(--eng-green-deep);

        }


        .eng-service-body h3 {

            color: var(--eng-dark);

            font-size: 17px;

            font-weight: 700;

            margin-bottom: 10px;

        }


        .eng-service-body p {

            color: var(--eng-muted);

            font-size: 12px;

            line-height: 1.65;

            margin-bottom: 18px;

        }


        .eng-service-link {

            color: var(--eng-green);

            font-size: 11px;

            font-weight: 800;

        }


        /* =====================================================
           WHY SECTION
        ====================================================== */

        .eng-why {

            padding:
                90px 0;

            background:
                var(--eng-light);

        }


        .eng-why-card {

            height: 100%;

            padding:
                35px 25px;

            border:
                1px solid
                var(--eng-border);

            border-radius: 15px;

            background: #fff;

            text-align: center;

        }


        .eng-why-icon {

            width: 60px;

            height: 60px;

            margin:
                0 auto
                18px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            color: var(--eng-green);

            background:
                var(--eng-green-light);

            font-size: 23px;

        }


        .eng-why-card h3 {

            color: var(--eng-dark);

            font-size: 18px;

            margin-bottom: 10px;

        }


        .eng-why-card p {

            color: var(--eng-muted);

            font-size: 13px;

            line-height: 1.7;

            margin-bottom: 0;

        }


        /* =====================================================
           FLOATING AI BUTTON
        ====================================================== */

        .eng-ai-button {

            position: fixed;

            right: 25px;

            bottom: 22px;

            z-index: 99990;

            width: 58px;

            height: 58px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #fff;

            background: var(--eng-green);

            box-shadow:
                0 10px 30px
                rgba(0,70,35,.28);

            font-size: 22px;

            cursor: pointer;

            transition: .25s ease;

        }


        .eng-ai-button:hover {

            color: #fff;

            background: var(--eng-green-dark);

            transform:
                translateY(-4px)
                scale(1.04);

        }


        .eng-ai-label {

            position: absolute;

            right: 70px;

            white-space: nowrap;

            padding:
                9px 14px;

            color: var(--eng-dark);

            background: #fff;

            border-radius: 20px;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.10);

            font-size: 11px;

            font-weight: 700;

        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 991.98px) {

            .eng-hero-content {

                padding-top: 60px;

                padding-bottom: 60px;

            }


            .eng-hero-title {

                font-size: 56px;

            }


            .eng-project-circle {

                margin:
                    30px auto
                    0;

            }


            .eng-stat {

                border-right: none;

                border-bottom:
                    1px solid
                    rgba(255,255,255,.14);

                padding: 13px 5px;

            }


            .eng-stat:last-child {

                border-bottom: none;

            }


            .eng-services {

                padding-top: 90px;

            }

        }


        @media (max-width: 767.98px) {

            .eng-hero {

                min-height: auto;

            }


            .eng-hero-content {

                min-height: auto;

                padding:
                    50px 15px
                    45px;

            }


            .eng-hero-title {

                font-size: 44px;

                letter-spacing: -2px;

            }


            .eng-hero-text {

                font-size: 14px;

            }


            .eng-trust-row {

                flex-direction: column;

                gap: 15px;

            }


            .eng-trust-item {

                border-right: none;

                margin-right: 0;

                padding-right: 0;

            }


            .eng-project-circle {

                width: 100%;

                max-width: 480px;

            }


            .eng-project-content {

                padding:
                    45px 14px
                    20px;

            }


            .eng-project-content h2 {

                font-size: 19px;

            }


            .eng-project-content > p {

                font-size: 8px;

            }


            .eng-project-features {

                padding: 10px;

            }


            .eng-project-feature {

                margin-bottom: 5px;

            }


            .eng-project-feature i {

                width: 21px;

                height: 21px;

                font-size: 7px;

            }


            .eng-project-feature span {

                font-size: 6.5px;

            }


            .eng-project-feature strong {

                font-size: 7px;

            }


            .eng-before,
            .eng-after {

                font-size: 7px;

                padding:
                    5px 9px;

            }


            .eng-stats-wrap {

                margin-top: 0;

                padding:
                    15px;

            }


            .eng-stat {

                justify-content: flex-start;

            }


            .eng-services {

                padding:
                    75px 15px;

            }


            .eng-services-heading {

                font-size: 38px;

            }


            .eng-ai-label {

                display: none;

            }

        }


        @media (max-width: 420px) {

            .eng-hero-title {

                font-size: 39px;

            }


            .eng-project-content {

                width: 46%;

                padding:
                    38px 10px
                    15px;

            }


            .eng-project-content h2 {

                font-size: 16px;

            }


            .eng-project-content > p {

                display: none;

            }


            .eng-project-features h6 {

                font-size: 7px;

            }


            .eng-project-feature span {

                font-size: 5.5px;

            }


            .eng-project-feature strong {

                font-size: 6px;

            }

        }


        /* Quick fix for header dropdowns */
.site-header,
.header-inner,
.nav-menu,
.nav-item {
    overflow: visible !important;
}

.nav-item {
    position: relative !important;
}

.dropdown-menu {
    z-index: 99999 !important;
    display: block !important;
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
}

.nav-item:hover .dropdown-menu,
.nav-item.active .dropdown-menu {
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto !important;
}



/*more */


/* =====================================================
   PROJECT CIRCLE – Size Steps (Small ↔ Big) + Brick Laying
====================================================== */

/* Circle grows & shrinks in distinct steps and loops */
.eng-project-circle {
    animation: engCircleSizeSteps 6s cubic-bezier(0.22, 1, 0.36, 1) infinite;
    transform-origin: center;
}

@keyframes engCircleSizeSteps {
    /* Start small */
    0%   { transform: scale(0.72); opacity: 0.85; }
    
    /* Step 1 – medium-small */
    12%  { transform: scale(0.84); opacity: 0.92; }
    
    /* Step 2 – medium */
    25%  { transform: scale(0.94); opacity: 1; }
    
    /* Step 3 – almost full */
    38%  { transform: scale(1.04); }
    
    /* Peak – fully big */
    50%  { transform: scale(1.10); }
    
    /* Shrink back – step 1 */
    62%  { transform: scale(1.02); }
    
    /* Shrink – step 2 */
    75%  { transform: scale(0.92); }
    
    /* Shrink – step 3 */
    88%  { transform: scale(0.80); }
    
    /* Back to small */
    100% { transform: scale(0.72); opacity: 0.85; }
}

/* Top image builds in small vertical stages (runs once, then stays) */
.eng-project-top {
    clip-path: inset(0 0 100% 0);
    animation: engTopBrickSteps 1.8s 0.3s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes engTopBrickSteps {
    0%   { clip-path: inset(0 0 100% 0); opacity: 0; }
    30%  { clip-path: inset(0 0 65% 0);  opacity: 0.6; }
    60%  { clip-path: inset(0 0 30% 0);  opacity: 0.85; }
    100% { clip-path: inset(0 0 0 0);    opacity: 1; }
}

/* Bottom image builds in small vertical stages */
.eng-project-bottom {
    clip-path: inset(100% 0 0 0);
    animation: engBottomBrickSteps 1.8s 0.6s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes engBottomBrickSteps {
    0%   { clip-path: inset(100% 0 0 0); opacity: 0; }
    30%  { clip-path: inset(65% 0 0 0);  opacity: 0.6; }
    60%  { clip-path: inset(30% 0 0 0);  opacity: 0.85; }
    100% { clip-path: inset(0 0 0 0);    opacity: 1; }
}

/* Content panel rises once */
.eng-project-content {
    opacity: 0;
    transform: translateX(-25px);
    animation: engContentSteps 1.3s 1.0s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes engContentSteps {
    0%   { opacity: 0; transform: translateX(-25px); }
    40%  { opacity: 0.5; transform: translateX(-10px); }
    100% { opacity: 1; transform: translateX(0); }
}

/* Continuous looping brick lines */
.eng-project-content::before,
.eng-project-content::after {
    content: "";
    position: absolute;
    left: 8%;
    right: 8%;
    height: 2.5px;
    background: linear-gradient(90deg,
        transparent 0%,
        var(--eng-green) 20%,
        var(--eng-green) 80%,
        transparent 100%);
    opacity: 0;
    transform: scaleX(0);
    transform-origin: left center;
    pointer-events: none;
    z-index: 10;
    animation: engBrickLoop 3s ease-in-out infinite;
}

.eng-project-content::before {
    top: 26%;
    animation-delay: 1.6s;
}

.eng-project-content::after {
    top: 58%;
    animation-delay: 2.2s;
}

@keyframes engBrickLoop {
    0%   { transform: scaleX(0); opacity: 0; }
    18%  { transform: scaleX(1); opacity: 0.45; }
    40%  { transform: scaleX(1); opacity: 0.28; }
    55%  { transform: scaleX(0); opacity: 0; }
    100% { transform: scaleX(0); opacity: 0; }
}

/* Badges – appear then soft continuous pulse */
.eng-project-badge {
    opacity: 0;
    transform: scale(0.5);
    animation: engBadgeSteps 0.7s 1.9s cubic-bezier(0.34, 1.4, 0.64, 1) both,
               engBadgePulse 2.6s 2.6s ease-in-out infinite;
}

.eng-after {
    animation-delay: 2.15s, 2.9s;
}

@keyframes engBadgeSteps {
    0%   { opacity: 0; transform: scale(0.5); }
    60%  { opacity: 1; transform: scale(1.12); }
    100% { opacity: 1; transform: scale(1); }
}

@keyframes engBadgePulse {
    0%, 100% { transform: scale(1); }
    50%      { transform: scale(1.07); }
}

/* Hover – freezes the size looping so user can inspect */
.eng-project-circle:hover {
    animation-play-state: paused;
    transform: scale(1.05) translateY(-4px);
    transition: transform 0.35s ease;
    box-shadow: 0 40px 80px rgba(0, 50, 25, 0.28);
}

/* Mobile – slightly faster cycle */
@media (max-width: 767.98px) {
    .eng-project-circle {
        animation-duration: 5s;
    }
    .eng-project-content::before,
    .eng-project-content::after {
        height: 2px;
    }
}


/*more*/

/* =====================================================
   PROJECT CIRCLE – Size Steps + Image Swapping + Bricks
====================================================== */

/* Circle grows & shrinks in clear steps and loops */
.eng-project-circle {
    animation: engCircleSizeSteps 7s cubic-bezier(0.22, 1, 0.36, 1) infinite;
    transform-origin: center;
}

@keyframes engCircleSizeSteps {
    0%   { transform: scale(0.72); opacity: 0.85; }
    12%  { transform: scale(0.84); opacity: 0.92; }
    25%  { transform: scale(0.94); opacity: 1; }
    38%  { transform: scale(1.04); }
    50%  { transform: scale(1.10); }
    62%  { transform: scale(1.02); }
    75%  { transform: scale(0.92); }
    88%  { transform: scale(0.80); }
    100% { transform: scale(0.72); opacity: 0.85; }
}

/* ---------- IMAGE SWAP ---------- */
/* Top image: initial build + continuous swap */
.eng-project-top {
    clip-path: inset(0 0 100% 0);
    animation: 
        engTopBrickSteps 1.8s 0.3s cubic-bezier(0.22, 1, 0.36, 1) both,
        engImageSwapTop 8s 3s ease-in-out infinite;
}

/* Bottom image: initial build + continuous swap */
.eng-project-bottom {
    clip-path: inset(100% 0 0 0);
    animation: 
        engBottomBrickSteps 1.8s 0.6s cubic-bezier(0.22, 1, 0.36, 1) both,
        engImageSwapBottom 8s 3s ease-in-out infinite;
}

/* Initial vertical brick reveal (runs once) */
@keyframes engTopBrickSteps {
    0%   { clip-path: inset(0 0 100% 0); opacity: 0; }
    30%  { clip-path: inset(0 0 65% 0);  opacity: 0.6; }
    60%  { clip-path: inset(0 0 30% 0);  opacity: 0.85; }
    100% { clip-path: inset(0 0 0 0);    opacity: 1; }
}

@keyframes engBottomBrickSteps {
    0%   { clip-path: inset(100% 0 0 0); opacity: 0; }
    30%  { clip-path: inset(65% 0 0 0);  opacity: 0.6; }
    60%  { clip-path: inset(30% 0 0 0);  opacity: 0.85; }
    100% { clip-path: inset(0 0 0 0);    opacity: 1; }
}

/* Smooth swap of the two images every 8 seconds */
@keyframes engImageSwapTop {
    0%, 40% {
        top: 0;
        height: 48%;
        opacity: 1;
        z-index: 2;
    }
    48% {
        top: 0;
        height: 48%;
        opacity: 0.3;
    }
    52%, 90% {
        top: 48%;
        height: 52%;
        opacity: 1;
        z-index: 1;
    }
    98% {
        top: 48%;
        height: 52%;
        opacity: 0.3;
    }
    100% {
        top: 0;
        height: 48%;
        opacity: 1;
        z-index: 2;
    }
}

@keyframes engImageSwapBottom {
    0%, 40% {
        top: 48%;
        height: 52%;
        opacity: 1;
        z-index: 1;
    }
    48% {
        top: 48%;
        height: 52%;
        opacity: 0.3;
    }
    52%, 90% {
        top: 0;
        height: 48%;
        opacity: 1;
        z-index: 2;
    }
    98% {
        top: 0;
        height: 48%;
        opacity: 0.3;
    }
    100% {
        top: 48%;
        height: 52%;
        opacity: 1;
        z-index: 1;
    }
}

/* Content panel rises once */
.eng-project-content {
    opacity: 0;
    transform: translateX(-25px);
    animation: engContentSteps 1.3s 1.0s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes engContentSteps {
    0%   { opacity: 0; transform: translateX(-25px); }
    40%  { opacity: 0.5; transform: translateX(-10px); }
    100% { opacity: 1; transform: translateX(0); }
}

/* Continuous looping brick lines */
.eng-project-content::before,
.eng-project-content::after {
    content: "";
    position: absolute;
    left: 8%;
    right: 8%;
    height: 2.5px;
    background: linear-gradient(90deg,
        transparent 0%,
        var(--eng-green) 20%,
        var(--eng-green) 80%,
        transparent 100%);
    opacity: 0;
    transform: scaleX(0);
    transform-origin: left center;
    pointer-events: none;
    z-index: 10;
    animation: engBrickLoop 3s ease-in-out infinite;
}

.eng-project-content::before {
    top: 26%;
    animation-delay: 1.6s;
}

.eng-project-content::after {
    top: 58%;
    animation-delay: 2.2s;
}

@keyframes engBrickLoop {
    0%   { transform: scaleX(0); opacity: 0; }
    18%  { transform: scaleX(1); opacity: 0.45; }
    40%  { transform: scaleX(1); opacity: 0.28; }
    55%  { transform: scaleX(0); opacity: 0; }
    100% { transform: scaleX(0); opacity: 0; }
}

/* Badges */
.eng-project-badge {
    opacity: 0;
    transform: scale(0.5);
    animation: engBadgeSteps 0.7s 1.9s cubic-bezier(0.34, 1.4, 0.64, 1) both,
               engBadgePulse 2.6s 2.6s ease-in-out infinite;
}

.eng-after {
    animation-delay: 2.15s, 2.9s;
}

@keyframes engBadgeSteps {
    0%   { opacity: 0; transform: scale(0.5); }
    60%  { opacity: 1; transform: scale(1.12); }
    100% { opacity: 1; transform: scale(1); }
}

@keyframes engBadgePulse {
    0%, 100% { transform: scale(1); }
    50%      { transform: scale(1.07); }
}

/* Hover – pauses size + image swapping so user can look */
.eng-project-circle:hover {
    animation-play-state: paused;
}

.eng-project-circle:hover .eng-project-top,
.eng-project-circle:hover .eng-project-bottom {
    animation-play-state: paused;
}

.eng-project-circle:hover {
    transform: scale(1.05) translateY(-4px);
    transition: transform 0.35s ease;
    box-shadow: 0 40px 80px rgba(0, 50, 25, 0.28);
}

/* Mobile */
@media (max-width: 767.98px) {
    .eng-project-circle {
        animation-duration: 5.5s;
    }
    .eng-project-top,
    .eng-project-bottom {
        animation-duration: 1.4s, 7s;
    }
    .eng-project-content::before,
    .eng-project-content::after {
        height: 2px;
    }
}



/* =========================================
   ENGINOVE SERVICES
   ========================================= */

.eng-services {
    position: relative;
    padding: 100px 0;
    background: #ffffff;
    overflow: hidden;
}


/* subtle background detail */

.eng-services::before {
    content: "";
    position: absolute;
    width: 420px;
    height: 420px;
    left: -240px;
    top: -180px;
    border-radius: 50%;
    background: rgba(22, 138, 74, 0.035);
    pointer-events: none;
}


/* =========================================
   INTRO
   ========================================= */

.eng-services-intro-wrap {
    padding-right: 25px;
}

.eng-section-label {
    display: flex;
    align-items: center;
    gap: 10px;

    margin-bottom: 18px;

    color: #168a4a;

    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.eng-section-label span {
    width: 30px;
    height: 2px;
    display: inline-block;
    background: #168a4a;
}


.eng-services-heading {
    margin: 0 0 22px;

    color: #111111;

    font-size: clamp(42px, 4vw, 58px);
    line-height: 0.95;
    font-weight: 300;
    letter-spacing: -2px;
}

.eng-services-heading strong {
    display: block;

    color: #168a4a;

    font-weight: 800;
}


.eng-services-intro {
    max-width: 280px;

    margin-bottom: 30px;

    color: #667085;

    font-size: 14px;
    line-height: 1.8;
}


/* =========================================
   BUTTON
   ========================================= */

.eng-btn-green {
    display: inline-flex;
    align-items: center;
    gap: 12px;

    padding: 15px 22px;

    border-radius: 7px;

    background: #168a4a;
    color: #ffffff;

    font-size: 12px;
    font-weight: 800;
    letter-spacing: .3px;

    text-decoration: none;

    transition:
        background .3s ease,
        transform .3s ease,
        box-shadow .3s ease;
}

.eng-btn-green i {
    font-size: 15px;

    transition: transform .3s ease;
}

.eng-btn-green:hover {
    background: #0b6b38;
    color: #ffffff;

    transform: translateY(-3px);

    box-shadow: 0 12px 25px rgba(22, 138, 74, .20);
}

.eng-btn-green:hover i {
    transform: translate(3px, -3px);
}


/* =========================================
   SERVICE CARD
   ========================================= */

.eng-service-card {
    position: relative;

    display: block;

    height: 100%;

    overflow: hidden;

    border: 1px solid #e4ebe7;
    border-radius: 16px;

    background: #ffffff;

    text-decoration: none;

    box-shadow: 0 8px 30px rgba(15, 23, 42, .045);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}

.eng-service-card:hover {
    transform: translateY(-8px);

    border-color: rgba(22, 138, 74, .35);

    box-shadow: 0 20px 45px rgba(15, 23, 42, .11);
}


/* =========================================
   IMAGE
   ========================================= */

.eng-service-image-wrap {
    position: relative;

    height: 185px;

    overflow: hidden;

    background: #eeeeee;
}

.eng-service-img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .6s cubic-bezier(.2,.7,.2,1);
}

.eng-service-card:hover .eng-service-img {
    transform: scale(1.07);
}


/* image darkening */

.eng-service-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.04) 30%,
            rgba(0,0,0,.48) 100%
        );
}


/* =========================================
   NUMBER
   ========================================= */

.eng-service-number {
    position: absolute;

    top: 14px;
    left: 14px;

    color: #ffffff;

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
}


/* =========================================
   ARROW
   ========================================= */

.eng-service-arrow {
    position: absolute;

    right: 14px;
    top: 14px;

    width: 36px;
    height: 36px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: rgba(255,255,255,.95);

    color: #168a4a;

    font-size: 15px;

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease;
}

.eng-service-card:hover .eng-service-arrow {
    background: #168a4a;
    color: #ffffff;

    transform: rotate(5deg);
}


/* =========================================
   CARD BODY
   ========================================= */

.eng-service-body {
    position: relative;

    padding: 28px 20px 22px;
}


/* =========================================
   ICON
   ========================================= */

.eng-service-icon {
    width: 46px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-top: -51px;
    margin-bottom: 20px;

    position: relative;

    border-radius: 50%;

    background: #064c2b;

    border: 4px solid #ffffff;

    color: #ffffff;

    font-size: 18px;

    box-shadow: 0 6px 18px rgba(0,0,0,.15);

    transition:
        background .3s ease,
        transform .3s ease;
}

.eng-service-card:hover .eng-service-icon {
    background: #168a4a;

    transform: scale(1.08);
}


/* =========================================
   TITLE
   ========================================= */

.eng-service-body h3 {
    margin: 0 0 10px;

    color: #111111;

    font-size: 18px;
    font-weight: 750;
    line-height: 1.2;

    transition: color .3s ease;
}

.eng-service-card:hover h3 {
    color: #168a4a;
}


/* =========================================
   DESCRIPTION
   ========================================= */

.eng-service-body p {
    min-height: 66px;

    margin: 0 0 20px;

    color: #6b7280;

    font-size: 13px;
    line-height: 1.65;
}


/* =========================================
   LINK
   ========================================= */

.eng-service-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    color: #168a4a;

    font-size: 12px;
    font-weight: 800;

    transition: gap .3s ease;
}

.eng-service-link i {
    transition: transform .3s ease;
}

.eng-service-card:hover .eng-service-link {
    gap: 11px;
}

.eng-service-card:hover .eng-service-link i {
    transform: translateX(2px);
}


/* =========================================
   RESPONSIVE
   ========================================= */

@media (max-width: 1199px) {

    .eng-service-image-wrap {
        height: 190px;
    }

}


@media (max-width: 991px) {

    .eng-services {
        padding: 75px 0;
    }

    .eng-services-intro-wrap {
        padding-right: 0;
        margin-bottom: 15px;
    }

    .eng-services-intro {
        max-width: 550px;
    }

}


@media (max-width: 575px) {

    .eng-services {
        padding: 60px 0;
    }

    .eng-services-heading {
        font-size: 44px;
    }

    .eng-service-image-wrap {
        height: 210px;
    }

}
    </style>

</head>


<body>


<!-- =====================================================
     EXISTING ENGINOVE HEADER
====================================================== -->

<?php include "header.php"; ?>


<!-- =====================================================
     HERO SECTION
====================================================== -->

<section class="eng-hero">

    <div class="eng-hero-bg"></div>


    <div class="container eng-hero-content">

        <div class="row align-items-center g-5 w-100">


            <!-- HERO TEXT -->

            <div class="col-lg-6">


                <div class="eng-eyebrow">

                    Building a Stronger Zimbabwe

                </div>


                <h1 class="eng-hero-title">

                    Construction &

                    <strong>
                        Renovation
                    </strong>

                    Experts

                </h1>


                <p class="eng-hero-text">

                    Enginove (Pvt) Ltd – tech-driven construction.
                    From foundations to finishing, we deliver quality,
                    sustainability, and innovation across Zimbabwe.

                </p>


                <div class="d-flex flex-wrap gap-3">

                    <a
                        href="request_quote.php"
                        class="eng-btn eng-btn-green"
                    >

                        GET A QUOTE

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <a
                        href="projects.php"
                        class="eng-btn eng-btn-outline"
                    >

                        OUR PROJECTS

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>


                <!-- TRUST FEATURES -->

                <div class="eng-trust-row">


                    <div class="eng-trust-item">

                        <div class="eng-trust-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div>

                            <strong>
                                Quality Guaranteed
                            </strong>

                            <span>
                                Trusted workmanship
                            </span>

                        </div>

                    </div>


                    <div class="eng-trust-item">

                        <div class="eng-trust-icon">

                            <i class="bi bi-leaf"></i>

                        </div>

                        <div>

                            <strong>
                                Sustainable Solutions
                            </strong>

                            <span>
                                Building for the future
                            </span>

                        </div>

                    </div>


                    <div class="eng-trust-item">

                        <div class="eng-trust-icon">

                            <i class="bi bi-people"></i>

                        </div>

                        <div>

                            <strong>
                                Expert Team
                            </strong>

                            <span>
                                Skilled professionals
                            </span>

                        </div>

                    </div>


                </div>

            </div>


            <!-- PROJECT SHOWCASE -->

            <div class="col-lg-6">


                <div class="eng-project-circle">


                    <img
                        src="material.jpeg"
                        alt="Enginove construction project"
                        class="eng-project-top"
                    >


                    <img
                        src="pavmenents.jpeg"
                        alt="Enginove renovation project"
                        class="eng-project-bottom"
                    >


                    <div class="eng-project-content">


                        <h2>

                            Our

                            <span>
                                Project
                            </span>

                            In Action

                        </h2>


                        <div class="eng-project-line"></div>


                        <p>

                            We combine technology with traditional
                            craftsmanship to build spaces that last.

                        </p>


                        <div class="eng-project-features">


                            <h6>
                                Project Features
                            </h6>


                            <div class="eng-project-feature">

                                <i class="bi bi-person-workspace"></i>

                                <span>

                                    <strong>
                                        Experienced Team
                                    </strong>

                                    Professionals in every phase

                                </span>

                            </div>


                            <div class="eng-project-feature">

                                <i class="bi bi-award"></i>

                                <span>

                                    <strong>
                                        Quality Materials
                                    </strong>

                                    Reliable construction solutions

                                </span>

                            </div>


                            <div class="eng-project-feature">

                                <i class="bi bi-clock"></i>

                                <span>

                                    <strong>
                                        On-Time Delivery
                                    </strong>

                                    We respect project timelines

                                </span>

                            </div>


                            <a
                                href="projects.php"
                                class="eng-project-link"
                            >

                                View Projects

                                <i class="bi bi-arrow-right"></i>

                            </a>


                        </div>

                    </div>


                    <span class="eng-project-badge eng-before">
                        Before
                    </span>


                    <span class="eng-project-badge eng-after">
                        After
                    </span>


                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     COMPANY STATS
====================================================== -->

<section class="eng-stats-wrap">

    <div class="container">

        <div class="eng-stats">

            <div class="row g-0">


                <div class="col-6 col-lg">

                    <div class="eng-stat">

                        <i class="bi bi-hard-hat"></i>

                        <div>

                            <strong>
                                10+
                            </strong>

                            <span>
                                Years Experience
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-6 col-lg">

                    <div class="eng-stat">

                        <i class="bi bi-building"></i>

                        <div>

                            <strong>
                                240+
                            </strong>

                            <span>
                                Projects Delivered
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-6 col-lg">

                    <div class="eng-stat">

                        <i class="bi bi-people"></i>

                        <div>

                            <strong>
                                100+
                            </strong>

                            <span>
                                Skilled Professionals
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-6 col-lg">

                    <div class="eng-stat">

                        <i class="bi bi-geo-alt"></i>

                        <div>

                            <strong>
                                Nationwide
                            </strong>

                            <span>
                                Serving Zimbabwe
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-lg">

                    <div class="eng-stat">

                        <i class="bi bi-shield-check"></i>

                        <div>

                            <strong>
                                100%
                            </strong>

                            <span>
                                Quality Commitment
                            </span>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     SERVICES
====================================================== -->
<section class="eng-services">

    <div class="container">

        <div class="row align-items-center g-4">

            <!-- INTRO -->
            <div class="col-lg-3">

                <div class="eng-services-intro-wrap">

                    <div class="eng-section-label">
                        <span></span>
                        What We Do
                    </div>

                    <h2 class="eng-services-heading">
                        Our
                        <strong>Services</strong>
                    </h2>

                    <p class="eng-services-intro">
                        We provide end-to-end construction, renovation,
                        materials supply and equipment solutions tailored
                        to meet your project requirements.
                    </p>

                    <a href="services.php" class="eng-btn eng-btn-green">
                        VIEW ALL SERVICES
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                </div>

            </div>


            <!-- SERVICE CARDS -->
            <div class="col-lg-9">

                <div class="row g-3">


                    <!-- CONSTRUCTION -->
                    <div class="col-sm-6 col-xl-3">

                        <a href="constructionS.php"
                           class="eng-service-card">

                            <div class="eng-service-image-wrap">

                                <img
                                    src="construction.avif"
                                    alt="Construction services"
                                    class="eng-service-img"
                                >

                                <div class="eng-service-overlay"></div>

                                <div class="eng-service-number">
                                    01
                                </div>

                                <div class="eng-service-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

                            </div>


                            <div class="eng-service-body">

                                <div class="eng-service-icon">
                                    <i class="bi bi-building"></i>
                                </div>

                                <h3>
                                    Construction
                                </h3>

                                <p>
                                    Building durable and modern
                                    structures from the ground up.
                                </p>

                                <span class="eng-service-link">
                                    Learn more
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>

                    </div>



                    <!-- RENOVATIONS -->
                    <div class="col-sm-6 col-xl-3">

                        <a href="renovations.php"
                           class="eng-service-card">

                            <div class="eng-service-image-wrap">

                                <img
                                    src="pavmenents.jpeg"
                                    alt="Renovation services"
                                    class="eng-service-img"
                                >

                                <div class="eng-service-overlay"></div>

                                <div class="eng-service-number">
                                    02
                                </div>

                                <div class="eng-service-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

                            </div>


                            <div class="eng-service-body">

                                <div class="eng-service-icon">
                                    <i class="bi bi-tools"></i>
                                </div>

                                <h3>
                                    Renovations
                                </h3>

                                <p>
                                    Transforming existing spaces
                                    with quality finishes.
                                </p>

                                <span class="eng-service-link">
                                    Learn more
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>

                    </div>



                    <!-- MATERIALS -->
                    <div class="col-sm-6 col-xl-3">

                        <a href="materials.php"
                           class="eng-service-card">

                            <div class="eng-service-image-wrap">

                                <img
                                    src="material.jpeg"
                                    alt="Construction materials"
                                    class="eng-service-img"
                                    onerror="this.src='smalli.jpeg'"
                                >

                                <div class="eng-service-overlay"></div>

                                <div class="eng-service-number">
                                    03
                                </div>

                                <div class="eng-service-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

                            </div>


                            <div class="eng-service-body">

                                <div class="eng-service-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>

                                <h3>
                                    Materials Supply
                                </h3>

                                <p>
                                    Quality construction materials
                                    for demanding projects.
                                </p>

                                <span class="eng-service-link">
                                    Learn more
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>

                    </div>



                    <!-- EQUIPMENT -->
                    <div class="col-sm-6 col-xl-3">

                        <a href="equipment-hire.php"
                           class="eng-service-card">

                            <div class="eng-service-image-wrap">

                                <img
                                    src="equipment.jpeg"
                                    alt="Construction equipment"
                                    class="eng-service-img"
                                    onerror="this.src='images/eqp_hire.png'"
                                >

                                <div class="eng-service-overlay"></div>

                                <div class="eng-service-number">
                                    04
                                </div>

                                <div class="eng-service-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

                            </div>


                            <div class="eng-service-body">

                                <div class="eng-service-icon">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <h3>
                                    Equipment Hire
                                </h3>

                                <p>
                                    Reliable equipment for
                                    construction project requirements.
                                </p>

                                <span class="eng-service-link">
                                    Learn more
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     WHY ENGINOVE
====================================================== -->



<!-- =====================================================
     AI ASSISTANT BUTTON
====================================================== -->

<div
    class="eng-ai-button"
    id="aiAssistantButton"
    title="Chat with Enginove AI Assistant"
>

    <span class="eng-ai-label">
        Chat with us
    </span>

    <i class="bi bi-chat-dots"></i>

</div>



<!-- =====================================================
     FOOTER
====================================================== -->

<?php include "footer.php"; ?>



<!-- =====================================================
     BOOTSTRAP JS
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
></script>



<!-- =====================================================
     EXISTING ENGINOVE PROCESSOR
====================================================== -->

<script src="/Enginove/processor/embed.js"></script>


<script>

(function () {

    const isMainPage =
        window.location.pathname.includes("index.php") ||
        window.location.pathname === "/" ||
        window.location.pathname === "/Enginove/";


    if (isMainPage) {

        setTimeout(function checkCache() {

            fetch(
                "/Enginove/processor/crawler.php?action=status"
            )

            .then(function (response) {

                return response.json();

            })

            .then(function (data) {

                if (
                    !data.cached ||
                    data.expires_in < 120
                ) {

                    fetch(
                        "/Enginove/processor/background_crawler.php",
                        {
                            keepalive: true
                        }
                    );

                }

            })

            .catch(function () {});


            setTimeout(
                checkCache,
                120000
            );

        }, 10000);

    }

})();

</script>



<!-- =====================================================
     AI ASSISTANT BUTTON
====================================================== -->

<script>

document
    .getElementById("aiAssistantButton")
    ?.addEventListener(
        "click",
        function () {

            /*
             * Connect this button to your existing
             * Enginove AI assistant here.
             *
             * Example:
             *
             * window.location.href =
             *     "assistant.php";
             */

            console.log(
                "Enginove AI Assistant opened"
            );

        }
    );

</script>


</body>
</html>
```
