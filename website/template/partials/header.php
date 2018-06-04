<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><?php echo $title ?></title>
            <meta name="description" content="<?php echo $description ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="all,follow">

            <!-- Twitter Card data -->
            <meta name="twitter:card" value="summary">
            <meta name="twitter:site" content="@lucascraveirop1">
            <meta name="twitter:title" content="<?php echo $title ?>">
            <meta name="twitter:description" content="<?php echo $description ?>">
            <meta name="twitter:creator" content="@lucascraveirop1">
            <meta name="twitter:image" content="<?php echo $fb ?>">

            <!-- Open Graph data -->
            <meta property="og:title" content="<?php echo $title ?>" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="<?php echo BASE_URL . "/website" ?>" />
            <!-- IMAGE MUST HAVE 1200x630 -->
            <meta property="og:image" content="<?php echo $fb ?>" />
            <meta property="og:description" content="<?php echo $description ?>" />

            <!-- Bootstrap CSS-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/vendor/bootstrap/css/bootstrap.min.css">

            <!-- Font Awesome CSS-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/vendor/font-awesome/css/font-awesome.min.css">

            <!-- Custom Font Icons CSS-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/css/landy-iconfont.css">

            <!-- Google fonts - Open Sans-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">

            <!-- owl carousel-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/vendor/owl.carousel/assets/owl.carousel.css">
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/vendor/owl.carousel/assets/owl.theme.default.css">

            <!-- theme stylesheet-->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/css/default.css" id="theme-stylesheet">

            <!-- Custom stylesheet -->
            <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/css/custom.css">

            <!-- Favicon-->
            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ASSETS_URL ?>/favicon/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo ASSETS_URL ?>/favicon/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ASSETS_URL ?>/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="<?php echo ASSETS_URL ?>/favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_URL ?>/favicon/favicon-16x16.png">
            <link rel="manifest" href="<?php echo ASSETS_URL ?>/favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">

            <!-- Tweaks for older IEs--><!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
    <body>
