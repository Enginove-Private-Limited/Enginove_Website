<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Equipment & Machinery Hire – Clean & Professional
|--------------------------------------------------------------------------
*/
$pageTitle = "Equipment & Machinery Hire";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Equipment & Machinery Hire</title>
    <meta name="description" content="Enginove provides construction equipment and machinery hire for earthworks, civil engineering, excavation, compaction and construction projects.">

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
            --eng-light: #f6faf8;
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
        .eng-btn-outline {
            color: var(--eng-green);
            background: rgba(255,255,255,.9);
            border: 1.5px solid var(--eng-green);
        }
        .eng-btn-outline:hover {
            color: #fff;
            background: var(--eng-green);
            transform: translateY(-3px);
        }

        /* Eyebrow */
        .eng-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: var(--eng-green);
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
            background: var(--eng-green);
            border-radius: 2px;
        }

        /* Section titles */
        .eng-section-title {
            color: var(--eng-dark);
            font-size: clamp(34px, 4vw, 48px);
            font-weight: 300;
            line-height: 1.1;
            letter-spacing: -1.6px;
            margin-bottom: 16px;
        }
        .eng-section-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .eng-section-text {
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.75;
            max-width: 540px;
        }

        /* Hero */
        .eng-hero {
            position: relative;
            min-height: 540px;
            overflow: hidden;
            background: #f6faf8;
        }
        .eng-hero-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(105deg,
                    rgba(255,255,255,.97) 0%,
                    rgba(255,255,255,.92) 35%,
                    rgba(255,255,255,.55) 65%,
                    rgba(255,255,255,.2) 100%),
                url("images/eqp_hire.png");
            background-size: cover;
            background-position: center;
        }
        .eng-hero-content {
            position: relative;
            z-index: 2;
            padding: 100px 0 90px;
        }
        .eng-hero-title {
            color: var(--eng-dark);
            font-size: clamp(44px, 6vw, 70px);
            font-weight: 300;
            line-height: 1.02;
            letter-spacing: -2.6px;
            margin-bottom: 20px;
            max-width: 720px;
        }
        .eng-hero-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .eng-hero-text {
            max-width: 540px;
            color: #3a4a42;
            font-size: 16.5px;
            line-height: 1.75;
            margin-bottom: 32px;
        }

        /* Image block */
        .eng-image-wrap {
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0,40,20,.12);
        }
        .eng-image-wrap img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: transform .7s ease;
        }
        .eng-image-wrap:hover img {
            transform: scale(1.03);
        }

        /* Equipment cards */
        .eng-equip-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            overflow: hidden;
            transition: all .32s cubic-bezier(.4,0,.2,1);
        }
        .eng-equip-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .eng-equip-image {
            height: 200px;
            overflow: hidden;
            background: #e9efeb;
        }
        .eng-equip-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .6s ease;
        }
        .eng-equip-card:hover .eng-equip-image img {
            transform: scale(1.06);
        }
        .eng-equip-body {
            padding: 24px;
        }
        .eng-equip-body h3 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .eng-equip-body p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* Hire info box */
        .eng-hire-box {
            padding: 40px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 18px;
            box-shadow: 0 14px 36px rgba(0,50,25,.06);
        }
        .eng-hire-box h3 {
            margin: 0 0 12px;
            color: var(--eng-dark);
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.4px;
        }
        .eng-hire-box p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
        }
        .eng-hire-points {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .eng-hire-points li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            color: var(--eng-text);
            font-size: 14px;
            font-weight: 500;
        }
        .eng-hire-points li:last-child { margin-bottom: 0; }
        .eng-hire-points i {
            color: var(--eng-green);
            font-size: 16px;
            flex-shrink: 0;
        }

        /* CTA */
        .eng-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .eng-cta::before {
            content: "";
            position: absolute;
            top: -40%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .eng-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .eng-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .eng-cta p {
            max-width: 520px;
            margin: 0;
            color: #c8dfd1;
            font-size: 15px;
            line-height: 1.7;
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

        /* Spacing */
        .eng-section {
            padding: 90px 0;
        }
        .eng-section-light {
            background: #eef7f1;
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
        @media (max-width: 991.98px) {
            .eng-hero-content { padding: 70px 0 60px; }
            .eng-image-wrap img { height: 340px; }
            .eng-hire-box { padding: 32px; }
        }
        @media (max-width: 767.98px) {
            .eng-hero { min-height: auto; }
            .eng-hero-content { padding: 55px 0 50px; }
            .eng-hero-title { font-size: 40px; letter-spacing: -1.8px; }
            .eng-hero-text { font-size: 15px; }
            .eng-section { padding: 60px 0; }
            .eng-cta { padding: 55px 0; }
            .eng-equip-image { height: 180px; }
            .eng-hire-box { padding: 28px 22px; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- HERO -->
<section class="eng-hero">
    <div class="eng-hero-bg"></div>
    <div class="container eng-hero-content">
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <div class="eng-eyebrow">Equipment & Machinery Hire</div>
                <h1 class="eng-hero-title">The equipment <strong>your project needs.</strong></h1>
                <p class="eng-hero-text">
                    At Enginove we let you hire reliable construction equipment and machinery hire supporting excavation, 
                    earthworks, compaction, material handling and civil engineering activities.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        ENQUIRE ABOUT EQUIPMENT <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="projects.php" class="eng-btn eng-btn-outline">
                        VIEW PROJECTS <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="eng-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="eng-eyebrow">Machinery Hire</div>
                <h2 class="eng-section-title">Keep your project <strong>moving.</strong></h2>
                <p class="eng-section-text mb-3">
                    Construction and civil engineering projects often require specialised machinery 
                    to complete earthworks, excavation, compaction and material handling efficiently.
                </p>
                <p class="eng-section-text">
                    Enginove provides equipment hire solutions for project teams that need reliable 
                    machinery for specific construction activities.
                </p>
                <div class="mt-4 pt-1">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        REQUEST EQUIPMENT <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eng-image-wrap">
                    <img src="images/eqp_hire.png" alt="Construction machinery" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EQUIPMENT GRID -->
<section class="eng-section eng-section-light">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Available Equipment</div>
            <h2 class="eng-section-title">Machinery for <strong>construction.</strong></h2>
        </div>

        <div class="row g-4">
            <?php
            $equipment = [
                [
                    'image' => 'images/excavator.png',
                    'title' => 'Excavators',
                    'text'  => 'Suitable for excavation, earthworks, trenching and material handling activities on site.'
                ],
                [
                    'image' => 'images/TLB_Backhoe.jpeg',
                    'title' => 'TLB / Backhoe',
                    'text'  => 'Versatile equipment supporting excavation, loading and general site works.'
                ],
                [
                    'image' => 'images/tipper.png',
                    'title' => 'Tippers',
                    'text'  => 'Material transportation support for earthworks, construction and civil projects.'
                ],
                [
                    'image' => 'images/roller.png',
                    'title' => 'Roller Compactors',
                    'text'  => 'Compaction equipment supporting roads, platforms and earthworks applications.'
                ],
                [
                    'image' => 'images/loader.png',
                    'title' => 'Loaders',
                    'text'  => 'Material loading and handling solutions for construction and civil sites.'
                ]
            ];
            foreach ($equipment as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="eng-equip-card">
                        <div class="eng-equip-image">
                            <img src="<?= htmlspecialchars($item['image']) ?>"
                                 alt="<?= htmlspecialchars($item['title']) ?>"
                                 loading="lazy">
                        </div>
                        <div class="eng-equip-body">
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                            <p><?= htmlspecialchars($item['text']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- HIRE INFO -->
<section class="eng-section">
    <div class="container">
        <div class="eng-hire-box">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="eng-eyebrow">Equipment Hire</div>
                    <h3>Tell us what your project needs.</h3>
                    <p>
                        Send us the equipment required, project location and expected hire period 
                        so our team can assist with availability and requirements.
                    </p>
                </div>
                <div class="col-lg-5">
                    <ul class="eng-hire-points">
                        <li><i class="bi bi-check-circle-fill"></i> Construction equipment</li>
                        <li><i class="bi bi-check-circle-fill"></i> Earthmoving machinery</li>
                        <li><i class="bi bi-check-circle-fill"></i> Civil engineering support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Project-based hire enquiries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="eng-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Need machinery for your <strong>next project?</strong></h2>
                <p>Contact Enginove with your equipment requirements and project details.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="eng-cta-button">
                    ENQUIRE NOW <i class="bi bi-arrow-right"></i>
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