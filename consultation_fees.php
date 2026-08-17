<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <h1>Consultation Fees</h1>
</section>

<!-- FEES SECTION -->
<section class="fees-section">
  <div class="fees-inner">
    <span class="label">PAYMENT</span>
    <h2>Select a <span class="highlight">service</span> or enter your <span class="highlight">reference number</span></h2>
    <p>Choose the service you're paying for, or enter your reference number to retrieve your invoice.</p>

    <div class="fees-grid">
      <!-- Left: Service Selection -->
      <div class="service-selector">
        <h3>1. Select Service</h3>
        <div class="service-options">
          <button class="service-btn active" data-service="payroll-consulting">Payroll Consulting</button>
          <button class="service-btn" data-service="hr-consulting">HR Consulting</button>
          <button class="service-btn" data-service="payroll-outsourcing">Payroll Outsourcing</button>
          <button class="service-btn" data-service="sage-300">Sage 300 People</button>
          <button class="service-btn" data-service="sage-intacct">Sage Intacct</button>
          <button class="service-btn" data-service="tax-consulting">Tax Consulting</button>
          <button class="service-btn" data-service="labour-advisory">Labour Advisory</button>
          <button class="service-btn" data-service="recruitment">Recruitment</button>
          <button class="service-btn" data-service="compliance-audit">Compliance Audits</button>
        </div>

        <div class="divider">— OR —</div>

        <div class="reference-group">
          <h3>2. Enter Reference Number</h3>
          <div class="ref-input-group">
            <input type="text" id="referenceNumber" placeholder="e.g. INV-2024-001" />
            <button class="ref-btn" id="lookupRef">Look Up</button>
          </div>
          <p class="ref-hint">Enter your invoice reference number to view your outstanding balance.</p>
        </div>
      </div>

      <!-- Right: Payment Methods -->
      <div class="payment-section">
        <h3>3. Select Payment Method</h3>
        <p class="payment-subtitle">Choose your preferred payment method below:</p>

        <div class="payment-grid">
          <div class="payment-option" data-method="visa">
            <img src="images/visa.webp" alt="Visa" />
            <span>Visa</span>
          </div>
          <div class="payment-option" data-method="mastercard">
            <img src="images/mastercard.webp" alt="Mastercard" />
            <span>Mastercard</span>
          </div>
          <div class="payment-option" data-method="ecocash">
            <img src="images/ecocash.webp" alt="EcoCash" />
            <span>EcoCash</span>
          </div>
          <div class="payment-option" data-method="inbucks">
            <img src="images/inbucks.webp" alt="InBucks" />
            <span>InBucks</span>
          </div>
          <div class="payment-option" data-method="omari">
            <img src="images/omari.webp" alt="Omari" />
            <span>Omari</span>
          </div>
          <div class="payment-option" data-method="zimswitch">
            <img src="images/zimswitch.webp" alt="Zimswitch" />
            <span>Zimswitch</span>
          </div>
          <div class="payment-option" data-method="deposit">
            <img src="images/deposit voucher.webp" alt="Deposit Voucher" />
            <span>Deposit Voucher</span>
          </div>
          <div class="payment-option" data-method="money">
            <img src="images/1 money.webp" alt="1 Money" />
            <span>1 Money</span>
          </div>
        </div>

        <div class="selected-payment">
          <p>Selected: <span id="selectedMethod">None</span></p>
          <button class="pay-btn" id="payNow">Pay Now →</button>
        </div>
      </div>
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

  .fees-section {
    position: relative;
    overflow: hidden;
    background: #fff;
    padding: 75px 20px 90px;
  }
  .fees-section:before,
  .fees-section:after {
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
  .fees-section:before { left: -35px; top: 0; }
  .fees-section:after { right: -20px; bottom: 0; }

  .fees-inner {
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

  .fees-inner h2 {
    font-size: 42px;
    font-weight: 300;
    color: #333;
    margin-bottom: 12px;
  }
  .fees-inner h2 .highlight {
    color: var(--green);
  }
  .fees-inner > p {
    font-size: 16px;
    line-height: 1.75;
    color: #555;
    max-width: 700px;
    margin-bottom: 40px;
  }

  .fees-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
  }

  /* Service Selector */
  .service-selector h3 {
    font-size: 18px;
    color: var(--nav);
    margin-bottom: 14px;
  }
  .service-options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }
  .service-btn {
    padding: 12px 16px;
    border: 2px solid #e0e4e8;
    border-radius: 8px;
    background: #fff;
    color: var(--dark);
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all .25s ease;
    font-family: inherit;
    text-align: center;
  }
  .service-btn:hover {
    border-color: var(--green);
    background: #f8fafc;
  }
  .service-btn.active {
    border-color: var(--green);
    background: var(--green);
    color: #fff;
  }

  .divider {
    text-align: center;
    color: #aaa;
    font-size: 14px;
    margin: 24px 0 18px;
    position: relative;
  }
  .divider:before,
  .divider:after {
    content: "";
    position: absolute;
    top: 50%;
    width: 40%;
    height: 1px;
    background: #e0e4e8;
  }
  .divider:before { left: 0; }
  .divider:after { right: 0; }

  .reference-group h3 {
    font-size: 18px;
    color: var(--nav);
    margin-bottom: 12px;
  }
  .ref-input-group {
    display: flex;
    gap: 10px;
  }
  .ref-input-group input {
    flex: 1;
    padding: 12px 16px;
    border: 2px solid #e0e4e8;
    border-radius: 8px;
    font-size: 15px;
    font-family: inherit;
    transition: border-color .3s ease;
  }
  .ref-input-group input:focus {
    outline: none;
    border-color: var(--green);
    box-shadow: 0 0 0 3px rgba(46,158,77,0.1);
  }
  .ref-btn {
    padding: 12px 24px;
    background: var(--nav);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    cursor: pointer;
    transition: background .3s ease;
    font-family: inherit;
    white-space: nowrap;
  }
  .ref-btn:hover {
    background: #1a2f6e;
  }
  .ref-hint {
    font-size: 13px;
    color: #999;
    margin-top: 8px;
  }

  /* Payment Methods */
  .payment-section h3 {
    font-size: 18px;
    color: var(--nav);
    margin-bottom: 4px;
  }
  .payment-subtitle {
    color: #888;
    font-size: 14px;
    margin-bottom: 18px;
  }
  .payment-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
  }
  .payment-option {
    background: #f8fafc;
    border: 3px solid #e0e4e8;
    border-radius: 12px;
    padding: 16px 10px;
    text-align: center;
    cursor: pointer;
    transition: all .25s ease;
  }
  .payment-option:hover {
    border-color: var(--green);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }
  .payment-option.active {
    border-color: var(--green);
    background: #f0f7f2;
    box-shadow: 0 0 0 3px rgba(46,158,77,0.15);
  }
  .payment-option img {
    width: 100%;
    max-width: 80px;
    height: auto;
    display: block;
    margin: 0 auto 6px;
    border-radius: 4px;
  }
  .payment-option span {
    font-size: 12px;
    font-weight: 600;
    color: var(--dark);
    display: block;
  }

  .selected-payment {
    margin-top: 20px;
    padding: 16px 20px;
    background: #f8fafc;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
  }
  .selected-payment p {
    font-size: 15px;
    color: var(--dark);
    margin: 0;
  }
  .selected-payment #selectedMethod {
    font-weight: 700;
    color: var(--green);
  }
  .pay-btn {
    padding: 12px 40px;
    background: var(--green);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background .3s ease, transform .2s ease;
    font-family: inherit;
  }
  .pay-btn:hover {
    background: #248a3d;
    transform: translateY(-2px);
  }

  /* Responsive */
  @media(max-width: 992px) {
    .fees-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }
    .fees-inner h2 {
      font-size: 34px;
    }
  }

  @media(max-width: 700px) {
    .service-options {
      grid-template-columns: 1fr;
    }
    .payment-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .ref-input-group {
      flex-direction: column;
    }
    .selected-payment {
      flex-direction: column;
      text-align: center;
    }
    .hero h1 {
      font-size: 32px;
    }
    .fees-inner h2 {
      font-size: 28px;
    }
  }
