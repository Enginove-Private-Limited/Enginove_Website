<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Wooden Benches & Timber Seating – Clean & Professional
|--------------------------------------------------------------------------
*/
$pageTitle = "Wooden Benches & Timber Seating";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Wooden Benches & Timber Seating</title>
    <meta name="description" content="Enginove provides custom wooden benches and timber seating solutions for institutions, public spaces, commercial environments and residential projects.">

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
        .eng-eyebrow.light {
            color: #8fd5a7;
        }
        .eng-eyebrow.light::before {
            background: #8fd5a7;
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
                url("https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=2200&q=85");
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

        /* Image-based wood cards */
        .eng-wood-card {
            height: 100%;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            overflow: hidden;
            transition: all .32s cubic-bezier(.4,0,.2,1);
        }
        .eng-wood-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .eng-wood-image {
            height: 200px;
            overflow: hidden;
            background: #e9efeb;
        }
        .eng-wood-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .65s ease;
        }
        .eng-wood-card:hover .eng-wood-image img {
            transform: scale(1.07);
        }
        .eng-wood-body {
            padding: 24px;
        }
        .eng-wood-body h3 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .eng-wood-body p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* Application cards */
        .eng-app-card {
            height: 100%;
            padding: 28px 24px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 14px;
            text-align: center;
            transition: all .3s ease;
        }
        .eng-app-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0,40,20,.08);
            border-color: transparent;
        }
        .eng-app-icon {
            width: 52px;
            height: 52px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--eng-green);
            background: var(--eng-green-light);
            border-radius: 12px;
            font-size: 22px;
        }
        .eng-app-card h3 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 16px;
            font-weight: 800;
        }
        .eng-app-card p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* Quality section */
        .eng-quality {
            padding: 90px 0;
            color: #fff;
            background: var(--eng-green-deep);
        }
        .eng-quality h2 {
            margin: 0 0 16px;
            font-size: clamp(30px, 3.6vw, 40px);
            font-weight: 300;
            letter-spacing: -1px;
        }
        .eng-quality h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .eng-quality p {
            max-width: 560px;
            margin: 0 0 24px;
            color: #c8dfd1;
            font-size: 15px;
            line-height: 1.75;
        }
        .eng-quality-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .eng-quality-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 12px;
            color: #d9ebe0;
            font-size: 14px;
            line-height: 1.5;
        }
        .eng-quality-list i {
            color: #8fd5a7;
            font-size: 16px;
            margin-top: 2px;
            flex-shrink: 0;
        }
        .eng-quality-box {
            padding: 32px;
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 16px;
            background: rgba(255,255,255,.05);
        }
        .eng-quality-box .icon {
            font-size: 40px;
            color: #8fd5a7;
            margin-bottom: 16px;
        }
        .eng-quality-box h3 {
            margin: 0 0 12px;
            font-size: 20px;
            font-weight: 800;
            color: #fff;
        }
        .eng-quality-box p {
            margin: 0;
            color: #c8dfd1;
            font-size: 14px;
            line-height: 1.7;
            max-width: none;
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
            .eng-quality { padding: 60px 0; }
            .eng-cta { padding: 55px 0; }
            .eng-wood-image { height: 180px; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>


<!-- INTRO -->
<section class="eng-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="eng-eyebrow">Timber Seating Solutions</div>
                <h2 class="eng-section-title">Seating designed for <strong>real spaces.</strong></h2>
                <p class="eng-section-text mb-3">
                    Wooden benches provide practical and versatile seating for a wide range of environments.
                </p>
                <p class="eng-section-text mb-3">
                    Enginove can assist with custom timber seating requirements, from straightforward 
                    bench designs to project-specific solutions developed around dimensions, location 
                    and intended use.
                </p>
                <p class="eng-section-text">
                    Our solutions can be incorporated into institutional, commercial, outdoor and 
                    residential environments.
                </p>
                <div class="mt-4 pt-1">
                    <a href="contact.php" class="eng-btn eng-btn-green">
                        DISCUSS YOUR REQUIREMENTS <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eng-image-wrap">
                    <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=1200&q=85"
                         alt="Wooden furniture and timber seating"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES (image cards) -->
<section class="eng-section eng-section-light" id="services">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Our Capabilities</div>
            <h2 class="eng-section-title">Wooden seating <strong>solutions.</strong></h2>
        </div>

        <div class="row g-4">
            <?php
            $services = [
                [
                    'image' => 'https://images.unsplash.com/photo-1595428774223-ef52624120d2?auto=format&fit=crop&w=800&q=80',
                    'title' => 'Custom Wooden Benches',
                    'text'  => 'Bench designs developed around project requirements, available space and intended application.'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=800&q=80',
                    'title' => 'Timber Seating',
                    'text'  => 'Practical timber seating solutions for selected indoor and outdoor environments.'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=80',
                    'title' => 'Project-Specific Designs',
                    'text'  => 'Seating solutions developed around required dimensions and project specifications.'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1506439773649-6e0eb8cfb237?auto=format&fit=crop&w=800&q=80',
                    'title' => 'Institutional Seating',
                    'text'  => 'Bench solutions suitable for schools, offices, institutions and public facilities.'
                ],
                [
                    'image' => 'https://tse1.explicit.bing.net/th/id/OIP.XJUimZ5R-OvoP9mdLGYGhgHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3',
                    'title' => 'Outdoor Benches',
                    'text'  => 'Wooden seating solutions for gardens, courtyards, walkways and outdoor areas.'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=80',
                    'title' => 'Refurbishment',
                    'text'  => 'Selected wooden seating can be restored, repaired or refreshed according to condition.'
                ]
            ];
            foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="eng-wood-card">
                        <div class="eng-wood-image">
                            <img src="<?= htmlspecialchars($service['image']) ?>"
                                 alt="<?= htmlspecialchars($service['title']) ?>"
                                 loading="lazy">
                        </div>
                        <div class="eng-wood-body">
                            <h3><?= htmlspecialchars($service['title']) ?></h3>
                            <p><?= htmlspecialchars($service['text']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- APPLICATIONS -->
<section class="eng-section">
    <div class="container">
        <div class="text-center mb-5 pb-1">
            <div class="eng-eyebrow" style="justify-content:center;">Applications</div>
            <h2 class="eng-section-title">Designed for <strong>different environments.</strong></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="eng-app-card">
                    <div class="eng-app-icon"><i class="bi bi-building"></i></div>
                    <h3>Institutions</h3>
                    <p>Suitable seating solutions for selected institutional facilities and common areas.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="eng-app-card">
                    <div class="eng-app-icon"><i class="bi bi-tree"></i></div>
                    <h3>Gardens & Parks</h3>
                    <p>Timber benches that complement outdoor recreational and landscaped environments.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="eng-app-card">
                    <div class="eng-app-icon"><i class="bi bi-shop"></i></div>
                    <h3>Commercial Spaces</h3>
                    <p>Practical seating for commercial premises, courtyards and customer areas.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="eng-app-card">
                    <div class="eng-app-icon"><i class="bi bi-house"></i></div>
                    <h3>Residential</h3>
                    <p>Custom timber seating for homes, gardens, patios and outdoor living areas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUALITY -->
<section class="eng-quality">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="eng-eyebrow light">Built Around Your Requirements</div>
                <h2>Practical design. <strong>Professional execution.</strong></h2>
                <p>
                    Every seating requirement is different. The intended location, dimensions, 
                    use and overall appearance influence the most appropriate solution.
                </p>
                <ul class="eng-quality-list">
                    <li><i class="bi bi-check-circle-fill"></i> Project-specific dimensions and requirements</li>
                    <li><i class="bi bi-check-circle-fill"></i> Suitable timber and material considerations</li>
                    <li><i class="bi bi-check-circle-fill"></i> Practical designs for intended environments</li>
                    <li><i class="bi bi-check-circle-fill"></i> Finishing requirements based on the project</li>
                    <li><i class="bi bi-check-circle-fill"></i> Support for institutional and commercial projects</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="eng-quality-box">
                    <div class="icon"><i class="bi bi-tree"></i></div>
                    <h3>Custom Timber Solutions</h3>
                    <p>
                        Whether you require a small number of benches or a larger project requirement, 
                        Enginove can assess the scope and develop an appropriate supply or fabrication solution.
                    </p>
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
                <h2>Planning a <strong>seating project?</strong></h2>
                <p>
                    Send us your required quantities, dimensions, location or design requirements 
                    and let us discuss the best solution for your project.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="eng-cta-button">
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