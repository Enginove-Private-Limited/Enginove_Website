<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <title>
    Our History | Enginove (Pvt) Ltd
  </title>


  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    body {
      font-family: 'Inter', Arial, sans-serif;
      color: #1e2a2f;
      background: #fafcfb;
      overflow-x: hidden;
    }


    a {
      text-decoration: none;
    }


    :root {
      --green: #1f8b4c;
      --light-green: #d4edda;
      --gold: #d7ba4d;
      --dark: #1e2a2f;
      --nav: #0d1b3f;
      --white: #ffffff;
      --off-white: #f4f9f6;
    }



    /* =========================================
       HEADER
    ========================================= */

    .site-header {
      width: 100%;
      background: #fff;
      position: relative;
      z-index: 999;
      box-shadow: 0 1px 3px rgba(0,40,20,0.08);
    }


    .header-inner {
      max-width: 1220px;
      height: 84px;
      margin: auto;
      padding: 0 24px;
      display: flex;
      align-items: center;
      gap: 48px;
    }


    .logo img {
      width: 120px;
      display: block;
    }


    .nav-menu {
      display: flex;
      align-items: center;
      gap: 32px;
      flex: 1;
    }


    .nav-menu > a,
    .nav-item > a {
      color: var(--nav);
      font-size: 15px;
      font-weight: 700;
      transition: .2s ease;
      white-space: nowrap;
    }


    .nav-menu > a:hover,
    .nav-item:hover > a {
      color: var(--green);
    }


    .chevron {
      font-size: 13px;
      margin-left: 4px;
      position: relative;
      top: -1px;
    }


    .nav-item {
      position: relative;
    }


    .dropdown-menu {
      position: absolute;
      top: 42px;
      left: -12px;
      width: 255px;
      background: #fff;
      border-top: 2px solid var(--green);
      border-radius: 5px;
      box-shadow: 0 8px 22px rgba(0,0,0,.10);
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px);
      transition: .25s ease;
    }


    .nav-item:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }


    .dropdown-menu > a {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 18px;
      color: var(--nav);
      font-size: 14px;
      font-weight: 700;
      border-bottom: 1px solid #f2f2f2;
      transition: .2s;
      background: #fff;
    }


    .dropdown-menu a:hover {
      color: var(--green);
      background: #f4fbf7;
    }


    .contact-info {
      font-size: 14px;
      font-weight: 700;
      line-height: 1.8;
      color: var(--nav);
      white-space: nowrap;
    }


    .contact-info span {
      color: var(--green);
    }



    /* =========================================
       HISTORY HERO
    ========================================= */

    .history-hero {

      min-height: 430px;

      background:
        linear-gradient(
          135deg,
          rgba(255,255,255,0.88) 0%,
          rgba(212,237,218,0.72) 100%
        ),
        url("renovation.jpeg");

      background-size: cover;
      background-position: center;

      display: flex;
      align-items: center;

      position: relative;
    }


    .history-hero-inner {

      max-width: 1200px;

      width: 100%;

      margin: auto;

      padding: 80px 24px;

    }


    .tag {

      display: inline-block;

      background: var(--green);

      color: #fff;

      font-size: 12px;

      font-weight: 700;

      padding: 7px 14px;

      border-radius: 30px;

      margin-bottom: 24px;

      letter-spacing: .5px;

    }


    .history-hero h1 {

      font-size: 58px;

      font-weight: 300;

      line-height: 1.1;

      color: #1e2a2f;

      margin-bottom: 22px;

    }


    .history-hero h1 strong {

      color: var(--green);

      font-weight: 600;

    }


    .history-hero p {

      max-width: 700px;

      font-size: 18px;

      line-height: 1.7;

      color: #1e2a2f;

    }



    /* =========================================
       HISTORY CONTENT
    ========================================= */

    .history-section {

      background: var(--off-white);

      padding: 90px 20px 110px;

    }


    .history-container {

      max-width: 1050px;

      margin: auto;

    }


    .history-heading {

      text-align: center;

      margin-bottom: 65px;

    }


    .history-heading h2 {

      font-size: 42px;

      font-weight: 300;

      color: #1e2a2f;

      margin-bottom: 20px;

    }


    .history-heading p {

      max-width: 780px;

      margin: auto;

      font-size: 18px;

      line-height: 1.7;

      color: #2a3f3a;

    }



    /* =========================================
       TIMELINE
    ========================================= */

    .timeline {

      position: relative;

      max-width: 900px;

      margin: auto;

    }


    .timeline::before {

      content: "";

      position: absolute;

      left: 50%;

      top: 0;

      bottom: 0;

      width: 3px;

      background: var(--green);

      transform: translateX(-50%);

    }


    .timeline-item {

      width: 50%;

      padding: 0 40px 55px;

      position: relative;

    }


    .timeline-item:nth-child(odd) {

      left: 0;

      text-align: right;

    }


    .timeline-item:nth-child(even) {

      left: 50%;

      text-align: left;

    }


    .timeline-dot {

      position: absolute;

      top: 0;

      width: 18px;

      height: 18px;

      border-radius: 50%;

      background: var(--green);

      border: 4px solid var(--light-green);

      box-sizing: content-box;

    }


    .timeline-item:nth-child(odd) .timeline-dot {

      right: -13px;

    }


    .timeline-item:nth-child(even) .timeline-dot {

      left: -13px;

    }


    .timeline-card {

      background: #fff;

      padding: 30px;

      border-radius: 25px;

      border: 1px solid #e2f0e6;

      box-shadow: 0 8px 24px rgba(0,30,10,0.06);

    }


    .timeline-card .year {

      display: inline-block;

      color: var(--green);

      font-size: 14px;

      font-weight: 700;

      margin-bottom: 12px;

    }


    .timeline-card h3 {

      color: #1e2a2f;

      font-size: 22px;

      margin-bottom: 12px;

      font-weight: 600;

    }


    .timeline-card p {

      color: #3a4f47;

      font-size: 15px;

      line-height: 1.7;

    }



    /* =========================================
       TODAY SECTION
    ========================================= */

    .today-section {

      background: #fff;

      padding: 100px 20px;

    }


    .today-container {

      max-width: 1150px;

      margin: auto;

      display: grid;

      grid-template-columns: 1fr 1fr;

      gap: 70px;

      align-items: center;

    }


    .today-image img {

      width: 100%;

      height: 450px;

      object-fit: cover;

      border-radius: 30px;

      border: 6px solid var(--green);

      display: block;

    }


    .today-content h2 {

      font-size: 42px;

      font-weight: 300;

      line-height: 1.2;

      margin-bottom: 25px;

    }


    .today-content h2 strong {

      color: var(--green);

      font-weight: 600;

    }


    .today-content p {

      font-size: 17px;

      line-height: 1.8;

      color: #2a3f3a;

      margin-bottom: 20px;

    }


    .btn {

      display: inline-block;

      padding: 17px 30px;

      border-radius: 40px;

      color: #fff;

      font-weight: 700;

      font-size: 15px;

      transition: .25s;

      margin-top: 15px;

    }


    .btn-green {

      background: var(--green);

    }


    .btn-green:hover {

      background: #0f6a36;

      transform: translateY(-3px);

    }



    /* =========================================
       FOOTER
    ========================================= */

    .newsletter-footer {

      background: #1e2a2f;

      position: relative;

      overflow: hidden;

    }


    .newsletter-container {

      max-width: 1250px;

      margin: auto;

      padding: 65px 20px 45px;

      display: flex;

      justify-content: space-between;

      align-items: center;

      gap: 60px;

      border-bottom: 1px solid rgba(255,255,255,.08);

    }


    .newsletter-left h2 {

      color: #fff;

      font-size: 32px;

      font-weight: 300;

      margin-bottom: 14px;

    }


    .newsletter-left p {

      color: #d4e2d9;

      font-size: 17px;

      line-height: 1.5;

      max-width: 420px;

    }


    .newsletter-form {

      display: flex;

      width: 580px;

      max-width: 100%;

    }


    .newsletter-form input {

      flex: 1;

      height: 62px;

      border: none;

      outline: none;

      padding: 0 18px;

      font-size: 16px;

      border-radius: 4px 0 0 4px;

    }


    .newsletter-form button {

      border: none;

      background: var(--green);

      color: #fff;

      padding: 0 36px;

      font-size: 16px;

      font-weight: 700;

      cursor: pointer;

      border-radius: 0 4px 4px 0;

    }


    .site-footer {

      position: relative;

      z-index: 2;

    }


    .footer-inner {

      max-width: 1320px;

      margin: auto;

      padding: 55px 20px;

      display: grid;

      grid-template-columns:
        1.25fr
        1fr
        1.45fr
        1.2fr
        1.1fr
        1.55fr;

      gap: 35px;

    }


    .footer-column h3 {

      color: #fff;

      font-size: 20px;

      margin-bottom: 28px;

      font-weight: 700;

    }


    .footer-column a {

      display: block;

      color: #d4e2d9;

      font-size: 17px;

      margin-bottom: 20px;

    }


    .footer-column a:hover {

      color: var(--green);

    }


    .contact-footer p {

      color: #fff;

      font-size: 18px;

      margin-bottom: 22px;

    }


    .contact-footer span {

      color: var(--green);

      margin-right: 12px;

    }


    .footer-bottom {

      max-width: 1320px;

      margin: auto;

      border-top: 1px solid rgba(255,255,255,.08);

      padding: 26px 20px 32px;

      display: flex;

      justify-content: space-between;

      align-items: center;

      gap: 25px;

      flex-wrap: wrap;

    }


    .copyright {

      color: #bdd0c4;

      font-size: 14px;

    }


    .footer-policy-links {

      display: flex;

      gap: 18px;

      flex-wrap: wrap;

    }


    .footer-policy-links a {

      color: #bdd0c4;

      font-size: 13px;

    }



    /* =========================================
       RESPONSIVE
    ========================================= */

    @media(max-width:1100px) {

      .header-inner {

        flex-direction: column;

        height: auto;

        padding: 20px;

        gap: 18px;

      }


      .nav-menu {

        flex-wrap: wrap;

        justify-content: center;

      }


      .contact-info {

        text-align: center;

      }


      .today-container {

        grid-template-columns: 1fr;

      }


      .newsletter-container {

        flex-direction: column;

        align-items: flex-start;

      }


      .footer-inner {

        grid-template-columns: repeat(3,1fr);

      }

    }



    @media(max-width:760px) {

      .history-hero {

        min-height: 360px;

      }


      .history-hero h1 {

        font-size: 44px;

      }


      .history-heading h2,

      .today-content h2 {

        font-size: 34px;

      }


      .timeline::before {

        left: 10px;

      }


      .timeline-item,

      .timeline-item:nth-child(even),

      .timeline-item:nth-child(odd) {

        width: 100%;

        left: 0;

        text-align: left;

        padding-left: 40px;

        padding-right: 0;

      }


      .timeline-item:nth-child(odd) .timeline-dot,

      .timeline-item:nth-child(even) .timeline-dot {

        left: 0;

        right: auto;

      }


      .today-image img {

        height: 320px;

      }


      .newsletter-form {

        flex-direction: column;

        width: 100%;

      }


      .newsletter-form input {

        border-radius: 4px 4px 0 0;

      }


      .newsletter-form button {

        height: 58px;

        border-radius: 0 0 4px 4px;

      }


      .footer-inner {

        grid-template-columns: 1fr;

      }


      .footer-bottom {

        align-items: flex-start;

        flex-direction: column;

      }

    }

  </style>

