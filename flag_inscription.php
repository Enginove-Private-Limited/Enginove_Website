<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Flag Inscription & Branding – Clean & Professional
|--------------------------------------------------------------------------
*/
$pageTitle = "Flag Inscription & Branding";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Flag Inscription & Branding</title>
    <meta name="description" content="Enginove provides professional flag inscription, branding, identification and customised visual presentation solutions.">

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

        /* Before / After comparison */
        .ba-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }
        .ba-item {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            background: #e9efeb;
            box-shadow: 0 12px 32px rgba(0,40,20,.08);
        }
        .ba-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }
        .ba-label {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(24,35,31,.88);
            color: #fff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            padding: 6px 12px;
            border-radius: 6px;
        }
        .ba-label.after {
            background: var(--eng-green);
        }

        /* Service cards */
        .eng-flag-card {
            height: 100%;
            padding: 30px 26px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            transition: all .32s cubic-bezier(.4,0,.2,1);
            position: relative;
            overflow: hidden;
        }
        .eng-flag-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--eng-green);
            opacity: 0;
            transition: opacity .3s ease;
        }
        .eng-flag-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .eng-flag-card:hover::before { opacity: 1; }
        .eng-flag-icon {
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
        .eng-flag-card:hover .eng-flag-icon {
            background: var(--eng-green-dark);
            transform: scale(1.05);
        }
        .eng-flag-card h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .eng-flag-card p {
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
            .ba-grid { grid-template-columns: 1fr; }
            .ba-item img { height: 240px; }
        }
        @media (max-width: 767.98px) {
            .eng-section { padding: 60px 0; }
            .eng-cta { padding: 55px 0; }
            .eng-flag-card { padding: 26px 22px; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- INTRO + BEFORE/AFTER -->
<section class="eng-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="eng-eyebrow">Flag & Visual Identification</div>
                <h2 class="eng-section-title">Professional presentation with <strong>purpose.</strong></h2>
                <p class="eng-section-text mb-3">
                    Flags and branded visual elements play an important role in presenting an organisation, 
                    institution or event professionally.
                </p>
                <p class="eng-section-text">
                    Enginove provides inscription and branding solutions designed around your requirements, 
                    including identification, corporate presentation and event-related applications.
                </p>
                <div class="mt-4 pt-1">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        DISCUSS YOUR REQUIREMENTS <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ba-grid">
                    <div class="ba-item">
                        <span class="ba-label">Before</span>
                        <img src="flag_before.jpeg" alt="Flag before inscription" loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="ba-item">
                        <span class="ba-label after">After</span>
                        <img src="flag_after.jpeg" alt="Flag after inscription" loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="eng-section eng-section-light" id="services">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Our Capabilities</div>
            <h2 class="eng-section-title">Flag inscription & <strong>branding solutions.</strong></h2>
        </div>

        <div class="row g-4">
            <?php
            $services = [
                ['icon' => 'bi-flag',           'title' => 'Flag Inscription',     'text' => 'Customised inscription and identification for flags according to approved requirements.'],
                ['icon' => 'bi-building',       'title' => 'Corporate Branding',   'text' => 'Visual branding applications that support professional corporate presentation.'],
                ['icon' => 'bi-award',          'title' => 'Institutional Flags',  'text' => 'Flag presentation solutions for institutions, organisations and corporate environments.'],
                ['icon' => 'bi-calendar-event', 'title' => 'Event Branding',       'text' => 'Customised flag and visual identification solutions for events and special occasions.'],
                ['icon' => 'bi-geo-alt',        'title' => 'Site Identification',  'text' => 'Branded visual elements that assist with identifying offices, facilities and project locations.'],
                ['icon' => 'bi-palette',        'title' => 'Custom Branding',      'text' => 'Solutions developed around client branding requirements, colours and approved artwork.']
            ];
            foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="eng-flag-card">
                        <div class="eng-flag-icon">
                            <i class="bi <?= htmlspecialchars($service['icon']) ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="eng-section">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Our Process</div>
            <h2 class="eng-section-title">From concept to <strong>presentation.</strong></h2>
        </div>

        <div class="row g-4 eng-process-row">
            <?php
            $steps = [
                ['number' => '01', 'title' => 'Requirements', 'text' => 'We establish the required flag, inscription, branding and application details.'],
                ['number' => '02', 'title' => 'Artwork',      'text' => 'Client-approved branding details and artwork are prepared for production.'],
                ['number' => '03', 'title' => 'Production',   'text' => 'The required inscription and branding work is carried out to the approved specifications.'],
                ['number' => '04', 'title' => 'Completion',   'text' => 'The completed branding solution is prepared for the intended application.']
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


<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/Enginove/processor/embed.js"></script>
</body>
</html>