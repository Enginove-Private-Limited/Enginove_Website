<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Construction Materials Supply & Delivery – Clean & Professional
|--------------------------------------------------------------------------
*/
$pageTitle = "Construction Materials Supply & Delivery";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Construction Materials Supply & Delivery</title>
    <meta name="description" content="Enginove provides construction materials sourcing, procurement and delivery solutions for building and civil engineering projects in Zimbabwe.">

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
                    rgba(255,255,255,.92) 38%,
                    rgba(255,255,255,.5) 70%,
                    rgba(255,255,255,.2) 100%),
                url("https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=2200&q=85");
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
            max-width: 760px;
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

        /* Material cards */
        .eng-material-card {
            height: 100%;
            padding: 30px 26px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            transition: all .32s cubic-bezier(.4,0,.2,1);
            position: relative;
            overflow: hidden;
        }
        .eng-material-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--eng-green);
            opacity: 0;
            transition: opacity .3s ease;
        }
        .eng-material-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .eng-material-card:hover::before { opacity: 1; }
        .eng-material-icon {
            width: 54px;
            height: 54px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 14px;
            font-size: 22px;
            transition: all .3s ease;
        }
        .eng-material-card:hover .eng-material-icon {
            background: var(--eng-green-dark);
            transform: scale(1.05);
        }
        .eng-material-card h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .eng-material-card p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* Process steps */
        .eng-process-row {
            position: relative;
        }
        @media (min-width: 992px) {
            .eng-process-row::before {
                content: "";
                position: absolute;
                top: 42px;
                left: 12%;
                right: 12%;
                height: 2px;
                background: linear-gradient(90deg, var(--eng-green-light), var(--eng-green), var(--eng-green-light));
                z-index: 0;
            }
        }
        .eng-process-item {
            height: 100%;
            padding: 28px 22px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 14px;
            text-align: center;
            position: relative;
            z-index: 1;
            transition: all .3s ease;
        }
        .eng-process-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px rgba(0,50,25,.08);
        }
        .eng-process-number {
            display: inline-flex;
            width: 46px;
            height: 46px;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: var(--eng-green);
            background: var(--eng-green-light);
            border-radius: 50%;
            font-size: 14px;
            font-weight: 900;
            letter-spacing: -0.5px;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px var(--eng-green-light);
        }
        .eng-process-item h3 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 16px;
            font-weight: 800;
        }
        .eng-process-item p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13px;
            line-height: 1.65;
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
        }
        @media (max-width: 767.98px) {
            .eng-hero { min-height: auto; }
            .eng-hero-content { padding: 55px 0 50px; }
            .eng-hero-title { font-size: 40px; letter-spacing: -1.8px; }
            .eng-hero-text { font-size: 15px; }
            .eng-section { padding: 60px 0; }
            .eng-cta { padding: 55px 0; }
            .eng-material-card { padding: 26px 22px; }
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
                <div class="eng-eyebrow">Materials Supply & Delivery</div>
                <h1 class="eng-hero-title">The right materials.<br><strong>Delivered.</strong></h1>
                <p class="eng-hero-text">
                    Reliable sourcing, procurement and delivery of construction materials 
                    for building, renovation and civil engineering projects.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        REQUEST A QUOTE <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#materials" class="eng-btn eng-btn-outline">
                        VIEW MATERIALS <i class="bi bi-arrow-right"></i>
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
                <div class="eng-eyebrow">Procurement & Supply</div>
                <h2 class="eng-section-title">Keeping construction <strong>moving.</strong></h2>
                <p class="eng-section-text mb-3">
                    Construction projects depend on having the right materials available when they are needed.
                </p>
                <p class="eng-section-text mb-3">
                    Enginove assists clients and project teams with material sourcing, supplier coordination 
                    and delivery requirements across building, renovation and civil engineering projects.
                </p>
                <p class="eng-section-text">
                    Our approach centres on understanding project requirements and coordinating the materials 
                    needed for successful execution.
                </p>
                <div class="mt-4 pt-1">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        DISCUSS YOUR REQUIREMENTS <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eng-image-wrap">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=85"
                         alt="Construction materials supply"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MATERIAL CATEGORIES -->
<section class="eng-section eng-section-light" id="materials">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Supply Categories</div>
            <h2 class="eng-section-title">Construction materials <strong>we source.</strong></h2>
        </div>

        <div class="row g-4">
            <?php
            $materials = [
                ['icon' => 'bi-bricks',        'title' => 'Building Materials',      'text' => 'General construction materials supporting new builds, extensions and refurbishment projects.'],
                ['icon' => 'bi-house',         'title' => 'Roofing Materials',       'text' => 'Roofing products and associated materials for construction, replacement and maintenance works.'],
                ['icon' => 'bi-tools',         'title' => 'Hardware',                'text' => 'Construction hardware, accessories, fittings and related project requirements.'],
                ['icon' => 'bi-layers',        'title' => 'Aggregates',              'text' => 'Sand, gravel, stone and other aggregates required for building and civil works.'],
                ['icon' => 'bi-grid-3x3-gap',  'title' => 'Tiles & Finishes',        'text' => 'Tiles, flooring products, finishes and related materials for interior and exterior works.'],
                ['icon' => 'bi-lightning',     'title' => 'Electrical Materials',    'text' => 'Project-related electrical materials and accessories sourced according to requirements.'],
                ['icon' => 'bi-droplet',       'title' => 'Plumbing Materials',      'text' => 'Pipes, fittings, fixtures and associated plumbing project requirements.'],
                ['icon' => 'bi-paint-bucket',  'title' => 'Paint & Finishes',        'text' => 'Paints, preparation materials and finishing products for construction and renovation works.'],
                ['icon' => 'bi-box-seam',      'title' => 'Project-Specific Supplies','text' => 'Additional construction materials sourced according to project specifications and requirements.']
            ];
            foreach ($materials as $material): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="eng-material-card">
                        <div class="eng-material-icon">
                            <i class="bi <?= htmlspecialchars($material['icon']) ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($material['title']) ?></h3>
                        <p><?= htmlspecialchars($material['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SUPPLY PROCESS -->
<section class="eng-section">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Our Supply Approach</div>
            <h2 class="eng-section-title">From requirement to <strong>delivery.</strong></h2>
        </div>

        <div class="row g-4 eng-process-row">
            <?php
            $steps = [
                ['number' => '01', 'title' => 'Requirement', 'text' => 'We establish the required materials, quantities and project specifications.'],
                ['number' => '02', 'title' => 'Sourcing',    'text' => 'Suitable suppliers and material options are identified according to project needs.'],
                ['number' => '03', 'title' => 'Coordination','text' => 'Procurement and delivery arrangements are coordinated around project timelines.'],
                ['number' => '04', 'title' => 'Delivery',    'text' => 'Materials are coordinated for delivery to the relevant project location.']
            ];
            foreach ($steps as $step): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="eng-process-item">
                        <span class="eng-process-number"><?= $step['number'] ?></span>
                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                        <p><?= htmlspecialchars($step['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="eng-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Need materials for your <strong>next project?</strong></h2>
                <p>
                    Send Enginove your material requirements and project details and our team 
                    can assist with sourcing and supply coordination.
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