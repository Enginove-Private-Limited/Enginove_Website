<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <h1>Request a Quotation</h1>
</section>

<!-- QUOTE SECTION -->
<section class="quote-section">
  <div class="quote-inner">
    <span class="label">GET STARTED</span>
    <h2>Let's <span class="highlight">tailor a solution</span> for your business</h2>
    <p>Tell us about your payroll & HR needs and we'll prepare a custom quotation that fits your budget. Our experts are ready to help you streamline your processes.</p>
    
    <div class="quote-grid">
      <!-- Left: Info & Benefits -->
      <div class="quote-info">
        <div class="benefit-card">
          <div class="benefit-icon">⚡</div>
          <h4>Quick Response</h4>
          <p>We'll get back to you within 24 hours with a tailored quote.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">🎯</div>
          <h4>Custom Solutions</h4>
          <p>Every business is unique — we tailor our services to your needs.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">💎</div>
          <h4>Transparent Pricing</h4>
          <p>No hidden fees. Clear, upfront pricing you can trust.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">🤝</div>
          <h4>Expert Support</h4>
          <p>Decades of payroll & HR consulting experience at your service.</p>
        </div>

        <div class="contact-box">
          <p>📞 Prefer to call? <strong>+27 69 7331709</strong></p>
          <p>✉️ <strong>info@44technologies.co.za</strong></p>
        </div>
      </div>

      <!-- Right: Form -->
      <form class="quote-form" id="quoteForm" method="POST" action="submit_quote.php">
        <h3>Request a Quote</h3>
        <p class="form-subtitle">Fill in the details below and we'll get back to you shortly.</p>

        <div class="form-row">
          <div class="form-group">
            <label for="fullName">Full Name <span class="required">*</span></label>
            <input type="text" id="fullName" name="fullName" placeholder="e.g. John Doe" required>
          </div>
          <div class="form-group">
            <label for="company">Company Name <span class="required">*</span></label>
            <input type="text" id="company" name="company" placeholder="e.g. FortFor Technologies" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="email">Email Address <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="e.g. john@company.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number <span class="required">*</span></label>
            <input type="tel" id="phone" name="phone" placeholder="e.g. +27 69 7331709" required>
          </div>
        </div>

        <div class="form-group">
          <label for="service">Service Interested In <span class="required">*</span></label>
          <select id="service" name="service" required>
            <option value="">— Please select —</option>
            <option value="payroll-consulting">Payroll Consulting</option>
            <option value="hr-consulting">HR Consulting</option>
            <option value="payroll-outsourcing">Payroll Outsourcing</option>
            <option value="sage-300">Sage 300 People</option>
            <option value="sage-intacct">Sage Intacct</option>
            <option value="tax-consulting">Tax Consulting</option>
            <option value="labour-advisory">Labour Advisory</option>
            <option value="recruitment">Recruitment</option>
            <option value="compliance-audit">Compliance Audits</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="employees">Number of Employees</label>
          <select id="employees" name="employees">
            <option value="">— Select —</option>
            <option value="1-10">1 – 10</option>
            <option value="11-50">11 – 50</option>
            <option value="51-200">51 – 200</option>
            <option value="201-500">201 – 500</option>
            <option value="501-1000">501 – 1,000</option>
            <option value="1000+">1,000+</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Tell us about your needs <span class="required">*</span></label>
          <textarea id="message" name="message" placeholder="Describe your payroll/HR challenges, requirements, or any specific questions..." required></textarea>
        </div>

        <button type="submit" class="submit-btn">Send Request →</button>

        <div class="trust-badges">
          <span>🔒 Your data is secure</span>
          <span>⏱ Response within 24h</span>
          <span>✅ No obligation</span>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- PAGE SPECIFIC STYLES -->
