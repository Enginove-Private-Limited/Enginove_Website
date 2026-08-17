<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Our Work – Capability Overview (no live project details)
|--------------------------------------------------------------------------
*/
$pageTitle = "Our Work";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Our Work</title>
    <meta name="description" content="Enginove delivers construction, civil engineering, renovation and infrastructure solutions across Zimbabwe.">

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
        .pg-hero {
            position: relative;
            min-height: 420px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #063d25;
        }
        .pg-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(105deg, rgba(6,61,37,.96) 0%, rgba(6,61,37,.88) 100%),
                url("construction.webp");
            background-size: cover;
            background-position: center;
        }
        .pg-hero-content {
            position: relative;
            z-index: 2;
            padding: 90px 0 80px;
        }
        .pg-hero h1 {
            margin: 0 0 18px;
            color: #fff;
            font-size: clamp(42px, 5.5vw, 62px);
            font-weight: 300;
            line-height: 1.05;
            letter-spacing: -2.2px;
        }
        .pg-hero h1 strong {
            color: #8fd5a7;
            font-weight: 800;
        }
        .pg-hero p {
            max-width: 540px;
            margin: 0;
            color: #c7ddd0;
            font-size: 16px;
            line-height: 1.7;
        }

        /* Stats */
        .pg-stats {
            padding: 0 0 70px;
            margin-top: -50px;
            position: relative;
            z-index: 5;
        }
        .pg-stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }
        .pg-stat-card {
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            padding: 32px 24px;
            text-align: center;
            box-shadow: 0 14px 36px rgba(0,40,20,.07);
            transition: all .3s ease;
        }
        .pg-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 44px rgba(0,40,20,.1);
        }
        .pg-stat-number {
            display: block;
            color: var(--eng-green);
            font-size: clamp(28px, 3.5vw, 36px);
            font-weight: 800;
            line-height: 1;
            margin-bottom: 8px;
            letter-spacing: -1px;
        }
        .pg-stat-label {
            color: var(--eng-muted);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        /* Section */
        .pg-section {
            padding: 20px 0 90px;
        }
        .pg-section-title {
            margin: 0 0 14px;
            color: var(--eng-dark);
            font-size: clamp(32px, 3.8vw, 42px);
            font-weight: 300;
            letter-spacing: -1.4px;
        }
        .pg-section-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .pg-section-text {
            max-width: 580px;
            margin: 0 auto 40px;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
            text-align: center;
        }

        /* Capability cards (text only) */
        .pg-capability {
            height: 100%;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            padding: 32px 28px;
            transition: all .3s ease;
        }
        .pg-capability:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0,40,20,.08);
            border-color: transparent;
        }
        .pg-capability-icon {
            width: 52px;
            height: 52px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 12px;
            font-size: 22px;
        }
        .pg-capability h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .pg-capability p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 14px;
            line-height: 1.7;
        }

        /* Approach */
        .pg-approach {
            padding: 80px 0;
            background: #fff;
        }
        .pg-approach-item {
            text-align: center;
            padding: 10px;
        }
        .pg-approach-num {
            display: inline-flex;
            width: 48px;
            height: 48px;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: var(--eng-green);
            background: var(--eng-green-light);
            border-radius: 50%;
            font-size: 15px;
            font-weight: 900;
        }
        .pg-approach-item h4 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 16px;
            font-weight: 800;
        }
        .pg-approach-item p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* CTA */
        .pg-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .pg-cta::before {
            content: "";
            position: absolute;
            top: -35%;
            right: -8%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .pg-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .pg-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .pg-cta p {
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
        @media (max-width: 991.98px) {
            .pg-stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 767.98px) {
            .pg-hero { min-height: auto; }
            .pg-hero-content { padding: 55px 0 50px; }
            .pg-hero h1 { font-size: 38px; letter-spacing: -1.6px; }
            .pg-stats { margin-top: -30px; padding-bottom: 50px; }
            .pg-stats-grid { gap: 12px; }
            .pg-stat-card { padding: 24px 16px; }
            .pg-stat-number { font-size: 26px; }
            .pg-section { padding-bottom: 70px; }
            .pg-approach { padding: 60px 0; }
            .pg-cta { padding: 55px 0; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- HERO -->
<section class="pg-hero">
    <div class="container pg-hero-content">
        <div class="row">
            <div class="col-lg-8">
                <div class="eng-eyebrow light">Enginove Portfolio</div>
                <h1>Our <strong>Work</strong></h1>
                <p>
                    A high-level overview of the construction, civil engineering, renovation 
                    and infrastructure capabilities we bring to projects across Zimbabwe.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- KEY STATISTICS -->
<section class="pg-stats">
    <div class="container">
        <div class="pg-stats-grid">
            <div class="pg-stat-card">
                <span class="pg-stat-number">500+</span>
                <span class="pg-stat-label">Projects Completed</span>
            </div>
            <div class="pg-stat-card">
                <span class="pg-stat-number">98%</span>
                <span class="pg-stat-label">Client Satisfaction</span>
            </div>
            <div class="pg-stat-card">
                <span class="pg-stat-number">15+</span>
                <span class="pg-stat-label">Years Experience</span>
            </div>
            <div class="pg-stat-card">
                <span class="pg-stat-number">24/7</span>
                <span class="pg-stat-label">Support Available</span>
            </div>
        </div>
    </div>
</section>

<!-- CAPABILITY OVERVIEW (no images, no live project data) -->
<section class="pg-section">
    <div class="container">
        <div class="text-center mb-2">
            <div class="eng-eyebrow" style="justify-content:center;">What We Deliver</div>
            <h2 class="pg-section-title">Capability <strong>overview</strong></h2>
            <p class="pg-section-text">
                We work across a range of construction and engineering disciplines. 
                Below is a summary of the types of work we are equipped to deliver.
            </p>
        </div>

        <div class="row g-4">
            <?php
            $capabilities = [
                [
                    'icon'  => 'bi-building',
                    'title' => 'Building Construction',
                    'text'  => 'New-build commercial, institutional and residential projects delivered with a focus on quality, programme and lasting performance.'
                ],
                [
                    'icon'  => 'bi-signpost-2',
                    'title' => 'Civil Engineering',
                    'text'  => 'Roads, drainage, earthworks and related infrastructure executed with disciplined site control and attention to specification.'
                ],
                [
                    'icon'  => 'bi-house-gear',
                    'title' => 'Renovations & Refurbishments',
                    'text'  => 'Sensitive upgrades and modernisation of existing facilities, balancing contemporary finishes with operational continuity.'
                ],
                [
                    'icon'  => 'bi-truck',
                    'title' => 'Equipment & Materials',
                    'text'  => 'Machinery hire and construction materials supply coordinated to support project timelines and site requirements.'
                ],
                [
                    'icon'  => 'bi-water',
                    'title' => 'Infrastructure Support',
                    'text'  => 'Utility-related and supporting civil works that strengthen essential services and long-term asset performance.'
                ],
                [
                    'icon'  => 'bi-people',
                    'title' => 'Project Coordination',
                    'text'  => 'End-to-end coordination from planning through delivery, with clear communication and accountable site leadership.'
                ]
            ];
            foreach ($capabilities as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="pg-capability">
                        <div class="pg-capability-icon">
                            <i class="bi <?= htmlspecialchars($item['icon']) ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                        <p><?= htmlspecialchars($item['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- APPROACH -->
<section class="pg-approach">
    <div class="container">
        <div class="text-center mb-5">
            <div class="eng-eyebrow" style="justify-content:center;">How We Work</div>
            <h2 class="pg-section-title">A disciplined <strong>approach.</strong></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="pg-approach-item">
                    <span class="pg-approach-num">01</span>
                    <h4>Understand</h4>
                    <p>We start by clarifying requirements, constraints and the outcomes that matter most.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="pg-approach-item">
                    <span class="pg-approach-num">02</span>
                    <h4>Plan</h4>
                    <p>Clear programmes, resource planning and risk awareness guide every stage of delivery.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="pg-approach-item">
                    <span class="pg-approach-num">03</span>
                    <h4>Deliver</h4>
                    <p>Disciplined site execution with quality control, safety focus and steady communication.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="pg-approach-item">
                    <span class="pg-approach-num">04</span>
                    <h4>Complete</h4>
                    <p>Handover is managed carefully so the finished work meets the agreed standard.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="pg-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Have a project <strong>in mind?</strong></h2>
                <p>
                    Tell us what you are planning and our team will help you develop the right 
                    construction, civil engineering or renovation solution.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="request_quote.php" class="eng-cta-button">
                    REQUEST A QUOTE <i class="bi bi-arrow-right"></i>
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