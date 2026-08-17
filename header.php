<?php
/*
|--------------------------------------------------------------------------
| ENGINOVE (PVT) LTD
| Professional Header with Click + Hover Dropdowns
|--------------------------------------------------------------------------
*/
?>

<!-- =========================================================
     BOOTSTRAP ICONS CDN (if not already loaded in parent)
========================================================= -->

<?php if (!isset($header_icons_loaded)): ?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
>
<?php $header_icons_loaded = true; ?>
<?php endif; ?>


<!-- =========================================================
     DESKTOP HEADER
========================================================= -->

<header
    class="site-header"
    id="siteHeader"
>

    <div class="header-inner">


        <!-- =================================================
             LOGO
        ================================================== -->

        <div class="logo">

            <a href="index.php">

                <img
                    src="logo.png"
                    alt="Enginove (Pvt) Ltd"
                >

            </a>

        </div>



        <!-- =================================================
             DESKTOP NAVIGATION
        ================================================== -->

        <nav
            class="nav-menu"
            aria-label="Main navigation"
        >


            <!-- =============================================
                 HOME
            ============================================== -->

            <a href="index.php">
                Home
            </a>



            <!-- =============================================
                 SERVICES
            ============================================== -->

            <div class="nav-item" data-dropdown="services">

                <a href="#" class="dropdown-trigger">

                    <span>
                        Services
                    </span>

                    <span class="chevron">
                        ▾
                    </span>

                </a>


                <div class="dropdown-menu">


                    <a href="renovations.php">
                        Renovations
                    </a>


                    <a href="constructions.php">
                        Construction
                    </a>


                    <a href="materials.php">
                        Materials
                    </a>


                    <a href="equipment_hier.php">
                        Equipment Hire
                    </a>



                    <!-- =====================================
                         SPECIALITIES
                    ====================================== -->

                    <div class="submenu-parent">

                        <a href="#">

                            <span>
                                Specialities
                            </span>

                            <span class="chevron">
                                ▸
                            </span>

                        </a>


                        <div class="submenu">

                            <a href="flag_inscription.php">
                                Flag Inscription
                            </a>


                            <a href="upholstry.php">
                                Upholstery
                            </a>


                            <a href="wood-benches.php">
                                Wood Benches
                            </a>

                        </div>

                    </div>


                </div>

            </div>



            <!-- =============================================
                 ABOUT US
            ============================================== -->

            <div class="nav-item" data-dropdown="about">

                <a href="#" class="dropdown-trigger">

                    <span>
                        About Us
                    </span>

                    <span class="chevron">
                        ▾
                    </span>

                </a>


                <div class="dropdown-menu">

                    <a href="overview.php">
                        Overview
                    </a>


                    <a href="our_history.php">
                        Our History
                    </a>


                    <a href="bod.php">
                        Board Of Directors
                    </a>

                </div>

            </div>



            <!-- =============================================
                 MEDIA
            ============================================== -->

            <div class="nav-item" data-dropdown="media">

                <a href="#" class="dropdown-trigger">

                    <span>
                        Media
                    </span>

                    <span class="chevron">
                        ▾
                    </span>

                </a>


                <div class="dropdown-menu">

                    <a href="news.php">
                        News
                    </a>


                    <a href="photo-gallery.php">
                        Photo Gallery
                    </a>


                    <a href="video-gallery.php">
                        Video Gallery
                    </a>

                </div>

            </div>



            <!-- =============================================
                 PROJECTS
            ============================================== -->

            <a href="projects.php">
                Projects
            </a>



            <!-- =============================================
                 CONTACT
            ============================================== -->

            <a href="contact.php">
                Contact
            </a>


        </nav>



        <!-- =================================================
             HEADER ACTIONS
        ================================================== -->

        <div class="header-actions">


            <!-- PHONE -->

            <div class="contact-info">

                <div class="contact-icon">

                    <i class="bi bi-telephone-fill"></i>

                </div>


                <div>

                    <span>
                        +263 77 578 0627
                    </span>

                    <span>
                        +263 861 202 3233
                    </span>

                </div>

            </div>



            <!-- QUOTE BUTTON -->

            <a
                href="contact.php"
                class="header-quote"
            >

                <span>
                    Contact Us
                </span>

                <i class="bi bi-arrow-right"></i>

            </a>


        </div>


    </div>

