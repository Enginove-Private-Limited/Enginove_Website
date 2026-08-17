<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Board of Directors – Circular Portraits
|--------------------------------------------------------------------------
*/
$pageTitle = "Board of Directors";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Board of Directors</title>
    <meta name="description" content="Meet the Board of Directors of Enginove (Pvt) Ltd.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --eng-green: #1f8b4c;
            --eng-green-dark: #096b38;
            --eng-green-deep: #063d25;
            --eng-green-light: #eaf7ef;
            --eng-dark: #18231f;
            --eng-text: #293831;
            --eng-muted: #6d7973;
            --eng-border: #dfe9e3;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, sans-serif;
            color: var(--eng-text);
            background: #f7faf8;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; }

        /* Buttons */
        .eng-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 0 28px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.3px;
            transition: all .28s cubic-bezier(.4,0,.2,1);
            border: none;
        }
        .eng-btn-green {
            color: #fff;
            background: var(--eng-green);
            box-shadow: 0 12px 28px rgba(31,139,76,.25);
        }
        .eng-btn-green:hover {
            color: #fff;
            background: var(--eng-green-dark);
            transform: translateY(-3px);
            box-shadow: 0 16px 32px rgba(31,139,76,.3);
        }

        /* Eyebrow */
        .eng-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: #8fd5a7;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }
        .eng-eyebrow::before {
            content: "";
            width: 28px;
            height: 2px;
            background: #8fd5a7;
            border-radius: 2px;
        }
        .eng-eyebrow.dark {
            color: var(--eng-green);
        }
        .eng-eyebrow.dark::before {
            background: var(--eng-green);
        }

        /* Hero */
        .bod-hero {
            position: relative;
            min-height: 460px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #063d25;
        }
        .bod-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(105deg, rgba(6,61,37,.97) 0%, rgba(6,61,37,.88) 100%),
                url("construction.webp");
            background-size: cover;
            background-position: center;
        }
        .bod-hero-content {
            position: relative;
            z-index: 2;
            padding: 90px 0 80px;
        }
        .bod-hero h1 {
            margin: 0 0 18px;
            color: #fff;
            font-size: clamp(42px, 5.5vw, 64px);
            font-weight: 300;
            line-height: 1.05;
            letter-spacing: -2.2px;
            max-width: 780px;
        }
        .bod-hero h1 strong {
            color: #8fd5a7;
            font-weight: 800;
        }
        .bod-hero p {
            max-width: 540px;
            margin: 0;
            color: #c7ddd0;
            font-size: 16px;
            line-height: 1.7;
        }

        /* Intro */
        .bod-intro {
            padding: 70px 0 40px;
            text-align: center;
        }
        .eng-section-title {
            color: var(--eng-dark);
            font-size: clamp(32px, 3.8vw, 42px);
            font-weight: 300;
            line-height: 1.15;
            letter-spacing: -1.4px;
            margin-bottom: 14px;
        }
        .eng-section-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .bod-intro p {
            max-width: 620px;
            margin: 0 auto;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* Board cards – circular portraits */
        .bod-board {
            padding: 20px 0 90px;
            background: #f5f9f7;
        }
        .bod-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,40,20,.06);
            transition: all .35s cubic-bezier(.4,0,.2,1);
            text-align: center;
            padding: 40px 32px 36px;
        }
        .bod-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 50px rgba(0,40,20,.12);
            border-color: transparent;
        }

        /* Circular image */
        .bod-image-wrap {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 24px;
        }
        .bod-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #fff;
            box-shadow: 0 12px 32px rgba(0,40,20,.15);
            background: #e9efeb;
        }
        .bod-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
            transition: transform .5s ease;
        }
        .bod-card:hover .bod-image img {
            transform: scale(1.06);
        }
        .bod-number {
            position: absolute;
            bottom: 6px;
            right: 6px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 50%;
            font-size: 12px;
            font-weight: 900;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,.15);
            z-index: 2;
        }

        .bod-role {
            margin-bottom: 8px;
            color: var(--eng-green);
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }
        .bod-name {
            margin: 0 0 12px;
            color: var(--eng-dark);
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.4px;
        }
        .bod-line {
            width: 36px;
            height: 3px;
            margin: 0 auto 16px;
            background: var(--eng-green);
            border-radius: 2px;
        }
        .bod-bio {
            margin: 0 0 12px;
            color: var(--eng-muted);
            font-size: 14px;
            line-height: 1.7;
            text-align: center;
        }
        .bod-bio:last-of-type {
            margin-bottom: 0;
        }
        .bod-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
            justify-content: center;
        }
        .bod-tag {
            padding: 7px 12px;
            color: var(--eng-green-dark);
            background: var(--eng-green-light);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 800;
        }

        /* Values */
        .bod-values {
            padding: 80px 0;
            background: #fff;
        }
        .bod-value-card {
            height: 100%;
            padding: 28px 24px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 14px;
            transition: all .3s ease;
            text-align: center;
        }
        .bod-value-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0,40,20,.08);
            border-color: transparent;
        }
        .bod-value-icon {
            width: 52px;
            height: 52px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 12px;
            font-size: 20px;
        }
        .bod-value-card h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 16px;
            font-weight: 800;
        }
        .bod-value-card p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* CTA */
        .bod-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .bod-cta::before {
            content: "";
            position: absolute;
            top: -35%;
            right: -8%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .bod-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .bod-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .bod-cta p {
            margin: 0;
            color: #c8dfd1;
            font-size: 15px;
            line-height: 1.7;
            max-width: 520px;
        }
        .eng-cta-button {
            min-height: 52px;
            padding: 0 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: var(--eng-green-deep);
            background: #fff;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.3px;
            transition: all .28s ease;
            border: none;
            box-shadow: 0 10px 28px rgba(0,0,0,.15);
        }
        .eng-cta-button:hover {
            color: var(--eng-green-deep);
            transform: translateY(-3px);
            box-shadow: 0 14px 32px rgba(0,0,0,.2);
        }

        /* Header overflow fix */
        .site-header, .header-inner, .nav-menu, .nav-item { overflow: visible !important; }
        .nav-item { position: relative !important; }
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

        /* Mobile */
        @media (max-width: 767.98px) {
            .bod-hero { min-height: auto; }
            .bod-hero-content { padding: 55px 0 50px; }
            .bod-hero h1 { font-size: 38px; letter-spacing: -1.6px; }
            .bod-intro { padding: 50px 0 30px; }
            .bod-board { padding-bottom: 70px; }
            .bod-card { padding: 32px 24px 28px; }
            .bod-image-wrap,
            .bod-image {
                width: 150px;
                height: 150px;
            }
            .bod-name { font-size: 20px; }
            .bod-values { padding: 60px 0; }
            .bod-cta { padding: 55px 0; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- HERO -->
<section class="bod-hero">
    <div class="container bod-hero-content">
        <div class="row">
            <div class="col-lg-9">
                <div class="eng-eyebrow">Board of Directors</div>
                <h1>Leadership. <strong>Experience.</strong> Excellence.</h1>
                <p>
                    Enginove’s leadership is guided by a commitment to responsible governance, 
                    strategic direction, professional excellence and sustainable growth.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="bod-intro">
    <div class="container">
        <div class="eng-eyebrow dark" style="justify-content:center;">Our Leadership</div>
        <h2 class="eng-section-title">Driven by experience. Guided by <strong>excellence.</strong></h2>
        <p>
            The Board of Directors provides strategic leadership and oversight, helping guide 
            Enginove’s long-term direction while maintaining a strong focus on professionalism, 
            integrity and client value.
        </p>
    </div>
</section>

<!-- BOARD MEMBERS – Circular portraits -->
<section class="bod-board">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Director 1 -->
            <div class="col-md-6 col-lg-5">
                <article class="bod-card">
                    <div class="bod-image-wrap">
                        <div class="bod-image">
                            <!-- Replace with official director photo -->
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=85"
                                 alt="Enginove Director"
                                 loading="lazy">
                        </div>
                        <span class="bod-number">01</span>
                    </div>
                    <div class="bod-role">Director / Managing Director</div>
                    <h2 class="bod-name">Director Name</h2>
                    <div class="bod-line"></div>
                    <p class="bod-bio">
                        A strategic and results-driven business leader responsible for providing 
                        overall direction, strengthening organisational performance and driving 
                        the company’s long-term growth.
                    </p>
                    <p class="bod-bio">
                        His leadership approach is centred on accountability, operational excellence, 
                        client relationships and the continued development of Enginove’s construction 
                        capabilities.
                    </p>
                    <div class="bod-tags">
                        <span class="bod-tag">Strategic Leadership</span>
                        <span class="bod-tag">Construction</span>
                        <span class="bod-tag">Business Development</span>
                        <span class="bod-tag">Governance</span>
                    </div>
                </article>
            </div>

            <!-- Director 2 -->
            <div class="col-md-6 col-lg-5">
                <article class="bod-card">
                    <div class="bod-image-wrap">
                        <div class="bod-image">
                            <!-- Replace with official director photo -->
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=600&q=85"
                                 alt="Enginove Director"
                                 loading="lazy">
                        </div>
                        <span class="bod-number">02</span>
                    </div>
                    <div class="bod-role">Director / Executive Leadership</div>
                    <h2 class="bod-name">Director Name</h2>
                    <div class="bod-line"></div>
                    <p class="bod-bio">
                        An accomplished executive leader supporting organisational development, 
                        governance, people management and the effective implementation of 
                        corporate strategy.
                    </p>
                    <p class="bod-bio">
                        Her leadership reflects a strong commitment to professionalism, 
                        accountability, organisational culture and excellence across the company.
                    </p>
                    <div class="bod-tags">
                        <span class="bod-tag">Executive Leadership</span>
                        <span class="bod-tag">Governance</span>
                        <span class="bod-tag">People & Culture</span>
                        <span class="bod-tag">Corporate Development</span>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- LEADERSHIP PRINCIPLES -->
<section class="bod-values">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow dark" style="justify-content:center;">Leadership Principles</div>
            <h2 class="eng-section-title">What guides our <strong>leadership.</strong></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="bod-value-card">
                    <div class="bod-value-icon"><i class="bi bi-shield-check"></i></div>
                    <h3>Integrity</h3>
                    <p>
                        We believe responsible leadership begins with honesty, 
                        accountability and doing business with integrity.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bod-value-card">
                    <div class="bod-value-icon"><i class="bi bi-bullseye"></i></div>
                    <h3>Strategic Focus</h3>
                    <p>
                        We maintain a clear focus on sustainable growth, strong execution 
                        and long-term organisational development.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bod-value-card">
                    <div class="bod-value-icon"><i class="bi bi-people"></i></div>
                    <h3>People</h3>
                    <p>
                        Strong organisations are built by people, and we value teamwork, 
                        development and professional accountability.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bod-value-card">
                    <div class="bod-value-icon"><i class="bi bi-award"></i></div>
                    <h3>Excellence</h3>
                    <p>
                        We continuously strive for high standards in the way we serve 
                        clients and deliver projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bod-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Building a stronger <strong>future together.</strong></h2>
                <p>
                    Learn more about Enginove, our capabilities, projects and the team 
                    behind our organisation.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="eng-cta-button">
                    CONTACT ENGINOVE <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/Enginove/processor/embed.js"></script>
</body>
</html>