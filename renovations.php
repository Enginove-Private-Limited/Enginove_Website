<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Renovations & Refurbishments – with Service Modals
|--------------------------------------------------------------------------
*/
$pageTitle = "Renovations & Refurbishments";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Renovations & Refurbishments</title>
    <meta name="description" content="Enginove provides professional building renovations, refurbishments, upgrades, ceilings, finishes and facility improvement works in Zimbabwe.">
    
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
            --eng-white: #ffffff;
            --eng-light: #f6faf8;
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
            background: rgba(255,255,255,.85);
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
            font-size: clamp(36px, 4.2vw, 50px);
            font-weight: 300;
            line-height: 1.08;
            letter-spacing: -1.8px;
            margin-bottom: 18px;
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
            min-height: 560px;
            overflow: hidden;
            background: #f6faf8;
        }
        .eng-hero-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(105deg,
                    rgba(255,255,255,.97) 0%,
                    rgba(255,255,255,.92) 32%,
                    rgba(255,255,255,.55) 62%,
                    rgba(255,255,255,.15) 100%
                ),
                url("https://images.unsplash.com/photo-1562259949-e8e7689d7828?auto=format&fit=crop&w=2200&q=85");
            background-size: cover;
            background-position: center 40%;
        }
        .eng-hero-content {
            position: relative;
            z-index: 2;
            padding: 100px 0 90px;
        }
        .eng-hero-title {
            color: var(--eng-dark);
            font-size: clamp(46px, 6.2vw, 72px);
            font-weight: 300;
            line-height: 1.0;
            letter-spacing: -2.8px;
            margin-bottom: 22px;
        }
        .eng-hero-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .eng-hero-text {
            max-width: 520px;
            color: #3a4a42;
            font-size: 16.5px;
            line-height: 1.75;
            margin-bottom: 32px;
        }

        /* Cards – now clickable */
        .eng-card {
            height: 100%;
            padding: 32px 26px 28px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            transition: all .32s cubic-bezier(.4,0,.2,1);
            text-align: center;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        .eng-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--eng-green);
            opacity: 0;
            transition: opacity .3s ease;
        }
        .eng-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .eng-card:hover::before { opacity: 1; }
        .eng-card-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 14px;
            font-size: 22px;
            transition: all .3s ease;
        }
        .eng-card:hover .eng-card-icon {
            background: var(--eng-green-dark);
            transform: scale(1.06);
        }
        .eng-card h3 {
            margin: 0 0 10px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .eng-card p {
            margin: 0 0 18px;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }
        .eng-card-action {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--eng-green);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            transition: gap .25s ease, color .25s ease;
        }
        .eng-card:hover .eng-card-action {
            gap: 10px;
            color: var(--eng-green-dark);
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
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .eng-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.5vw, 36px);
            font-weight: 300;
            letter-spacing: -1px;
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

        /* ===== Modal styles ===== */
        .modal-content {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,40,20,.18);
        }
        .modal-header {
            border-bottom: 1px solid var(--eng-border);
            padding: 22px 28px;
            background: #fff;
        }
        .modal-title {
            color: var(--eng-dark);
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .modal-header .btn-close {
            background-size: 14px;
            opacity: .6;
        }
        .modal-body {
            padding: 28px;
        }
        .modal-service-text {
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 28px;
        }
        .before-after-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }
        .ba-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            background: #f0f4f2;
        }
        .ba-item img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
        }
        .ba-label {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(24,35,31,.85);
            color: #fff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            padding: 5px 12px;
            border-radius: 6px;
        }
        .ba-label.after {
            background: var(--eng-green);
        }
        .modal-footer {
            border-top: 1px solid var(--eng-border);
            padding: 18px 28px;
            background: #fafcfb;
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
            .before-after-grid { grid-template-columns: 1fr; }
            .ba-item img { height: 220px; }
        }
        @media (max-width: 767.98px) {
            .eng-hero { min-height: auto; }
            .eng-hero-content { padding: 55px 0 50px; }
            .eng-hero-title { font-size: 40px; letter-spacing: -1.8px; }
            .eng-hero-text { font-size: 15px; }
            .eng-section { padding: 60px 0; }
            .eng-cta { padding: 55px 0; }
            .eng-section-title { letter-spacing: -1.2px; }
            .eng-card { padding: 28px 22px 24px; }
            .modal-body { padding: 22px; }
            .modal-header, .modal-footer { padding-left: 22px; padding-right: 22px; }
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
                <div class="eng-eyebrow">Renovations & Refurbishments</div>
                <h1 class="eng-hero-title">Renewing spaces.<br><strong>Improving places.</strong></h1>
                <p class="eng-hero-text">
                    Professional renovation and refurbishment solutions that improve the appearance, 
                    functionality and condition of existing buildings and facilities.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        REQUEST A QUOTE <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="projects.php" class="eng-btn eng-btn-outline">
                        VIEW PROJECTS <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INTRO + IMAGE -->
<section class="eng-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="eng-eyebrow">Renovation Services</div>
                <h2 class="eng-section-title">Transforming existing <strong>spaces.</strong></h2>
                <p class="eng-section-text mb-3">
                    Our renovation teams work on existing buildings and facilities where improvements, 
                    repairs, upgrades or full refurbishment are required.
                </p>
                <p class="eng-section-text">
                    We coordinate multiple trades and construction activities to deliver practical 
                    refurbishment solutions while maintaining quality standards and project requirements.
                </p>
                <div class="mt-4 pt-1">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        DISCUSS YOUR RENOVATION <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eng-image-wrap">
                    <img src="https://images.unsplash.com/photo-1562259949-e8e7689d7828?auto=format&fit=crop&w=1200&q=85" 
                         alt="Building renovation and refurbishment" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES WITH MODALS -->
<section class="eng-section eng-section-light">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">What We Renovate</div>
            <h2 class="eng-section-title">Renovation & <strong>Refurbishment</strong></h2>
        </div>

        <div class="row g-4">
            <?php
            // Service data + modal content
            $services = [
                [
                    'id'          => 'refurbishment',
                    'icon'        => 'bi-house-gear',
                    'title'       => 'Building Refurbishment',
                    'card_text'   => 'Comprehensive improvement and refurbishment works for existing commercial, institutional and residential buildings.',
                    'modal_text'  => 'We deliver full or partial building refurbishments that breathe new life into existing structures. From structural improvements to complete internal and external upgrades, our teams manage the process carefully so the finished space is both functional and attractive.',
                    'before_img'  => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?auto=format&fit=crop&w=800&q=80',
                    'after_img'   => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80'
                ],
                [
                    'id'          => 'ceilings',
                    'icon'        => 'bi-grid-3x3-gap',
                    'title'       => 'Ceilings',
                    'card_text'   => 'Ceiling replacement, new installations, repairs and high-quality finishing works.',
                    'modal_text'  => 'We install, replace and repair ceilings to improve both appearance and performance. Whether you need suspended ceilings, drywall, or specialised finishes, we deliver clean, precise results that complete the look of any interior space.',
                    'before_img'  => 'ceiling_before.jpeg',
                    'after_img'   => 'ceiling_after.jpeg'
                ],
                [
                    'id'          => 'painting',
                    'icon'        => 'bi-brush',
                    'title'       => 'Painting & Finishes',
                    'card_text'   => 'Interior and exterior painting, surface preparation and professional finishing systems.',
                    'modal_text'  => 'Proper surface preparation and quality materials make a lasting difference. We handle interior and exterior painting, protective coatings and finishing systems that protect your building while giving it a fresh, professional appearance.',
                    'before_img'  => 'https://images.unsplash.com/photo-1581852279452-8e04d6f6c0b0?auto=format&fit=crop&w=800&q=80',
                    'after_img'   => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80'
                ],
                [
                    'id'          => 'tiling',
                    'icon'        => 'bi-grid',
                    'title'       => 'Tiling & Flooring',
                    'card_text'   => 'Floor and wall tiling, flooring upgrades and associated finishing works.',
                    'modal_text'  => 'From ceramic and porcelain tiles to modern flooring systems, we deliver accurate, durable installations. Our teams focus on clean lines, proper preparation and finishes that stand up to everyday use.',
                    'before_img'  => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=800&q=80',
                    'after_img'   => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80'
                ],
                [
                    'id'          => 'doors',
                    'icon'        => 'bi-door-open',
                    'title'       => 'Doors & Joinery',
                    'card_text'   => 'Door replacements, hardware, joinery and related building improvement works.',
                    'modal_text'  => 'We supply and install doors, frames, hardware and custom joinery that improve both security and aesthetics. Whether you need replacements or upgrades, we ensure a precise fit and professional finish.',
                    'before_img'  => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&q=80',
                    'after_img'   => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80'
                ],
                [
                    'id'          => 'repairs',
                    'icon'        => 'bi-tools',
                    'title'       => 'Repairs & Upgrades',
                    'card_text'   => 'General repairs and targeted facility upgrades that improve both function and appearance.',
                    'modal_text'  => 'Small repairs and targeted upgrades can make a significant difference to how a facility looks and performs. We handle general building repairs and improvement works efficiently, with minimal disruption to your operations.',
                    'before_img'  => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=800&q=80',
                    'after_img'   => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80'
                ]
            ];

            foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="eng-card" 
                         data-bs-toggle="modal" 
                         data-bs-target="#modal-<?= $service['id'] ?>"
                         role="button"
                         tabindex="0">
                        <div class="eng-card-icon">
                            <i class="bi <?= $service['icon'] ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['card_text']) ?></p>
                        <span class="eng-card-action">
                            View details <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- MODALS -->
<?php foreach ($services as $service): ?>
<div class="modal fade" id="modal-<?= $service['id'] ?>" tabindex="-1" aria-labelledby="modalLabel-<?= $service['id'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-<?= $service['id'] ?>">
                    <?= htmlspecialchars($service['title']) ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="modal-service-text">
                    <?= htmlspecialchars($service['modal_text']) ?>
                </p>

                <div class="before-after-grid">
                    <div class="ba-item">
                        <span class="ba-label">Before</span>
                        <img src="<?= htmlspecialchars($service['before_img']) ?>" 
                             alt="Before – <?= htmlspecialchars($service['title']) ?>" 
                             loading="lazy">
                    </div>
                    <div class="ba-item">
                        <span class="ba-label after">After</span>
                        <img src="<?= htmlspecialchars($service['after_img']) ?>" 
                             alt="After – <?= htmlspecialchars($service['title']) ?>" 
                             loading="lazy">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="contact.php" class="eng-btn eng-btn-green" style="min-height:46px; padding:0 24px; font-size:12px;">
                    Request a Quote <i class="bi bi-arrow-right"></i>
                </a>
                <button type="button" class="btn btn-link text-muted" data-bs-dismiss="modal" style="font-size:13px; font-weight:600;">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- CTA -->
<section class="eng-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Ready to improve your <strong>facility?</strong></h2>
                <p>Contact Enginove to discuss your renovation, refurbishment or building improvement requirements.</p>
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