<style>
  .hero {
    height: 195px;
    background-image: linear-gradient(rgba(255,255,255,.55), rgba(255,255,255,.55)), url("images/about-us.jpeg");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .hero h1 {
    font-size: 44px;
    font-weight: 300;
    color: var(--green);
    text-shadow: 0 2px 4px rgba(0,0,0,.12);
  }

  .quote-section {
    position: relative;
    overflow: hidden;
    background: #fff;
    padding: 75px 20px 90px;
  }
  .quote-section:before,
  .quote-section:after {
    content: "";
    position: absolute;
    width: 380px;
    height: 380px;
    background-image: url("data:image/svg+xml,%3Csvg width='220' height='220' viewBox='0 0 220 220' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23eeeeee' stroke-width='3'%3E%3Cpolygon points='55,5 105,35 105,95 55,125 5,95 5,35'/%3E%3Cpolygon points='160,5 210,35 210,95 160,125 110,95 110,35'/%3E%3Cpolygon points='55,125 105,155 105,215 55,245 5,215 5,155'/%3E%3Cpolygon points='160,125 210,155 210,215 160,245 110,215 110,155'/%3E%3C/g%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
    opacity: .75;
    pointer-events: none;
  }
  .quote-section:before { left: -35px; top: 0; }
  .quote-section:after { right: -20px; bottom: 0; }

  .quote-inner {
    position: relative;
    z-index: 1;
    max-width: 1160px;
    margin: auto;
  }

  .label {
    display: inline-block;
    background: var(--green);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    padding: 6px 10px;
    border-radius: 3px;
    margin-bottom: 22px;
  }

  .quote-inner h2 {
    font-size: 42px;
    font-weight: 300;
    color: #333;
    margin-bottom: 12px;
  }
  .quote-inner h2 .highlight {
    color: var(--green);
  }
  .quote-inner > p {
    font-size: 16px;
    line-height: 1.75;
    color: #555;
    max-width: 700px;
    margin-bottom: 40px;
  }

  .quote-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
  }

  /* Benefit Cards */
  .quote-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
  }
  .benefit-card {
    background: #f8fafc;
    padding: 24px 20px;
    border-radius: 12px;
    border-left: 4px solid var(--green);
    transition: transform .2s ease, box-shadow .2s ease;
  }
  .benefit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.06);
  }
  .benefit-icon {
    font-size: 28px;
    margin-bottom: 8px;
  }
  .benefit-card h4 {
    font-size: 16px;
    color: var(--nav);
    margin-bottom: 4px;
  }
  .benefit-card p {
    font-size: 14px;
    color: #777;
    line-height: 1.5;
    margin: 0;
  }

  .contact-box {
    grid-column: span 2;
    background: #e9edf2;
    padding: 18px 24px;
    border-radius: 12px;
    text-align: center;
  }
  .contact-box p {
    margin: 4px 0;
    font-size: 15px;
    color: var(--dark);
  }
  .contact-box strong {
    color: var(--nav);
  }

  /* Form Styles */
  .quote-form {
    background: #f8fafc;
    padding: 36px 32px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  }
  .quote-form h3 {
    font-size: 24px;
    color: var(--nav);
    margin-bottom: 4px;
  }
  .form-subtitle {
    color: #888;
    font-size: 14px;
    margin-bottom: 22px;
  }
  .form-group {
    margin-bottom: 16px;
  }
  .form-group label {
    display: block;
    font-weight: 700;
    font-size: 14px;
    color: var(--nav);
    margin-bottom: 4px;
  }
  .form-group label .required {
    color: #e74c3c;
    margin-left: 2px;
  }
  .form-group input,
  .form-group select,
  .form-group textarea {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e0e4e8;
    border-radius: 8px;
    font-size: 15px;
    font-family: inherit;
    transition: border-color .3s ease;
    background: #fff;
    color: var(--dark);
  }
  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    outline: none;
    border-color: var(--green);
    box-shadow: 0 0 0 3px rgba(46,158,77,0.1);
  }
  .form-group textarea {
    resize: vertical;
    min-height: 100px;
  }
  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }

  .submit-btn {
    background: var(--green);
    color: #fff;
    border: none;
    padding: 16px 40px;
    font-size: 18px;
    font-weight: 700;
    border-radius: 8px;
    cursor: pointer;
    transition: background .3s ease, transform .2s ease;
    width: 100%;
    font-family: inherit;
    margin-top: 4px;
  }
  .submit-btn:hover {
    background: #248a3d;
    transform: translateY(-2px);
  }

  .trust-badges {
    display: flex;
    gap: 24px;
    margin-top: 18px;
    justify-content: center;
    flex-wrap: wrap;
  }
  .trust-badges span {
    font-size: 13px;
    color: #888;
    font-weight: 600;
  }

  /* Responsive */
  @media(max-width: 992px) {
    .quote-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    .quote-info {
      grid-template-columns: 1fr 1fr;
    }
    .quote-inner h2 {
      font-size: 34px;
    }
  }

  @media(max-width: 700px) {
    .quote-info {
      grid-template-columns: 1fr;
    }
    .contact-box {
      grid-column: span 1;
    }
    .form-row {
      grid-template-columns: 1fr;
      gap: 0;
    }
    .quote-form {
      padding: 24px 18px;
    }
    .hero h1 {
      font-size: 32px;
    }
    .quote-inner h2 {
      font-size: 28px;
    }
    .trust-badges {
      gap: 12px;
    }
  }
</style>

<?php include 'footer.php'; ?>