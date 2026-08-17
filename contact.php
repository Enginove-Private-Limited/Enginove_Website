<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Contact Us – Clean & Professional
|--------------------------------------------------------------------------
*/
$pageTitle = "Contact Us";
$header_assets_loaded = true;

$message = '';
$error = '';
$name = '';
$email = '';
$phone = '';
$subject = '';
$message_text = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message_text = trim($_POST['message'] ?? '');

    if (empty($name) || strlen($name) < 2) {
        $error = 'Please enter your full name.';
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (empty($message_text) || strlen($message_text) < 10) {
        $error = 'Please enter a message of at least 10 characters.';
    } else {
        // TODO: Connect PHPMailer / SMTP here
        $message = 'Thank you, ' . htmlspecialchars($name) . '! Your message has been received. We will get back to you within 24 hours.';
        $name = $email = $phone = $subject = $message_text = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enginove | Contact Us</title>
    <meta name="description" content="Contact Enginove (Pvt) Ltd for construction, civil engineering, renovations, materials supply and equipment hire in Zimbabwe.">

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
            padding: 0 26px;
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
            margin-bottom: 16px;
        }
        .eng-eyebrow::before {
            content: "";
            width: 28px;
            height: 2px;
            background: var(--eng-green);
            border-radius: 2px;
        }

        /* Hero */
        .contact-hero {
            position: relative;
            min-height: 460px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #f0f8f3;
        }
        .contact-hero-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(105deg,
                    rgba(255,255,255,.97) 0%,
                    rgba(255,255,255,.92) 38%,
                    rgba(255,255,255,.5) 100%),
                url("https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=2200&q=85");
            background-size: cover;
            background-position: center;
        }
        .contact-hero-content {
            position: relative;
            z-index: 2;
            padding: 90px 0 80px;
        }
        .contact-hero h1 {
            margin: 0 0 18px;
            color: var(--eng-dark);
            font-size: clamp(44px, 5.8vw, 68px);
            font-weight: 300;
            line-height: 1.02;
            letter-spacing: -2.6px;
        }
        .contact-hero h1 strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .contact-hero p {
            max-width: 520px;
            margin: 0 0 28px;
            color: #3f4f47;
            font-size: 16px;
            line-height: 1.7;
        }

        /* Main section */
        .contact-main {
            position: relative;
            z-index: 5;
            margin-top: -48px;
            padding-bottom: 90px;
        }

        .contact-card,
        .contact-form-card {
            height: 100%;
            padding: 36px;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(0,50,25,.08);
        }
        .contact-form-card {
            background: linear-gradient(145deg, #ffffff, #f8fbf9);
        }

        /* Info side */
        .contact-info-heading {
            margin: 0 0 12px;
            color: var(--eng-dark);
            font-size: clamp(28px, 3.2vw, 34px);
            font-weight: 300;
            line-height: 1.15;
            letter-spacing: -1px;
        }
        .contact-info-heading strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .contact-intro {
            margin-bottom: 28px;
            color: var(--eng-muted);
            font-size: 14.5px;
            line-height: 1.7;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 18px 0;
            border-bottom: 1px solid #edf2ef;
        }
        .info-item:last-child { border-bottom: none; }

        .info-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--eng-green);
            background: var(--eng-green-light);
            border-radius: 12px;
            font-size: 20px;
        }
        .info-content h3 {
            margin: 0 0 5px;
            color: var(--eng-dark);
            font-size: 15px;
            font-weight: 800;
        }
        .info-content p {
            margin: 0;
            color: var(--eng-muted);
            font-size: 14px;
            line-height: 1.6;
        }
        .info-content a {
            color: var(--eng-green);
            font-weight: 700;
        }
        .info-content a:hover { color: var(--eng-green-dark); }

        .contact-social {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 26px;
        }
        .contact-social a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--eng-green);
            background: var(--eng-green-light);
            border: 1px solid #d7ebde;
            border-radius: 50%;
            font-size: 15px;
            transition: all .25s ease;
        }
        .contact-social a:hover {
            color: #fff;
            background: var(--eng-green);
            border-color: var(--eng-green);
            transform: translateY(-3px);
        }

        /* Form */
        .form-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 26px;
        }
        .form-title {
            margin: 0 0 6px;
            color: var(--eng-dark);
            font-size: 28px;
            font-weight: 300;
            letter-spacing: -0.6px;
        }
        .form-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .form-subtitle {
            margin: 0;
            color: var(--eng-muted);
            font-size: 14px;
            line-height: 1.55;
        }
        .form-header-icon {
            width: 50px;
            height: 50px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 12px;
            font-size: 20px;
        }

        .contact-alert {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 16px;
            margin-bottom: 20px;
            border-radius: 10px;
            font-size: 14px;
            line-height: 1.5;
        }
        .contact-alert i { font-size: 18px; flex-shrink: 0; }
        .contact-alert.success {
            color: #125b31;
            background: #eaf7ef;
            border: 1px solid #cce8d5;
        }
        .contact-alert.error {
            color: #9d1c1c;
            background: #fff0f0;
            border: 1px solid #f4cccc;
        }

        .form-group { margin-bottom: 18px; }
        .form-label {
            display: block;
            margin-bottom: 7px;
            color: var(--eng-dark);
            font-size: 13px;
            font-weight: 800;
        }
        .form-required { color: #dc2626; }

        .input-wrapper { position: relative; }
        .input-wrapper > i {
            position: absolute;
            top: 50%;
            left: 15px;
            z-index: 2;
            color: #789084;
            font-size: 15px;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .input-wrapper.textarea-icon > i {
            top: 16px;
            transform: none;
        }

        .form-control-custom {
            width: 100%;
            min-height: 50px;
            padding: 0 15px 0 44px;
            color: var(--eng-dark);
            background: #fff;
            border: 1px solid #dfe8e3;
            border-radius: 9px;
            outline: none;
            font-family: inherit;
            font-size: 14px;
            transition: border-color .2s ease, box-shadow .2s ease;
        }
        textarea.form-control-custom {
            min-height: 140px;
            padding-top: 14px;
            resize: vertical;
        }
        .form-control-custom::placeholder { color: #9ba8a1; }
        .form-control-custom:focus {
            border-color: var(--eng-green);
            box-shadow: 0 0 0 4px rgba(31,139,76,.1);
        }
        select.form-control-custom { cursor: pointer; }

        .form-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 8px;
            flex-wrap: wrap;
        }
        .form-note {
            display: flex;
            align-items: center;
            gap: 7px;
            color: var(--eng-muted);
            font-size: 12px;
        }
        .form-note i { color: var(--eng-green); font-size: 14px; }

        .btn-submit {
            min-height: 50px;
            padding: 0 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            color: #fff;
            background: var(--eng-green);
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.3px;
            cursor: pointer;
            transition: all .25s ease;
            box-shadow: 0 10px 24px rgba(31,139,76,.22);
        }
        .btn-submit:hover {
            background: var(--eng-green-dark);
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(31,139,76,.28);
        }
        .btn-submit:disabled {
            opacity: 0.75;
            cursor: not-allowed;
            transform: none;
        }

        /* Quick contact strip */
        .quick-contact {
            margin-top: 32px;
            padding: 26px 28px;
            color: #fff;
            background: linear-gradient(125deg, #063d25, #0b5d34);
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0,50,25,.16);
        }
        .quick-contact-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        .quick-contact h3 {
            margin: 0 0 4px;
            font-size: 18px;
            font-weight: 700;
        }
        .quick-contact p {
            margin: 0;
            color: #c8dfd1;
            font-size: 14px;
        }
        .quick-contact-btn {
            min-height: 46px;
            padding: 0 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.3);
            border-radius: 8px;
            font-size: 13px;
            font-weight: 800;
            transition: all .25s ease;
        }
        .quick-contact-btn:hover {
            color: var(--eng-green-deep);
            background: #fff;
        }

        /* Map */
        .map-section { padding: 0 0 90px; }
        .map-title {
            margin: 0;
            color: var(--eng-dark);
            font-size: clamp(28px, 3.2vw, 36px);
            font-weight: 300;
            letter-spacing: -1px;
        }
        .map-title strong {
            color: var(--eng-green);
            font-weight: 800;
        }
        .map-card {
            overflow: hidden;
            background: #fff;
            border: 1px solid var(--eng-border);
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(0,50,25,.08);
        }
        .map-card iframe {
            width: 100%;
            height: 400px;
            display: block;
            border: none;
        }
        .map-footer {
            padding: 16px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }
        .map-address {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--eng-muted);
            font-size: 14px;
        }
        .map-address i {
            color: var(--eng-green);
            font-size: 18px;
        }
        .map-link {
            color: var(--eng-green);
            font-size: 13px;
            font-weight: 800;
            white-space: nowrap;
        }
        .map-link:hover { color: var(--eng-green-dark); }

        /* Floating AI */
        .contact-ai-button {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 99990;
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--eng-green);
            border-radius: 50%;
            box-shadow: 0 10px 28px rgba(0,70,35,.28);
            font-size: 22px;
            cursor: pointer;
            transition: .25s ease;
        }
        .contact-ai-button:hover {
            background: var(--eng-green-dark);
            transform: translateY(-4px) scale(1.04);
        }
        .contact-ai-label {
            position: absolute;
            right: 68px;
            white-space: nowrap;
            padding: 8px 14px;
            color: var(--eng-dark);
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,.1);
            font-size: 12px;
            font-weight: 700;
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

        /* Responsive */
        @media (max-width: 991.98px) {
            .contact-hero { min-height: 400px; }
            .contact-main { margin-top: -28px; }
            .contact-card, .contact-form-card { padding: 28px; }
            .map-card iframe { height: 340px; }
        }
        @media (max-width: 767.98px) {
            .contact-hero { min-height: auto; }
            .contact-hero-content { padding: 55px 0 50px; }
            .contact-hero h1 { font-size: 40px; letter-spacing: -1.8px; }
            .contact-hero p { font-size: 15px; }
            .contact-main {
                margin-top: 0;
                padding: 40px 0 70px;
            }
            .contact-card, .contact-form-card {
                padding: 24px 20px;
                border-radius: 16px;
            }
            .form-bottom {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-submit { width: 100%; }
            .map-section { padding: 0 0 70px; }
            .map-card iframe { height: 280px; }
            .map-footer { flex-direction: column; align-items: flex-start; }
            .contact-ai-label { display: none; }
            .contact-ai-button {
                right: 16px;
                bottom: 16px;
                width: 52px;
                height: 52px;
            }
        }
    </style>
</head>
<body>

<?php include "header.php"; ?>

<!-- HERO -->
<section class="contact-hero">
    <div class="contact-hero-bg"></div>
    <div class="container contact-hero-content">
        <div class="row">
            <div class="col-lg-7">
                <div class="eng-eyebrow">Enginove (Pvt) Ltd</div>
                <h1>Let's <strong>Connect</strong></h1>
                <p>
                    Have a construction, renovation, civil works, materials supply or equipment hire requirement? 
                    Talk to the Enginove team and let’s turn your project into reality.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#contact-form" class="eng-btn eng-btn-green">
                        SEND A MESSAGE <i class="bi bi-arrow-down"></i>
                    </a>
                    <a href="tel:+263775780627" class="eng-btn eng-btn-outline">
                        <i class="bi bi-telephone"></i> CALL US
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTACT -->
<section class="contact-main">
    <div class="container">
        <div class="row g-4">

            <!-- Info -->
            <div class="col-lg-5">
                <div class="contact-card">
                    <h2 class="contact-info-heading">We're here <strong>to help.</strong></h2>
                    <p class="contact-intro">
                        Whether you are planning a new development, renovating an existing property, 
                        sourcing materials or looking for reliable equipment, our team is ready to assist.
                    </p>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                        <div class="info-content">
                            <h3>Visit Us</h3>
                            <p>
                                8 Glen Carron Road, Highlands, Harare<br>
                                24 Hindhead Road, Chisipite
                            </p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-telephone"></i></div>
                        <div class="info-content">
                            <h3>Call Us</h3>
                            <p>
                                <a href="tel:+263775780627">+263 77 578 0627</a><br>
                                <a href="tel:+2638612023233">+263 861 202 3233</a>
                            </p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-envelope"></i></div>
                        <div class="info-content">
                            <h3>Email Us</h3>
                            <p><a href="mailto:sales@enginove.co.zw">sales@enginove.co.zw</a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-clock"></i></div>
                        <div class="info-content">
                            <h3>Working Hours</h3>
                            <p>
                                Monday – Saturday: 8:00 AM – 8:00 PM<br>
                                Sundays & Public Holidays: By appointment<br>
                                24/7 reachable
                            </p>
                        </div>
                    </div>

                    <div class="contact-social">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://wa.me/263775780627" aria-label="WhatsApp" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-7" id="contact-form">
                <div class="contact-form-card">
                    <div class="form-header">
                        <div>
                            <h2 class="form-title">Send a <strong>Message</strong></h2>
                            <p class="form-subtitle">
                                Complete the form below and our team will get back to you within 24 hours.
                            </p>
                        </div>
                        <div class="form-header-icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                    </div>

                    <?php if ($message): ?>
                        <div class="contact-alert success">
                            <i class="bi bi-check-circle-fill"></i>
                            <div><?= htmlspecialchars($message) ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if ($error): ?>
                        <div class="contact-alert error">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <div><?= htmlspecialchars($error) ?></div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="" autocomplete="on">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">
                                        Full Name <span class="form-required">*</span>
                                    </label>
                                    <div class="input-wrapper">
                                        <i class="bi bi-person"></i>
                                        <input type="text" id="name" name="name"
                                               class="form-control-custom"
                                               placeholder="e.g. Tinashe Moyo"
                                               value="<?= htmlspecialchars($name) ?>"
                                               autocomplete="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">
                                        Email Address <span class="form-required">*</span>
                                    </label>
                                    <div class="input-wrapper">
                                        <i class="bi bi-envelope"></i>
                                        <input type="email" id="email" name="email"
                                               class="form-control-custom"
                                               placeholder="you@example.com"
                                               value="<?= htmlspecialchars($email) ?>"
                                               autocomplete="email" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <div class="input-wrapper">
                                        <i class="bi bi-telephone"></i>
                                        <input type="tel" id="phone" name="phone"
                                               class="form-control-custom"
                                               placeholder="+263 77 123 4567"
                                               value="<?= htmlspecialchars($phone) ?>"
                                               autocomplete="tel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="subject">Project / Enquiry Type</label>
                                    <div class="input-wrapper">
                                        <i class="bi bi-list-check"></i>
                                        <select id="subject" name="subject" class="form-control-custom">
                                            <option value="">Select a topic...</option>
                                            <option value="new_construction" <?= $subject === 'new_construction' ? 'selected' : '' ?>>New Construction</option>
                                            <option value="renovation" <?= $subject === 'renovation' ? 'selected' : '' ?>>Renovation / Fit-out</option>
                                            <option value="civil_works" <?= $subject === 'civil_works' ? 'selected' : '' ?>>Civil Works</option>
                                            <option value="materials" <?= $subject === 'materials' ? 'selected' : '' ?>>Materials Supply</option>
                                            <option value="equipment" <?= $subject === 'equipment' ? 'selected' : '' ?>>Equipment Hire</option>
                                            <option value="general" <?= $subject === 'general' ? 'selected' : '' ?>>General Enquiry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">
                                Message <span class="form-required">*</span>
                            </label>
                            <div class="input-wrapper textarea-icon">
                                <i class="bi bi-chat-left-text"></i>
                                <textarea id="message" name="message" class="form-control-custom"
                                          placeholder="Tell us about your project, timeline, location and requirements..."
                                          required><?= htmlspecialchars($message_text) ?></textarea>
                            </div>
                        </div>

                        <div class="form-bottom">
                            <div class="form-note">
                                <i class="bi bi-shield-check"></i>
                                <span>Your information is kept confidential.</span>
                            </div>
                            <button type="submit" class="btn-submit">
                                SEND MESSAGE <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Quick WhatsApp -->
        <div class="quick-contact">
            <div class="quick-contact-content">
                <div>
                    <h3>Need a faster response?</h3>
                    <p>Call or WhatsApp our team directly.</p>
                </div>
                <a href="https://wa.me/263775780627" class="quick-contact-btn" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp"></i> CHAT ON WHATSAPP
                </a>
            </div>
        </div>
    </div>
</section>

<!-- MAP -->
<section class="map-section">
    <div class="container">
        <div class="mb-4">
            <div class="eng-eyebrow">Find Us</div>
            <h2 class="map-title">Visit <strong>Enginove</strong></h2>
        </div>
        <div class="map-card">
            <iframe
                src="https://www.google.com/maps?q=8%20Glen%20Carron%20Road%2C%20Highlands%2C%20Harare&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                title="Enginove Location Map">
            </iframe>
            <div class="map-footer">
                <div class="map-address">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>8 Glen Carron Road, Highlands, Harare</span>
                </div>
                <a href="https://www.google.com/maps/search/?api=1&query=8+Glen+Carron+Road%2C+Highlands%2C+Harare"
                   target="_blank" rel="noopener" class="map-link">
                    OPEN IN GOOGLE MAPS <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Floating AI -->
<div class="contact-ai-button" id="contactAiButton" title="Chat with Enginove AI Assistant">
    <span class="contact-ai-label">Chat with us</span>
    <i class="bi bi-chat-dots"></i>
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
document.getElementById("contactAiButton")?.addEventListener("click", function () {
    console.log("Enginove AI Assistant opened");
});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[method="POST"]');
    if (!form) return;

    form.addEventListener("submit", function () {
        const button = form.querySelector(".btn-submit");
        if (!button) return;
        button.disabled = true;
        button.innerHTML = `<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> SENDING...`;
    });
});
</script>

<script src="/Enginove/processor/embed.js"></script>
</body>
</html>