<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Video Gallery – Inline Playback
|--------------------------------------------------------------------------
*/
$pageTitle = "Video Gallery";
$header_assets_loaded = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Video Gallery</title>
    <meta name="description" content="Watch Enginove Construction project videos, site activities, equipment operations and company updates.">

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

        /* Eyebrow */
        .eng-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 18px;
            text-shadow: 0 1px 8px rgba(0,0,0,.4);
        }
        .eng-eyebrow::before {
            content: "";
            width: 28px;
            height: 2px;
            background: #fff;
            border-radius: 2px;
        }
        .eng-eyebrow.dark {
            color: var(--eng-green);
            text-shadow: none;
        }
        .eng-eyebrow.dark::before {
            background: var(--eng-green);
        }

        /* Hero with video background – light overlay only */
        .video-hero {
            position: relative;
            min-height: 520px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #0a1f14;
        }
        .video-hero-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        .video-hero-overlay {
            position: absolute;
            inset: 0;
            /* Very light dark overlay only – no strong green */
            background: linear-gradient(105deg, rgba(0,0,0,.45) 0%, rgba(0,0,0,.25) 100%);
            z-index: 1;
        }
        .video-hero-content {
            position: relative;
            z-index: 2;
            padding: 100px 0 90px;
        }
        .video-hero h1 {
            margin: 0 0 18px;
            color: #fff;
            font-size: clamp(44px, 5.8vw, 68px);
            font-weight: 300;
            line-height: 1.02;
            letter-spacing: -2.6px;
            text-shadow: 0 2px 12px rgba(0,0,0,.35);
        }
        .video-hero h1 strong {
            color: #fff;
            font-weight: 800;
        }
        .video-hero p {
            max-width: 560px;
            margin: 0;
            color: rgba(255,255,255,.92);
            font-size: 16px;
            line-height: 1.7;
            text-shadow: 0 1px 8px rgba(0,0,0,.3);
        }

        /* Intro */
        .video-intro {
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
        .video-intro p {
            max-width: 620px;
            margin: 0 auto;
            color: var(--eng-muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* Video Grid */
        .video-gallery {
            padding: 20px 0 90px;
            background: #f5f9f7;
        }
        .video-card {
            height: 100%;
            overflow: hidden;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,40,20,.05);
            transition: all .32s cubic-bezier(.4,0,.2,1);
        }
        .video-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0,50,25,.1);
            border-color: transparent;
        }
        .video-thumbnail {
            position: relative;
            height: 240px;
            overflow: hidden;
            background: #111;
            cursor: pointer;
        }
        .video-thumbnail video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .video-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,.28);
            transition: opacity .3s ease, background .3s ease;
            z-index: 2;
        }
        .video-card.playing .video-overlay {
            opacity: 0;
            pointer-events: none;
        }
        .play-button {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 4px;
            color: #fff;
            background: var(--eng-green);
            border: 3px solid rgba(255,255,255,.9);
            border-radius: 50%;
            box-shadow: 0 10px 28px rgba(0,0,0,.25);
            font-size: 24px;
            transition: all .3s ease;
        }
        .video-card:hover .play-button {
            transform: scale(1.08);
            background: var(--eng-green-dark);
        }
        .video-category {
            position: absolute;
            top: 14px;
            left: 14px;
            padding: 6px 12px;
            color: #fff;
            background: rgba(0,0,0,.7);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            z-index: 3;
        }
        .video-content {
            padding: 22px 24px 26px;
        }
        .video-content h3 {
            margin: 0 0 8px;
            color: var(--eng-dark);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.3px;
        }
        .video-content p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 13.5px;
            line-height: 1.65;
        }

        /* When playing, show native controls */
        .video-thumbnail video.controls-visible {
            /* controls are added via JS */
        }

        /* CTA */
        .video-cta {
            padding: 80px 0;
            color: #fff;
            background: linear-gradient(125deg, #063d25 0%, #0b5d34 55%, #0d6b3c 100%);
            position: relative;
            overflow: hidden;
        }
        .video-cta::before {
            content: "";
            position: absolute;
            top: -35%;
            right: -8%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(168,225,187,.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .video-cta h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 36px);
            font-weight: 300;
            letter-spacing: -0.8px;
        }
        .video-cta h2 strong {
            color: #a8e1bb;
            font-weight: 800;
        }
        .video-cta p {
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
            .video-hero { min-height: auto; }
            .video-hero-content { padding: 55px 0 50px; }
            .video-hero h1 { font-size: 40px; letter-spacing: -1.8px; }
            .video-intro { padding: 50px 0 30px; }
            .video-gallery { padding-bottom: 70px; }
            .video-thumbnail { height: 210px; }
            .video-cta { padding: 55px 0; }
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<!-- HERO WITH VIDEO BACKGROUND (light overlay) -->
<section class="video-hero">
    <video class="video-hero-video" autoplay muted loop playsinline>
        <source src="1.mp4" type="video/mp4">
    </video>
    <div class="video-hero-overlay"></div>

    <div class="container video-hero-content">
        <div class="row">
            <div class="col-lg-8">
                <div class="eng-eyebrow">Enginove Media</div>
                <h1>Our projects. <strong>In motion.</strong></h1>
                <p>
                    Watch selected project videos, site activities, equipment operations 
                    and company stories from Enginove Construction.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="video-intro">
    <div class="container">
        <div class="eng-eyebrow dark" style="justify-content:center;">Video Gallery</div>
        <h2 class="eng-section-title">Experience our work <strong>first-hand.</strong></h2>
        <p>
            From construction progress and equipment operations to company activities, 
            our videos provide a closer look at the work carried out by Enginove.
        </p>
    </div>
</section>

<!-- VIDEO GALLERY – plays inside the card -->
<section class="video-gallery">
    <div class="container">
        <div class="row g-4">
            <?php
            /*
             * All cards currently use 1.mp4.
             * Later change the 'src' for each video.
             */
            $videos = [
                [
                    'src'         => '1.mp4',
                    'title'       => 'Enginove Construction Projects',
                    'description' => 'An overview of selected construction activities and project work.',
                    'category'    => 'Projects'
                ],
                [
                    'src'         => '2.mp4',
                    'title'       => 'Enginove Company Activities',
                    'description' => 'Company activities, events and organisational highlights.',
                    'category'    => 'Company'
                ],
                [
                    'src'         => '3.mp4',
                    'title'       => 'Project Progress',
                    'description' => 'A visual look at construction progress and completed works.',
                    'category'    => 'Projects'
                ],
                [
                    'src'         => '4.mp4',
                    'title'       => 'Site Operations',
                    'description' => 'Daily construction and site activity highlights.',
                    'category'    => 'Construction'
                ],
                [
                    'src'         => '5.mp4',
                    'title'       => 'Equipment in Action',
                    'description' => 'Machinery and equipment supporting project delivery.',
                    'category'    => 'Equipment'
                ],
                [
                    'src'         => '6.mp4',
                    'title'       => 'Building Progress',
                    'description' => 'Ongoing building and structural works on site.',
                    'category'    => 'Construction'
                ],
                [
                    'src'         => '7.mp4',
                    'title'       => 'Renovation Highlights',
                    'description' => 'Selected renovation and improvement works.',
                    'category'    => 'Renovations'
                ],
                [
                    'src'         => '8.mp4',
                    'title'       => 'Civil Works',
                    'description' => 'Civil engineering and infrastructure activity.',
                    'category'    => 'Projects'
                ],
                [
                    'src'         => '9.mp4',
                    'title'       => 'Project Overview',
                    'description' => 'A broader look at Enginove project delivery.',
                    'category'    => 'Projects'
                ],
                [
                    'src'         => '10.mp4',
                    'title'       => 'Site Coordination',
                    'description' => 'Team and site coordination during active works.',
                    'category'    => 'Construction'
                ],
                [
                    'src'         => '11.mp4',
                    'title'       => 'Machinery Operations',
                    'description' => 'Heavy equipment supporting earthworks and construction.',
                    'category'    => 'Equipment'
                ],
                [
                    'src'         => '12.mp4',
                    'title'       => 'Finishing Works',
                    'description' => 'Finishing and detailing stages of project delivery.',
                    'category'    => 'Renovations'
                ],
                [
                    'src'         => '13.mp4',
                    'title'       => 'Completed Works',
                    'description' => 'Highlights from completed construction activities.',
                    'category'    => 'Projects'
                ]
            ];

            foreach ($videos as $index => $video): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="video-card" data-index="<?= $index ?>">
                        <div class="video-thumbnail">
                            <video muted playsinline preload="metadata" class="card-video">
                                <source src="<?= htmlspecialchars($video['src']) ?>" type="video/mp4">
                            </video>
                            <span class="video-category"><?= htmlspecialchars($video['category']) ?></span>
                            <div class="video-overlay">
                                <button class="play-button" type="button" aria-label="Play video">
                                    <i class="bi bi-play-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="video-content">
                            <h3><?= htmlspecialchars($video['title']) ?></h3>
                            <p><?= htmlspecialchars($video['description']) ?></p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="video-cta">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Have a project worth <strong>building?</strong></h2>
                <p>
                    Talk to Enginove about construction, renovation, civil works, 
                    materials or equipment requirements.
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

<script>
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".video-card");

    cards.forEach(function (card) {
        const video = card.querySelector(".card-video");
        const overlay = card.querySelector(".video-overlay");
        const playBtn = card.querySelector(".play-button");

        // Click play button or overlay → play inside the card
        function playVideo(e) {
            e.stopPropagation();

            // Pause any other playing cards first
            cards.forEach(function (other) {
                if (other !== card) {
                    const otherVideo = other.querySelector(".card-video");
                    otherVideo.pause();
                    otherVideo.muted = true;
                    otherVideo.removeAttribute("controls");
                    other.classList.remove("playing");
                }
            });

            // Play this one
            video.muted = false;
            video.setAttribute("controls", "controls");
            video.play();
            card.classList.add("playing");
        }

        playBtn.addEventListener("click", playVideo);
        overlay.addEventListener("click", playVideo);

        // When video ends, reset the card
        video.addEventListener("ended", function () {
            video.removeAttribute("controls");
            video.muted = true;
            card.classList.remove("playing");
        });

        // Optional: clicking the video while playing can pause
        video.addEventListener("click", function (e) {
            if (card.classList.contains("playing")) {
                e.stopPropagation();
            }
        });
    });
});
</script>

<script src="/Enginove/processor/embed.js"></script>
</body>
</html>