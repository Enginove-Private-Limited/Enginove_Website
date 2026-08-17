<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Our Services – Overview
|--------------------------------------------------------------------------
*/
$pageTitle = "Our Services";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Our Services</title>
    <meta name="description" content="Enginove provides construction, renovations, materials supply, equipment hire, flag inscription, upholstery, wood benches and more.">

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
        .eng-btn-outline {
            color: var(--eng-green);
            background: #fff;
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
        .eng-eyebrow.light {
            color: #8fd5a7;
        }
        .eng-eyebrow.light::before {
            background: #8fd5a7;
        }

        /* Hero */
        .svc-hero {
            position: relative;
            min-height: 420px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #063d25;
        }
        .svc-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(105deg, rgba(6,61,37,.96) 0%, rgba(6,61,37,.88) 100%),
                url("construction.webp");
            background-size: cover;
            background-position: center;
        }
        .svc-hero-content {
            position: relative;
            z-index: 2;
            padding: 90px 0 80px;
        }
        .svc-hero h1 {
            margin: 0 0 18px;
            color: #fff;
            font-size: clamp(42px, 5.5vw, 62px);
            font-weight: 300;
            line-height: 1.05;
            letter-spacing: -2.2px;
        }
        .svc-hero h1 strong {
            color: #8fd5a7;
            font-weight: 800;
        }
        .svc-hero p {
            max-width: 560px;
            margin: 0 0 28px;
            color: #c7ddd0;
            font-size: 16px;
            line-height: 1.7;
        }

        /* Section */
        .svc-section {
            padding: 80px 0 90px;
        }
        .svc-section-title {
            margin: 0 0 14px;
            color: var(--eng-dark);
            font-size: clamp(32px, 3.8vw, 42px);
            font-weight: 300;
            letter-spacing: -1.4px;
        }
        .svc-section-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .svc-section-text {
            max-width: 580px;
            margin: 0 auto 40px;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
            text-align: center;
        }

        /* Service cards */
        .svc-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            padding: 32px 28px;
            transition: all .32s cubic-bezier(.4,0,.2,1);
            display: flex;
            flex-direction: column;
        }
        .svc-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,40,20,.1);
            border-color: transparent;
        }
        .svc-card-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 18px;
        }
        .svc-icon {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 14px;
            font-size: 22px;
            transition: all .3s ease;
        }
        .svc-card:hover .svc-icon {
            background: var(--eng-green-dark);
            transform: scale(1.05);
        }
        .svc-number {
            color: var(--eng-green-light);
            font-size: 28px;
            font-weight: 900;
            letter-spacing: -1px;
            line-height: 1;
        }
        .svc-card h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .svc-card p {
            margin: 0 0 20px;
            color: var(--eng-muted);
            font-size: 14px;
            line-height: 1.7;
            flex-grow: 1;
        }
        .svc-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--eng-green);
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.2px;
            transition: gap .25s ease, color .25s ease;
        }
        .svc-card:hover .svc-link {
            color: var(--eng-green-dark);
            gap: 12px;
        }

        /* CTA */
        .svc-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .svc-cta::before {
            content: "";
            position: absolute;
            top: -35%;
            right: -8%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .svc-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .svc-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .svc-cta p {
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

        /* Header fix */
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
            .svc-hero { min-height: auto; }
            .svc-hero-content { padding: 55px 0 50px; }
            .svc-hero h1 { font-size: 38px; letter-spacing: -1.6px; }
            .svc-section { padding: 60px 0 70px; }
            .svc-card { padding: 26px 22px; }
            .svc-cta { padding: 55px 0; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- HERO -->
<section class="svc-hero">
    <div class="container svc-hero-content">
        <div class="row">
            <div class="col-lg-8">
                <div class="eng-eyebrow light">What We Do</div>
                <h1>Our <strong>Services</strong></h1>
                <p>
                    We provide end-to-end construction, renovation, materials supply and equipment 
                    solutions tailored to meet your project requirements.
                </p>
                <a href="#services" class="eng-btn eng-btn-green">
                    VIEW ALL SERVICES <i class="bi bi-arrow-down"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SUMMARY -->
<section class="svc-section" id="services">
    <div class="container">
        <div class="text-center mb-2">
            <div class="eng-eyebrow" style="justify-content:center;">Full Range</div>
            <h2 class="svc-section-title">Everything under <strong>one roof.</strong></h2>
            <p class="svc-section-text">
                From ground-up construction to specialised finishing and supply, 
                Enginove covers the key services that keep projects moving.
            </p>
        </div>

        <div class="row g-4">
            <?php
            $services = [
                [
                    'number' => '01',
                    'icon'   => 'bi-building',
                    'title'  => 'Construction',
                    'text'   => 'Building durable and modern structures from the ground up — commercial, institutional and residential.',
                    'link'   => 'constructions.php'
                ],
                [
                    'number' => '02',
                    'icon'   => 'bi-house-gear',
                    'title'  => 'Renovations',
                    'text'   => 'Transforming existing spaces with quality finishes, upgrades and refurbishment works.',
                    'link'   => 'renovations.php'
                ],
                [
                    'number' => '03',
                    'icon'   => 'bi-boxes',
                    'title'  => 'Materials Supply',
                    'text'   => 'Quality construction materials sourcing, procurement and delivery for demanding projects.',
                    'link'   => 'materials.php'
                ],
                [
                    'number' => '04',
                    'icon'   => 'bi-truck',
                    'title'  => 'Equipment Hire',
                    'text'   => 'Reliable construction equipment and machinery hire for earthworks, civil works and site operations.',
                    'link'   => 'equipment_hier.php'
                ],
                [
                    'number' => '05',
                    'icon'   => 'bi-flag',
                    'title'  => 'Flag Inscription & Branding',
                    'text'   => 'Customised flag inscription and visual branding solutions for organisations, events and facilities.',
                    'link'   => 'flag_inscription.php'
                ],
                [
                    'number' => '06',
                    'icon'   => 'bi-sofa',
                    'title'  => 'Upholstery',
                    'text'   => 'Professional upholstery services for furniture, seating and interior fit-out requirements.',
                    'link'   => 'upholstry.php'
                ],
                [
                    'number' => '07',
                    'icon'   => 'bi-tree',
                    'title'  => 'Wood Benches',
                    'text'   => 'Quality timber benches and outdoor seating solutions for public, institutional and private spaces.',
                    'link'   => 'wood-benches.php'
                ],
                [
                    'number' => '08',
                    'icon'   => 'bi-plus-circle',
                    'title'  => 'Additional Services',
                    'text'   => 'Supporting works including specialised finishes, site identification and related project services.',
                    'link'   => 'contact.php'
                ]
            ];

            foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="svc-card">
                        <div class="svc-card-top">
                            <div class="svc-icon">
                                <i class="bi <?= htmlspecialchars($service['icon']) ?>"></i>
                            </div>
                            <span class="svc-number"><?= $service['number'] ?></span>
                        </div>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['text']) ?></p>
                        <a href="<?= htmlspecialchars($service['link']) ?>" class="svc-link">
                            Learn more <i class="bi bi-arrow-right"></i>
                        </a>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="svc-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Need a service for your <strong>next project?</strong></h2>
                <p>
                    Contact Enginove to discuss construction, renovations, materials, 
                    equipment or any of our specialised services.
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