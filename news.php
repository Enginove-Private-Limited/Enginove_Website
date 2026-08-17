<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| NEWS & UPDATES
|--------------------------------------------------------------------------
*/

$pageTitle = "News & Updates";

// Define that header assets are already loaded
$header_assets_loaded = true;


/*
|--------------------------------------------------------------------------
| NEWS DATA
|--------------------------------------------------------------------------
|
| Later you can move this data into:
|
|     data/news.json
|
| and load it dynamically.
|
*/

$news = [

    [
        'id' => 1,

        'title' =>
            'Enginove Continues to Deliver Quality Construction Projects',

        'category' =>
            'Company News',

        'date' =>
            '2026-08-08',

        'author' =>
            'Enginove Communications',

        'image' =>
            'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1400&q=85',

        'excerpt' =>
            'Enginove continues to strengthen its construction and engineering portfolio through quality project delivery and professional service.',

        'content' =>
            'Enginove (Pvt) Ltd continues to expand its construction and civil engineering activities across Zimbabwe. Our teams remain focused on quality workmanship, professional project management, safety and reliable delivery for our clients.'
    ],


    [
        'id' => 2,

        'title' =>
            'Kwekwe Polytechnic Ceiling Renovation Project Progresses',

        'category' =>
            'Projects',

        'date' =>
            '2026-08-06',

        'author' =>
            'Enginove Projects Team',

        'image' =>
            'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1200&q=85',

        'excerpt' =>
            'Works on the Kwekwe Polytechnic ceiling renovation project continue with the Enginove team focused on completing the remaining works.',

        'content' =>
            'The Enginove project team continues to work on the Kwekwe Polytechnic ceiling renovation works. The project involves renovation and replacement works aimed at improving the condition and functionality of the affected facilities.'
    ],


    [
        'id' => 3,

        'title' =>
            'Enginove Expands Its Construction Equipment Capabilities',

        'category' =>
            'Equipment',

        'date' =>
            '2026-08-01',

        'author' =>
            'Enginove Operations',

        'image' =>
            'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=85',

        'excerpt' =>
            'Our equipment and machinery capabilities continue to support construction, earthworks and civil engineering projects.',

        'content' =>
            'Enginove continues to strengthen its equipment capabilities to support construction and civil engineering operations. Equipment solutions are available for earthworks, excavation, material handling and other project requirements.'
    ],


    [
        'id' => 4,

        'title' =>
            'Enginove Continues Civil Engineering and Infrastructure Works',

        'category' =>
            'Civil Engineering',

        'date' =>
            '2026-07-25',

        'author' =>
            'Enginove Engineering',

        'image' =>
            'https://images.unsplash.com/photo-1504306662289-6f6d8e6a6b7c?auto=format&fit=crop&w=1200&q=85',

        'excerpt' =>
            'Our engineering teams continue to support infrastructure, earthworks, drainage and related civil construction activities.',

        'content' =>
            'Our engineering and construction teams continue to deliver civil engineering works across different project environments. Our approach focuses on proper planning, supervision, quality control and practical project execution.'
    ],


    [
        'id' => 5,

        'title' =>
            'Enginove Supports Building Renovation and Refurbishment Projects',

        'category' =>
            'Renovations',

        'date' =>
            '2026-07-18',

        'author' =>
            'Enginove Projects Team',

        'image' =>
            'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=85',

        'excerpt' =>
            'From ceilings and finishes to complete refurbishment works, Enginove continues to provide renovation solutions for existing facilities.',

        'content' =>
            'Renovation and refurbishment remain an important part of Enginove services. Our teams work with clients to improve existing buildings while maintaining functionality, quality and project requirements.'
    ],


    [
        'id' => 6,

        'title' =>
            'Enginove Strengthens Supplier and Project Delivery Network',

        'category' =>
            'Company News',

        'date' =>
            '2026-07-10',

        'author' =>
            'Enginove Administration',

        'image' =>
            'https://images.unsplash.com/photo-1586528116493-da8b7c9e0e44?auto=format&fit=crop&w=1200&q=85',

        'excerpt' =>
            'The company continues to develop relationships with suppliers and service providers to support efficient project delivery.',

        'content' =>
            'Enginove continues to strengthen its supplier network and procurement processes. Strong supplier relationships are important to maintaining reliable material availability, competitive pricing and efficient project execution.'
    ]

];


