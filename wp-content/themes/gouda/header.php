<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studio Gradients</title>
        <meta name="description" content="Studio Gradients is a remote design agency founded by members of the Biden-Harris creative and tech team.">
        <link rel="stylesheet" href="https://use.typekit.net/zhd3zme.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <?php
        wp_head();
        ?>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">

        <!-- social meta tag -->
        <meta name="msapplication-TileColor" content="#5E5B5A">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#5E5B5A">
        <meta name="description" content="Studio Gradients is a remote design agency founded by members of the Biden-Harris creative and tech team.">
        <meta property="og:description" content="Studio Gradients is a remote design agency founded by members of the Biden-Harris creative and tech team.">
        <meta name="twitter:description" content="Studio Gradients is a remote design agency founded by members of the Biden-Harris creative and tech team.">
        <meta property="og:image" content="https://www.studiogradients.com/studiogradients_webcard.png">
        <meta name="twitter:image:src" content="https://www.studiogradients.com/studiogradients_webcard.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:title" content="Studio Gradients">
        <meta name="twitter:title" content="Studio Gradients">
        <meta property="og:url" content="https://www.studiogradients.com">
        <meta name="twitter:url" content="https://www.studiogradients.com">
        <meta name="twitter:creator" content="@studiogradients">
        <meta property="og:type" content="website">
    </head>
    <body class="white">
        <div class="sg__body-wrap">
            <header class="header__body-wrap">
                <div class="header__marquee">
                    <div class="header__marquee-item">
                        Im-ma-ma-material, immaterial Immaterial boys, immaterial girls Im-ma-ma-material, immaterial We're just, im-ma-ma-material (I could be anything I want) Immaterial, immaterial boys (anyhow, anywhere) Immaterial girls (any place, anyone that I want) Im-ma-ma-material, immaterial We're just...You could be me and I could be you Always the same and never the same Day by day, life after life Without my legs or my hair Without my genes or my blood With no name and with no type of story Where do I live? Tell me, where do I exist? We're just...
                    </div>
                    <div class="header__marquee-item">
                        Im-ma-ma-material, immaterial Immaterial boys, immaterial girls Im-ma-ma-material, immaterial We're just, im-ma-ma-material (I could be anything I want) Immaterial, immaterial boys (anyhow, anywhere) Immaterial girls (any place, anyone that I want) Im-ma-ma-material, immaterial We're just...You could be me and I could be you Always the same and never the same Day by day, life after life Without my legs or my hair Without my genes or my blood With no name and with no type of story Where do I live? Tell me, where do I exist? We're just...
                    </div>
                    <div class="header__marquee-item">
                        Im-ma-ma-material, immaterial Immaterial boys, immaterial girls Im-ma-ma-material, immaterial We're just, im-ma-ma-material (I could be anything I want) Immaterial, immaterial boys (anyhow, anywhere) Immaterial girls (any place, anyone that I want) Im-ma-ma-material, immaterial We're just...You could be me and I could be you Always the same and never the same Day by day, life after life Without my legs or my hair Without my genes or my blood With no name and with no type of story Where do I live? Tell me, where do I exist? We're just...
                    </div>
                </div>
                <div class="header__content-wrap">
                    <div class="header__logo-wrap">
                    <!-- Header Logo -->
                        <?php
                            dynamic_sidebar('header-1');
                        ?>
                        <!-- Header Logo -->
                    </div>
                    <div class="header__end-wrap">
                        <!-- Header Written Copy -->
                        <?php
                            dynamic_sidebar('header-end');
                        ?>
                    </div>
                    <div class="header__day-wrap">
                        <div class="header__day-img-wrap">
                            <!-- Header Day Title -->
                            <?php
                            dynamic_sidebar('current-day');
                        ?>
                        </div>
                        <span class="sg__copy header__day-count" id="dayBlock"></span>
                    </div>
                    <div class="header__time-wrap">
                        <div class="header__time-img-wrap">
                        <!-- Header Time Title -->
                        <?php
                            dynamic_sidebar('current-time');
                        ?>
                        </div>
                        <span class="sg__copy header__time-count" id="timeBlock">
                    </div>
                </div>
            </header>