</header>



<!-- =========================================================
     MOBILE HEADER
========================================================= -->

<div
    class="mobile-header"
    id="mobileHeader"
>


    <!-- MOBILE LOGO -->

    <a
        href="index.php"
        class="mobile-logo"
    >

        <img
            src="mobile_logo.png"
            alt="Enginove"
        >

    </a>



    <!-- MOBILE HAMBURGER -->

    <button
        type="button"
        class="hamburger"
        id="hamburgerBtn"
        aria-label="Open menu"
        aria-controls="mobileDrawer"
        aria-expanded="false"
    >

        <span></span>
        <span></span>
        <span></span>

    </button>


</div>



<!-- =========================================================
     MOBILE OVERLAY
========================================================= -->

<div
    class="mobile-overlay"
    id="mobileOverlay"
></div>



<!-- =========================================================
     MOBILE DRAWER
========================================================= -->

<aside
    class="mobile-drawer"
    id="mobileDrawer"
    aria-hidden="true"
>


    <!-- =====================================================
         DRAWER HEADER
    ====================================================== -->

    <div class="mobile-drawer-header">


        <a
            href="index.php"
            class="mobile-drawer-logo"
        >

            <img
                src="mobile_logo.png"
                alt="Enginove"
            >

        </a>


        <button
            type="button"
            class="close-drawer"
            id="closeDrawer"
            aria-label="Close menu"
        >

            <i class="bi bi-x-lg"></i>

        </button>


    </div>



    <!-- =====================================================
         MOBILE MENU
    ====================================================== -->

    <div class="mobile-menu">


        <!-- HOME -->

        <a href="index.php">

            <span>

                <i class="bi bi-house-door"></i>

                Home

            </span>

        </a>



        <!-- =================================================
             SERVICES
        ================================================== -->

        <div class="mobile-menu-item">


            <button
                type="button"
                class="mobile-dropdown-btn"
            >

                <span>

                    <span class="mobile-link-icon">

                        <i class="bi bi-building"></i>

                    </span>

                    Services

                </span>


                <span class="mobile-chevron">
                    ▾
                </span>

            </button>


            <div class="mobile-submenu">


                <a href="renovations.php">
                    Renovations
                </a>


                <a href="construction.php">
                    Construction
                </a>


                <a href="materials.php">
                    Materials
                </a>


                <a href="equipment_hier.php">
                    Equipment Hire
                </a>



                <!-- SPECIALITIES -->

                <div class="mobile-specialities">


                    <div class="mobile-specialities-title">

                        Specialities

                    </div>


                    <a href="flag_inscription.php">
                        Flag Inscription
                    </a>


                    <a href="upholstry.php">
                        Upholstery
                    </a>


                    <a href="wood-benches.php">
                        Wood Benches
                    </a>


                </div>


            </div>

        </div>



        <!-- =================================================
             ABOUT US
        ================================================== -->

        <div class="mobile-menu-item">


            <button
                type="button"
                class="mobile-dropdown-btn"
            >

                <span>

                    <span class="mobile-link-icon">

                        <i class="bi bi-info-circle"></i>

                    </span>

                    About Us

                </span>


                <span class="mobile-chevron">
                    ▾
                </span>

            </button>


            <div class="mobile-submenu">


                <a href="overview.php">
                    Overview
                </a>


                <a href="our_history.php">
                    Our History
                </a>


                <a href="bod.php">
                    Board Of Directors
                </a>


            </div>

        </div>



        <!-- =================================================
             MEDIA
        ================================================== -->

        <div class="mobile-menu-item">


            <button
                type="button"
                class="mobile-dropdown-btn"
            >

                <span>

                    <span class="mobile-link-icon">

                        <i class="bi bi-images"></i>

                    </span>

                    Media

                </span>


                <span class="mobile-chevron">
                    ▾
                </span>

            </button>


            <div class="mobile-submenu">


                <a href="news.php">
                    News
                </a>


                <a href="video-gallery.php">
                    Photo Gallery
                </a>


                <a href="video-gallery.php">
                    Video Gallery
                </a>


            </div>

        </div>



        <!-- PROJECTS -->

        <a href="projects.php">

            <span>

                <i class="bi bi-buildings"></i>

                Projects

            </span>

        </a>



        <!-- CONTACT -->

        <a href="contact.php">

            <span>

                <i class="bi bi-telephone"></i>

                Contact

            </span>

        </a>


    </div>



    <!-- =====================================================
         MOBILE CONTACT
    ====================================================== -->

    <div class="mobile-contact">


        <div class="mobile-contact-icon">

            <i class="bi bi-telephone-fill"></i>

        </div>


        <div>

             <span>
                        +263 861 202 3233
                    </span>

            <strong>
                +263 77 578 0627
            </strong>

        </div>


    </div>



    <!-- =====================================================
         MOBILE QUOTE BUTTON
    ====================================================== -->

    <a
        href="contact.php"
        class="mobile-quote"
    >

        Contact Us

        <i class="bi bi-arrow-right"></i>

    </a>