/*
|--------------------------------------------------------------------------
| SORT NEWS
|--------------------------------------------------------------------------
*/

usort(
    $news,
    function ($a, $b) {

        return strtotime($b['date'])
            - strtotime($a['date']);

    }
);


/*
|--------------------------------------------------------------------------
| CATEGORIES
|--------------------------------------------------------------------------
*/

$categories = array_unique(

    array_map(
        function ($item) {

            return $item['category'];

        },
        $news
    )

);


/*
|--------------------------------------------------------------------------
| FORMAT DATE
|--------------------------------------------------------------------------
*/

function formatNewsDate($date)
{
    return date(
        'd M Y',
        strtotime($date)
    );
}


/*
|--------------------------------------------------------------------------
| FEATURED NEWS
|--------------------------------------------------------------------------
*/

$featuredNews = $news[0] ?? null;


/*
|--------------------------------------------------------------------------
| OTHER NEWS
|--------------------------------------------------------------------------
*/

$otherNews = array_slice(
    $news,
    1
);

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
        Enginove (Pvt) Ltd | News & Updates
    </title>


    <meta
        name="description"
        content="Latest Enginove company news, project updates, construction activities and industry updates."
    >


    <!-- =============================================
         PAGE-SPECIFIC STYLES ONLY
         All header/core styles are in header.php
    ============================================= -->

    <style>

        /* =========================================================
           PAGE-SPECIFIC STYLES FOR NEWS PAGE
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

        .news-hero {

            position:
                relative;

            min-height:
                450px;

            display:
                flex;

            align-items:
                center;

            overflow:
                hidden;

        }


        .news-hero-bg {

            position:
                absolute;

            inset:
                0;

            background-image:

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.98),
                    rgba(255,255,255,.89),
                    rgba(255,255,255,.38)
                ),

                url(
                    "https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=2200&q=85"
                );

            background-size:
                cover;

            background-position:
                center;

        }


        .news-hero-content {

            position:
                relative;

            z-index:
                2;

            padding:
                80px 0;

        }


        .news-eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                10px;

            margin-bottom:
                17px;

            color:
                var(--eng-green);

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                1px;

        }


        .news-eyebrow::before {

            content:
                "";

            width:
                34px;

            height:
                2px;

            background:
                var(--eng-green);

        }


        .news-hero h1 {

            margin:
                0 0 18px;

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

            letter-spacing:
                -3px;

        }


        .news-hero h1 strong {

            color:
                var(--eng-green);

            font-weight:
                800;

        }


        .news-hero p {

            max-width:
                650px;

            margin:
                0;

            color:
                #43534b;

            font-size:
                14px;

            line-height:
                1.8;

        }



        /* =====================================================
           NEWS SECTION
        ====================================================== */

        .news-section {

            padding:
                75px 0 90px;

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

            text-transform:
                uppercase;

            letter-spacing:
                .8px;

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
                38px;

            font-weight:
                300;

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
                10px 0 0;

            color:
                var(--eng-muted);

            font-size:
                11px;

            line-height:
                1.8;

        }



        /* =====================================================
           FEATURED ARTICLE
        ====================================================== */

        .featured-card {

            margin-top:
                35px;

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
                0 15px 40px
                rgba(0,50,25,.07);

        }


        .featured-image {

            position:
                relative;

            height:
                390px;

            overflow:
                hidden;

        }


        .featured-image img {

            width:
                100%;

            height:
                100%;

            object-fit:
                cover;

            transition:
                transform .7s ease;

        }


        .featured-card:hover
        .featured-image img {

            transform:
                scale(1.05);

        }


        .featured-label {

            position:
                absolute;

            top:
                18px;

            left:
                18px;

            padding:
                8px 12px;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                5px;

            font-size:
                8px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .5px;

        }


        .featured-content {

            padding:
                35px;

        }


        .news-meta {

            display:
                flex;

            align-items:
                center;

            flex-wrap:
                wrap;

            gap:
                13px;

            margin-bottom:
                12px;

            color:
                var(--eng-muted);

            font-size:
                9px;

            font-weight:
                600;

        }


        .news-meta span {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                5px;

        }


        .news-meta i {

            color:
                var(--eng-green);

        }


        .featured-content h2 {

            margin:
                0 0 13px;

            color:
                var(--eng-dark);

            font-size:
                29px;

            font-weight:
                800;

            line-height:
                1.25;

        }


        .featured-content p {

            margin:
                0 0 22px;

            color:
                var(--eng-muted);

            font-size:
                11px;

            line-height:
                1.8;

        }


        .read-more {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                11px 16px;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                7px;

            border:
                none;

            font-size:
                9px;

            font-weight:
                800;

            cursor:
                pointer;

            transition:
                .25s ease;

        }


        .read-more:hover {

            color:
                #fff;

            background:
                var(--eng-green-dark);

            transform:
                translateY(-2px);

        }



        /* =====================================================
           NEWS FILTER BAR
        ====================================================== */

        .news-toolbar {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                20px;

            margin:
                65px 0 30px;

            padding:
                17px;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                13px;

        }


        .category-buttons {

            display:
                flex;

            align-items:
                center;

            flex-wrap:
                wrap;

            gap:
                8px;

        }


        .category-btn {

            padding:
                9px 13px;

            color:
                var(--eng-muted);

            background:
                #f5f8f6;

            border:
                1px solid
                transparent;

            border-radius:
                7px;

            font-size:
                9px;

            font-weight:
                800;

            cursor:
                pointer;

            transition:
                .2s ease;

        }


        .category-btn:hover {

            color:
                var(--eng-green);

            background:
                var(--eng-green-light);

        }


        .category-btn.active {

            color:
                #fff;

            background:
                var(--eng-green);

        }


        .news-search {

            position:
                relative;

            width:
                240px;

        }


        .news-search i {

            position:
                absolute;

            left:
                12px;

            top:
                50%;

            transform:
                translateY(-50%);

            color:
                var(--eng-green);

            font-size:
                12px;

        }


        .news-search input {

            width:
                100%;

            height:
                38px;

            padding:
                0 12px 0 34px;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                7px;

            outline:
                none;

            font-family:
                inherit;

            font-size:
                10px;

        }


        .news-search input:focus {

            border-color:
                var(--eng-green);

            box-shadow:
                0 0 0 3px
                rgba(31,139,76,.08);

        }



        /* =====================================================
           NEWS CARD
        ====================================================== */

        .news-card {

            height:
                100%;

            overflow:
                hidden;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                14px;

            box-shadow:
                0 8px 25px
                rgba(0,50,25,.045);

            transition:
                .3s ease;

        }


        .news-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 18px 40px
                rgba(0,50,25,.10);

        }


        .news-card-image {

            position:
                relative;

            height:
                215px;

            overflow:
                hidden;

        }


        .news-card-image img {

            width:
                100%;

            height:
                100%;

            object-fit:
                cover;

            transition:
                transform .6s ease;

        }


        .news-card:hover
        .news-card-image img {

            transform:
                scale(1.07);

        }


        .news-category {

            position:
                absolute;

            left:
                14px;

            top:
                14px;

            padding:
                6px 9px;

            color:
                #fff;

            background:
                var(--eng-green);

            border-radius:
                5px;

            font-size:
                7px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .4px;

        }


        .news-card-content {

            padding:
                21px;

        }


        .news-card-content h3 {

            margin:
                0 0 9px;

            color:
                var(--eng-dark);

            font-size:
                17px;

            font-weight:
                800;

            line-height:
                1.35;

        }


        .news-card-content p {

            min-height:
                52px;

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                10px;

            line-height:
                1.7;

        }


        .news-card-footer {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                10px;

            margin-top:
                18px;

            padding-top:
                13px;

            border-top:
                1px solid
                #edf2ef;

        }


        .news-date {

            color:
                #8a968f;

            font-size:
                8px;

            font-weight:
                700;

        }


        .news-date i {

            margin-right:
                4px;

            color:
                var(--eng-green);

        }


        .card-read-more {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                5px;

            padding:
                7px 10px;

            color:
                var(--eng-green);

            background:
                var(--eng-green-light);

            border:
                none;

            border-radius:
                5px;

            font-size:
                8px;

            font-weight:
                800;

            cursor:
                pointer;

        }


        .card-read-more:hover {

            color:
                #fff;

            background:
                var(--eng-green);

        }



        /* =====================================================
           EMPTY SEARCH
        ====================================================== */

        .no-results {

            display:
                none;

            padding:
                60px 20px;

            text-align:
                center;

            background:
                #fff;

            border:
                1px solid
                var(--eng-border);

            border-radius:
                14px;

        }


        .no-results i {

            display:
                block;

            margin-bottom:
                12px;

            color:
                var(--eng-green);

            font-size:
                35px;

        }


        .no-results h3 {

            color:
                var(--eng-dark);

            font-size:
                20px;

            font-weight:
                800;

        }


        .no-results p {

            margin:
                0;

            color:
                var(--eng-muted);

            font-size:
                10px;

        }



        /* =====================================================
           NEWSLETTER
        ====================================================== */

        .newsletter-section {

            padding:
                70px 0;

            background:
                #eef7f1;

        }


        .newsletter-box {

            padding:
                45px;

            background:
                linear-gradient(
                    120deg,
                    #063d25,
                    #0b5d34
                );

            border-radius:
                17px;

            box-shadow:
                0 20px 45px
                rgba(0,50,25,.12);

        }


        .newsletter-box h2 {

            margin:
                0 0 10px;

            color:
                #fff;

            font-size:
                31px;

            font-weight:
                300;

        }


        .newsletter-box h2 strong {

            color:
                #a8e1bb;

            font-weight:
                800;

        }


        .newsletter-box p {

            max-width:
                580px;

            margin:
                0;

            color:
                #c8dfd1;

            font-size:
                10px;

            line-height:
                1.8;

        }


        .newsletter-form {

            display:
                flex;

            gap:
                8px;

        }


        .newsletter-form input {

            flex:
                1;

            min-width:
                0;

            height:
                48px;

            padding:
                0 14px;

            border:
                none;

            outline:
                none;

            border-radius:
                7px;

            font-family:
                inherit;

            font-size:
                10px;

        }


        .newsletter-form button {

            height:
                48px;

            padding:
                0 17px;

            color:
                var(--eng-green-deep);

            background:
                #fff;

            border:
                none;

            border-radius:
                7px;

            font-size:
                9px;

            font-weight:
                800;

            cursor:
                pointer;

            white-space:
                nowrap;

        }


        .newsletter-form button:hover {

            background:
                #e9f5ed;

        }



        /* =====================================================
           MODAL
        ====================================================== */

        .modal-content {

            overflow:
                hidden;

            border:
                none;

            border-radius:
                16px;

        }


        .modal-news-image {

            width:
                100%;

            height:
                350px;

            object-fit:
                cover;

        }


        .modal-body {

            padding:
                30px;

        }


        .modal-category {

            color:
                var(--eng-green);

            font-size:
                8px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .5px;

        }


        .modal-title {

            margin:
                8px 0 12px;

            color:
                var(--eng-dark);

            font-size:
                27px;

            font-weight:
                800;

        }


        .modal-description {

            color:
                var(--eng-muted);

            font-size:
                11px;

            line-height:
                1.8;

        }



        /* =====================================================
           AI ASSISTANT
        ====================================================== */

        .news-ai-button {

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


        .news-ai-button:hover {

            color:
                #fff;

            background:
                var(--eng-green-dark);

            transform:
                translateY(-4px)
                scale(1.04);

        }


        .news-ai-label {

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

            .news-toolbar {

                align-items:
                    flex-start;

                flex-direction:
                    column;

            }


            .news-search {

                width:
                    100%;

            }


            .featured-image {

                height:
                    320px;

            }

        }



        @media (max-width: 767.98px) {

            .news-hero {

                min-height:
                    430px;

            }


            .news-hero-bg {

                background-image:

                    linear-gradient(
                        90deg,
                        rgba(255,255,255,.96),
                        rgba(255,255,255,.83)
                    ),

                    url(
                        "https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1400&q=85"
                    );

            }


            .news-hero-content {

                padding:
                    55px 15px;

            }


            .news-hero h1 {

                font-size:
                    46px;

                letter-spacing:
                    -2px;

            }


            .news-section {

                padding:
                    60px 15px 70px;

            }


            .section-title {

                font-size:
                    30px;

            }


            .featured-image {

                height:
                    240px;

            }


            .featured-content {

                padding:
                    24px;

            }


            .featured-content h2 {

                font-size:
                    23px;

            }


            .news-toolbar {

                margin-top:
                    50px;

            }


            .category-buttons {

                width:
                    100%;

            }


            .category-btn {

                flex:
                    1;

                min-width:
                    80px;

            }


            .newsletter-section {

                padding:
                    55px 15px;

            }


            .newsletter-box {

                padding:
                    30px 22px;

            }


            .newsletter-form {

                flex-direction:
                    column;

                margin-top:
                    20px;

            }


            .newsletter-form button {

                width:
                    100%;

            }


            .modal-news-image {

                height:
                    230px;

            }


            .modal-body {

                padding:
                    22px;

            }


            .news-ai-label {

                display:
                    none;

            }


            .news-ai-button {

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
     HEADER
====================================================== -->

<?php include "header.php"; ?>



<!-- =====================================================
     HERO
====================================================== -->

<section class="news-hero">


    <div class="news-hero-bg"></div>


    <div class="container news-hero-content">


        <div class="row">


            <div class="col-lg-8">


                <div class="news-eyebrow">

                    Enginove Updates

                </div>


                <h1>

                    News &

                    <strong>
                        Updates
                    </strong>

                </h1>


                <p>

                    Stay informed about Enginove's latest
                    projects, company developments,
                    construction activities and industry
                    updates.

                </p>


            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     NEWS
====================================================== -->

<section class="news-section">


    <div class="container">


        <!-- SECTION HEADING -->

        <div class="section-eyebrow">

            Latest From Enginove

        </div>


        <h2 class="section-title">

            What's

            <strong>
                happening
            </strong>

        </h2>


        <p class="section-description">

            Explore the latest news, project milestones,
            company announcements and updates from
            Enginove.

        </p>



        <!-- =================================================
             FEATURED ARTICLE
        ================================================== -->

        <?php if ($featuredNews): ?>


            <div class="featured-card">


                <div class="row g-0 align-items-stretch">


                    <div class="col-lg-6">


                        <div class="featured-image">


                            <img
                                src="<?= htmlspecialchars($featuredNews['image']) ?>"
                                alt="<?= htmlspecialchars($featuredNews['title']) ?>"
                            >


                            <span class="featured-label">

                                Featured

                            </span>


                        </div>


                    </div>



                    <div class="col-lg-6">


                        <div class="featured-content">


                            <div class="news-meta">


                                <span>

                                    <i class="bi bi-calendar3"></i>

                                    <?= formatNewsDate($featuredNews['date']) ?>

                                </span>


                                <span>

                                    <i class="bi bi-tag"></i>

                                    <?= htmlspecialchars($featuredNews['category']) ?>

                                </span>


                                <span>

                                    <i class="bi bi-person"></i>

                                    <?= htmlspecialchars($featuredNews['author']) ?>

                                </span>


                            </div>


                            <h2>

                                <?= htmlspecialchars($featuredNews['title']) ?>

                            </h2>


                            <p>

                                <?= htmlspecialchars($featuredNews['excerpt']) ?>

                            </p>


                            <button
                                type="button"
                                class="read-more"
                                data-bs-toggle="modal"
                                data-bs-target="#newsModal"
                                data-news-id="<?= $featuredNews['id'] ?>"
                            >

                                READ ARTICLE

                                <i class="bi bi-arrow-right"></i>

                            </button>


                        </div>


                    </div>


                </div>


            </div>


        <?php endif; ?>



        <!-- =================================================
             FILTER TOOLBAR
        ================================================== -->

        <div class="news-toolbar">


            <div class="category-buttons">


                <button
                    type="button"
                    class="category-btn active"
                    data-category="all"
                >

                    All News

                </button>


                <?php foreach ($categories as $category): ?>


                    <button
                        type="button"
                        class="category-btn"
                        data-category="<?= htmlspecialchars($category) ?>"
                    >

                        <?= htmlspecialchars($category) ?>

                    </button>


                <?php endforeach; ?>


            </div>



            <div class="news-search">


                <i class="bi bi-search"></i>


                <input
                    type="search"
                    id="newsSearch"
                    placeholder="Search news..."
                    aria-label="Search news"
                >


            </div>


        </div>



        <!-- =================================================
             NEWS GRID
        ================================================== -->

        <div
            class="row g-4"
            id="newsGrid"
        >


            <?php foreach ($otherNews as $item): ?>


                <div
                    class="col-md-6 col-lg-4 news-item"
                    data-category="<?= htmlspecialchars($item['category']) ?>"
                    data-title="<?= htmlspecialchars(strtolower($item['title'])) ?>"
                    data-excerpt="<?= htmlspecialchars(strtolower($item['excerpt'])) ?>"
                >


                    <article class="news-card">


                        <div class="news-card-image">


                            <img
                                src="<?= htmlspecialchars($item['image']) ?>"
                                alt="<?= htmlspecialchars($item['title']) ?>"
                                loading="lazy"
                            >


                            <span class="news-category">

                                <?= htmlspecialchars($item['category']) ?>

                            </span>


                        </div>



                        <div class="news-card-content">


                            <div class="news-meta">


                                <span>

                                    <i class="bi bi-calendar3"></i>

                                    <?= formatNewsDate($item['date']) ?>

                                </span>


                            </div>


                            <h3>

                                <?= htmlspecialchars($item['title']) ?>

                            </h3>


                            <p>

                                <?= htmlspecialchars($item['excerpt']) ?>

                            </p>



                            <div class="news-card-footer">


                                <span class="news-date">

                                    <?= htmlspecialchars($item['author']) ?>

                                </span>


                                <button
                                    type="button"
                                    class="card-read-more"
                                    data-bs-toggle="modal"
                                    data-bs-target="#newsModal"
                                    data-news-id="<?= $item['id'] ?>"
                                >

                                    READ

                                    <i class="bi bi-arrow-right"></i>

                                </button>


                            </div>


                        </div>


                    </article>


                </div>


            <?php endforeach; ?>


        </div>



        <!-- =================================================
             NO RESULTS
        ================================================== -->

        <div
            class="no-results"
            id="noResults"
        >


            <i class="bi bi-search"></i>


            <h3>
                No news found
            </h3>


            <p>
                Try another search term or category.
            </p>


        </div>


    </div>

</section>



<!-- =====================================================
     NEWSLETTER
====================================================== -->

<section class="newsletter-section">


    <div class="container">


        <div class="newsletter-box">


            <div class="row align-items-center g-4">


                <div class="col-lg-7">


                    <h2>

                        Stay in the

                        <strong>
                            loop.
                        </strong>

                    </h2>


                    <p>

                        Subscribe to Enginove News & Updates
                        and receive company news, project
                        updates and important announcements
                        directly in your inbox.

                    </p>


                </div>



                <div class="col-lg-5">


                    <form
                        class="newsletter-form"
                        id="newsletterForm"
                        method="POST"
                        action="subscribe.php"
                    >


                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your email address"
                            required
                            autocomplete="email"
                        >


                        <button
                            type="submit"
                        >

                            SUBSCRIBE

                        </button>


                    </form>


                </div>


            </div>


        </div>


    </div>

</section>



<!-- =====================================================
     NEWS ARTICLE MODAL
====================================================== -->

<div
    class="modal fade"
    id="newsModal"
    tabindex="-1"
    aria-hidden="true"
>


    <div
        class="modal-dialog modal-lg modal-dialog-centered"
    >


        <div class="modal-content">


            <img
                id="modalNewsImage"
                class="modal-news-image"
                src=""
                alt=""
            >


            <div class="modal-body">


                <div
                    id="modalNewsCategory"
                    class="modal-category"
                ></div>


                <div
                    id="modalNewsMeta"
                    class="news-meta mt-2"
                ></div>


                <h2
                    id="modalNewsTitle"
                    class="modal-title"
                ></h2>


                <p
                    id="modalNewsDescription"
                    class="modal-description"
                ></p>


            </div>


        </div>


    </div>

</div>



<!-- =====================================================
     AI ASSISTANT
====================================================== -->

<div
    class="news-ai-button"
    id="newsAiButton"
    title="Chat with Enginove AI Assistant"
>


    <span class="news-ai-label">

        Chat with us

    </span>


    <i class="bi bi-chat-dots"></i>


</div>



<!-- =====================================================
     FOOTER
====================================================== -->

<?php include "footer.php"; ?>



<!-- =====================================================
     BOOTSTRAP JS - Only if header.php doesn't include it
     Remove this if header.php already includes Bootstrap JS
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
></script>



<!-- =====================================================
     NEWS JAVASCRIPT
====================================================== -->

<script>

const newsData =
    <?= json_encode(
        array_values($news),
        JSON_HEX_TAG |
        JSON_HEX_APOS |
        JSON_HEX_QUOT |
        JSON_HEX_AMP
    ) ?>;



/*
|--------------------------------------------------------------------------
| CATEGORY FILTER
|--------------------------------------------------------------------------
*/

const categoryButtons =
    document.querySelectorAll(
        ".category-btn"
    );


const newsItems =
    document.querySelectorAll(
        ".news-item"
    );


const searchInput =
    document.getElementById(
        "newsSearch"
    );


const noResults =
    document.getElementById(
        "noResults"
    );


let activeCategory =
    "all";



function filterNews() {

    const search =
        searchInput.value
            .toLowerCase()
            .trim();


    let visible =
        0;


    newsItems.forEach(
        function(item) {


            const category =
                item.dataset.category
                    .toLowerCase();


            const title =
                item.dataset.title;


            const excerpt =
                item.dataset.excerpt;


            const categoryMatch =
                activeCategory === "all" ||
                category ===
                activeCategory.toLowerCase();


            const searchMatch =
                !search ||
                title.includes(search) ||
                excerpt.includes(search);


            if (
                categoryMatch &&
                searchMatch
            ) {

                item.style.display =
                    "";

                visible++;

            }

            else {

                item.style.display =
                    "none";

            }

        }
    );


    noResults.style.display =
        visible === 0
            ? "block"
            : "none";

}



categoryButtons.forEach(
    function(button) {

        button.addEventListener(
            "click",
            function() {


                categoryButtons.forEach(
                    function(btn) {

                        btn.classList.remove(
                            "active"
                        );

                    }
                );


                this.classList.add(
                    "active"
                );


                activeCategory =
                    this.dataset.category;


                filterNews();

            }
        );

    }
);



searchInput?.addEventListener(
    "input",
    filterNews
);



/*
|--------------------------------------------------------------------------
| NEWS MODAL
|--------------------------------------------------------------------------
*/

const newsModal =
    document.getElementById(
        "newsModal"
    );


newsModal?.addEventListener(
    "show.bs.modal",
    function(event) {


        const button =
            event.relatedTarget;


        if (!button)
            return;


        const id =
            parseInt(
                button.dataset.newsId
            );


        const article =
            newsData.find(
                item =>
                    parseInt(item.id) === id
            );


        if (!article)
            return;


        document.getElementById(
            "modalNewsImage"
        ).src =
            article.image;


        document.getElementById(
            "modalNewsImage"
        ).alt =
            article.title;


        document.getElementById(
            "modalNewsCategory"
        ).textContent =
            article.category;


        document.getElementById(
            "modalNewsTitle"
        ).textContent =
            article.title;


        document.getElementById(
            "modalNewsDescription"
        ).textContent =
            article.content;


        document.getElementById(
            "modalNewsMeta"
        ).innerHTML = `

            <span>

                <i class="bi bi-calendar3"></i>

                ${formatDate(article.date)}

            </span>

            <span>

                <i class="bi bi-person"></i>

                ${escapeHtml(article.author)}

            </span>

        `;

    }
);



/*
|--------------------------------------------------------------------------
| DATE FORMATTER
|--------------------------------------------------------------------------
*/

function formatDate(date) {

    const d =
        new Date(date);


    return d.toLocaleDateString(
        "en-GB",
        {
            day: "2-digit",
            month: "short",
            year: "numeric"
        }
    );

}



/*
|--------------------------------------------------------------------------
| SIMPLE HTML ESCAPE
|--------------------------------------------------------------------------
*/

function escapeHtml(value) {

    return String(value)
        .replace(
            /&/g,
            "&amp;"
        )
        .replace(
            /</g,
            "&lt;"
        )
        .replace(
            />/g,
            "&gt;"
        )
        .replace(
            /"/g,
            "&quot;"
        )
        .replace(
            /'/g,
            "&#039;"
        );

}



/*
|--------------------------------------------------------------------------
| AI ASSISTANT
|--------------------------------------------------------------------------
*/

document
    .getElementById("newsAiButton")
    ?.addEventListener(
        "click",
        function() {

            /*
             * Connect this button to your
             * existing Enginove AI assistant.
             */

            console.log(
                "Enginove AI Assistant opened"
            );

        }
    );

</script>


</body>

</html>