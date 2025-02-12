<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">

    <style>
        /* Sticky Transparent Logo */
        .logo-container {
            position: fixed;
            top: 10px;
            right: 20px;
            z-index: 1000;
            background: transparent;
        }
        .logo-container img {
            width: 120px; /* Adjust as needed */
        }
    </style>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo-container">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/krunchLogo.png" alt="Krunchco Logo">
        </a>
    </div>
</header>

