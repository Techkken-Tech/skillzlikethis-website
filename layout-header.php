<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/images/SLT-logo.png" alt="">

            <!-- <h1>SkillzLikeThis<span>.</span></h1> -->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == "index.php") echo 'class="active"'; ?>>Home</a></li>
                <!-- <li><a href="about.html" <?php if (basename($_SERVER['PHP_SELF']) == "about.html") echo 'class="active"'; ?>>About</a></li> -->
                <li><a href="products-and-services.php" <?php if (basename($_SERVER['PHP_SELF']) == "products-and-services.php") echo 'class="active"'; ?>>Products & Services</a></li>
                <li><a href="contact.html" <?php if (basename($_SERVER['PHP_SELF']) == "contact.html") echo 'class="active"'; ?>>Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->