</aside>



<!-- =========================================================
     HEADER CSS
========================================================= -->

<style>

/* =========================================================
   GLOBAL DESKTOP HEADER
========================================================= */

.site-header {

    width: 100%;

    height: 78px;

    position: sticky;

    top: 0;

    z-index: 99997;

    background:
        rgba(255,255,255,.97);

    border-bottom:
        1px solid
        rgba(0,0,0,.06);

    box-shadow:
        0 4px 18px
        rgba(0,30,15,.06);

    backdrop-filter:
        blur(12px);

    -webkit-backdrop-filter:
        blur(12px);

}


.header-inner {

    width: 100%;

    max-width: 1320px;

    height: 78px;

    margin: auto;

    padding:
        0 25px;

    display: flex;

    align-items: center;

    gap: 32px;

}


/* =========================================================
   LOGO
========================================================= */

.logo {

    flex-shrink: 0;

}


.logo a {

    display: flex;

    align-items: center;

}


.logo img {

    width: 125px;

    height: auto;

    display: block;

}


/* =========================================================
   DESKTOP NAVIGATION
========================================================= */

.nav-menu {

    flex: 1;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 28px;

}


.nav-menu > a,
.nav-item > a {

    position: relative;

    height: 78px;

    display: inline-flex;

    align-items: center;

    gap: 5px;

    color: #0d1b3f;

    font-size: 13px;

    font-weight: 700;

    white-space: nowrap;

    transition:
        color .2s ease;

    cursor: pointer;

    text-decoration: none;

}


/* UNDERLINE HOVER */

.nav-menu > a::after,
.nav-item > a::after {

    content: "";

    position: absolute;

    left: 0;

    right: 0;

    bottom: 0;

    height: 3px;

    background: #1f8b4c;

    transform:
        scaleX(0);

    transform-origin:
        center;

    transition:
        transform .25s ease;

}


.nav-menu > a:hover,
.nav-item:hover > a,
.nav-item.active > a {

    color: #1f8b4c;

}


.nav-menu > a:hover::after,
.nav-item:hover > a::after,
.nav-item.active > a::after {

    transform:
        scaleX(1);

}


.chevron {

    font-size: 10px;

    line-height: 1;

    transition: transform .3s ease;

}


.nav-item.active .chevron {

    transform: rotate(180deg);

}


/* =========================================================
   DESKTOP DROPDOWN
========================================================= */

.nav-item {

    position: relative;

    height: 100%;

    display: flex;

    align-items: center;

}


.dropdown-menu {

    position: absolute;

    top: 77px;

    left: -15px;

    width: 245px;

    padding: 7px 0;

    margin: 0;

    background: #fff;

    border:
        1px solid
        #e4ebe7;

    border-top:
        3px solid
        #1f8b4c;

    border-radius:
        0 0 9px 9px;

    box-shadow:
        0 18px 40px
        rgba(0,0,0,.13);

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    transform:
        translateY(10px);

    transition:
        opacity .2s ease,
        visibility .2s ease,
        transform .2s ease;

}