</head>


<body>


<?php include "header.php"; ?>



<!-- =========================================
     HISTORY HERO
========================================= -->

<section class="history-hero">

  <div class="history-hero-inner">

    <span class="tag">
      ABOUT ENGINOVE
    </span>

    <h1>
      Our
      <strong>History</strong>
    </h1>

    <p>
      Discover the journey, development and continued growth
      of Enginove (Pvt) Ltd.
    </p>

  </div>

</section>



<!-- =========================================
     HISTORY INTRODUCTION
========================================= -->

<section class="history-section">

  <div class="history-container">


    <div class="history-heading">

      <span class="tag">
        OUR JOURNEY
      </span>

      <h2>
        Growing Through Experience
      </h2>

      <p>
        Enginove's history can be presented through the key stages
        of the company's development, projects, capabilities and
        continued commitment to construction and renovation.
      </p>

    </div>



    <!-- =====================================
         TIMELINE
    ====================================== -->

    <div class="timeline">


      <!-- HISTORY ITEM 1 -->

      <div class="timeline-item">

        <div class="timeline-dot"></div>

        <div class="timeline-card">

          <span class="year">
            OUR BEGINNING
          </span>

          <h3>
            Establishment
          </h3>

          <p>
            Insert the confirmed establishment story of Enginove
            here, including the founding year and the original
            purpose of the company.
          </p>

        </div>

      </div>



      <!-- HISTORY ITEM 2 -->

      <div class="timeline-item">

        <div class="timeline-dot"></div>

        <div class="timeline-card">

          <span class="year">
            DEVELOPMENT
          </span>

          <h3>
            Expanding Our Capabilities
          </h3>

          <p>
            Insert the confirmed milestones that describe how
            Enginove expanded its construction, renovation,
            materials and project delivery capabilities.
          </p>

        </div>

      </div>



      <!-- HISTORY ITEM 3 -->

      <div class="timeline-item">

        <div class="timeline-dot"></div>

        <div class="timeline-card">

          <span class="year">
            PROJECTS
          </span>

          <h3>
            Building Experience
          </h3>

          <p>
            Insert confirmed major projects, clients or sectors
            that represent important stages in the company's
            development.
          </p>

        </div>

      </div>



      <!-- HISTORY ITEM 4 -->

      <div class="timeline-item">

        <div class="timeline-dot"></div>

        <div class="timeline-card">

          <span class="year">
            TODAY
          </span>

          <h3>
            Continuing Forward
          </h3>

          <p>
            Enginove continues to focus on dependable construction,
            renovation, quality workmanship and client-focused
            project delivery.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>



<!-- =========================================
     TODAY
========================================= -->

<section class="today-section">

  <div class="today-container">


    <div class="today-image">

      <img
        src="smalli.jpeg"
        alt="Enginove Construction"
      >

    </div>



    <div class="today-content">

      <span class="tag">
        TODAY
      </span>

      <h2>
        Looking Toward
        <strong>The Future</strong>
      </h2>

      <p>
        Our journey continues with a focus on delivering
        construction and renovation solutions that combine
        practical expertise, quality workmanship and modern
        approaches to project delivery.
      </p>

      <p>
        Every project contributes to the experience and
        capabilities that shape the next stage of Enginove's
        development.
      </p>

      <a
        href="overview.php"
        class="btn btn-green"
      >
        COMPANY OVERVIEW →
      </a>

    </div>

  </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<?php include 'footer.php'; ?>


</body>

</html>