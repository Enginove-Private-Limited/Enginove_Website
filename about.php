<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">
  <h1>About Us</h1>
</section>

<!-- ABOUT SECTION -->
<section class="about-section">
  <div class="about-inner">
    <span class="label">INTRODUCTION</span>
    <h2>Our clients are at the heart of what we do</h2>
    <p>We are a solution driven company – focusing on streamlining payroll & HR processes to enable the payroll & HR department to work accurately and efficiently.</p>
    <p>Our clients and people are the heart of what we do. The decades of payroll & HR consulting experience set us apart as a 1st choice service provider.</p>
    <p>MondTes is determined to provide our clients with exceptional Payroll & HR services. We are passionate about client service and focus on building lifelong relationships with our clients.</p>
    <p>With consultants based in Gauteng, Limpopo, Northwest, KwaZulu Natal and Western Cape we focus on effectively supporting our clients on system maintenance, legislative compliance and growing their HR & payroll needs with their business anywhere in South Africa and African countries.</p>
  </div>
</section>

<!-- TEAM SECTION -->
<section class="team-section">
  <div class="team-inner">
    <span class="label">OUR TEAM</span>
    <h2>We believe that our team are all superstars<br>- dazzlingly skilled in our field!</h2>
    <div class="team-grid">
      <img src="https://mondtesholdings.com/wp-content/uploads/2024/03/WhatsApp-Image-2024-02-29-at-15.16.16_b468e280-min.webp" alt="MondTes team">
      <img src="https://mondtesholdings.com/wp-content/uploads/2024/03/231130-185823-2-Enhanced-NR-min.webp" alt="MondTes team event">
      <img src="https://mondtesholdings.com/wp-content/uploads/2023/03/MG_4105-2048x1365.jpg" alt="MondTes team" class="tall">
      <img src="https://mondtesholdings.com/wp-content/uploads/2023/03/the-idea-implementers-shot-of-a-group-of-colleagues-having-a-discussion-in-a-modern-office--1024x1024.jpg" alt="Team discussion">
      <img src="https://mondtesholdings.com/wp-content/uploads/elementor/thumbs/shot-of-a-group-of-businesspeople-working-in-a-call-centre-q7hzlw9p5cequpi9f4knm8hla9xhok2ge6qe37sfm8.jpg" alt="Support team">
    </div>
  </div>
</section>

<!-- PAGE SPECIFIC STYLES -->
<style>
  .hero{height:195px;background-image:linear-gradient(rgba(255,255,255,.55),rgba(255,255,255,.55)),url("about-us.jpeg");background-size:cover;background-position:center;display:flex;align-items:center;justify-content:center;text-align:center}
  .hero h1{font-size:44px;font-weight:300;    color: var(--green);text-shadow:0 2px 4px rgba(0,0,0,.12)}

  .about-section{position:relative;overflow:hidden;background:#fff;min-height:520px;padding:95px 20px}
  .about-section:before,.about-section:after,.team-section:before,.team-section:after{content:"";position:absolute;width:380px;height:380px;background-image:url("data:image/svg+xml,%3Csvg width='220' height='220' viewBox='0 0 220 220' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23eeeeee' stroke-width='3'%3E%3Cpolygon points='55,5 105,35 105,95 55,125 5,95 5,35'/%3E%3Cpolygon points='160,5 210,35 210,95 160,125 110,95 110,35'/%3E%3Cpolygon points='55,125 105,155 105,215 55,245 5,215 5,155'/%3E%3Cpolygon points='160,125 210,155 210,215 160,245 110,215 110,155'/%3E%3C/g%3E%3C/svg%3E");background-size:contain;background-repeat:no-repeat;opacity:.75;pointer-events:none}
  .about-section:before{left:-35px;top:0}.about-section:after{right:-20px;top:25px}
  .about-inner{position:relative;z-index:1;max-width:1070px;margin:auto}
  
  /* UPDATED: Using var(--green) instead of hardcoded gold */
  .label{display:inline-block;background:var(--green);color:#fff;font-size:12px;font-weight:700;padding:6px 10px;border-radius:3px;margin-bottom:22px}
  
  .about-inner h2{font-size:42px;font-weight:300;color:#333;margin-bottom:18px}
  .about-inner p{font-size:16px;line-height:1.75;color:#555;max-width:1000px;margin-bottom:24px}

  .team-section{position:relative;background:#e9edf2;padding:85px 20px 100px;overflow:hidden;text-align:center}
  .team-section:before{left:-80px;top:10px}.team-section:after{right:-60px;bottom:30px}
  .team-inner{max-width:1160px;margin:auto;position:relative;z-index:2}
  .team-inner h2{font-size:34px;font-weight:300;color:#333;line-height:1.25;margin-bottom:34px}
  .team-grid{display:grid;grid-template-columns:1fr 1fr 1fr;grid-auto-rows:190px;gap:14px;align-items:stretch}
  .team-grid img{width:100%;height:100%;object-fit:cover;display:block}
  .team-grid .tall{grid-row:span 2}.team-grid .wide{grid-column:span 1}

  @media(max-width:950px){.hero h1{font-size:40px}.about-inner h2{font-size:34px}.team-grid{grid-template-columns:1fr 1fr;grid-auto-rows:180px}}
  @media(max-width:700px){.team-grid{grid-template-columns:1fr;grid-auto-rows:220px}.team-grid .tall{grid-row:span 1}}
</style>

<?php include 'footer.php'; ?>
<script src="script.js"></script>