/*
|--------------------------------------------------------------------------
| Desktop dropdown opens on hover AND click.
|--------------------------------------------------------------------------
*/

.nav-item:hover > .dropdown-menu,
.nav-item.active > .dropdown-menu,
.nav-item:focus-within > .dropdown-menu {

    opacity: 1;

    visibility: visible;

    pointer-events: auto;

    transform:
        translateY(0);

}


/* =========================================================
   DROPDOWN LINKS
========================================================= */

.dropdown-menu > a,
.submenu-parent > a {

    width: 100%;

    min-height: 46px;

    padding:
        0 18px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    box-sizing: border-box;

    color: #0d1b3f;

    background: #fff;

    font-size: 13px;

    font-weight: 650;

    border-bottom:
        1px solid
        #f0f3f1;

    transition:
        color .2s ease,
        background .2s ease,
        padding-left .2s ease;

    text-decoration: none;

}


.dropdown-menu > a:last-child {

    border-bottom: none;

}


.dropdown-menu > a:hover,
.submenu-parent > a:hover {

    color: #1f8b4c;

    background:
        #f3faf6;

    padding-left:
        23px;

}


/* =========================================================
   SPECIALITIES PARENT
========================================================= */

.submenu-parent {

    position: relative;

}


.submenu-parent > a {

    cursor: pointer;

}


/* =========================================================
   SECOND LEVEL SUBMENU
========================================================= */

.submenu {

    position: absolute;

    top: -3px;

    left: calc(100% + 2px);

    width: 230px;

    padding: 7px 0;

    background: #fff;

    border:
        1px solid
        #e4ebe7;

    border-top:
        3px solid
        #1f8b4c;

    border-radius:
        0 0 9px 9px;

    box-shadow:
        0 18px 40px
        rgba(0,0,0,.13);

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    transform:
        translateX(10px);

    transition:
        opacity .2s ease,
        visibility .2s ease,
        transform .2s ease;

}


/*
|--------------------------------------------------------------------------
| Specialities submenu expands on hover.
|--------------------------------------------------------------------------
*/

.submenu-parent:hover > .submenu,
.submenu-parent:focus-within > .submenu {

    opacity: 1;

    visibility: visible;

    pointer-events: auto;

    transform:
        translateX(0);

}


.submenu a {

    min-height: 46px;

    padding:
        0 18px;

    display: flex;

    align-items: center;

    color: #0d1b3f;

    background: #fff;

    font-size: 13px;

    font-weight: 650;

    border-bottom:
        1px solid
        #f0f3f1;

    transition:
        .2s ease;

    text-decoration: none;

}


.submenu a:hover {

    color: #1f8b4c;

    background:
        #f3faf6;

    padding-left:
        23px;

}


/* =========================================================
   HEADER ACTIONS
========================================================= */

.header-actions {

    display: flex;

    align-items: center;

    gap: 17px;

    flex-shrink: 0;

}


.contact-info {

    display: flex;

    align-items: center;

    gap: 9px;

}


.contact-icon {

    width: 34px;

    height: 34px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #1f8b4c;

    background:
        #edf8f1;

    border-radius: 50%;

    font-size: 12px;

}


.contact-info span {

    display: block;

    color: #1f8b4c;

    font-size: 11px;

    font-weight: 800;

    white-space: nowrap;

}


.contact-info small {

    display: block;

    margin-top: 2px;

    color: #6b7771;

    font-size: 8px;

    white-space: nowrap;

}


.header-quote {

    min-height: 43px;

    padding:
        0 16px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    color: #fff;

    background:
        #1f8b4c;

    border-radius: 6px;

    font-size: 9px;

    font-weight: 800;

    white-space: nowrap;

    transition:
        .25s ease;

    text-decoration: none;

}


.header-quote:hover {

    color: #fff;

    background:
        #096b38;

    transform:
        translateY(-2px);

}


/* =========================================================
   HIDE MOBILE ELEMENTS ON DESKTOP
========================================================= */

