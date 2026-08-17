<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Photo Gallery – Using Local Project Images
|--------------------------------------------------------------------------
*/
$pageTitle = "Photo Gallery";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Photo Gallery</title>
    <meta name="description" content="Explore Enginove Construction's project, construction, renovation and company photo gallery.">

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
        .gallery-hero {
            position: relative;
            min-height: 460px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #063d25;
        }
        .gallery-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(105deg, rgba(6,61,37,.96) 0%, rgba(6,61,37,.78) 100%),
                url("construction.webp");
            background-size: cover;
            background-position: center;
        }
        .gallery-hero-content {
            position: relative;
            z-index: 2;
            padding: 90px 0 80px;
        }
        .gallery-hero h1 {
            margin: 0 0 18px;
            color: #fff;
            font-size: clamp(44px, 5.8vw, 68px);
            font-weight: 300;
            line-height: 1.02;
            letter-spacing: -2.6px;
        }
        .gallery-hero h1 strong {
            color: #8fd5a7;
            font-weight: 800;
        }
        .gallery-hero p {
            max-width: 540px;
            margin: 0;
            color: #c7ddd0;
            font-size: 16px;
            line-height: 1.7;
        }

        /* Intro */
        .gallery-intro {
            padding: 70px 0 30px;
            text-align: center;
        }
        .gallery-intro .eng-section-title {
            margin-bottom: 14px;
        }
        .eng-section-title {
            color: var(--eng-dark);
            font-size: clamp(32px, 3.8vw, 42px);
            font-weight: 300;
            line-height: 1.15;
            letter-spacing: -1.4px;
        }
        .eng-section-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .gallery-intro p {
            max-width: 600px;
            margin: 0 auto;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* Filters */
        .gallery-filters {
            padding: 10px 0 40px;
        }
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .filter-btn {
            padding: 11px 20px;
            border: 1.5px solid var(--eng-border);
            border-radius: 30px;
            color: var(--eng-text);
            background: #fff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.3px;
            cursor: pointer;
            transition: all .25s ease;
        }
        .filter-btn:hover,
        .filter-btn.active {
            color: #fff;
            background: var(--eng-green);
            border-color: var(--eng-green);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(31,139,76,.2);
        }

        /* Photo Grid */
        .photo-gallery {
            padding: 10px 0 90px;
            background: #f5f9f7;
        }
        .photo-card {
            position: relative;
            overflow: hidden;
            height: 300px;
            border-radius: 16px;
            background: #dfe9e3;
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(0,40,20,.06);
            transition: all .32s ease;
        }
        .photo-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0,40,20,.12);
        }
        .photo-card img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .6s ease;
        }
        .photo-card:hover img {
            transform: scale(1.07);
        }
        .photo-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 22px;
            background: linear-gradient(to top, rgba(0,0,0,.8), rgba(0,0,0,0));
            opacity: 0;
            transition: opacity .3s ease;
        }
        .photo-card:hover .photo-overlay {
            opacity: 1;
        }
        .photo-overlay h3 {
            margin: 0 0 4px;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .photo-overlay span {
            color: #cde3d5;
            font-size: 12px;
            font-weight: 500;
        }
        .photo-expand {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: rgba(6,61,37,.9);
            border-radius: 50%;
            font-size: 15px;
            opacity: 0;
            transition: opacity .3s ease, transform .3s ease;
        }
        .photo-card:hover .photo-expand {
            opacity: 1;
            transform: scale(1.05);
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            inset: 0;
            z-index: 99999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(0,0,0,.94);
        }
        .lightbox.active {
            display: flex;
        }
        .lightbox-image {
            max-width: 92vw;
            max-height: 84vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 20px 70px rgba(0,0,0,.5);
        }
        .lightbox-close {
            position: fixed;
            top: 22px;
            right: 24px;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            transition: background .2s ease;
        }
        .lightbox-close:hover {
            background: rgba(255,255,255,.22);
        }

        /* CTA */
        .gallery-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .gallery-cta::before {
            content: "";
            position: absolute;
            top: -35%;
            right: -8%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .gallery-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .gallery-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .gallery-cta p {
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
            .gallery-hero { min-height: auto; }
            .gallery-hero-content { padding: 55px 0 50px; }
            .gallery-hero h1 { font-size: 40px; letter-spacing: -1.8px; }
            .gallery-intro { padding: 50px 0 20px; }
            .gallery-filters { padding-bottom: 30px; }
            .photo-gallery { padding-bottom: 70px; }
            .photo-card { height: 260px; }
            .gallery-cta { padding: 55px 0; }
            .filter-btn { padding: 10px 16px; font-size: 11px; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>


<!-- INTRO -->
<section class="gallery-intro">
    <div class="container">
        <div class="eng-eyebrow dark" style="justify-content:center;">Photo Gallery</div>
        <h2 class="eng-section-title">Projects captured <strong>in progress.</strong></h2>
        <p>
            Browse our project photography and discover some of the work, people, 
            equipment and environments that form part of the Enginove story.
        </p>
    </div>
</section>

<!-- FILTERS -->
<section class="gallery-filters">
    <div class="container">
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="construction">Construction</button>
            <button class="filter-btn" data-filter="renovation">Renovations</button>
            <button class="filter-btn" data-filter="equipment">Equipment</button>
            <button class="filter-btn" data-filter="materials">Materials</button>
            <button class="filter-btn" data-filter="company">Company</button>
        </div>
    </div>
</section>

<!-- PHOTO GRID -->
<section class="photo-gallery">
    <div class="container">
        <div class="row g-4">
            <?php
            // Local Enginove images from your project
            $photos = [
                // Construction
                [
                    'image'    => 'construction.webp',
                    'title'    => 'Construction Works',
                    'category' => 'construction'
                ],
                [
                    'image'    => 'pavmenents.jpeg',
                    'title'    => 'Pavement Works',
                    'category' => 'construction'
                ],
                [
                    'image'    => 'tar.png',
                    'title'    => 'Road & Tar Works',
                    'category' => 'construction'
                ],
                [
                    'image'    => 'ceiling_before.jpeg',
                    'title'    => 'Ceiling – Before',
                    'category' => 'renovation'
                ],
                [
                    'image'    => 'ceiling_after.jpeg',
                    'title'    => 'Ceiling – After',
                    'category' => 'renovation'
                ],

                // Equipment
                [
                    'image'    => 'images/eqp_hire.png',
                    'title'    => 'Equipment Hire',
                    'category' => 'equipment'
                ],
                [
                    'image'    => 'images/excavator.png',
                    'title'    => 'Excavator',
                    'category' => 'equipment'
                ],
                [
                    'image'    => 'images/TLB_Backhoe.jpeg',
                    'title'    => 'TLB / Backhoe',
                    'category' => 'equipment'
                ],
                [
                    'image'    => 'images/tipper.png',
                    'title'    => 'Tipper Truck',
                    'category' => 'equipment'
                ],
                [
                    'image'    => 'images/roller.png',
                    'title'    => 'Roller Compactor',
                    'category' => 'equipment'
                ],
                [
                    'image'    => 'images/loader.png',
                    'title'    => 'Loader',
                    'category' => 'equipment'
                ],

                // Materials
                [
                    'image'    => 'materials2.png',
                    'title'    => 'Construction Materials',
                    'category' => 'materials'
                ],
                [
                    'image'    => 'material.jpeg',
                    'title'    => 'Materials Supply',
                    'category' => 'materials'
                ],
                [
                    'image' => 'materials2.png',
                    'title' => 'Construction Materials',
                    'category' => 'materials'
                ],
                [
                    'image' => 'material.jpeg',
                    'title' => 'Materials Supply',
                    'category' => 'materials'
                ],

                // Additional project photos
                [
                    'image' => '7.jpeg',
                    'title' => 'Project Site',
                    'category' => 'construction'
                ],
                [
                    'image' => 'asbestors.jpeg',
                    'title' => 'Asbestos Works',
                    'category' => 'renovation'
                ],
                [
                    'image' => 'const.jpeg',
                    'title' => 'Construction Activity',
                    'category' => 'construction'
                ],
                [
                    'image' => 'den.jpeg',
                    'title' => 'Interior Works',
                    'category' => 'renovation'
                ],
                [
                    'image' => 'dis.jpeg',
                    'title' => 'Site Works',
                    'category' => 'construction'
                ],
                [
                    'image' => 'doors.jpeg',
                    'title' => 'Doors & Joinery',
                    'category' => 'renovation'
                ],
                [
                    'image' => 'house.jpeg',
                    'title' => 'Residential Project',
                    'category' => 'construction'
                ],
                [
                    'image' => 'more.jpeg',
                    'title' => 'Project Detail',
                    'category' => 'construction'
                ],
                [
                    'image' => 'shower.jpeg',
                    'title' => 'Bathroom & Wet Areas',
                    'category' => 'renovation'
                ],
                [
                    'image' => 'uz fountain.jpeg',
                    'title' => 'Fountain Works',
                    'category' => 'construction'
                ],
                [
                    'image' => 'uz.jpeg',
                    'title' => 'Project Overview',
                    'category' => 'construction'
                ],
                [
                    'image' => 'vehcles.jpeg',
                    'title' => 'Site Vehicles',
                    'category' => 'equipment'
                ]
            ];

            foreach ($photos as $photo): ?>
                <div class="col-sm-6 col-lg-4 photo-item" data-category="<?= htmlspecialchars($photo['category']) ?>">
                    <div class="photo-card"
                         data-image="<?= htmlspecialchars($photo['image']) ?>"
                         data-title="<?= htmlspecialchars($photo['title']) ?>">
                        <img src="<?= htmlspecialchars($photo['image']) ?>"
                             alt="<?= htmlspecialchars($photo['title']) ?>"
                             loading="lazy">
                        <div class="photo-expand">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                        <div class="photo-overlay">
                            <h3><?= htmlspecialchars($photo['title']) ?></h3>
                            <span>Enginove Construction</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close image">
        <i class="bi bi-x-lg"></i>
    </button>
    <img class="lightbox-image" id="lightboxImage" src="" alt="">
</div>

<!-- CTA -->


<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Filters
    const filterButtons = document.querySelectorAll(".filter-btn");
    const photoItems = document.querySelectorAll(".photo-item");

    filterButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            const filter = button.dataset.filter;

            photoItems.forEach(function (item) {
                const category = item.dataset.category;
                item.style.display = (filter === "all" || category === filter) ? "" : "none";
            });
        });
    });

    // Lightbox
    const lightbox = document.getElementById("lightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const lightboxClose = document.getElementById("lightboxClose");

    document.querySelectorAll(".photo-card").forEach(function (card) {
        card.addEventListener("click", function () {
            lightboxImage.src = card.dataset.image;
            lightboxImage.alt = card.dataset.title;
            lightbox.classList.add("active");
            document.body.style.overflow = "hidden";
        });
    });

    function closeLightbox() {
        lightbox.classList.remove("active");
        document.body.style.overflow = "";
        lightboxImage.src = "";
    }

    lightboxClose.addEventListener("click", closeLightbox);

    lightbox.addEventListener("click", function (event) {
        if (event.target === lightbox) closeLightbox();
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") closeLightbox();
    });
});
</script>

<script src="/Enginove/processor/embed.js"></script>
</body>
</html>