</style>

<!-- SCRIPTS -->
<script>
  // Service button selection
  document.querySelectorAll('.service-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.service-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // Payment method selection
  document.querySelectorAll('.payment-option').forEach(opt => {
    opt.addEventListener('click', function() {
      document.querySelectorAll('.payment-option').forEach(o => o.classList.remove('active'));
      this.classList.add('active');
      const method = this.getAttribute('data-method');
      const name = this.querySelector('span').textContent;
      document.getElementById('selectedMethod').textContent = name;
    });
  });

  // Lookup reference
  document.getElementById('lookupRef').addEventListener('click', function() {
    const ref = document.getElementById('referenceNumber').value.trim();
    if (ref) {
      alert('Looking up reference: ' + ref + '\n\n(Integration with your payment system would go here)');
    } else {
      alert('Please enter a reference number.');
    }
  });

  // Pay Now
  document.getElementById('payNow').addEventListener('click', function() {
    const selected = document.getElementById('selectedMethod').textContent;
    const service = document.querySelector('.service-btn.active');
    const serviceName = service ? service.textContent : 'None selected';
    const ref = document.getElementById('referenceNumber').value.trim();

    if (selected === 'None') {
      alert('Please select a payment method.');
      return;
    }

    let message = 'Payment Details:\n';
    message += 'Service: ' + serviceName + '\n';
    message += 'Payment Method: ' + selected + '\n';
    if (ref) message += 'Reference: ' + ref + '\n';
    message += '\n(Redirect to payment gateway would happen here)';

    alert(message);
  });
</script>

<?php include 'footer.php'; ?>