.mobile-header,
.mobile-overlay,
.mobile-drawer {

    display: none;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1150px) {


    .header-inner {

        gap: 17px;

        padding:
            0 18px;

    }


    .nav-menu {

        gap: 16px;

    }


    .nav-menu > a,
    .nav-item > a {

        font-size: 11px;

    }


    .contact-info {

        display: none;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {


    /* =====================================================
       DESKTOP HEADER OFF
    ====================================================== */

    .site-header {

        display: none !important;

    }


    /* =====================================================
       MOBILE HEADER
    ====================================================== */

    .mobile-header {

        width: 100%;

        height: 68px;

        padding:
            0 17px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        position: sticky;

        top: 0;

        z-index: 99997;

        background:
            rgba(255,255,255,.98);

        border-bottom:
            1px solid
            rgba(0,0,0,.07);

        box-shadow:
            0 4px 15px
            rgba(0,30,15,.07);

        backdrop-filter:
            blur(10px);

        -webkit-backdrop-filter:
            blur(10px);

    }


    /* =====================================================
       MOBILE LOGO
    ====================================================== */

    .mobile-logo {

        display: flex;

        align-items: center;

        margin-right: auto;

    }


    .mobile-logo img {

        width: auto;

        height: 47px;

        display: block;

        object-fit: contain;

    }


    /* =====================================================
       HAMBURGER
    ====================================================== */

    .hamburger {

        width: 45px;

        height: 45px;

        padding: 8px;

        margin-left: auto;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        gap: 5px;

        border: none;

        border-radius: 8px;

        background:
            transparent;

        cursor: pointer;

    }


    .hamburger span {

        display: block;

        width: 26px;

        height: 3px;

        border-radius: 5px;

        background:
            #0d1b3f;

        transition:
            .25s ease;

    }


    .hamburger:hover {

        background:
            #f0f7f3;

    }


    /* =====================================================
       OVERLAY
    ====================================================== */

    .mobile-overlay {

        display: block;

        position: fixed;

        inset: 0;

        z-index: 99998;

        background:
            rgba(0,0,0,.68);

        opacity: 0;

        visibility: hidden;

        pointer-events: none;

        transition:
            opacity .3s ease,
            visibility .3s ease;

        backdrop-filter:
            blur(4px);

        -webkit-backdrop-filter:
            blur(4px);

    }


    .mobile-overlay.active {

        opacity: 1;

        visibility: visible;

        pointer-events: auto;

    }


    /* =====================================================
       DRAWER
    ====================================================== */

    .mobile-drawer {

        display: block;

        position: fixed;

        top: 0;

        right: -340px;

        width: 320px;

        max-width: 88%;

        height: 100vh;

        z-index: 99999;

        overflow-y: auto;

        background: #fff;

        box-shadow:
            -10px 0 40px
            rgba(0,0,0,.18);

        transition:
            right .3s
            cubic-bezier(.4,0,.2,1);

    }


    .mobile-drawer.active {

        right: 0;

    }


    /* =====================================================
       DRAWER HEADER
    ====================================================== */

    .mobile-drawer-header {

        width: 100%;

        height: 78px;

        padding:
            0 20px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        box-sizing: border-box;

        border-bottom:
            1px solid
            #edf1ee;

    }


    .mobile-drawer-logo {

        display: flex;

        align-items: center;

    }


    .mobile-drawer-logo img {

        display: block;

        width: auto;

        height: 45px;

    }


    /* =====================================================
       CLOSE
    ====================================================== */

    .close-drawer {

        width: 40px;

        height: 40px;

        display: flex;

        align-items: center;

        justify-content: center;

        border: none;

        border-radius: 8px;

        color: #1e2a2f;

        background:
            #f3f7f4;

        font-size: 18px;

        cursor: pointer;

        transition:
            .2s ease;

    }


    .close-drawer:hover {

        color: #fff;

        background:
            #1f8b4c;

    }


    /* =====================================================
       MOBILE MENU
    ====================================================== */

    .mobile-menu {

        width: 100%;

        padding:
            10px 0;

    }


    .mobile-menu > a,
    .mobile-dropdown-btn {

        width: 100%;

        min-height: 54px;

        padding:
            0 22px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        box-sizing: border-box;

        border: none;

        background:
            #fff;

        color:
            #0d1b3f;

        text-decoration:
            none;

        font-size:
            15px;

        font-weight:
            700;

        cursor:
            pointer;

        text-align:
            left;

        transition:
            background .2s ease,
            color .2s ease;

    }


    .mobile-menu > a > span {

        display:
            flex;

        align-items:
            center;

    }


    .mobile-menu > a > span > i {

        width:
            25px;

        margin-right:
            9px;

        color:
            #1f8b4c;

    }


    .mobile-dropdown-btn > span:first-child {

        display:
            flex;

        align-items:
            center;

    }


    .mobile-link-icon {

        width:
            25px;

        margin-right:
            9px;

        color:
            #1f8b4c;

    }


    .mobile-menu > a:hover,
    .mobile-dropdown-btn:hover {

        color:
            #1f8b4c;

        background:
            #f4faf6;

    }


    /* =====================================================
       MOBILE CHEVRON
    ====================================================== */

    .mobile-chevron {

        color:
            #1f8b4c;

        transition:
            transform .3s ease;

    }


    .mobile-dropdown-btn.active
    .mobile-chevron {

        transform:
            rotate(180deg);

    }


    /* =====================================================
       MOBILE SUBMENU
    ====================================================== */

    .mobile-submenu {

        display:
            none;

        width:
            100%;

        background:
            #f7faf8;

        border-top:
            1px solid
            #edf1ee;

        border-bottom:
            1px solid
            #edf1ee;

    }


    .mobile-submenu.active {

        display:
            block;

    }


    .mobile-submenu a {

        display:
            block;

        width:
            100%;

        padding:
            13px 22px 13px 52px;

        box-sizing:
            border-box;

        color:
            #35463f;

        font-size:
            13px;

        font-weight:
            600;

        border-bottom:
            1px solid
            #edf1ee;

        transition:
            .2s ease;

        text-decoration: none;

    }


    .mobile-submenu a:hover {

        color:
            #1f8b4c;

        background:
            #eef8f2;

    }


    /* =====================================================
       SPECIALITIES
    ====================================================== */

    .mobile-specialities {

        background:
            #f1f8f4;

    }


    .mobile-specialities-title {

        padding:
            13px 22px 8px 52px;

        color:
            #1f8b4c;

        font-size:
            11px;

        font-weight:
            800;

        text-transform:
            uppercase;

        letter-spacing:
            .5px;

    }


    .mobile-specialities a {

        padding-left:
            67px;

    }


    /* =====================================================
       CONTACT
    ====================================================== */

    .mobile-contact {

        margin:
            18px;

        padding:
            18px;

        display:
            flex;

        align-items:
            center;

        gap:
            13px;

        border:
            1px solid
            #dfe9e3;

        border-radius:
            12px;

        background:
            #f7faf8;

    }


    .mobile-contact-icon {

        width:
            42px;

        height:
            42px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            50%;

        color:
            #fff;

        background:
            #1f8b4c;

    }


    .mobile-contact small {

        display:
            block;

        color:
            #748078;

        font-size:
            10px;

        margin-bottom:
            3px;

    }


    .mobile-contact strong {

        display:
            block;

        color:
            #1f8b4c;

        font-size:
            13px;

    }


    /* =====================================================
       MOBILE QUOTE
    ====================================================== */

    .mobile-quote {

        margin:
            0 18px 25px;

        min-height:
            50px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        gap:
            10px;

        color:
            #fff;

        background:
            #1f8b4c;

        border-radius:
            7px;

        font-size:
            12px;

        font-weight:
            800;

        text-decoration: none;

    }


    .mobile-quote:hover {

        color:
            #fff;

        background:
            #096b38;

    }

}


/* =========================================================
   SMALL PHONES
========================================================= */

@media (max-width: 400px) {


    .mobile-header {

        height:
            62px;

        padding:
            0 13px;

    }


    .mobile-logo img {

        height:
            42px;

    }


    .mobile-drawer {

        width:
            290px;

    }

}

</style>



<!-- =========================================================
     DESKTOP + MOBILE JAVASCRIPT
========================================================= -->

<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           DESKTOP DROPDOWN TOGGLE (CLICK + HOVER)
        ================================================== */

        const navItems =
            document.querySelectorAll(
                ".nav-item"
            );


        navItems.forEach(
            function (item) {

                const trigger =
                    item.querySelector(
                        ".dropdown-trigger"
                    );


                if (!trigger) return;


                // --- CLICK TOGGLE ---

                trigger.addEventListener(
                    "click",
                    function (event) {

                        event.preventDefault();

                        event.stopPropagation();


                        // Close other dropdowns
                        navItems.forEach(
                            function (other) {

                                if (
                                    other !== item
                                ) {

                                    other.classList.remove(
                                        "active"
                                    );

                                }

                            }
                        );


                        // Toggle this dropdown
                        item.classList.toggle(
                            "active"
                        );

                    }
                );


                // --- Close dropdown when clicking outside ---

                document.addEventListener(
                    "click",
                    function (event) {

                        if (
                            !item.contains(
                                event.target
                            )
                        ) {

                            item.classList.remove(
                                "active"
                            );

                        }

                    }
                );

            }
        );



        /* =================================================
           MOBILE DRAWER
        ================================================== */

        const hamburgerBtn =
            document.getElementById(
                "hamburgerBtn"
            );


        const closeDrawer =
            document.getElementById(
                "closeDrawer"
            );


        const mobileDrawer =
            document.getElementById(
                "mobileDrawer"
            );


        const mobileOverlay =
            document.getElementById(
                "mobileOverlay"
            );



        /* =================================================
           OPEN DRAWER
        ================================================== */

        function openMobileDrawer() {

            if (!mobileDrawer)
                return;


            mobileDrawer.classList.add(
                "active"
            );


            mobileOverlay?.classList.add(
                "active"
            );


            mobileDrawer.setAttribute(
                "aria-hidden",
                "false"
            );


            hamburgerBtn?.setAttribute(
                "aria-expanded",
                "true"
            );


            document.body.style.overflow =
                "hidden";

        }



        /* =================================================
           CLOSE DRAWER
        ================================================== */

        function closeMobileDrawer() {

            if (!mobileDrawer)
                return;


            mobileDrawer.classList.remove(
                "active"
            );


            mobileOverlay?.classList.remove(
                "active"
            );


            mobileDrawer.setAttribute(
                "aria-hidden",
                "true"
            );


            hamburgerBtn?.setAttribute(
                "aria-expanded",
                "false"
            );


            document.body.style.overflow =
                "";

        }



        /* =================================================
           HAMBURGER
        ================================================== */

        hamburgerBtn?.addEventListener(
            "click",
            openMobileDrawer
        );



        /* =================================================
           CLOSE BUTTON
        ================================================== */

        closeDrawer?.addEventListener(
            "click",
            closeMobileDrawer
        );



        /* =================================================
           OVERLAY
        ================================================== */

        mobileOverlay?.addEventListener(
            "click",
            closeMobileDrawer
        );



        /* =================================================
           MOBILE DROPDOWNS
        ================================================== */

        const dropdownButtons =
            document.querySelectorAll(
                ".mobile-dropdown-btn"
            );


        dropdownButtons.forEach(
            function (button) {

                button.addEventListener(
                    "click",
                    function () {


                        const submenu =
                            this.nextElementSibling;


                        if (!submenu)
                            return;


                        this.classList.toggle(
                            "active"
                        );


                        submenu.classList.toggle(
                            "active"
                        );

                    }
                );

            }
        );



        /* =================================================
           CLOSE WHEN LINK IS CLICKED
        ================================================== */

        const mobileLinks =
            document.querySelectorAll(
                ".mobile-menu a"
            );


        mobileLinks.forEach(
            function (link) {

                link.addEventListener(
                    "click",
                    function () {

                        closeMobileDrawer();

                    }
                );

            }
        );



        /* =================================================
           ESCAPE KEY
        ================================================== */

        document.addEventListener(
            "keydown",
            function (event) {

                if (
                    event.key === "Escape"
                ) {

                    closeMobileDrawer();

                }

            }
        );


    }
);

</script>