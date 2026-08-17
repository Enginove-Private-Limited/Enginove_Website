<?php
// request_quote.php – Enginove (Pvt) Ltd Quote Request Page

// Include header
include 'header.php';

// Initialize variables and error array
$name = $email = $phone = $project_type = $message = '';
$errors = [];
$success = false;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? '');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? '');
    $project_type = trim(filter_input(INPUT_POST, 'project_type', FILTER_SANITIZE_STRING) ?? '');
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) ?? '');

    // Validation
    if (empty($name) || strlen($name) < 2) {
        $errors['name'] = 'Please enter your full name (minimum 2 characters).';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if (empty($phone) || strlen($phone) < 8) {
        $errors['phone'] = 'Please enter a valid phone number (minimum 8 digits).';
    }

    if (empty($project_type)) {
        $errors['project_type'] = 'Please select a project type.';
    }

    if (empty($message) || strlen($message) < 10) {
        $errors['message'] = 'Please provide a brief description (minimum 10 characters).';
    }

    // If no errors, process the quote request
    if (empty($errors)) {
        // In a real implementation, you would:
        // 1. Save to database
        // 2. Send email to sales@enginove.co.zw
        // 3. Send auto-reply to customer

        // For demo, just set success flag
        $success = true;

        // Clear form fields on success
        $name = $email = $phone = $project_type = $message = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request a Quote – Enginove (Pvt) Ltd</title>
    <style>
        /* Inherit global styles from index.php, add page-specific overrides */
        .quote-page { background: var(--off-white); padding: 80px 20px 100px; }
        .quote-container { max-width: 820px; margin: 0 auto; background: #fff; border-radius: 32px; padding: 50px 60px; box-shadow: 0 8px 30px rgba(0,30,10,0.06); border: 1px solid #e2f0e6; }
        .quote-container h1 { font-size: 38px; font-weight: 300; color: #1e2a2f; margin-bottom: 12px; }
        .quote-container h1 strong { color: var(--green); font-weight: 600; }
        .quote-container .subtitle { font-size: 18px; color: #3a5a4a; margin-bottom: 40px; line-height: 1.6; }
        .form-group { margin-bottom: 28px; }
        .form-group label { display: block; font-weight: 600; color: #1e2a2f; margin-bottom: 8px; font-size: 15px; }
        .form-group label .required { color: #c0392b; margin-left: 4px; }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; padding: 14px 18px; border: 2px solid #e2f0e6; border-radius: 12px; font-size: 16px; transition: 0.25s; background: #fafcfb; font-family: inherit;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none; border-color: var(--green); box-shadow: 0 0 0 4px rgba(31,139,76,0.12); background: #fff;
        }
        .form-group textarea { min-height: 140px; resize: vertical; }
        .form-error { color: #c0392b; font-size: 14px; margin-top: 6px; display: block; }
        .form-group.has-error input, .form-group.has-error select, .form-group.has-error textarea {
            border-color: #c0392b; background: #fff8f8;
        }
        .btn-submit { background: var(--green); color: #fff; border: none; padding: 18px 48px; border-radius: 40px; font-size: 18px; font-weight: 700; cursor: pointer; transition: 0.25s; display: inline-flex; align-items: center; gap: 12px; }
        .btn-submit:hover { background: #0f6a36; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(31,139,76,0.25); }
        .btn-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
        .success-message { background: #d4edda; color: #0f5a2e; padding: 24px 30px; border-radius: 16px; border-left: 6px solid var(--green); margin-bottom: 30px; display: flex; align-items: center; gap: 16px; }
        .success-message .icon { font-size: 32px; }
        .success-message h3 { font-size: 20px; margin-bottom: 4px; }
        .success-message p { margin: 0; font-size: 16px; }
        .quote-sidebar { margin-top: 40px; padding-top: 40px; border-top: 1px solid #e2f0e6; display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
        .quote-sidebar .info-card { background: #f4f9f6; border-radius: 16px; padding: 24px; }
        .quote-sidebar .info-card h4 { color: var(--green); font-size: 16px; margin-bottom: 6px; }
        .quote-sidebar .info-card p { color: #1e2a2f; font-size: 15px; line-height: 1.6; margin: 0; }
        .quote-sidebar .info-card .highlight { font-weight: 700; color: #1e2a2f; }
        @media (max-width: 700px) {
            .quote-container { padding: 30px 20px; }
            .quote-container h1 { font-size: 30px; }
            .quote-sidebar { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<section class="quote-page">
    <div class="quote-container">
        <h1>Request a <strong>Free Quote</strong></h1>
        <p class="subtitle">Tell us about your project and we’ll get back to you within 24 hours with a no-obligation estimate.</p>

        <?php if ($success): ?>
        <div class="success-message">
            <span class="icon">✅</span>
            <div>
                <h3>Quote request received!</h3>
                <p>Thank you for reaching out. Our team will contact you shortly at <strong><?= htmlspecialchars($email) ?></strong> or <strong><?= htmlspecialchars($phone) ?></strong>.</p>
                <p style="margin-top:8px;font-size:14px;color:#1e6a3a;">📞 Alternatively, call us directly at <strong>+263 77 578 0627</strong>.</p>
            </div>
        </div>
        <?php endif; ?>

        <form method="POST" action="" novalidate>
            <div class="form-group <?= isset($errors['name']) ? 'has-error' : '' ?>">
                <label for="name">Full Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" placeholder="e.g. Tinashe Moyo" required>
                <?php if (isset($errors['name'])): ?><span class="form-error"><?= $errors['name'] ?></span><?php endif; ?>
            </div>

            <div class="form-group <?= isset($errors['email']) ? 'has-error' : '' ?>">
                <label for="email">Email Address <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="you@example.com" required>
                <?php if (isset($errors['email'])): ?><span class="form-error"><?= $errors['email'] ?></span><?php endif; ?>
            </div>

            <div class="form-group <?= isset($errors['phone']) ? 'has-error' : '' ?>">
                <label for="phone">Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>" placeholder="+263 77 123 4567" required>
                <?php if (isset($errors['phone'])): ?><span class="form-error"><?= $errors['phone'] ?></span><?php endif; ?>
            </div>

            <div class="form-group <?= isset($errors['project_type']) ? 'has-error' : '' ?>">
                <label for="project_type">Project Type <span class="required">*</span></label>
                <select id="project_type" name="project_type" required>
                    <option value="">— Select a service —</option>
                    <option value="renovation" <?= $project_type === 'renovation' ? 'selected' : '' ?>>Renovation (Kitchen, Bathroom, etc.)</option>
                    <option value="construction" <?= $project_type === 'construction' ? 'selected' : '' ?>>New Construction (Building, Home, etc.)</option>
                    <option value="civil" <?= $project_type === 'civil' ? 'selected' : '' ?>>Civil Works (Roads, Drainage, Earthworks)</option>
                    <option value="materials" <?= $project_type === 'materials' ? 'selected' : '' ?>>Materials Supply (CATMIX, Steel, etc.)</option>
                    <option value="equipment" <?= $project_type === 'equipment' ? 'selected' : '' ?>>Equipment Hire (Tip Trucks, Bulldozers)</option>
                    <option value="speciality" <?= $project_type === 'speciality' ? 'selected' : '' ?>>Speciality (Flag Inscription, Upholstery, Wood Benches)</option>
                    <option value="other" <?= $project_type === 'other' ? 'selected' : '' ?>>Other / General Enquiry</option>
                </select>
                <?php if (isset($errors['project_type'])): ?><span class="form-error"><?= $errors['project_type'] ?></span><?php endif; ?>
            </div>

            <div class="form-group <?= isset($errors['message']) ? 'has-error' : '' ?>">
                <label for="message">Project Details <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Describe your project, timeline, budget range, and any specific requirements..." required><?= htmlspecialchars($message) ?></textarea>
                <?php if (isset($errors['message'])): ?><span class="form-error"><?= $errors['message'] ?></span><?php endif; ?>
            </div>

            <button type="submit" class="btn-submit">Send Quote Request <span>→</span></button>
        </form>

        <div class="quote-sidebar">
            <div class="info-card">
                <h4>📞 Call us directly</h4>
                <p><span class="highlight">+263 77 578 0627</span><br>Mon–Sat, 8AM – 8PM</p>
            </div>
            <div class="info-card">
                <h4>📧 Email us</h4>
                <p><span class="highlight">sales@enginove.co.zw</span><br>We respond within 24 hours</p>
            </div>
            <div class="info-card">
                <h4>📍 Visit our office</h4>
                <p>8 Glen Carron Road, Highlands, Harare<br>24 Hindhead Road, Chisipite</p>
            </div>
            <div class="info-card">
                <h4>✅ Certified & insured</h4>
                <p>Active 2026 certifications: GT002, ST004, GH003, SP002, SH002, SF001, GC007, SC006</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>